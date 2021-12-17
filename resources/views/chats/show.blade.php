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
      
      <div class="container w-75">
         
      </div>
   </div>
</main>
@endsection