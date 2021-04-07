<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wonderful Journey</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script>
        function goBack() {
          window.history.back();
        }
    </script>

</head>
<body>
    <div id="app">
        <div class="jumbotron jumbotron-fluid" style="height: 230px; margin-bottom: 0px;">
            <div class="container-fluid">
                <center>
                    <h1 class="display-4"><b>Wonderful Journey</b></h1>
                    <p class="lead">Blog of Indonesia Tourism</p>
                    <hr class="my-4">
                </center>
            </div>
        </div>

        <div class="container">
            <nav class="navbar navbar-expand-md  navbar-dark bg-dark">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                   Home
                                </a>
                            </li>
                             <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" >
                                    Category
                                 </a>

                                <ul class="dropdown-menu" aria-labelledby="">    
                                    @foreach(\App\Category::get() as $c )
                                    <li>
                                        <a class="dropdown-item" href="{{url('/category/'.$c->id)}}">
                                            {{$c->name}}
                                        </a>
                                    </li>
                                    @endforeach
                                    
                                </ul>


                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                  About Us
                                </a>
                            </li>
                            @else
                            @if(Auth::user()->role == 'Admin')
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                   Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="">
                                   Admin
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/user') }}">
                                   User
                                </a>
                            </li>
                            @endif

                            @if(Auth::user()->role == 'User')
                            <li class="nav-item">
                                <a class="nav-link" href="/">
                                   Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/profile/'.Auth::user()->id) }}">
                                   Profile
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/blog/'.Auth::user()->id) }}">
                                   Blog
                                </a>
                            </li>

                            @endif
                            @endguest

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                 @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">
                                            <i class="fas fa-user" style="font-size: 12px;"></i>
                                            Sign Up
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">
                                        <i class="fas fa-sign-in-alt" style="font-size: 12px;"></i>
                                        Login
                                    </a>
                                </li>
                              
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-in-alt" style="font-size: 12px;"></i>
                                        Logout
                                    </a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
    
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('content')
            </main>
        </div>
       
    </div>
</body>
</html>
