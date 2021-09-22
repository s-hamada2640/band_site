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
   <h2>記事の編集</h2>
   <hr>
   <br>
   <h3>投稿タイトル：<input type="text"></h3>
   <br>
   <p>記事の内容：<input type="text"></p>
   <hr>
   <br>
   <h4>[基本データ]</h4>
   {{-- <p>記事の種類：
   <input type="radio" name="recruit[]" value="バンドメンバー募集">バンドメンバー募集     
   <input type="radio" name="recruit[]" value="加入希望">加入希望
   </p>
   <br> --}}
   <h4>都道府県</h4>
   <p><input type="radio" name="activity_area[]" value="北海道">北海道　
   <input type="radio" name="activity_area[]" value="青森">青森県
   <input type="radio" name="activity_area[]" value="岩手">岩手県　
   <input type="radio" name="activity_area[]" value="宮城">宮城県　
   <input type="radio" name="activity_area[]" value="秋田">秋田県　
   <input type="radio" name="activity_area[]" value="山形">山形県　
   <input type="radio" name="activity_area[]" value="福島">福島県　
   <input type="radio" name="activity_area[]" value="茨城">茨城県　
   <input type="radio" name="activity_area[]" value="栃木">栃木県　
   <input type="radio" name="activity_area[]" value="群馬">群馬県　
   <input type="radio" name="activity_area[]" value="埼玉">埼玉県　
   <input type="radio" name="activity_area[]" value="千葉">千葉県　</p>
   <p><input type="radio" name="activity_area[]" value="東京">東京都　
   <input type="radio" name="activity_area[]" value="神奈川">神奈川県　
   <input type="radio" name="activity_area[]" value="新潟">新潟県　
   <input type="radio" name="activity_area[]" value="富山">富山県　
   <input type="radio" name="activity_area[]" value="石川">石川県　
   <input type="radio" name="activity_area[]" value="福井">福井県　
   <input type="radio" name="activity_area[]" value="山梨">山梨県　
   <input type="radio" name="activity_area[]" value="長野">長野県　
   <input type="radio" name="activity_area[]" value="岐阜">岐阜県　
   <input type="radio" name="activity_area[]" value="静岡">静岡県　
   <input type="radio" name="activity_area[]" value="愛知">愛知県　
   <input type="radio" name="activity_area[]" value="三重">三重県　</p>
   <p><input type="radio" name="activity_area[]" value="滋賀">滋賀県　
   <input type="radio" name="activity_area[]" value="京都">京都府　
   <input type="radio" name="activity_area[]" value="大阪">大阪府　
   <input type="radio" name="activity_area[]" value="兵庫">兵庫県　
   <input type="radio" name="activity_area[]" value="奈良">奈良県　
   <input type="radio" name="activity_area[]" value="和歌山">和歌山県　
   <input type="radio" name="activity_area[]" value="鳥取">鳥取県　
   <input type="radio" name="activity_area[]" value="島根">島根県　
   <input type="radio" name="activity_area[]" value="岡山">岡山県　
   <input type="radio" name="activity_area[]" value="広島">広島県　
   <input type="radio" name="activity_area[]" value="山口">山口県　
   <input type="radio" name="activity_area[]" value="徳島">徳島県　</p>
   <p><input type="radio" name="activity_area[]" value="香川">香川県　
   <input type="radio" name="activity_area[]" value="愛媛">愛媛県　
   <input type="radio" name="activity_area[]" value="高知">高知県　
   <input type="radio" name="activity_area[]" value="福岡">福岡県　
   <input type="radio" name="activity_area[]" value="佐賀">佐賀県　
   <input type="radio" name="activity_area[]" value="長崎">長崎県　
   <input type="radio" name="activity_area[]" value="熊本">熊本県　
   <input type="radio" name="activity_area[]" value="大分">大分県　
   <input type="radio" name="activity_area[]" value="宮崎">宮崎県　
   <input type="radio" name="activity_area[]" value="鹿児島">鹿児島県　
   <input type="radio" name="activity_area[]" value="沖縄">沖縄県　</p>
   <br>
   <h4>活動日：<input type="text"></h4>
   <br>
   <h4>[募集メンバー]</h4>
   <p>　　性別：
         <input type="radio" name="gendar[]" value="男性">男性　　
         <input type="radio" name="gendar[]" value="女性">女性　　
         <input type="radio" name="gendar[]" value="気にしない">気にしない</p>
   <p>　　年齢：
      <input type="checkbox" name="age[]" value="10代">10代　 　
      <input type="checkbox" name="age[]" value="20代">20代　 　
      <input type="checkbox" name="age[]" value="30代">30代　 　
      <input type="checkbox" name="age[]" value="40代">40代　 　
      <input type="checkbox" name="age[]" value="50代">50代　 　
      <input type="checkbox" name="age[]" value="60代">60代　 　
      <input type="checkbox" name="age[]" value="70代">70代以上</p>

   <h4>[ジャンル]</h4>
   <p>   <input type="checkbox" name="genre[]" value="ポップス">ポップス　
      <input type="checkbox" name="genre[]" value="ロック">ロック　
      <input type="checkbox" name="genre[]" value="パンク">パンク　
      <input type="checkbox" name="genre[]" value="メタル">メタル　
      <input type="checkbox" name="genre[]" value="ジャズ">ジャズ　
      <input type="checkbox" name="genre[]" value="ブルース">ブルース　
      <input type="checkbox" name="genre[]" value="ファンク">ファンク　
      <input type="checkbox" name="genre[]" value="クラシック(オーケストラ)">クラシック(オーケストラ)　
   </p>
   <h4>[募集パート]</h4>
      <p><input type="checkbox" name="recruitment_part[]" value="ボーカル">ボーカル　
      <input type="checkbox" name="recruitment_part[]" value="ギター">ギター　
      <input type="checkbox" name="recruitment_part[]" value="ベース">ベース　
      <input type="checkbox" name="recruitment_part[]" value="ドラム">ドラム　
      <input type="checkbox" name="recruitment_part[]" value="キーボード">キーボード　
      <input type="checkbox" name="recruitment_part[]" value="管楽器">管楽器
      </p>
   <br>
   <div style="text-align: center">
      <a href="/posts"><img src="/images/update.png" alt="更新" height="25px"></a>
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