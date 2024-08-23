@extends('base')

@section('content')
<div class="page" id="messagesPage">
    <div class="messagesWrap">
        <h1 class="center">All The Messages</h1>

        <div class="messageList">
            <h3 class="center">Messages</h3>
            @if($messages->count())
                <ul>
                    @foreach($messages as $message)
                        <li>
                            <h4>{{ $message->title }}</h4>
                            <p>{{ $message->message }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="center">No messages available.</p>
            @endif
        </div>
    </div>
</div>
@endsection
