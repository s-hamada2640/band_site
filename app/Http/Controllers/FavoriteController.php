<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\User;
use Auth;

class FavoriteController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        $post->users()->attach(Auth::id());

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->users()->detach(Auth::id());

        return redirect()->route('posts.show', $post->id);
    }
    
    //いいねをしてくれた人にいいねを返す
    public function matching(Request $request, Post $post)
    {
        $post->users()->attach($request->user_id);

        return redirect()->route('posts.show', $post->id);
    }
}
