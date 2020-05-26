<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="{{ url('/') }}">
                AppLogo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <form action="{{route('search')}}" class="form-inline" method="GET">
                    {{ csrf_field() }}
                        <input name="search" id="search" class="form-control" type="text" placeholder="Teclea que estas buscando" aria-label="Search" />
                        <button  class="btn navbtn" type="submit"><img class="navimage" src="https://cdn4.iconfinder.com/data/icons/pictype-free-vector-icons/16/search-512.png" /></button>
                    </form>
                    <li class="nav-item active navpos">
                        <a class="nav-link navcenter" href="{{route('home')}}">Inicio</a>
                    </li>
                    <li class="nav-item active navpos">
                        <a class="nav-link navcenter" href="{{route('course.index')}}">Biblioteca</a>
                    </li>
                    <li class="nav-item active navpos">
                        <a class="nav-link navcenter" href="#">Preguntas frecuentes</a>
                    </li>
                    @guest
                    @if (Route::has('register'))
                    @endif
                    @else
                    <li class="nav-item active navpos">
                        <a class="nav-link navcenter" href="{{route('favorites.show', Auth::user()->id)}}">
                            <img class="navimage4" src="https://cdn4.iconfinder.com/data/icons/ionicons/512/icon-ios7-heart-outline-512.png" />
                        </a>
                    </li>
                    @endguest
                    <li class="nav-item active navpos">
                    <a class="nav-link navcenter" href="{{'shoppingcart'}}">
                            <img class="navimage2" src="https://media.istockphoto.com/vectors/shopping-cart-icon-vector-id639201180" />
                        </a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="btn navbtnlogin" href="{{ route('login') }}">{{ __('Inicia sesión') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="btn navbtnregister" href="{{ route('Registeruser.create') }}">{{ __('Únete ahora') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="{{route('profile.show', Auth::user()->id)}}" class="dropdown-item">Mi perfil</a>
                            <a href="{{route('mycourses', Auth::user()->id)}}" class="dropdown-item">Mis cursos</a>
                            <a href="{{route('course.create')}}" class="dropdown-item">Agregar curso</a>
                            <a href="{{route('uploadcourses')}}" class="dropdown-item">Administrar cursos</a>
                        </div>
                    </li>
                    @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>

</html>