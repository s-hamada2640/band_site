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
  <main>
    <img src="images/topimg.jpg" alt="イメージ画像" class="image-vw d-block">
    <br>
    <div class="container">
      <div class="row">
        <a href="" class="col d-block"><img class="mx-auto d-block mb-3 mb-lg-0" src="images/member.png" alt="メンバーを探す" width="350"></a>
        <a href="" class="col d-block"><img class="mx-auto d-block" src="images/article.png" alt="記事から探す" width="350"></a>
      </div>
    </div>
      
    <h2>最新の記事</h2>

    @foreach($posts as $post)
      <hr>
      <h3><a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a></h3>
      <div class="toukou">
          <p>{{ $post->user->name }}({{ $post->user->age }})</p>
          <p>{{ Str::limit($post->message,20)}}</p>
          <p>{{ $post->created_at }}</p>
      </div>
    @endforeach

   <br><br><br><br><br><br><br><br><br><br><br>
  </main>
@endsection