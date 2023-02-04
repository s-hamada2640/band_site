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

   th,td{
      text-align: center;
      height: 48px;
   }

   .mypost{
      background: #D1EBF1;
   }

   .scroll{
      overflow-y: scroll;
   } 

   .line-height{
      line-height: 1.5;
   }
@endsection

@section('content')
<main>
   <div class="container w-75 mt-5">
      <div style="font-size: 25px;">チャット</div>
      <hr>
      <div class="mx-auto w-100">
         <div class="scroll w-100 pb-3" style="height:500px;">
            <div id="scroll-inner">
               <div id="chat" class="w-100"></div>
            </div>
         </div>
         <form class="text-center mt-4" action="{{ route('chats.store') }}" method="post">
            @csrf
            <div class="w-75 d-flex justify-content-start mx-auto">
               <input class="form-control mr-3" type="text" name="message">
               <input class="btn btn-primary" type="submit" value='投稿'>
            </div>
            <input type="hidden" name="chatroom_id" value="{{$chatroom->id}}">
         </form>
      </div>
      <div class="article mb-4"></div>
      <hr>
      <a href="{{ route('users.chats', Auth::id()) }}">チャット一覧へ戻る</a>
   </div>
</main>
<script>
function delCheck() {
            var result = confirm("メッセージを削除してもよろしいですか？")
            if(result){
               alert("削除しました。");
            }
            else{
               return false;
            }
         }


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
               var created_at = replace.substr(0,16);
               var msg = json[i].message;
               var id = json[i].id;
               var user_id = json[i].user_id;
               //削除ボタン
               var delform = '<form action="/chats/'+id+'/destroy" method="post" class="d-flex align-items-end">'
                           +"<input type='submit' class='btn btn-link' value='削除' onClick='return delCheck()'>"
                           +"<input type='hidden' name='id' value='"+ id +"'>"
                           +"<input type='hidden' name='chatroom_id' value="+ "{{ $chat->chatroom_id }}" +">"
                           +"<input type='hidden' name='_token' value='{{ csrf_token() }}'>"
                           +"</form>";
               //自分の投稿
               var myPost ="<div class='mt-3 w-75 ml-auto mr-1'>" 
                              +"<div class='card mt-3 ml-1'>" 
                                 +"<div class='card-body pl-5 pb-1 d-flex bd-highlight mypost'>" 
                                    +'<p class="mr-auto p-1 bd-highlight text-break line-height">'+msg +'</p>'
                                    +delform
                                 +"</div>"
                              +"</div>"
                              +'<p class="text-muted p-1 bd-highlight line-height text-right">'+ created_at +'</p>'
                           +"</div>";
               //相手の投稿
               var otherPost ="<div class=' mb-4 mt-3 ml-1 w-75'>" 
                                 + "<div class='card mt-3 ml-1'>" 
                                    +"<div class='card-body pl-5 pb-1 d-flex bd-highlight'>" 
                                       +'<p class="mr-auto p-1 text-break line-height">'+msg +'</p>'
                                    +"</div>"
                                 +"</div>"
                                 +'<p class="text-muted p-1 bd-highlight text-right">'+ created_at +'</p>'
                             +"</div>";
               if ( user_id == "{{ Auth::id() }}"){
                  chat.innerHTML += myPost;
               }else{
                  chat.innerHTML += otherPost;
               }
               chat.scrollIntoView(false);
            }
         }, false);
      @endforeach
      }
      var handle = recvAJAX();
      var interval = setInterval(recvAJAX,30000);
      
</script>
@endsection