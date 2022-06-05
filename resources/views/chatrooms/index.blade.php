@extends('layouts.app')

@section('content')
   <div class="container">
      @if(isset($notExist))
         <p>{{ $notExist }}</p>
      @else
         @foreach($mutuals as $mutual)
         <!-- myチャットルームが一つも無い場合 -->
            @if(Illuminate\Support\Facades\DB::table('chatroom_user')->where('user_id',Auth::id())->doesntExist())
               {{ $mutual->to_user->name }}
               <form action="{{route('chatroom.store', $mutual->to_user->id)}}" method="post">
                  @csrf
                  <input type="submit" value="会話を開始する">
               </form>  
            @endif
            @isset($chatrooms)
            <!-- チャットしたい相手とのチャットルームが無い場合 -->
               @if(in_array($mutual->to_user->id,$started) == false)
                  {{ $mutual->to_user->name }}
                  <form action="{{route('chatroom.store', $mutual->to_user->id)}}" method="post">
                     @csrf
                     <input type="submit" value="会話を開始する">
                  </form>
               @endif
               @foreach($chatrooms as $chatroom)
               <!-- チャットルームが既にある場合 -->
                  @if($mutual->to_userid == $chatroom->user_id)
                  {{ $mutual->to_user->name }}
                     <a href="{{ route('chats.show', $chatroom->chatroom_id) }}">チャットルームへ</a><br>
                  @endif
               @endforeach
            @endisset
               
         @endforeach
      @endif
   </div>
@endsection