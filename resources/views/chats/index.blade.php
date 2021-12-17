@extends('layouts.app')
@section('content')
<form action="{{route('chats.showPost',1)}}" method="post">
   @csrf
   <input type="submit" value="showページへ">
</form>
@endsection