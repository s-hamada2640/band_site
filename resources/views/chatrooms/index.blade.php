@extends('layouts.app')

@section('css')
   .lists {
      height: 60px;
   }
@endsection

@section('content')
   <div class="container">
      @if(isset($notExist))
         <p>{{ $notExist }}</p>
      @else
         <ul class="list-group list-group-flush w-50 mx-auto">
            @foreach($mutuals as $mutual)
            <!-- myチャットルームが一つも無い場合 -->
               @if(Illuminate\Support\Facades\DB::table('chatroom_user')->where('user_id',Auth::id())->doesntExist())
               <li class="list-group-item lists">
                  <div class="d-flex justify-content-between">
                     <p class="my-auto">{{ $mutual->to_user->name }}</p>
                     <form action="{{route('chatroom.store', $mutual->to_user->id)}}" method="post">
                        @csrf
                        <input type="submit" value="会話を開始する">
                     </form>
                  </div>
               </li> 
               @endif
               @isset($chatrooms)
               <!-- チャットしたい相手とのチャットルームが無い場合 -->
                  @if(in_array($mutual->to_user->id,$started) == false)
                  <li class="list-group-item lists">
                     <div class="d-flex justify-content-between">
                        <p class="my-auto">{{ $mutual->to_user->name }}</p>
                        <form action="{{route('chatroom.store', $mutual->to_user->id)}}" method="post">
                           @csrf
                           <input class="btn btn-info text-light my-auto" type="submit" value="会話を開始する">
                        </form>
                     </div>
                  </li>
                  @endif
                  @foreach($chatrooms as $chatroom)
                  <!-- チャットルームが既にある場合 -->
                     @if($mutual->to_userid == $chatroom->user_id)
                     <li class="list-group-item lists">
                        <div class="d-flex justify-content-between pt-2">
                           <p class="">{{ $mutual->to_user->name }}</p>
                           <a href="{{ route('chats.show', $chatroom->chatroom_id) }}" class="mr-2 h-100" >チャットルームへ</a>
                        </div>
                     </li>
                     @endif
                  @endforeach
               @endisset
            @endforeach
         </ul>
      @endif
   </div>
@endsection