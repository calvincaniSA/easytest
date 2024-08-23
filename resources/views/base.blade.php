<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body class="<?php echo str_replace('/', '-', parse_url(url()->current(), PHP_URL_PATH)); ?>-page">
        <div class="container" id="app">
            @if(Auth::check())
            <div class="loggedIn absolute">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btnLogout">Logout</button>
                </form>
            </div> 
            @endif
            <div class="topBar">
                <ul id="topMenu">
                    @if (!Route::is('home'))
                        <li class="homeLink"><a class="{{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    @endif
                    
                    <li class="aboutLink"><a class="{{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>

                    <li class="aboutLink"><a class="{{ Route::is('blogs.index') ? 'active' : '' }}" href="{{ route('blogs.index') }}">Blogs</a></li>
                    @if (!Auth::check())
                        <li class="regLink"><a class="{{ Route::is('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a></li>
                        <li class="loginLink"><a class="{{ Route::is('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a></li>
                    @endif
                </ul>
            </div>
            @yield('content')
        </div>

        <div id="messageContainer" class="messages fixed center">
            @if (session()->has('message'))
                {!! session()->get('message') !!}
            @endif
        </div>
        
        <script src="{{ asset('js/easytest.js') }}"></script>
    </body>
</html>
