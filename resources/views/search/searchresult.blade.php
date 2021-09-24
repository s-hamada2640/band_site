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
        <div style="font-size: 25px;">検索結果</div>
        <hr>
        <!-- <img src="/images/profileimage.png" alt="プロフィール画像" height="150px" class="mb-3"> -->
        <h3>最新の記事</h3>
        @foreach($posts as $post)
        <!-- <div>

        </div> -->

        <hr>
        
        <p class=>投稿者 : {{$user->name}}</p>
            <h3>投稿タイトル：<a href='{{route('posts.show', $post->id)}}'>{{$post->title}}</a></h3>
        <div class="toukou">
            <p>活動エリア：{{ $post->activity_area}} </p>
            <p>年代：{{ $post->age}}代</p>
            <p>募集パート：{{$post->recruitment_part}}</p>
            <p>メッセージ：{{ $post->message }}</p>
            <p>投稿日：{{ $post->created_at }}</p>
        </div>

        @endforeach

        {{$posts -> links()}}



        <br>
        <br>
    </div>
    <br>
    <br>
    <div class="article mb-5">
        <hr>
    </div>
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