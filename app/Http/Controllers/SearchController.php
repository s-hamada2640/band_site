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
                $keyword = $query->orderBy('created_at', 'desc')->paginate(15);  //全ユーザーを15件/ページで表示
    
            //検索キーワードが入っている場合
            } else {
                $_q = str_replace('　', ' ', $keyword);  //全角スペースを半角に変換
            // dd($keyword);
                // $_q = preg_replace('/\s(?=\s)/', '', $_q); //連続する半角スペースは削除
                // $_q = trim($_q); //文字列の先頭と末尾にあるホワイトスペースを削除
                // $_q = str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $_q); //円マーク、パーセント、アンダーバーはエスケープ処理
                // $keywords = array_unique(explode(' ', $_q)); //キーワードを半角スペースで配列に変換し、重複する値を削除

            // キーワードが、部分的に一致するものがあれば、$keywordとして保持される
                $item = $query->where('recruitment_part', 'like', $keyword);
                // dd($item);
            }

        // 活動地域
        $activity_area = $request->input('activity_area');
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

<<<<<<< HEAD
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
        
        $posts = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('search.searchresult', compact('posts', 'user', 'item'));
=======
        if (isset($activity_area)) {
            $query->whereIn('activity_area', $activity_area)->get();
        }
        if (isset($genre)) {
            $query->whereIn('genre', $genre)->get();
        }
        if (isset($recruitment_part)) {
            $query->whereIn('recruitment_part', $recruitment_part)->get();
        }
        if (isset($activity_level)) {
            $query->whereIn('activity_level', $activity_level)->get();
        }
        if (isset($age)) {
            $query->whereIn('age', $age)->orderBy('created_at','desc')->get();
        }
        if (isset($sex)) {
            $query->whereIn('sex', $sex)->orderBy('created_at','desc')->get();
        }
        if (isset($favorite_artist)) {
            $query->where('favorite_artist', $favorite_artist)->orderBy('created_at','desc')->get();
        }

        $posts = $query->orderBy('created_at','desc')->paginate(15);

        return view('search.searchresult',compact('posts','user'));        
>>>>>>> 2d459f7b52d4a813b43c3ee19baf98bbede97efb
    }
}
