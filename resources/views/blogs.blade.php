@extends('base')

@section('content')
<div class="page" id="blogsPage">
    <div class="blogsWrap">
        <h1 class="center">Blog List</h1>
        <div class="blogList">
            @if($blogs->isEmpty())
            <p class="center">No blogs available.</p>
            @else
            @foreach($blogs as $blog)
            <div class="blogItem">
                <div class="blogItemLeft">
                <a href="{{ route('blogs.show', $blog->id) }}" class="btnTitle"><h4>{{ $blog->title }}</h4></a>
                    <p>{{ $blog->content }}</p>
                </div>
                <div class="blogItemRight">
                    <a href="{{ route('blogs.show', $blog->id) }}" class="btn btnView">View</a>
                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btnEdit">Edit</a>
                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btnDel" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
