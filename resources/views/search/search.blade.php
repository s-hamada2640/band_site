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
      <input type="checkbox" name="activity_area[]" value="青森県">青森県　
      <input type="checkbox" name="activity_area[]" value="岩手県">岩手県　
      <input type="checkbox" name="activity_area[]" value="宮城県">宮城県　
      <input type="checkbox" name="activity_area[]" value="秋田県">秋田県　
      <input type="checkbox" name="activity_area[]" value="山形県">山形県　
      <input type="checkbox" name="activity_area[]" value="福島県">福島県　
      <input type="checkbox" name="activity_area[]" value="茨城県">茨城県　
      <input type="checkbox" name="activity_area[]" value="栃木県">栃木県　
      <input type="checkbox" name="activity_area[]" value="群馬県">群馬県　
      <input type="checkbox" name="activity_area[]" value="埼玉県">埼玉県　
      <input type="checkbox" name="activity_area[]" value="千葉県">千葉県　
      <input type="checkbox" name="activity_area[]" value="東京都">東京都　
      <input type="checkbox" name="activity_area[]" value="神奈川県">神奈川県　
      <input type="checkbox" name="activity_area[]" value="新潟県">新潟県　
      <input type="checkbox" name="activity_area[]" value="富山県">富山県　
      <input type="checkbox" name="activity_area[]" value="石川県">石川県　
      <input type="checkbox" name="activity_area[]" value="福井県">福井県　
      <input type="checkbox" name="activity_area[]" value="山梨県">山梨県　
      <input type="checkbox" name="activity_area[]" value="長野県">長野県　
      <input type="checkbox" name="activity_area[]" value="岐阜県">岐阜県　
      <input type="checkbox" name="activity_area[]" value="静岡県">静岡県　
      <input type="checkbox" name="activity_area[]" value="愛知県">愛知県　
      <input type="checkbox" name="activity_area[]" value="三重県">三重県　
      <input type="checkbox" name="activity_area[]" value="滋賀県">滋賀県　
      <input type="checkbox" name="activity_area[]" value="京都府">京都府　
      <input type="checkbox" name="activity_area[]" value="大阪府">大阪府　
      <input type="checkbox" name="activity_area[]" value="兵庫県">兵庫県　
      <input type="checkbox" name="activity_area[]" value="奈良県">奈良県　
      <input type="checkbox" name="activity_area[]" value="和歌山県">和歌山県　
      <input type="checkbox" name="activity_area[]" value="鳥取県">鳥取県　
      <input type="checkbox" name="activity_area[]" value="島根県">島根県　
      <input type="checkbox" name="activity_area[]" value="岡山県">岡山県　
      <input type="checkbox" name="activity_area[]" value="広島県">広島県　
      <input type="checkbox" name="activity_area[]" value="山口県">山口県　
      <input type="checkbox" name="activity_area[]" value="徳島県">徳島県　
      <input type="checkbox" name="activity_area[]" value="香川県">香川県　
      <input type="checkbox" name="activity_area[]" value="愛媛県">愛媛県　
      <input type="checkbox" name="activity_area[]" value="高知県">高知県　
      <input type="checkbox" name="activity_area[]" value="福岡県">福岡県　
      <input type="checkbox" name="activity_area[]" value="佐賀県">佐賀県　
      <input type="checkbox" name="activity_area[]" value="長崎県">長崎県　
      <input type="checkbox" name="activity_area[]" value="熊本県">熊本県　
      <input type="checkbox" name="activity_area[]" value="大分県">大分県　
      <input type="checkbox" name="activity_area[]" value="宮崎県">宮崎県　
      <input type="checkbox" name="activity_area[]" value="鹿児島県">鹿児島県　
      <input type="checkbox" name="activity_area[]" value="沖縄県">沖縄県　
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

    <!-- <h3><strong>活動レベル</strong></h3>

    <textarea type="text" name="activity_level" cols="70" rows="5" placeholder="土日の週2回、〇〇駅前のスタジオで練習必須">
    </textarea> -->

    <hr>

    <h3><strong>相手に求めるレベル感</strong></h3>

    <textarea type="text" name="required_level" cols="70" rows="5" placeholder="〇〇が弾けるレベル、プレイ歴〇年以上、">
    </textarea>

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