<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Directory.com - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-main-color py-0 fixed-top" >
            <a class="navbar-brand px-4" href="{{ url('/') }}">
                <img src="{{ asset('/img/logo.png') }}"  class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <form class="form-inline my-2 my-lg-0" action="{{ route('app.listings') }}">
                <input name="search" value="{{ Request::input('search') }}" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

            <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Route::currentRouteName() == 'app.index' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('app.index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'app.listings' || Route::currentRouteName() == 'app.listing' ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('app.listings') }}">Listings</a>
                    </li>
                    @guest
                    <li class="nav-item  {{ Route::currentRouteName() == 'login' ? 'active' : '' }}">
                        <a href="{{ route('login') }}" class="nav-link">
                            Login
                        </a>
                    </li>
                     <li class="nav-item  {{ Route::currentRouteName() == 'register' ? 'active' : '' }}">
                        <a href="{{ route('register') }}" class="nav-link">
                            Register
                        </a>
                    </li>
                    @else
                    <li class="nav-item  {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}" >
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Str::substr(Auth::user()->name, 0, 20) }} <span class="caret"></span>
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
                    @endguest
                    {{-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li> --}}
                </ul>
            </div>
        </nav>