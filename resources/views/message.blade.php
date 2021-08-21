@extends('chat')

@section('content')
<header>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
    <div>
        <h2>{{ $user->name }}</h2>

    </div>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_star.png" alt="">
</header>
<ul id="chat">


    {{-- <li class="me">
        <div class="entete">
            <h3>10:12AM, Today</h3>
            <h2>Vincent</h2>
            <span class="status blue"></span>
        </div>
        <div class="triangle"></div>
        <div class="message">
            OK
        </div>
    </li> --}}
</ul>
<footer>
    <form method="POST" action="{{ route('chat') }}" id="chat-form">
        @csrf
    <textarea placeholder="Type your message"id='text' name="message"></textarea>
    <input type="hidden" value="{{ $user->id }} " name="messageTo">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_picture.png" alt="">
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_file.png" alt="">
    <button type="submit">Send<button>
</form>

</footer>
@endsection
