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
      margin-left: 20px;
    }

  .memberserach{
    padding-left: 5px;
    padding-right: 25px;
    margin-left: 20px;
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
    <img src="images/topimg.jpg" alt="イメージ画像" class="image-vw">
    <br>
    <a href="" class="memberserach"><img src="images/member.png" alt="メンバーを探す" width="350px"></a>
    <a href="" class="articleserach"><img src="images/article.png" alt="記事から探す" width="350px"></a>
      
    <h2>最新の記事</h2>

    <!-- foreachで回す -->
    <hr>
    <h3><a href="/posts/show">投稿タイトル1</a></h3>
    <div class="toukou">
        <p>ユーザー名(地域 年齢)</p>
        <p>本文最初の数行を表示</p>
        <p>投稿日時</p>
    </div>
    <!-- endforeach -->

    <hr>
    <h3><a>投稿タイトル1</a></h3>
    <div class="toukou">
        <p>ユーザー名(地域 年齢)</p>
        <p>本文最初の数行を表示</p>
        <p>投稿日時</p>
      </div>
    <hr>
    <h3><a>投稿タイトル1</a></h3>
    <div class="toukou">
      <p>ユーザー名(地域 年齢)</p>
      <p>本文最初の数行を表示</p>
      <p>投稿日時</p>
    </div>
    <hr>
    <h3><a>投稿タイトル1</a></h3>
    <div class="toukou">
      <p>ユーザー名(地域 年齢)</p>
      <p>本文最初の数行を表示</p>
      <p>投稿日時</p>
    </div>
   <br><br><br><br><br><br><br><br><br><br><br>
  </main>
@endsection