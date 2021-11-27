<h4 class="my-4">マイページ</h4>
<ul class="nav nav-tabs">
   <li class="nav-item nav-list">
      <a class="nav-link active" href="#">プロフィール</a>
   </li>
   <li class="nav-item nav-list">
      <form action="{{ route('users.myposts', Auth::id()) }}" method="post">
         @csrf
         <input class="nav-link btn-link" type="submit" value="投稿リスト" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
      </form>
   </li>
   <li class="nav-item nav-list">
      <form action="{{ route('users.liked', Auth::id()) }}" method="post">
         @csrf
         <input class="nav-link btn-link" type="submit" value="いいねした記事" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
      </form>
   </li>
   <li class="nav-item nav-list">
      <form action="{{ route('users.followed', Auth::id()) }}" method="post">
         @csrf
         <input class="nav-link btn-link" type="submit" value="フォロー" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
      </form>
   </li>
   <li class="nav-item nav-list">
      <form action="{{ route('users.follower', Auth::id()) }}" method="post">
         @csrf
         <input class="nav-link btn-link" type="submit" value="フォロワー" style="background-color:#F7FAFC; border-bottom: 1px solid #DEE2E6;">
      </form>
   </li>
</ul>