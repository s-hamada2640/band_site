@extends('layouts.app')

@section('css')
    h1{
      width: 350px;
      padding-left: 5px;
      margin-left: 20px;
      float: left;
    }

    .header-right{
      float: right;
    }

    .link{
      display: inline-block;
      height: 35px; 
      width: 150px;
    }

    .sing-up{
      margin-left:20px;
      padding-right: 10px;
      color: honeydew;
      background-color:gray;
      float:left;
    }

    a.link-login,a.link-sing-up {
      border: 2px solid #b84c00;
    }

    .header-right{
      padding-top: 50px;
      margin-left: 20px;
    }

    .image-vw{
      width: 70vw;
      padding: 5px;
      margin: 0 auto;
    }

    h2{
      font-size: 23px;
      padding-top: 35px;
      padding-bottom: 0;
      margin-left: 20px;
    }

    h3{
      font-size: 16px;
      line-height: 10px;
      margin-left: 20px;
    }

    .toukou{
      font-size: 12px;
      line-height: 10px;
      margin-left: 20px;
    }
@endsection

@section('content')
  <main class="container">
    <img src="images/topimg.jpg" alt="イメージ画像" class="image-vw d-block">
    <br>
    <div class="container">
      <div class="row">
        <a href="{{route('posts.create')}}" class="col d-block"><img class="mx-auto d-block mb-3 mb-lg-0" src="images/post.png" alt="新規投稿"　新規投稿></a>
        <a href="{{route('search')}}" class="col d-block"><img class="mx-auto d-block" src="images/search.png" alt="投稿記事から探す"　投稿記事から探す></a>
      </div>
    </div>　　　　　
      
  
    <h2>最新の記事</h2>
    @foreach($posts as $post)
      <hr>
      
      <!-- タイトル -->
      <h3><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></h3>

      <div class="toukou">
          <!--ユーザー名、年齢/性別-->
          <p>{{ $post->user->name }}({{ $post->user->age }}/{{$post->user->sex}})</p>

          <!-- メッセージ -->
          <p>{{ Str::limit($post->message,"20")}}</p>
          
          <!-- 投稿日時 -->
          <p>投稿日{{ $post->created_at }}</p>
      </div>
    @endforeach
  </main>
@endsection