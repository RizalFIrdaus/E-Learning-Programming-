<header class="header">
    <nav class="navbar navbar-expand-lg py-3 bg-se;f">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold logo">E-Learning Programming</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>        
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="/" class="nav-link text-uppercase font-weight-bold scroll home">Home</a></li>
                    @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link login" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif 
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link register" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
            <li class="nav-item"><a href="{{route('latihan')}}" class="nav-link text-uppercase font-weight-bold">Latihan</a></li>
            <li class="nav-item"><a href="{{route('leaderboard')}}" class="nav-link text-uppercase font-weight-bold">Leaderboard</a></li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle text-uppercase" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: -8px">
                    @if (Auth::user()->provider_id == null)
                    <img src="{{'/upload/avatars/'.Auth::user()->photo}}" class="rounded-circle" width="50px"> 
                    @else
                    <img src="{{Auth::user()->avatar}}" class="rounded-circle" width="50px"> 
                    @endif
                    {{Auth::user()->name}}
                    <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        @if (Auth::user()->email == "admin@gmail.com")
                        <a style="color:#000 !important;" class="dropdown-item" href="{{route('materi_html')}}"><i class="fas fa-users-cog mr-2"></i>Admin Panel</a>
                        @else
                        <a style="color:#000 !important;" class="dropdown-item disabled" href="{{route('materi_html')}}"><i class="fas fa-users-cog mr-2"></i>Admin Panel</a>
                        @endif
                    </li>
                    <li><a style="color:#000 !important;" class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt mr-3" ></i>Logout</a></li>
                </ul>             
            </li>
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
            @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>