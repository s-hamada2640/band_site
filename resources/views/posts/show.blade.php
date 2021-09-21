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
   margin-left: 20px;
   float: right;
   }

   .searchResults{
   clear: both;
   float: left;
   padding-bottom: 40px;
   }

   main{
   font-size: 14px;
   line-height: 10px;
   margin-left: 20px;

   }
   h2{
   clear: left;
   font-size: 18px;
   }

   .RightJustified{
   float: right;
   font-size: 12px;
   margin-left: 20px;
   }

   .article{
   clear: both;
   }

   h3{
   font-size: 16px;
   line-height: 10px;
   }

   .toukou{
   font-size: 12px;
   line-height: 10px;
   }

   footer{
   text-align: center;
   }

   .good {
      background-color: rgb(0, 199, 221);
      height: 20px;
      width: 80px;
      color: #fff;
      font-weight: bold;
      border: none;
      cursor:pointer;
   }

   .goodyet {
      background-color: #fff;
      height: 20px;
      width: 80px;
      color: rgb(0, 199, 221);
      font-weight: bold;
      border: 1px solid rgb(0, 199, 221);
      cursor:pointer;
   }
@endsection

@section('content')
<main>
   <div class="container">
      <div style="font-size: 25px;">記事詳細</div>
      <hr>
      <!-- <img src="/images/profileimage.png" alt="プロフィール画像" height="150px" class="mb-3"> -->
      @foreach($postss as $posts)
      <div>
         <h3 class="mb-3">投稿タイトル：{{ $posts->title }}</h3>

      </div>
      <!-- <p class=>投稿者 : </p> -->
      <p>記事の内容：</p>
      <p>{{ $posts->message }}</p>
      <br>
      <h5 class="my-3">[基本データ]</h5>
      <p>活動地域 : {{ $posts->activity_area }}</p>
      <p>活動レベル : {{ $posts->activity_level }}</p>
      <p>バンドレベル : {{ $posts->band_level }}</p>
      <p>ジャンル : {{ $posts->genre }}</p>
      <p>好きなアーティスト : {{ $posts->favorite_artist }}</p>
      <p>活動時間帯： {{$posts->activity_timezone}}</p>
      <h5 class="mb-3 mt-4">[募集メンバー]</h5>
      <p>[募集パート] : {{ $posts->recruitment_part }}</p>
      <p>[求めるレベル感] : {{ $posts->required_level }}</p>
      <p>[性別] : {{ $posts->sex }} </p>
      <p>[年齢] : {{ $posts->age }}代</p>
      <div class="RightJustified">
         <p>投稿日時： {{ $posts->created_at }}</p>
         
         <form action="">
            <button type="submit" class="good">いいね</button>
            <span class="ml-2 border-left-0" style="line-height: 20px; font-size: 14px;"></span>
         </form>
         <form action="">
            <button type="submit" class="goodyet">いいね</button>
            <span class="ml-2 border-left-0" style="line-height: 20px; font-size: 14px;"></span>
         </form>
         <br>
         <br>
      </div>
      <br>
      <br>
      <div class="article mb-5"><hr></div>
      <!-- <h3>投稿タイトル2</h3>
      <div class="toukou">
         <p>ユーザー名(地域 年齢)</p>
         <p>本文最初の数行を表示</p>
         <p>投稿日時</p>
         <br>
         <br>
      </div>
      <hr>
      <h3>投稿タイトル3</h3>
      <div class="toukou">
         <p>ユーザー名(地域 年齢)</p>
         <p>本文最初の数行を表示</p>
         <p>投稿日時</p>
         <br>
         <br>
         </div>
         <hr>
         <h3>投稿タイトル4</h3>
         <div class="toukou">
         <p>ユーザー名(地域 年齢)</p>
         <p>本文最初の数行を表示</p>
         <p>投稿日時</p>
         <br>
         <br>
      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br> -->
   </div>
</main>
 @endsection