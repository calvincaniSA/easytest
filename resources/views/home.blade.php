@extends('base')

@section('content')
<div class="page" id="homePage">
    <div class="homeWrap">
        <h1 class="center">Level 7 Easy Application</h1>
        <div class="homeContent">
            <p class="center">This is an application for a position</p>
        </div>

        @if(Auth::check()) 
        <div class="createMessage">
            <h3 class="center createTitle">Create Blog</h3>
            <form action="{{ route('blogs.store') }}" method="POST">
                @csrf
                <div>
                    <h4 class="msgTitle">Title</h4>
                    <input type="text" id="title" name="title" required value="{{ old('title') }}">
                </div>
                <div>
                    <h4 class="msgBody">Message</h4>
                    <textarea id="message" name="content" required>{{ old('content') }}</textarea>
                </div>
                <input type="submit" value="Create" id="createBtn">
            </form>
        </div>
        @endif
        
    </div>
</div>
@endsection
