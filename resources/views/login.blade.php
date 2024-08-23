@extends('base')

@section('content')
<div class="page" id="loginPage">
    <div class="loginWrap">
            <h1 class="center">Log in</h1>


        <form action="{{ route('login') }}" method="post" id="loginForm">
            @csrf
            <fieldset class="inputs">
                <input type="email" name="email" id="email" placeholder="Email Address" value="{{old('email')}}">
                @error('email')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror
                <input type="password" name="password" id="password" placeholder="Password">
                @error('password')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror
            </fieldset>
            <fieldset><input type="submit" value="Login" id="loginBtn"></fieldset>
        </form>
    </div>
</div>
@endsection