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

   .good {
      background-color: rgb(0, 199, 221);
      height: 20px;
      width: 80px;
      color: #fff;
      font-weight: bold;
      border: none;
      cursor:pointer;
      font-size: 12px;
   }

   .goodyet {
      background-color: #fff;
      height: 20px;
      width: 80px;
      color: rgb(0, 199, 221);
      font-weight: bold;
      border: 1px solid rgb(0, 199, 221);
      cursor:pointer;
      font-size: 12px;
   }
   .nav-list{
      font-size: 14px;
   }
@endsection
@section('content')

<div class="container">
   @if(Auth::id() == $user->id)
      <div class="w-75 mx-auto">
         <h4 class="my-4">マイページ</h4>
         <ul class="nav nav-tabs">
            <li class="nav-item nav-list">
               <a class="nav-link active" href="#">プロフィール</a>
            </li>
            <li class="nav-item nav-list">
               <form action="{{ route('users.myposts', Auth::id()) }}" method="post">
                  @csrf
                  <input class="nav-link btn-link" type="submit" value="投稿リスト" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
               </form>
            </li>
            <li class="nav-item nav-list">
               <form action="{{ route('users.liked', Auth::id()) }}" method="post">
                  @csrf
                  <input class="nav-link btn-link" type="submit" value="いいねした記事" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
               </form>
            </li>
            <li class="nav-item nav-list">
            <form action="{{ route('users.followed', Auth::id()) }}" method="post">
               @csrf
               <input class="nav-link btn-link" type="submit" value="フォロー" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
            </form>
            </li>
            <li class="nav-item nav-list">
               <form action="{{ route('users.follower', Auth::id()) }}" method="post">
                  @csrf
                  <input class="nav-link btn-link" type="submit" value="フォロワー" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
               </form>
            </li>
         </ul>
      
      @else
         <h4 class="mt-4">{{ $user->name }}さんのプロフィール</h4>
      @endif

      <div class="w-75 my-5 ml-3">
         <table class="mx-auto">
            <tr><th>ユーザー名：</th><td>{{ $user->name }}</td></tr>
            <tr><th>活動地域：</th><td>{{ $user->activity_area }}</td></tr>
            <tr><th>性別：</th><td>{{ $user->sex }}</td></tr>
            <tr><th>年齢：</th><td>{{ $user->age }}歳</td></tr>
            <tr><th>担当パート：</th><td>{{ $user->my_part }}</td></tr>
            <tr><th>レベル感：</th><td>{{ $user->my_level }}</td></tr>
            <tr><th>演奏したいジャンル：</th><td>{{ $user->genre }}</td></tr>
            <tr><th>活動レベル：</th><td>{{ $user->activity_level }}</td></tr>
            <tr><th>好きなアーティスト：</th><td>{{ $user->favorite_artist }}</td></tr>
            <tr><th>活動時間帯：</th><td>{{ $user->activity_timezone }}</td></tr>
         </table>
      </div>
      <div class="d-flex flex-row-reverse mr-4">
         @isset($post)
            @if($post->user_id == Auth::id())
               <form action="{{ route('matching', $post) }}" method="post">
                  @csrf
                  <button type="submit" class="goodyet">いいね</button>
                  <input type="hidden" value="{{$user->id}}" name="user_id">
               </form>
            @endif
         @endisset
      </div>
      @if(Auth::id() == $user->id)
         <div style="text-align: center">
            <a href=""><img src="/images/change.png" alt="変更" class="image-cng" height="25px" ></a>
            <a href=""><img src="/images/update.png" alt="更新" height="25px"></a>
         </div>
      @endif
   </div> 
   
   @if(Auth::id() == $user->id)
      <div class="w-75 mx-auto">
         <hr>
         <a href="{{ route('posts.index') }}">記事一覧ページに戻る</a>
      </div>
   @else
      <div class="w-75 mx-auto">
      <hr>
         <a href="{{ route('posts.show',$post->id) }}">記事詳細ページに戻る</a>
      </div>
   @endisset
</div>
@endsection