@extends('layouts.app')

@section('title', 'Search')

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
  <h2>条件を絞って探す</h2>
  <hr>
  <form method="post" action="{{route('searchresult')}}">
    @csrf
    <button type='submit'><img src="images/search.png" alt="検索" height="25px"></button>
    <img src="../images/search.png" alt="ユーザー検索">
    <br>
    <br>

    <div class="container">
      <div class="row">
        <h3><strong>記事の種類</strong></h3>
        <br>
      </div>
      <div>
        <button type='submit'><img src="images/search.png" alt="検索" height="25px"></button>

        <input type="checkbox" name="member[]" value="バンドメンバー募集">バンドメンバー募集　　　
        <input type="checkbox" name="member[]" value="加入希望">加入希望　
      </div>

      <hr>

      <h3><strong>都道府県</strong></h3>
      <input type="checkbox" name="activity_area[]" value="北海道">北海道　
      <input type="checkbox" name="activity_area[]" value="青森">青森県　
      <input type="checkbox" name="activity_area[]" value="岩手">岩手県　
      <input type="checkbox" name="activity_area[]" value="宮城">宮城県　
      <input type="checkbox" name="activity_area[]" value="秋田">秋田県　
      <input type="checkbox" name="activity_area[]" value="山形">山形県　
      <input type="checkbox" name="activity_area[]" value="福島">福島県　
      <input type="checkbox" name="activity_area[]" value="茨城">茨城県　
      <input type="checkbox" name="activity_area[]" value="栃木">栃木県　
      <input type="checkbox" name="activity_area[]" value="群馬">群馬県　
      <input type="checkbox" name="activity_area[]" value="埼玉">埼玉県　
      <input type="checkbox" name="activity_area[]" value="千葉">千葉県　
      <input type="checkbox" name="activity_area[]" value="東京">東京都　
      <input type="checkbox" name="activity_area[]" value="神奈川">神奈川県　
      <input type="checkbox" name="activity_area[]" value="新潟">新潟県　
      <input type="checkbox" name="activity_area[]" value="富山">富山県　
      <input type="checkbox" name="activity_area[]" value="石川">石川県　
      <input type="checkbox" name="activity_area[]" value="福井">福井県　
      <input type="checkbox" name="activity_area[]" value="山梨">山梨県　
      <input type="checkbox" name="activity_area[]" value="長野">長野県　
      <input type="checkbox" name="activity_area[]" value="岐阜">岐阜県　
      <input type="checkbox" name="activity_area[]" value="静岡">静岡県　
      <input type="checkbox" name="activity_area[]" value="愛知">愛知県　
      <input type="checkbox" name="activity_area[]" value="三重">三重県　
      <input type="checkbox" name="activity_area[]" value="滋賀">滋賀県　
      <input type="checkbox" name="activity_area[]" value="京都">京都府　
      <input type="checkbox" name="activity_area[]" value="大阪">大阪府　
      <input type="checkbox" name="activity_area[]" value="兵庫">兵庫県　
      <input type="checkbox" name="activity_area[]" value="奈良">奈良県　
      <input type="checkbox" name="activity_area[]" value="和歌山">和歌山県　
      <input type="checkbox" name="activity_area[]" value="鳥取">鳥取県　
      <input type="checkbox" name="activity_area[]" value="島根">島根県　
      <input type="checkbox" name="activity_area[]" value="岡山">岡山県　
      <input type="checkbox" name="activity_area[]" value="広島">広島県　
      <input type="checkbox" name="activity_area[]" value="山口">山口県　
      <input type="checkbox" name="activity_area[]" value="徳島">徳島県　
      <input type="checkbox" name="activity_area[]" value="香川">香川県　
      <input type="checkbox" name="activity_area[]" value="愛媛">愛媛県　
      <input type="checkbox" name="activity_area[]" value="高知">高知県　
      <input type="checkbox" name="activity_area[]" value="福岡">福岡県　
      <input type="checkbox" name="activity_area[]" value="佐賀">佐賀県　
      <input type="checkbox" name="activity_area[]" value="長崎">長崎県　
      <input type="checkbox" name="activity_area[]" value="熊本">熊本県　
      <input type="checkbox" name="activity_area[]" value="大分">大分県　
      <input type="checkbox" name="activity_area[]" value="宮崎">宮崎県　
      <input type="checkbox" name="activity_area[]" value="鹿児島">鹿児島県　
      <input type="checkbox" name="activity_area[]" value="沖縄">沖縄県　
    </div>

    <hr>

    <h3><strong>ジャンル</strong></h3>

    <input type="checkbox" name="genre[]" value="ポップス">ポップス　
    <input type="checkbox" name="genre[]" value="ロック">ロック　
    <input type="checkbox" name="genre[]" value="パンク">パンク　
    <input type="checkbox" name="genre[]" value="メタル">メタル　
    <input type="checkbox" name="genre[]" value="ジャズ">ジャズ　
    <input type="checkbox" name="genre[]" value="ブルース">ブルース　
    <input type="checkbox" name="genre[]" value="ファンク">ファンク　
    <input type="checkbox" name="genre[]" value="クラシック(オーケストラ)">クラシック(オーケストラ)　


    <hr>

    <h3><strong>募集パート</strong></h3>

    <input type="checkbox" name="recruitment_part[]" value="ボーカル">ボーカル　
    <input type="checkbox" name="recruitment_part[]" value="ギター">ギター　
    <input type="checkbox" name="recruitment_part[]" value="ベース">ベース　
    <input type="checkbox" name="recruitment_part[]" value="ドラム">ドラム　
    <input type="checkbox" name="recruitment_part[]" value="キーボード">キーボード　
    <input type="checkbox" name="recruitment_part[]" value="管楽器">管楽器


    <hr>

    <h3><strong>活動レベル</strong></h3>

    <textarea type="text" name="activity_level" cols="70" rows="5" placeholder="土日の週2回、〇〇駅前のスタジオで練習必須">
            </textarea>


    <hr>

    <h3><strong>相手に求めるレベル感</strong></h3>


    <input type="checkbox" name="level[]" value="レベル1">レベル1　 　
    <input type="checkbox" name="level[]" value="レベル2">レベル2　 　
    <input type="checkbox" name="level[]" value="レベル3">レベル3　 　
    <input type="checkbox" name="level[]" value="レベル4">レベル4　 　
    <input type="checkbox" name="level[]" value="レベル5">レベル5　 　
    <input type="checkbox" name="level[]" value="レベル6">レベル6　 　


    <hr>

    <h3><strong>年代</strong></h3>

    <input type="checkbox" name="age[]" value="10代">10代　 　
    <input type="checkbox" name="age[]" value="20代">20代　 　
    <input type="checkbox" name="age[]" value="30代">30代　 　
    <input type="checkbox" name="age[]" value="40代">40代　 　
    <input type="checkbox" name="age[]" value="50代">50代　 　
    <input type="checkbox" name="age[]" value="60代">60代　 　
    <input type="checkbox" name="age[]" value="70代">70代以上


    <hr>

    <h3><strong>性別</strong></h3>

    <input type="checkbox" name="gendar[]" value="男性">男性　
    <input type="checkbox" name="gendar[]" value="女性">女性　


    <hr>

    <h3><strong>好きなアーティスト</strong></h3>
    <textarea type='text' name="favorite_artist" cols="70" rows="5">
    </textarea>

    </div>

    <hr>

    <div style="text-align: center">
      <button type='submit'><img src="images/search.png" alt="検索" height="25px"></button>
  </form>
  @endsection