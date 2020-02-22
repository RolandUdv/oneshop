{{-- <nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo">{{config('app.name', 'Brand')}}</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ url('/login') }}">Log In</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav> --}}


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="#" width="30" height="30" class="d-inline-block align-top" alt="">
        {{config('app.name', 'Brand')}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            {{-- <li class="nav-item active">
                <a class="nav-link" href="{{ url('/login') }}">Log In <span class="sr-only">(current)</span></a>
            </li> --}}
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
            {{-- <li class="nav-item dropdown"> --}}
                <li class="nav-item">    
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                </li>
                    {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a> --}}

                    {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}</a>
                        </li>
                        {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a> --}}

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    {{-- </div> --}}
                {{-- </li> --}}
            @endguest
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/register') }}">Register</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Logout') }}</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form> --}}
            {{-- @guest --}}
            
            {{-- @if (Route::has('logout')) --}}
            {{-- @if(\Auth::user()->isStaff == '1')  --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/admin') }}">Admin</a>
            </li>
            
            {{-- @else --}}
            {{-- @endif --}}
            {{-- @endguest --}}
        {{-- </ul>
    </div>
</nav> --}}





{{-- 
@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}