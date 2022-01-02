<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Post;
use App\LikeUser;
use Auth;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $reuqest, User $user)
    {
        $post = Post::find($reuqest->id);
        
        // dd($reuqest);
        return view('users.show',compact('user','post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function myposts()
    {
        $myposts = Post::where('user_id', Auth::id())->orderBy('created_at','desc')->get();

        return view('users.myposts', compact('myposts'));
    }

    public function liked()
    {

        $liked = DB::table('post_user')->where('user_id', Auth::id())->get();

        if($liked->count() == 0){
            $not_liked = "いいねした記事はありません";
            return view('users.liked', compact('not_liked'));

        }else{

            foreach($liked as $like){
                $likes[] = $like->post_id;
            }
    
            $likes[] = array_unique($likes);
            // print_r($likes);
            for($i=0; $i < count($likes); $i++)
            {
                $liked_posts = Post::find($likes[$i]);
            }
    
            return view('users.liked',compact('liked_posts'));
        }
    }
    //プロフィールを表示
    public function profile(Request $reuqest, User $user)
    {
        $post = Post::find($reuqest->id);
        $likeusers = LikeUser::where([
                ['from_userid', Auth::id()],
                ['to_userid',$user->id]
            ])->first();
        return view('users.profile',compact('user','post','likeusers'));
    }

    //フォロー中ユーザを表示
    public function followed()
    {
        $followed = LikeUser::where('from_userid',Auth::id())->get();
        
        return view('users.followed',compact('followed'));
    }

    //フォロワーを表示
    public function follower()
    {
        $follower = LikeUser::where('to_userid',Auth::id())->get();

        return view('users.follower',compact('follower'));
    }
}
