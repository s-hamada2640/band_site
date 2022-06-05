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
               <input class="nav-link btn-link active" type="submit" value="フォロワー" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
            </form>
         </li>
      </ul>
   </div>
      @if(isset($not_liked))
         <div class="w-75 mx-auto">
            <p class="text-center mt-5 text-secondary" >{{ $not_liked }}</p>
            <div class=" mt-5">
               <a href="{{ route('posts.index') }}" class="mt-0">記事一覧ページに戻る</a>
            </div>
         </div>   
      @else
         <div class="w-75 mx-auto">
            <div class=" my-5">
               @foreach($follower as $follow)
                  <div class="toukou ml-3 w-75 mx-auto">
                        <!-- タイトル -->
                        <h5><a href="{{ route('users.profile',$follow->from_user->id) }}">{{$follow->from_user->name}}</a></h5>
                        <!--ユーザー名、年齢/性別-->
                     <p></p>
                     <!-- 投稿日時 -->
                     <hr>
                  </div>
               @endforeach
            </div>
            <a href="{{ route('posts.index') }}">記事一覧ページに戻る</a>
         </div>
      @endif
</div>
@endsection