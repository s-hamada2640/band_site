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
        
    }
}
