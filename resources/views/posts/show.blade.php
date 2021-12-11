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

.good {
background-color: rgb(0, 199, 221);
height: 20px;
width: 80px;
color: #fff;
font-weight: bold;
border: none;
cursor:pointer;
}

.goodyet {
background-color: #fff;
height: 20px;
width: 80px;
color: rgb(0, 199, 221);
font-weight: bold;
border: 1px solid rgb(0, 199, 221);
cursor:pointer;
}

th,td{
text-align: center;
height: 48px;
}
@endsection

@section('content')
<main>
    <div class="container w-75 mt-5">
        <div style="font-size: 25px;">記事詳細</div>
        <!-- 削除ボタン -->
      <form method="post" action="{{route('destroy',['id'=> $post->id])}}" id="delete_{{$post->id}}">
         @csrf
         <button type="submit" class="btn btn-danger" onclick="deletePost(this);">削除する</button>
      </form>
        <hr>
        <div class="mx-auto w-50">
            <div class="mt-4">
                <h3 class="mb-4">投稿タイトル：{{ $post->title }}</h3>

            </div>
            <p class="mb-4">投稿者 : {{ $post->user->name }}</p>
            <p>記事の内容：</p>
            <p>{{ $post->message }}</p>
            <br>
            <h5 class="my-3">[基本データ]</h5>
            <div class="ml-3">
                <p>活動地域 : {{ $post->activity_area }}</p>
                <p>活動レベル : {{ $post->activity_level }}</p>
                <p>バンドレベル : {{ $post->band_level }}</p>
                <p>ジャンル : {{ $post->genre }}</p>
                <p>好きなアーティスト : {{ $post->favorite_artist }}</p>
                <p>活動時間帯： {{$post->activity_timezone}}</p>
            </div>
            <h5 class="mb-3 mt-4">[募集メンバー]</h5>
            <div class="ml-3">
                <p>[募集パート] : {{ $post->recruitment_part }}</p>
                <p>[求めるレベル感] : {{ $post->required_level }}</p>
                <p>[性別] : {{ $post->sex }} </p>
                @if($post->age == null)
                <p>[年齢] : 気にしない</p>
                @else
                <p>[年齢] : {{ $post->age }}代</p>
                @endif
            </div>
        </div>
        <div class="RightJustified mb-3">
            <p>投稿日時： {{ $post->created_at }}</p>
            @if($matching == null)
            @if($post->users()->where('user_id', Auth::id())->exists())
            <form action="{{ route('unfavorites', $post) }}" method="post">
                @csrf
                <button type="submit" class="good">いいね</button>
                <span class="ml-2"
                    style="line-height: 20px; font-size: 14px;">{{ $post->users->unique()->count() }}</span>
            </form>
            @else
            @if($post->user_id == Auth::id())
            <button class="goodyet">いいね</button>
            <span class="ml-2 " style="line-height: 20px; font-size: 14px;">{{ $post->users->unique()->count() }}</span>
            @else
            <form action="{{ route('favorites', $post) }}" method="post">
                @csrf
                <button type="submit" class="goodyet">いいね</button>
                <span class="ml-2"
                    style="line-height: 20px; font-size: 14px;">{{ $post->users->unique()->count() }}</span>
            </form>
            @endif
            @endif
            @endif
        </div>
        <div class="article mb-4">
            <hr>
        </div>
        <a href="{{ route('posts.index') }}">記事一覧へ戻る</a>

        <div class="container w-75">
            @if($matching != null)
            <!-- マッチングした場合 -->
            <p class="text-center">マッチング成立!</p>
            <p class="text-center">マッチングしたユーザー</p>
            <table class="table">
                <thead>
                    <tr class="row">
                        @if($post->user_id == Auth::id())
                        <th scope="col" class="col-4">ユーザー名</th>
                        <th class="col-4">パート</th>
                        <th class="col-4">メールアドレス</th>
                        @else
                        <th scope="col" class="col-6">ユーザー名</th>
                        <th class="col-6">パート</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    <tr class="row">
                        @if($post->user_id == Auth::id())
                        <td class="col-4">
                            <form class="d-inline" action="{{ route('users.show',$matching->id) }}" method="post">
                                @csrf
                                <input class="btn-link pt-2" type="submit" value="{{ $matching->name }}"
                                    style="background-color:#F7FAFC; border:none;">
                                <input type="hidden" value="{{$post->id}}" name="id">
                            </form>
                            <span style="font-size: 14px;">（{{ $matching->age }}歳/{{ $matching->sex }}）</span>
                        </td>
                        <td class="col-4" style="font-size: 15px;">{{ $matching->my_part }}</td>
                        <td class="col-4">{{ $matching->email }}</td>
                        @else
                        <td class="col-6">
                            <form class="d-inline" action="{{ route('users.show',$matching->id) }}" method="post">
                                @csrf
                                <input class="btn-link pt-2" type="submit" value="{{ $matching->name }}"
                                    style="background-color:#F7FAFC; border:none;">
                                <input type="hidden" value="{{$post->id}}" name="id">
                            </form>
                            <span style="font-size: 14px;">（{{ $matching->age }}歳/{{ $matching->sex }}）</span>
                        </td>
                        <td class="col-6" style="font-size: 15px;">{{ $matching->my_part }}</td>
                        @endif
                    </tr>
                </tbody>
            </table>
            @else
            <!-- 通常時 -->
            <p class="text-center mt-5">いいねしたユーザー</p>
            <table class="table">
                <thead>
                    <tr class="row">
                        @if($post->user_id == Auth::id())
                        <th scope="col" class="col-5">ユーザー名</th>
                        <th class="col-5">パート</th>
                        <th scope="col" class="col-2"></th>
                        @else
                        <th scope="col" class="col-6">ユーザー名</th>
                        <th class="col-6">パート</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($post->users as $user)
                    <tr class="row">
                        @if($post->user_id == Auth::id())
                        <td class="col-5">
                            <form class="d-inline" action="{{ route('users.show',$user) }}" method="post">
                                @csrf
                                <input class="btn-link pt-2" type="submit" value="{{ $user->name }}"
                                    style="background-color:#F7FAFC; border:none;">
                                <input type="hidden" value="{{$post->id}}" name="id">
                            </form>
                            <span style="font-size: 14px;">（{{ $user->age }}歳/{{ $user->sex }}）</span>
                        </td>
                        <td class="col-5" style="font-size: 15px; padding-top:18px;">{{ $user->my_part }}</td>
                        <td class="col-2">
                            <form action="{{ route('matching', $post) }}" method="post">
                                @csrf
                                <button type="submit" class="goodyet"
                                    style="font-size:12px; padding-top:0;">いいね</button>
                                <input type="hidden" value="{{$user->id}}" name="user_id">
                                <input type="hidden" value="{{$post->id}}" name="post_id">
                            </form>
                        </td>
                        @else
                        <td class="col-6">
                            <form class="d-inline" action="{{ route('users.show',$user) }}" method="post">
                                @csrf
                                <input class="btn-link pt-2" type="submit" value="{{ $user->name }}"
                                    style="background-color:#F7FAFC; border:none;">
                                <input type="hidden" value="{{$post->id}}" name="id">
                            </form>
                            <span style="font-size: 14px;">（{{ $user->age }}歳/{{ $user->sex }}）</span>
                        </td>
                        <td class="col-6" style="font-size: 15px;">{{ $user->my_part }}</td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</main>
<script>
function deletePost(e){
   'use strict';
   if(confirm('本当に削除してよいですか')){
      document.getElementById('delete_' + e.dataset.id).submit();
   }

}
</script>

@endsection