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
      font-size: 14px;
      line-height: 10px;
      margin-left: 20px;
   }
   
   h2{
      clear: left;
      font-size: 18px;
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
   <h2>記事を投稿する</h2>
   <hr>
   <br>
   <h3>投稿タイトル：<input type="text"></h3>
   <p>記事の内容：<input type="text"></p>
   <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
   <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
   <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
   <br>
   <h4>[基本データ]</h4>
   <p>　　記事の種類：□全て　□バンドメンバー募集　□加入希望者</p>
   <br>
   <h4>都道府県</h4>
   <p>　　□北海道　□青森県　□岩手県　□宮城県　□秋田県　□山形県　□福島県</p>
   <p>　　□茨城県　□栃木県　□群馬県　□埼玉県　□千葉県　□東京都　□神奈川県</p>
   <p>　　□新潟県　□富山県　□石川県　□福井県　□山梨県　□長野県　□岐阜県</p>
   <p>　　□静岡県　□愛知県　□三重県　□滋賀県　□京都府　□大阪府　□兵庫県</p>
   <p>　　□奈良県　□和歌山県　□鳥取県　□島根県　□岡山県　□広島県　□山口県</p>
   <p>　　□徳島県　□香川県　□愛媛県　□高知県　□福岡県　□滋賀県　□長崎県</p>
   <p>　　□熊本県　□大分県　□宮崎県　□鹿児島県　□沖縄県</p>
   <br>
   <h4>活動日：</h4>
   <br>
   <h4>バンド楽曲：<input type="text"></h4>
   <br>
   <h4>[募集メンバー]</h4>
   <p>　　性別：□男　□女</p>
   <p>　　年齢：<input type="text"></p>
   <h4>[ジャンル] <input type="text"></h4>
   <h4>[募集パート] <input type="text"></h4>
   <h4>[コンセプト] <input type="text"></h4>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div style="text-align: center">
      <a href="/posts"><img src="/images/post.png" alt="投稿" height="25px"></a>
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
</main>
@endsection