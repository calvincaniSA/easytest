@extends('base')

@section('content')
<div class="page" id="blogShowPage">
    <div class="blogWrap">
        <h1 class="center">{{ $blog->title }}</h1>
        <div class="blockContent">
            <p>{{ $blog->content }}</p>
            <div class="backLink">
                <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to List</a>
            </div>
        </div>
    </div>
</div>
@endsection
