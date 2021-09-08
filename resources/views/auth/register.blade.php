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
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('ハンドルネーム') }}</label><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- メールアドレス -->
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('メールアドレス') }}</label><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- パスワード -->
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('パスワード') }}</label><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- パスワード確認用 -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('パスワード確認用') }}</label><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- 活動地域 -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('活動地域') }}</label><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>

                            <div class="col-md-7">
                                <input id="password-confirm" type="text" class="form-control" name="activity_area" value="{{ old('activity_area') }}" required autofocus>
                            </div>
                                @error('activity_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- 演奏パート -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('演奏パート') }}</label><br><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>

                            <div class="col-md-7">
                                <input id="password-confirm" type="text" class="form-control" name="my_part" value="{{ old('my_part') }}" required autofocus>
                            </div>
                                @error('activity_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- 活動レベル -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('活動レベル') }}</label><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>

                            <div class="col-md-7">
                                <input id="password-confirm" type="text" class="form-control" name="activity_level" value="{{ old('activity_level') }}" required autofocus>
                            </div>
                                @error('activity_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- 自分のレベル感 -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('自分のレベル感') }}</label><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>

                            <div class="col-md-7">
                                <input id="password-confirm" type="text" class="form-control" name="my_level" value="{{ old('my_level') }}" required autofocus>
                            </div>
                                @error('activity_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- 演奏ジャンル -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('演奏ジャンル') }}</label><p class="my-auto text-danger text-center rounded" style="width:16px;">※</p>
                            
                            <div class="col-md-7">
                                <input id="password-confirm" type="text" class="form-control" name="genre" value="{{ old('genre') }}" autofocus>
                            </div>
                                @error('activity_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <!-- 好きなアーティスト -->
                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-3  col-form-label text-md-right" style="margin-left: 16px;">{{ __('好きなアーティスト') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="text" class="form-control" name="favorite_artist" value="{{ old('favorite_artist') }}" autofocus>
                            </div>
                                @error('activity_area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <!-- 性別 -->
                        <div class="form-group row">
                            <label for="inlineFormCustomSelect" class="col-md-3 col-form-label text-md-right" style="margin-left: 16px;">{{ __('性別') }}</label>

                            <div class="col-md-7">
                                <select name="sex" class="form-control" id="exampleFormControlSelect1">
                                    <option selected>選択</option>
                                    <option value="男性">男性</option>
                                    <option value="女性">女性</option>
                                </select>
                            </div>
                        </div>

                        <!-- 年齢 -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right" style="margin-left: 16px;">{{ __('年齢') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="number" class="form-control" name="age" value="{{ old('name') }}" autofocus>
                            </div>
                        </div>

                        <!-- 活動時間帯 -->
                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-3  col-form-label text-md-right" style="margin-left: 16px;">{{ __('活動時間帯') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="text" class="form-control" name="activity_timezone" value="{{ old('name') }}" autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('登録する') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
