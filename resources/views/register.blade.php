@extends('base')
@section('content')
<div class="page" id="registerPage">
    <div class="pageWrap">
        <div class="registerIntro">
            <h1 class="center">Register</h1>
        </div>
        <form action="{{ route('register') }}" method="post" id="registrationForm">
            @csrf
            <fieldset class="inputs">
                <input type="text" name="name" id="name" placeholder="Full Name" value="{{ old('name') }}">
                @error('name')
                <div class="error">
                    {!! $message !!}
                </div>
                @enderror
                <input type="email" name="email" id="email" placeholder="Email Address" value="{{ old('email') }}">
                @error('email')
                <div class="error">
                    {!! $message !!}
                </div>
                @enderror
                <input type="email" name="email_confirmation" id="confirm_email" placeholder="Confirm Email" value="{{ old('email_confirmation') }}">
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="password" name="password_confirmation" id="confirm_password" placeholder="Confirm Password">
            </fieldset>
            <fieldset class="buttons">
                <input type="submit" value="Join" id="registerBtn">
            </fieldset>
        </form>
    </div>
</div>
@endsection
