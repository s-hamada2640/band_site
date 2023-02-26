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

    .imcheck-vw{
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
        <h2>キーワードで探す</h2>
        <hr>
        <form method="post" action="{{ route('searchresult') }}">
            @csrf
            <div class="search-keyword">
                <input type="text" name="keyword" placeholder="検索…">
                <button type='submit'>キーワード検索</button>
            </div>
        </form>

        <hr>

        <h2>条件を絞って探す</h2>
        <hr>


        <br>
        <br>

        <div class="container">
            <div class="row">
                <h3><strong>記事の種類</strong></h3>
                <br>
            </div>

            <form method="post" action="{{ route('searchcheck') }}">
                @csrf
                <div>
                    <input type="checkbox" name="check[]" value="バンドメンバー募集">バンドメンバー募集
                    <input type="checkbox" name="check[]" value="加入希望">加入希望
                </div>

                <hr>

                <h3><strong>都道府県</strong></h3>
                <input type="checkbox" name="check[activity_area][]" value="北海道">北海道
                <input type="checkbox" name="check[activity_area]" value="青森県">青森県
                <input type="checkbox" name="check[activity_area]" value="岩手県">岩手県
                <input type="checkbox" name="check[activity_area]" value="宮城県">宮城県
                <input type="checkbox" name="check[]" value="秋田県">秋田県
                <input type="checkbox" name="check[]" value="山形県">山形県
                <input type="checkbox" name="check[]" value="福島県">福島県
                <input type="checkbox" name="check[]" value="茨城県">茨城県
                <input type="checkbox" name="check[]" value="栃木県">栃木県
                <input type="checkbox" name="check[]" value="群馬県">群馬県
                <input type="checkbox" name="check[]" value="埼玉県">埼玉県
                <input type="checkbox" name="check[]" value="千葉県">千葉県
                <input type="checkbox" name="check[activity_area][]" value="東京都">東京都
                <input type="checkbox" name="check[]" value="神奈川県">神奈川県
                <input type="checkbox" name="check[]" value="新潟県">新潟県
                <input type="checkbox" name="check[]" value="富山県">富山県
                <input type="checkbox" name="check[]" value="石川県">石川県
                <input type="checkbox" name="check[]" value="福井県">福井県
                <input type="checkbox" name="check[]" value="山梨県">山梨県
                <input type="checkbox" name="check[]" value="長野県">長野県
                <input type="checkbox" name="check[]" value="岐阜県">岐阜県
                <input type="checkbox" name="check[]" value="静岡県">静岡県
                <input type="checkbox" name="check[]" value="愛知県">愛知県
                <input type="checkbox" name="check[]" value="三重県">三重県
                <input type="checkbox" name="check[]" value="滋賀県">滋賀県
                <input type="checkbox" name="check[]" value="京都府">京都府
                <input type="checkbox" name="check[activity_area][]" value="大阪府">大阪府
                <input type="checkbox" name="check[]" value="兵庫県">兵庫県
                <input type="checkbox" name="check[]" value="奈良県">奈良県
                <input type="checkbox" name="check[]" value="和歌山県">和歌山県
                <input type="checkbox" name="check[]" value="鳥取県">鳥取県
                <input type="checkbox" name="check[]" value="島根県">島根県
                <input type="checkbox" name="check[]" value="岡山県">岡山県
                <input type="checkbox" name="check[activity_area][]" value="広島県">広島県
                <input type="checkbox" name="check[]" value="山口県">山口県
                <input type="checkbox" name="check[]" value="徳島県">徳島県
                <input type="checkbox" name="check[]" value="香川県">香川県
                <input type="checkbox" name="check[]" value="愛媛県">愛媛県
                <input type="checkbox" name="check[]" value="高知県">高知県
                <input type="checkbox" name="check[]" value="福岡県">福岡県
                <input type="checkbox" name="check[]" value="佐賀県">佐賀県
                <input type="checkbox" name="check[]" value="長崎県">長崎県
                <input type="checkbox" name="check[]" value="熊本県">熊本県
                <input type="checkbox" name="check[]" value="大分県">大分県
                <input type="checkbox" name="check[]" value="宮崎県">宮崎県
                <input type="checkbox" name="check[]" value="鹿児島県">鹿児島県
                <input type="checkbox" name="check[activity_area][]" value="沖縄県">沖縄県

                <hr>

                <h3><strong>ジャンル</strong></h3>

                <input type="checkbox" name="check[]" value="ポップス">ポップス
                <input type="checkbox" name="check[]" value="ロック">ロック
                <input type="checkbox" name="check[]" value="パンク">パンク
                <input type="checkbox" name="check[]" value="メタル">メタル
                <input type="checkbox" name="check[]" value="ジャズ">ジャズ
                <input type="checkbox" name="check[]" value="ブルース">ブルース
                <input type="checkbox" name="check[]" value="ファンク">ファンク
                <input type="checkbox" name="check[]" value="クラシック(オーケストラ)">クラシック(オーケストラ)

                <hr>

                <h3><strong>募集パート</strong></h3>

                <input type="checkbox" name="check[]" value="ボーカル">ボーカル
                <input type="checkbox" name="check[]" value="ギター">ギター
                <input type="checkbox" name="check[]" value="ベース">ベース
                <input type="checkbox" name="check[]" value="ドラム">ドラム
                <input type="checkbox" name="check[]" value="キーボード">キーボード
                <input type="checkbox" name="check[]" value="管楽器">管楽器


                <hr>

                {{-- <h3><strong>相手に求めるレベル感</strong></h3>

                <textarea type="text" name="required_level" cols="70" rows="5" placeholder="〇〇が弾けるレベル、プレイ歴〇年以上、"></textarea>

                <hr> --}}

                <h3><strong>年代</strong></h3>

                <input type="checkbox" name="check[]" value="10代">10代
                <input type="checkbox" name="check[]" value="20代">20代
                <input type="checkbox" name="check[]" value="30代">30代
                <input type="checkbox" name="check[]" value="40代">40代
                <input type="checkbox" name="check[]" value="50代">50代
                <input type="checkbox" name="check[]" value="60代">60代
                <input type="checkbox" name="check[]" value="70代">70代以上


                <hr>

                <h3><strong>性別</strong></h3>

                <input type="checkbox" name="check[]" value="男性">男性
                <input type="checkbox" name="check[]" value="女性">女性


                <hr>

                {{-- <h3><strong>好きなアーティスト</strong></h3>
                <textarea type='text' name="favorite_artist" cols="70" rows="5"> </textarea>

                <hr> --}}
                <div style="text-align: center">
                    <div class="search-keyword">
                        <button type='submit'>検索</button>
                    </div>
                </div>

            </form>
        </div>






    @endsection
