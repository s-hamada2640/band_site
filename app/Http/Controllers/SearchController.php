<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search()
    {

        return view('search.search');
    }

    public function searchresult(Request $request)
    {

        //　キーワード検索フォームで入力された値を取得
        $keyword = $request->input('keyword');
        

        //　クエリビルダ
        $query = Post::query();
        // dd($query);
        
            //検索キーワードが空の場合
            if (empty($keyword)) {
                $posts = $query->orderBy('created_at', 'desc')->paginate(10);  //全ユーザーを10件/ページで表示
                $user = Auth::user();
                
                return view ('search.searchresult', compact('posts', 'user'));
    
            //検索キーワードが入っている場合
            } else {
                $_q = str_replace('　', ' ', $keyword);  //全角スペースを半角に変換
                $_q = preg_replace('/\s(?=\s)/', '', $_q); //連続する半角スペースは削除
                $_q = trim($_q); //文字列の先頭と末尾にあるホワイトスペースを削除
                $_q = str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $_q); //円マーク、パーセント、アンダーバーはエスケープ処理
                $keywords = explode(' ', $_q); //キーワードを半角スペースで配列に変換し、重複する値を削除
                // dd($keywords);
                // $item = $query->where("recruitment_part", "like", [$keywords]);
                // $item = $query->where('recruitment_part', 'like', $keywords[0][1]);
                // $item = $query->orWhere('recruitment_part', 'like', $keywords[0])
                //              ->orWhere('recruitment_part', 'like', $keywords[1])
                //              ->orWhere('recruitment_part', 'like', $keywords[2]);
                            //  ->orWhere('recruitment_part', 'like', $keywords[3])
                            //  ->orWhere('recruitment_part', 'like', $keywords[4]);
                $item = $query->whereIn("recruitment_part", $keywords);
                // dd($item);
            }

        // 活動地域
        // $activity_area = $request->input('activity_area');
        // dd($activity_area);

        // // ジャンル
        // $genre = $request->input('genre');

        // // 募集パート
        // $recruitment_part = $request->input('recruitment_part');

        // // 活動レベル
        // $activity_level = $request->input('activity_level');

        // // 相手に求めるレベル感
        // $level = $request->input('level');

        // // 年代
        // $age = $request->input('age');

        // // 性別
        // $sex = $request->input('sex');

        // // 好きなアーティスト
        // $favorite_artist = $request->input('favorite_artist');

        $id = Auth::id();
        $user = Auth::user();

        // if (isset($activity_area)) {
        //     $query->whereIn('activity_area', $activity_area)->get();
        // }
        // if (isset($genre)) {
        //     $query->whereIn('genre', $genre)->get();
        // }
        // if (isset($recruitment_part)) {
        //     $query->whereIn('recruitment_part', $recruitment_part)->get();
        // }
        // if (isset($activity_level)) {
        //     $query->whereIn('activity_level', $activity_level)->get();
        // }
        // if (isset($age)) {
        //     $query->whereIn('age', $age)->orderBy('created_at', 'desc')->get();
        // }
        // if (isset($sex)) {
        //     $query->whereIn('sex', $sex)->orderBy('created_at', 'desc')->get();
        // }
        // if (isset($favorite_artist)) {
        //     $query->where('favorite_artist', $favorite_artist)->orderBy('created_at', 'desc')->get();
        //     // dd($query);
        // }
        
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('search.searchresult', compact('posts', 'user','item'));
    }
}
