@extends('layouts.app')

@section('css')

   h1{
      width: 350px;
      padding-left: 5px;
      margin-left: 20px;
      float: left;
   }

   .header-right{
      padding-top: 20px;
      margin-right: 20px;
      float: right;
   }
   main{
      margin-left: 20px;
   }

   .image-cng{
      padding-right: 15px
   }

   td,th{
      width: 200px;
      font-size: 16px;
   }

   th{
      text-align: right;
      height: 30px;
   }

   td{
      text-align: left;
   }

   .nav-list{
      font-size: 14px;
   }

   .toukou p{
      margin-bottom: 5px;
   }
@endsection
@section('content')

<div class="container">
   
   <div class="w-75 mx-auto">
      <h4 class="my-4">マイページ</h4>
      <ul class="nav nav-tabs">
      <li class="nav-item nav-list">
         <form action="{{ route('users.show', Auth::id()) }}" method="post">
            @csrf
            <input class="nav-link btn-link" type="submit" value="プロフィール" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
         </form>
      </li>
      <li class="nav-item nav-list">
         <form action="{{ route('users.myposts', Auth::id()) }}" method="post">
            @csrf
            <input class="nav-link btn-link" type="submit" value="投稿リスト" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
         </form>
      </li>
      <li class="nav-item nav-list">
         <a class="nav-link active" href="#">いいねした記事</a>
      </li>
      </ul>
   </div>
      <div class="w-75 mx-auto">
         <div class=" my-5">
            @foreach($liked_posts as $post)
               <div class="toukou ml-3 w-75 mx-auto">
                     <!-- タイトル -->
                  <h5><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></h5>
                     <!--ユーザー名、年齢/性別-->
                  <p>{{ $post->user->name }}({{ $post->user->age }}/{{$post->user->sex}})</p>
                     <!-- メッセージ -->
                  <p>{{ Str::limit($post->message,"50")}}</p>
                  <!-- 投稿日時 -->
                  <p>投稿日{{ $post->created_at }}</p>
                  <p class="d-flex flex-row-reverse">いいね数 {{ $post->users->unique()->count() }}</p>
                  <hr>
               </div>
            @endforeach
         </div>
         <a href="{{ route('posts.index') }}">記事一覧ページに戻る</a>
      </div>
</div>
@endsection