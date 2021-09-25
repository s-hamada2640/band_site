@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('登録フォーム') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- ハンドルネーム -->
                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('ハンドルネーム') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- メールアドレス -->
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('メールアドレス') }}</label>
                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- パスワード -->
                        <div class="form-group row">
                            <label for="password"
                                class="col-md-3 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- パスワード確認用 -->
                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-3 col-form-label text-md-right">{{ __('パスワード確認用') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- 活動地域 -->
                        <div class="form-group row">
                            <label for="password-confirm"
                                class="col-md-3 col-form-label text-md-right">{{ __('活動地域') }}</label>

                            <div class="col-9">
                                <!-- 北海道 1-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="hokkaido" name="activity_area" class="custom-control-input"
                                        value="北海道" required>
                                    <label id="radio" class="custom-control-label" for="hokkaido">北海道</label>
                                </div>

                                <!-- 東北 6-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="aomori" name="activity_area" class="custom-control-input"
                                        value="青森県">
                                    <label id="radio" class="custom-control-label" for="aomori">青森県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="iwate" name="activity_area" class="custom-control-input"
                                        value="岩手県">
                                    <label id="radio" class="custom-control-label" for="iwate">岩手県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="miyagi" name="activity_area" class="custom-control-input"
                                        value="宮城県">
                                    <label id="radio" class="custom-control-label" for="miyagi">宮城県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="akita" name="activity_area" class="custom-control-input"
                                        value="秋田県">
                                    <label id="radio" class="custom-control-label" for="akita">秋田県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="yamagata" name="activity_area" class="custom-control-input"
                                        value="山形県">
                                    <label id="radio" class="custom-control-label" for="yamagata">山形県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="fukushima" name="activity_area" class="custom-control-input"
                                        value="福島県">
                                    <label id="radio" class="custom-control-label" for="fukushima">福島県</label>
                                </div>

                                <!-- 関東 7-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ibaraki" name="activity_area" class="custom-control-input"
                                        value="茨城県">
                                    <label id="radio" class="custom-control-label" for="ibaraki">茨城県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="tochigi" name="activity_area" class="custom-control-input"
                                        value="栃木県">
                                    <label id="radio" class="custom-control-label" for="tochigi">栃木県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="gunma" name="activity_area" class="custom-control-input"
                                        value="群馬県">
                                    <label id="radio" class="custom-control-label" for="gunma">群馬県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="saitama" name="activity_area" class="custom-control-input"
                                        value="埼玉県">
                                    <label id="radio" class="custom-control-label" for="saitama">埼玉県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="chiba" name="activity_area" class="custom-control-input"
                                        value="千葉県">
                                    <label id="radio" class="custom-control-label" for="chiba">千葉県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="tokyo" name="activity_area" class="custom-control-input"
                                        value="東京都">
                                    <label id="radio" class="custom-control-label" for="tokyo">東京都</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="kanagawa" name="activity_area" class="custom-control-input"
                                        value="神奈川県">
                                    <label id="radio" class="custom-control-label" for="kanagawa">神奈川県</label>
                                </div>

                                <!-- 中部 9-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nigata" name="activity_area" class="custom-control-input"
                                        value="新潟県">
                                    <label id="radio" class="custom-control-label" for="nigata">新潟県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="toyama" name="activity_area" class="custom-control-input"
                                        value="富山県">
                                    <label id="radio" class="custom-control-label" for="toyama">富山県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="fukui" name="activity_area" class="custom-control-input"
                                        value="福井県">
                                    <label id="radio" class="custom-control-label" for="fukui">福井県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ishikawa" name="activity_area" class="custom-control-input"
                                        value="石川県">
                                    <label id="radio" class="custom-control-label" for="ishikawa">石川県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="yamanashi" name="activity_area" class="custom-control-input"
                                        value="山梨県">
                                    <label id="radio" class="custom-control-label" for="yamanashi">山梨県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nagano" name="activity_area" class="custom-control-input"
                                        value="長野県">
                                    <label id="radio" class="custom-control-label" for="nagano">長野県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="gifu" name="activity_area" class="custom-control-input"
                                        value="岐阜県">
                                    <label id="radio" class="custom-control-label" for="gifu">岐阜県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="shizuoka" name="activity_area" class="custom-control-input"
                                        value="静岡県">
                                    <label id="radio" class="custom-control-label" for="shizuoka">静岡県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="aichi" name="activity_area" class="custom-control-input"
                                        value="愛知県">
                                    <label id="radio" class="custom-control-label" for="aichi">愛知県</label>
                                </div>

                                <!-- 近畿 7-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="mie" name="activity_area" class="custom-control-input"
                                        value="三重県">
                                    <label id="radio" class="custom-control-label" for="mie">三重県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="shiga" name="activity_area" class="custom-control-input"
                                        value="滋賀県">
                                    <label id="radio" class="custom-control-label" for="shiga">滋賀県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="kyoto" name="activity_area" class="custom-control-input"
                                        value="京都府">
                                    <label id="radio" class="custom-control-label" for="kyoto">京都府</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="osaka" name="activity_area" class="custom-control-input"
                                        value="大阪府">
                                    <label id="radio" class="custom-control-label" for="osaka">大阪府</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="hyogo" name="activity_area" class="custom-control-input"
                                        value="兵庫県">
                                    <label id="radio" class="custom-control-label" for="hyogo">兵庫県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nara" name="activity_area" class="custom-control-input"
                                        value="奈良県">
                                    <label id="radio" class="custom-control-label" for="nara">奈良県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="wakayama" name="activity_area" class="custom-control-input"
                                        value="和歌山県">
                                    <label id="radio" class="custom-control-label" for="wakayama">和歌山県</label>
                                </div>

                                <!-- 中国 5-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="tottori" name="activity_area" class="custom-control-input"
                                        value="鳥取県">
                                    <label id="radio" class="custom-control-label" for="tottori">鳥取県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="shimane" name="activity_area" class="custom-control-input"
                                        value="島根県">
                                    <label id="radio" class="custom-control-label" for="shimane">島根県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="okamaya" name="activity_area" class="custom-control-input"
                                        value="岡山県">
                                    <label id="radio" class="custom-control-label" for="okamaya">岡山県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="hiroshima" name="activity_area" class="custom-control-input"
                                        value="広島県">
                                    <label id="radio" class="custom-control-label" for="hiroshima">広島県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="yamaguchi" name="activity_area" class="custom-control-input"
                                        value="山口県">
                                    <label id="radio" class="custom-control-label" for="yamaguchi">山口県</label>
                                </div>

                                <!-- 四国 4-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="tokushima" name="activity_area" class="custom-control-input"
                                        value="徳島県">
                                    <label id="radio" class="custom-control-label" for="tokushima">徳島県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="kagawa" name="activity_area" class="custom-control-input"
                                        value="香川県">
                                    <label id="radio" class="custom-control-label" for="kagawa">香川県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ehime" name="activity_area" class="custom-control-input"
                                        value="愛媛県">
                                    <label id="radio" class="custom-control-label" for="ehime">愛媛県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="kouchi" name="activity_area" class="custom-control-input"
                                        value="高知県">
                                    <label id="radio" class="custom-control-label" for="kouchi">高知県</label>
                                </div>

                                <!-- 九州 8-->
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="fukuoka" name="activity_area" class="custom-control-input"
                                        value="福岡県">
                                    <label id="radio" class="custom-control-label" for="fukuoka">福岡県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="saga" name="activity_area" class="custom-control-input"
                                        value="佐賀県">
                                    <label id="radio" class="custom-control-label" for="saga">佐賀県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="nagasaki" name="activity_area" class="custom-control-input"
                                        value="長崎県">
                                    <label id="radio" class="custom-control-label" for="nagasaki">長崎県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="kumamoto" name="activity_area" class="custom-control-input"
                                        value="熊本県">
                                    <label id="radio" class="custom-control-label" for="kumamoto">熊本県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="ooita" name="activity_area" class="custom-control-input"
                                        value="大分県">
                                    <label id="radio" class="custom-control-label" for="ooita">大分県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="miyazaki" name="activity_area" class="custom-control-input"
                                        value="宮崎県">
                                    <label id="radio" class="custom-control-label" for="miyazaki">宮崎県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="kagosima" name="activity_area" class="custom-control-input"
                                        value="鹿児島県">
                                    <label id="radio" class="custom-control-label" for="kagosima">鹿児島県</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="okinawa" name="activity_area" class="custom-control-input"
                                        value="沖縄県">
                                    <label id="radio" class="custom-control-label" for="okinawa">沖縄県</label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-3">

                            <label for="band_level" class="col-3 col-form-label text-md-right">
                                <p>バンドのレベル感</p>
                            </label>
                            <div class="col-8">
                                <input type="text" class="form-control @error('band_level') is-invalid @enderror"
                                    name="band_level" value="{{ old('band_level') }}" required autocomplete="band_level"
                                    autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="activity_level" class="col-3 col-form-label text-md-right">
                                <p>活動レベル</p>
                            </label>
                            <div class="col-8">
                                <input type="text" class="form-control @error('activity_level') is-invalid @enderror"
                                    name="activity_level" value="{{ old('activity_level') }}" required
                                    autocomplete="activity_level" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="genre" class="col-3 col-form-label text-md-right">
                                <p> ジャンル</p>
                            </label>
                            <div class="col-9">
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="genre" value="ポップス" checked>
                                    <label class="form-check-label" for="genre">ポップス</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="genre" value="ロック">
                                    <label class="form-check-label" for="genre">ロック</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="genre" value="パンク">
                                    <label class="form-check-label" for="genre">パンク</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="genre" value="メタル">
                                    <label class="form-check-label" for="genre">メタル</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="genre" value="ジャズ">
                                    <label class="form-check-label" for="genre">ジャズ</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="genre" value="ブルース">
                                    <label class="form-check-label" for="genre">ブルース</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="genre" value="ファンク">
                                    <label class="form-check-label" for="genre">ファンク</label>
                                </div>
                                <div class="form-check  form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="genre" value="クラシック(オーケストラ)">
                                    <label class="form-check-label" for="genre">クラシック(オーケストラ)</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="activity_timezone" class="col-3 col-form-label text-md-right">
                                <p>活動時間帯</p>
                            </label>
                            <div class="col-8">
                                <input type="text" class="form-control @error('activity_timezone') is-invalid @enderror"
                                    name="activity_timezone" value="{{ old('activity_timezone') }}"
                                    autocomplete="activity_timezone" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="favorite_artist" class="col-3 col-form-label text-md-right">
                                <p>好きなアーティスト</p>
                            </label>
                            <div class="col-8">
                                <input type="text" class="form-control @error('favorite_artist') is-invalid @enderror"
                                    name="favorite_artist" value="{{ old('favorite_artist') }}"
                                    autocomplete="favorite_artist" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="favorite_artist" class="col-3 col-form-label text-md-right">
                                <p>性別</p>
                            </label>
                            <div class="col-9">
                                <div class="custom-control custom-radio custom-control-inline ml-3">
                                    <input type="radio" id="man" name="sex" class="custom-control-input align-middle"
                                        value="男性">
                                    <label id="radio" class="custom-control-label my-auto" for="man">男性</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="woman" name="sex" class="custom-control-input align-middle"
                                        value="女性">
                                    <label id="radio" class="custom-control-label my-auto" for="woman">女性</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="either" name="sex" class="custom-control-input align-middle"
                                        value="気にしない" checked>
                                    <label id="radio" class="custom-control-label my-auto" for="either">気にしない</label>
                                </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="favorite_artist" class="col-3 col-form-label text-md-right">
                                    <p>年齢</p>
                                </label>
                                <div class="col-9">
                                    <div class="custom-control custom-radio custom-control-inline ml-3">
                                        <input type="radio" id="10" name="age" class="custom-control-input align-middle"
                                            value="10">
                                        <label id="radio" class="custom-control-label my-auto" for="10">10代</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="20" name="age" class="custom-control-input align-middle"
                                            value="20">
                                        <label id="radio" class="custom-control-label my-auto" for="20">20代</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="30" name="age" class="custom-control-input align-middle"
                                            value="30">
                                        <label id="radio" class="custom-control-label my-auto" for="30">30代</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="40" name="age" class="custom-control-input align-middle"
                                            value="40">
                                        <label id="radio" class="custom-control-label my-auto" for="40">40代</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="50" name="age" class="custom-control-input align-middle"
                                            value="50">
                                        <label id="radio" class="custom-control-label my-auto" for="50">50代</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="60" name="age" class="custom-control-input align-middle"
                                            value="60">
                                        <label id="radio" class="custom-control-label my-auto" for="60">60代</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="70" name="age" class="custom-control-input align-middle"
                                            value="70">
                                        <label id="radio" class="custom-control-label my-auto" for="70">70代以上</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="null" name="age"
                                            class="custom-control-input align-middle" value='' checked>
                                        <label id="radio" class="custom-control-label my-auto" for="null">気にしない</label>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <br>

                                <div class="container">
                                    <div class="col-sm">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('登録する') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection