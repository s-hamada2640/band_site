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
 
        $user = Auth::user();

        //　キーワード検索フォームで入力された値を取得
        $keyword = $request->input('keyword');
        
        //　クエリビルダ
        $query = Post::query();
        // dd($query);
        
            //検索キーワードが空の場合
            if (empty($keyword)) {                
                $posts = $query->orderBy('created_at', 'desc')->paginate(10);  //全ユーザーを10件/ページで表示
 
                return view ('search.searchresult', compact('posts', 'user'));
    
            //検索キーワードが入っている場合
            } else {
                $_q = str_replace('　', ' ', $keyword);  //全角スペースを半角に変換
                $_q = preg_replace('/\s(?=\s)/', '', $_q); //連続する半角スペースは削除
                $_q = trim($_q); //文字列の先頭と末尾にあるホワイトスペースを削除
                $_q = str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $_q); //円マーク、パーセント、アンダーバーはエスケープ処理
                $keywords = explode(' ', $_q); //キーワードを半角スペースで配列に変換し、重複する値を削除
                //  dd($keywords);
                
                // $item = $query->where("recruitment_part", "like", [$keywords]);
                // $item = $query->where('recruitment_part', 'like', $keywords[0][1]);
                foreach($keywords as $value) {
                    $query->where('title', 'like', '%'.$value.'%')
                            ->orwhere('message', 'like', '%'.$value.'%')
                            ->orwhere('activity_area', 'like', '%'.$value.'%')
                            ->orwhere('recruitment_part', 'like', '%'.$value.'%')
                            ->orwhere('required_level', 'like', '%'.$value.'%')
                            ->orwhere('band_level', 'like', '%'.$value.'%')
                            ->orwhere('activity_level', 'like', '%'.$value.'%')
                            ->orwhere('favorite_artist', 'like', '%'.$value.'%')
                            ->orwhere('genre', 'like', '%'.$value.'%')
                            ->orwhere('sex', 'like', '%'.$value.'%')
                            ->orwhere('age', 'like', '%'.$value.'%')
                            ->orwhere('activity_timezone', 'like', '%'.$value.'%');
                }

            }

        $posts = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('search.searchresult', compact('posts', 'user','value'));
    }

    public function searchcheck(Request $request)
    {
        $check = $request->input('check');
        foreach($check as $value) {
            $check->where('title', 'like', '%'.$value.'%')
                    ->orwhere('message', 'like', '%'.$value.'%')
                    ->orwhere('activity_area', 'like', '%'.$value.'%')
                    ->orwhere('recruitment_part', 'like', '%'.$value.'%')
                    ->orwhere('required_level', 'like', '%'.$value.'%')
                    ->orwhere('band_level', 'like', '%'.$value.'%')
                    ->orwhere('activity_level', 'like', '%'.$value.'%')
                    ->orwhere('favorite_artist', 'like', '%'.$value.'%')
                    ->orwhere('genre', 'like', '%'.$value.'%')
                    ->orwhere('sex', 'like', '%'.$value.'%')
                    ->orwhere('age', 'like', '%'.$value.'%')
                    ->orwhere('activity_timezone', 'like', '%'.$value.'%');
        }
        
        return view('search.searchresult', compact('posts', 'user', 'value'));
    }
}
