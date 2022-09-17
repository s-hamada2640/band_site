<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\LikeUser;
use App\Chatroom;
use Auth;

class ChatroomController extends Controller
{
    public function index($id)
    {
        //***** 相互フォローしているがチャットを開始していない場合  *****/

            //自分のことをフォローしている人を取得
            $followers = LikeUser::where('to_userid', Auth::id())->get();

            if(count($followers) == 0){
                $notExist = "相互フォローしている相手は存在しません。";
                return view('chatrooms.index',compact('notExist'));
            }
            
            //自分をフォローしている人のidを$followersIdに代入
            foreach($followers as $follow){
                $followersId[] = $follow->from_userid;
            }
            // dd($followersId);

            //フォロワーの中から自分がフォローしている人を取得
            $mutuals = LikeUser::where('from_userid', Auth::id())
                ->whereIn('to_userid', $followersId)
                ->get();
            // dd($mutuals);
        //***************************************************/



        //***** チャットを開始している場合 *****/

            //自分が参加しているチャットルームを取得
            $myChatrooms = DB::table('chatroom_user')->where('user_id', Auth::id())->get();
            // dd($myChatrooms);
            
            //参加しているチャットルームが1つ以上ある場合
            if(count($myChatrooms)>=1){
                //$myChatroomIdに自分が参加しているチャットルームのchatroom_idを代入
                foreach($myChatrooms as $myChatroom){
                    $myChatroomId[] = $myChatroom->chatroom_id;
                }
                // dd($myChatroomId);
                    
                //自分の参加チャットルームの相手のidを取得
                $chatrooms = DB::table('chatroom_user')
                    ->whereIn('chatroom_id', $myChatroomId)//同じチャットルーム内にいるユーザーの情報を取得
                    ->whereNotIn('user_id', [Auth::id()])//自分のidを除外
                    ->get();
                // dd($chatrooms);
                foreach($chatrooms as $chatroom){
                    $started[] = $chatroom->user_id;
                }
                // dd($started);
                return view('chatrooms.index',compact('mutuals','chatrooms','started'));
            }
        //*****************************/

        return view('chatrooms.index',compact('mutuals'));
    }

    public function store($id)
    {
        $chatroom = new Chatroom;
        $chatroom->save();
        $last_insert_id = $chatroom->id;

        $chatroom_user = DB::table('chatroom_user')->insert([
            ['chatroom_id' => $last_insert_id,'user_id' => $id],
            ['chatroom_id' => $last_insert_id,'user_id' => Auth::id()]
        ]);

        return redirect()->route('users.chats', Auth::id());
    }
}