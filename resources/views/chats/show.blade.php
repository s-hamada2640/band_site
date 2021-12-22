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
      <div style="font-size: 25px;">チャット</div>
      <hr>
      <div class="mx-auto w-50">
         <div id="chat" class=""></div>
         <form action="{{ route('chats.store') }}" method="post">
            @csrf
            <input type="submit" value='投稿'>
            <input type="text" name="message">
            <input type="hidden" name="chatroom_id" value="1">
         </form>
      </div>
      <div class="article mb-4"></div>
      <hr>
      <a href="{{ route('posts.index') }}">記事一覧へ戻る</a>
   </div>
</main>
<script>
function recvAJAX() {
      @foreach($chats as $chat)
         var ajax = new XMLHttpRequest();
         ajax.open("get", "/chats/{{ $chat->chatroom_id }}/json");
         ajax.responseType = "json";
         ajax.send(); // 通信させます。
         ajax.addEventListener("load", function(){ // loadイベントを登録します。
            var chat = document.getElementById("chat");
            var json = this.response;
            chat.innerHTML = "";
            for(var i = 0; i < json.length; i++) {
               var str = json[i].created_at;
               var replace = str.replace('T',' ');
               var created_at = replace.substr(0,19);
               var msg = json[i].message;
               var id = json[i].id;
               var form = '<form action="/comments/'+id+'/delete" method="post">'
                           +"<input type='submit' class='btn btn-link' value='削除' onClick='return delCheck()'>"
                           +"<input type='hidden' name='id' value='"+ id +"'>"
                           +"<input type='hidden' name='playlist_id' value="+ "{{ $chat->id }}" +">"
                           +"<input type='hidden' name='_token' value='{{ csrf_token() }}'>"
                           +"</form>";
               var myPost= "<div class='card mb-2 mt-3 w-75 mx-auto'>" 
                                 +"<div class='card-body pl-5 pb-1 d-flex bd-highlight'>" 
                                    +'<p class="mr-auto p-1 bd-highlight">'+msg +'</p>'
                                    +'<p class="p-1 bd-highlight">'+ name +' /</p>'
                                    +'<p class="text-muted p-1 bd-highlight">'+ created_at +'</p>'
                                    +form
                                 +"</div>"
                              +"</div>";
               var otherPost = "<div class='card mb-2 mt-3 w-75 mx-auto'>" 
                                 +"<div class='card-body pl-5 pb-1 d-flex bd-highlight'>" 
                                    +'<p class="mr-auto p-1 bd-highlight">'+msg +'</p>'
                                    +'<p class="p-1 bd-highlight">'+ name +' /</p>'
                                    +'<p class="text-muted p-1 bd-highlight">'+ created_at +'</p>'
                                 +"</div>"
                              +"</div>";         
               if ("{{ Auth::user()->name }}" == name){
                  chat.innerHTML += myPost;
               }else{
                  chat.innerHTML += otherPost;
               }
            }
         }, false);
      @endforeach
      }
      var handle = setInterval(recvAJAX,200);
</script>
@endsection