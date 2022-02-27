@extends('layouts.app')

@section('content')
   <div class="container">
      @foreach($mutuals as $mutual)
      <!-- チャットルームが無い場合 -->
         @if(Illuminate\Support\Facades\DB::table('chatroom_user')->where('user_id',$mutual->to_userid)->doesntExist())
            {{ $mutual->to_user->name }}
            <form action="{{route('chatroom.store', $mutual->to_user->id)}}" method="post">
               @csrf
               <input type="submit" value="会話を開始する">
            </form>
         @endif
         <!-- チャットルームが既にある場合 -->
         @foreach($chatrooms as $chatroom)
            @if($mutual->to_userid == $chatroom->user_id)
               {{ $mutual->to_user->name }}
               <a href="{{ route('chats.show', $chatroom->chatroom_id) }}">チャットルームへ</a><br>
            @endif
         @endforeach
            
      @endforeach
   </div>
@endsection