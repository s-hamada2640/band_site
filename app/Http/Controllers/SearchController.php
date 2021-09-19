<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search(Request $request) {

        $keywords = Post::all();

        return view('search.search', compact('keywords'));

        //都道府県で検索
        $pref = $request->input('pref');
        $genre = $request->input('genre');

    //    public function show(Request $request) {
    //        // メモが入力されているか確認
    //        if($request->filled('memo')) {
    //            $memo = $request->input('memo');
    //        } else {
    //            $memo = 'なし';
    //        }
    //        // ビューで使う配列データの作成
    //        $profile = array(
    //            'name' => $request->input('name'),
    //            'age' => $request->input('age'),
    //            'gender' => $request->input('gender'),
    //            'favorites' => $request->input('favorites', array('なし')),
    //            'memo' => $memo
    //        );
    //        return view('profile.show', $profile);
        
    }
}
