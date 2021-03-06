<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
   <div class="container">
         <a class="navbar-brand" href="{{ url('/posts') }}">
            <img src="{{asset('images/logo.png')}}" alt="Music×Search" height="50px">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
               <!-- Authentication Links -->
               @guest
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">
                           <img src="{{asset('images/login.png')}}" style="height:22px;">
                        </a>
                     </li>
                     @if (Route::has('register'))
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">
                              <img src="{{asset('images/sing-up.png')}}" style="height:22px;">
                           </a>
                        </li>
                     @endif
               @else
                     <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                           ようこそ{{ Auth::user()->name }}さん <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                           <form action="{{ route('users.show', Auth::id()) }}" method="post">
                              @csrf
                              <input class="dropdown-item" type="submit" value="{{ __('マイページ') }}">
                           </form>
                           <a class="dropdown-item" href="{{ route('users.chats', Auth::id()) }}">チャット</a>
                           <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                 {{ __('ログアウト') }}
                           </a>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                           </form>
                        </div>
                     </li>
               @endguest
            </ul>
         </div>
   </div>
</nav>