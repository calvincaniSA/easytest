@extends('base')
@section('content')
<div class="page" id="blogEditPage">
    <div class="blogWrap">
        <h1 class="center">Edit Blog</h1>
        <div class="blockContent">
        <form action="{{ route('blogs.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <h4 class="blogTitle">Title</h4>
                <input type="text" id="title" name="title" value="{{ old('title', $blog->title) }}" required>
            </div>
            <div>
                <h4 class="contentTitle">Content</h4>
                <textarea id="content" name="content" required>{{ old('content', $blog->content) }}</textarea>
            </div>
            <input type="submit" value="Update" id="updateBtn">
        </form>
        <a href="{{ route('blogs.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
