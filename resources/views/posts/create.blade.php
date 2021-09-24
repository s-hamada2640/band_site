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
   
   h2{
      clear: left;
      font-size: 18px;
   }

   button {
      background-color: Transparent;
      border: none;
      cursor:pointer;
   }

   span {
      font-size: 15px;
   }
@endsection

@section('content')
<main class="container"> 
   <h2 class="mt-5">記事を投稿する</h2>
   <hr>
   <br>
   <div class="justify-content-center">
      <div class="col-md-10 mx-auto">
         <form action="{{route('posts.index')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
               <input type="hidden" name="user_id" value="{{ Auth::id() }}">
               <lavel for="title" class="col-3 col-form-label text-md-right"><h4><span class="text-danger">※</span> 投稿タイトル：</h4></lavel>
               <div class="col-8">
                  <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
               </div>
            </div>
            <div class="form-group row mb-4">
               <lavel for="message" class="col-3 col-form-label text-md-right"><span class="text-danger">※</span>記事の内容：</lavel>
               <div class="col-8">
                  <textarea style="height:100px;" type="textarea" class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required autocomplete="message" autofocus></textarea>
               </div>
            </div>
            <h4 class="mb-4" style="margin-left:100px;">[基本データ]</h4>
            <div class=" form-group row">
               <label for="activity_area" class="col-3 col-form-label text-md-right"><h5><span class="text-danger">※</span> 活動地域：</h5></label>
               <div class="col-9">
                  <!-- 北海道 1-->
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="hokkaido" name="activity_area" class="custom-control-input" value="北海道" required>
                     <label id="radio" class="custom-control-label" for="hokkaido">北海道</label>
                  </div>

                  <!-- 東北 6-->
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="aomori" name="activity_area" class="custom-control-input" value="青森県">
                     <label id="radio" class="custom-control-label" for="aomori">青森県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="iwate" name="activity_area" class="custom-control-input" value="岩手県">
                     <label id="radio" class="custom-control-label" for="iwate">岩手県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="miyagi" name="activity_area" class="custom-control-input" value="宮城県">
                     <label id="radio" class="custom-control-label" for="miyagi">宮城県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="akita" name="activity_area" class="custom-control-input" value="秋田県">
                     <label id="radio" class="custom-control-label" for="akita">秋田県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="yamagata" name="activity_area" class="custom-control-input" value="山形県">
                     <label id="radio" class="custom-control-label" for="yamagata">山形県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="fukushima" name="activity_area" class="custom-control-input" value="福島県">
                     <label id="radio" class="custom-control-label" for="fukushima">福島県</label>
                  </div>

                  <!-- 関東 7-->
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="ibaraki" name="activity_area" class="custom-control-input" value="茨城県">
                     <label id="radio" class="custom-control-label" for="ibaraki">茨城県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="tochigi" name="activity_area" class="custom-control-input" value="栃木県">
                     <label id="radio" class="custom-control-label" for="tochigi">栃木県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="gunma" name="activity_area" class="custom-control-input" value="群馬県">
                     <label id="radio" class="custom-control-label" for="gunma">群馬県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="saitama" name="activity_area" class="custom-control-input" value="埼玉県">
                     <label id="radio" class="custom-control-label" for="saitama">埼玉県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="chiba" name="activity_area" class="custom-control-input" value="千葉県">
                     <label id="radio" class="custom-control-label" for="chiba">千葉県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="tokyo" name="activity_area" class="custom-control-input" value="東京都">
                     <label id="radio" class="custom-control-label" for="tokyo">東京都</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="kanagawa" name="activity_area" class="custom-control-input" value="神奈川県">
                     <label id="radio" class="custom-control-label" for="kanagawa">神奈川県</label>
                  </div>

                  <!-- 中部 9-->
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="nigata" name="activity_area" class="custom-control-input" value="新潟県">
                     <label id="radio" class="custom-control-label" for="nigata">新潟県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="toyama" name="activity_area" class="custom-control-input" value="富山県">
                     <label id="radio" class="custom-control-label" for="toyama">富山県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="fukui" name="activity_area" class="custom-control-input" value="福井県">
                     <label id="radio" class="custom-control-label" for="fukui">福井県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="ishikawa" name="activity_area" class="custom-control-input" value="石川県">
                     <label id="radio" class="custom-control-label" for="ishikawa">石川県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="yamanashi" name="activity_area" class="custom-control-input" value="山梨県">
                     <label id="radio" class="custom-control-label" for="yamanashi">山梨県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="nagano" name="activity_area" class="custom-control-input" value="長野県">
                     <label id="radio" class="custom-control-label" for="nagano">長野県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="gifu" name="activity_area" class="custom-control-input" value="岐阜県">
                     <label id="radio" class="custom-control-label" for="gifu">岐阜県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="shizuoka" name="activity_area" class="custom-control-input" value="静岡県">
                     <label id="radio" class="custom-control-label" for="shizuoka">静岡県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="aichi" name="activity_area" class="custom-control-input" value="愛知県">
                     <label id="radio" class="custom-control-label" for="aichi">愛知県</label>
                  </div>

                  <!-- 近畿 7-->
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="mie" name="activity_area" class="custom-control-input" value="三重県">
                     <label id="radio" class="custom-control-label" for="mie">三重県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="shiga" name="activity_area" class="custom-control-input" value="滋賀県">
                     <label id="radio" class="custom-control-label" for="shiga">滋賀県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="kyoto" name="activity_area" class="custom-control-input" value="京都府">
                     <label id="radio" class="custom-control-label" for="kyoto">京都府</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="osaka" name="activity_area" class="custom-control-input" value="大阪府">
                     <label id="radio" class="custom-control-label" for="osaka">大阪府</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="hyogo" name="activity_area" class="custom-control-input" value="兵庫県">
                     <label id="radio" class="custom-control-label" for="hyogo">兵庫県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="nara" name="activity_area" class="custom-control-input" value="奈良県">
                     <label id="radio" class="custom-control-label" for="nara">奈良県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="wakayama" name="activity_area" class="custom-control-input" value="和歌山県">
                     <label id="radio" class="custom-control-label" for="wakayama">和歌山県</label>
                  </div>

                  <!-- 中国 5-->
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="tottori" name="activity_area" class="custom-control-input" value="鳥取県">
                     <label id="radio" class="custom-control-label" for="tottori">鳥取県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="shimane" name="activity_area" class="custom-control-input" value="島根県">
                     <label id="radio" class="custom-control-label" for="shimane">島根県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="okamaya" name="activity_area" class="custom-control-input" value="岡山県">
                     <label id="radio" class="custom-control-label" for="okamaya">岡山県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="hiroshima" name="activity_area" class="custom-control-input" value="広島県">
                     <label id="radio" class="custom-control-label" for="hiroshima">広島県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="yamaguchi" name="activity_area" class="custom-control-input" value="山口県">
                     <label id="radio" class="custom-control-label" for="yamaguchi">山口県</label>
                  </div>

                  <!-- 四国 4-->
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="tokushima" name="activity_area" class="custom-control-input" value="徳島県">
                     <label id="radio" class="custom-control-label" for="tokushima">徳島県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="kagawa" name="activity_area" class="custom-control-input" value="香川県">
                     <label id="radio" class="custom-control-label" for="kagawa">香川県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="ehime" name="activity_area" class="custom-control-input" value="愛媛県">
                     <label id="radio" class="custom-control-label" for="ehime">愛媛県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="kouchi" name="activity_area" class="custom-control-input" value="高知県">
                     <label id="radio" class="custom-control-label" for="kouchi">高知県</label>
                  </div>

                  <!-- 九州 8-->
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="fukuoka" name="activity_area" class="custom-control-input" value="福岡県">
                     <label id="radio" class="custom-control-label" for="fukuoka">福岡県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="saga" name="activity_area" class="custom-control-input" value="佐賀県">
                     <label id="radio" class="custom-control-label" for="saga">佐賀県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="nagasaki" name="activity_area" class="custom-control-input" value="長崎県">
                     <label id="radio" class="custom-control-label" for="nagasaki">長崎県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="kumamoto" name="activity_area" class="custom-control-input" value="熊本県">
                     <label id="radio" class="custom-control-label" for="kumamoto">熊本県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="ooita" name="activity_area" class="custom-control-input" value="大分県">
                     <label id="radio" class="custom-control-label" for="ooita">大分県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="miyazaki" name="activity_area" class="custom-control-input" value="宮崎県">
                     <label id="radio" class="custom-control-label" for="miyazaki">宮崎県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="kagosima" name="activity_area" class="custom-control-input" value="鹿児島県">
                     <label id="radio" class="custom-control-label" for="kagosima">鹿児島県</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="okinawa" name="activity_area" class="custom-control-input" value="沖縄県">
                     <label id="radio" class="custom-control-label" for="okinawa">沖縄県</label>
                  </div>
               </div>
            </div>
            <br>
            <div class="form-group row mb-3">
               <lavel for="band_level" class="col-3 col-form-label text-md-right"><h5><span class="text-danger">※</span> バンドのレベル感：</h5></lavel>
               <div class="col-8">
                  <input type="text" class="form-control @error('band_level') is-invalid @enderror" name="band_level" value="{{ old('band_level') }}" required autocomplete="band_level" autofocus>
               </div>
            </div>
            <div class="form-group row mb-3">
               <lavel for="activity_level" class="col-3 col-form-label text-md-right"><h5><span class="text-danger">※</span> 活動レベル：</h5></lavel>
               <div class="col-8">
                  <input type="text" class="form-control @error('activity_level') is-invalid @enderror" name="activity_level" value="{{ old('activity_level') }}" required autocomplete="activity_level" autofocus>
               </div>
            </div>
            <div class="form-group row mb-3">
               <lavel for="genre" class="col-3 col-form-label text-md-right"><h5><span class="text-danger">※</span> ジャンル：</h5></lavel>
               <div class="col-8">
                  <input type="text" class="form-control @error('genre') is-invalid @enderror" name="genre" value="{{ old('genre') }}" required autocomplete="genre" autofocus>
               </div>
            </div>
            <div class="form-group row mb-3">
               <lavel for="activity_timezone" class="col-3 col-form-label text-md-right"><h5>活動時間帯：</h5></lavel>
               <div class="col-8">
                  <input type="text" class="form-control @error('activity_timezone') is-invalid @enderror" name="activity_timezone" value="{{ old('activity_timezone') }}" autocomplete="activity_timezone" autofocus>
               </div>
            </div>
            <div class="form-group row mb-3">
               <lavel for="favorite_artist" class="col-3 col-form-label text-md-right"><h5>好きなアーティスト：</h5></lavel>
               <div class="col-8">
                  <input type="text" class="form-control @error('favorite_artist') is-invalid @enderror" name="favorite_artist" value="{{ old('favorite_artist') }}" autocomplete="favorite_artist" autofocus>
               </div>
            </div>
            <br>
            <h4 class="mb-4" style="margin-left:100px;">[募集メンバー]</h4>
            <div class="form-group row mb-2">
               <lavel for="sex" class="col-3 col-form-label text-md-right"><h6 class="my-auto">[性別]</h6></lavel>
                  <div class="custom-control custom-radio custom-control-inline ml-3">
                     <input type="radio" id="man" name="sex" class="custom-control-input align-middle" value="男性">
                     <label id="radio" class="custom-control-label my-auto" for="man">男性</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="woman" name="sex" class="custom-control-input align-middle" value="女性">
                     <label id="radio" class="custom-control-label my-auto" for="woman">女性</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                     <input type="radio" id="either" name="sex" class="custom-control-input align-middle" value="気にしない" checked>
                     <label id="radio" class="custom-control-label my-auto" for="either">気にしない</label>
                  </div>
            </div>
            <div class="form-group row mb-2">
               <lavel for="age" class="col-3 col-form-label text-md-right"><h6>[年齢]</h6></lavel>
               <div class="custom-control custom-radio custom-control-inline ml-3">
                  <input type="radio" id="10" name="age" class="custom-control-input align-middle" value="10">
                  <label id="radio" class="custom-control-label my-auto" for="10">10代</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="20" name="age" class="custom-control-input align-middle" value="20">
                  <label id="radio" class="custom-control-label my-auto" for="20">20代</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="30" name="age" class="custom-control-input align-middle" value="30">
                  <label id="radio" class="custom-control-label my-auto" for="30">30代</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="40" name="age" class="custom-control-input align-middle" value="40">
                  <label id="radio" class="custom-control-label my-auto" for="40">40代</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="50" name="age" class="custom-control-input align-middle" value="50">
                  <label id="radio" class="custom-control-label my-auto" for="50">50代</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="60" name="age" class="custom-control-input align-middle" value="60">
                  <label id="radio" class="custom-control-label my-auto" for="60">60代</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="70" name="age" class="custom-control-input align-middle" value="70">
                  <label id="radio" class="custom-control-label my-auto" for="70">70代以上</label>
               </div>
               <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="null" name="age" class="custom-control-input align-middle" value='' checked>
                  <label id="radio" class="custom-control-label my-auto" for="null">気にしない</label>
               </div>
            </div>
            <div class="form-group row mb-2">
               <lavel for="recruitment_part" class="col-3 col-form-label text-md-right"><h6><span class="text-danger">※</span> [募集パート]</h6></lavel>
               <div class="col-8">
                  <input type="text" class="form-control @error('recruitment_part') is-invalid @enderror" name="recruitment_part" value="{{ old('recruitment_part') }}" required autocomplete="recruitment_part" autofocus>
               </div>
            </div>
            <div class="form-group row mb-2">
               <lavel for="required_level" class="col-3 col-form-label text-md-right"><h6><span class="text-danger">※</span> [求めるレベル感]</h6></lavel>
               <div class="col-8">
                  <input type="text" class="form-control @error('required_level') is-invalid @enderror" name="required_level" value="{{ old('required_level') }}" required autocomplete="required_level" autofocus>
               </div>
            </div>
            <div class="text-center mt-5">
               <button type="submit"><img src="/images/post.png" alt="投稿" height="25px"></button>
            </div>
         </form>      
      </div>
   </div>
   
</main>
@endsection
