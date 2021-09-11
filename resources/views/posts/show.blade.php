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
   padding-right: 550px;
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
@endsection

@section('content')
<main>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <h2>検索結果</h2>
   <hr>
   <br>
   <br>
   <h3>最新の記事</h3>
   <hr>
   <img src="/images/profileimage.png" alt="プロフィール画像" height="150px" class="mb-3">
   <h3>投稿タイトル：***</h3>
   <p>ユーザー名</p>
   <p>記事の内容：</p>
   <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
   <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
   <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
   <br>
   <h4>[基本データ]</h4>
   <p>　　記事の種類：</p>
   <p>  都道府県</p>
   <p>活動日：</p>
   <p>バンド楽曲：</p>
   <p>[募集メンバー]　性別/年齢</p>
   <p>[ジャンル]</p>
   <p>[募集パート]</p>
   <p>[コンセプト]社会人バンド</p>
   <div class="RightJustified">
      <p>投稿日時：00:00</p>
      <a href="SearchResultdetail1.html"><img src="image/iine0.png" alt="いいねボタン" class="image-cng" height="20px"></a>
      <br>
      <br>
   </div>
   <br>
   <br>
   <div class="article"><hr></div>
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
</main>
 @endsection