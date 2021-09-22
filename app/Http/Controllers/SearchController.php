<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(){
        
        return view('search.search');

    }

    public function searchresult(Request $request) {

        $query = Post::query();
        // dd($query);

        // 活動地域
        $activity_area = $request->input('activity_area');
        // dd($activity_area);
        // ジャンル
        $genre = $request->input('genre');
        // 募集パート
        $recruitment_part = $request->input('recruitment_part');
        // 活動レベル
        $activity_level = $request->input('activity_level');
        // 相手に求めるレベル感
        $level = $request->input('level');
        // 年代
        $age = $request->input('age');
        // 性別
        $sex = $request->input('sex');
        // 好きなアーティスト
        $favorite_artist = $request->input('favorite_artist');

        $id = Auth::id();
        $user = Auth::user();
        // dd($user);

        // $items = DB::table('posts')->whereIn('activity_area',$activity_area)->get();

        if (isset($activity_area)) {
            $query->whereIn('activity_area', $activity_area)->get();
            // dd($query);
        }
        // }else{
        //     $query = DB::table('posts')->get();
        // }
        if (isset($genre)) {
            $query->whereIn('genre', $genre)->get();
        }
        if (isset($recruitment_part)) {
            $query->whereIn('recruitment_part', $recruitment_part)->get();
        }
        if (isset($activity_level)) {
            $query->whereIn('activity_level', $activity_level)->get();
        }
        //levelの設定がviewとSeederで異なる
        // if (isset($level)) {
        //     $query->whereIn('level', $level)->get();
        // }
        if (isset($age)) {
            $query->whereIn('age', $age)->orderBy('created_at','desc')->get();
        }
        if (isset($sex)) {
            $query->whereIn('sex', $sex)->orderBy('created_at','desc')->get();
        }
        if (isset($favorite_artist)) {
            $query->where('favorite_artist', $favorite_artist)->orderBy('created_at','desc')->get();
            // dd($query);
        }

        $postss = $query->orderBy('created_at','desc')->get();
        // dd($postss);

        return view('search.searchresult',compact('postss','user'));



        // $activity_areaにデータがない
        // Y：全てのactivity_areaのレコードを抽出 N:$activity_areaと同じレコードを抽出
        // これを新たな配列$postssに入れる。
        // $genreにデータがない
        // Y：全てのgenreのレコードを抽出 N:$genreと同じレコードを抽出
        // これを配列$postssに入れる


        // return view('search.searchresult', compact('postss'));

        
    }
}
