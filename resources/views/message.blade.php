@extends('chat')

@section('content')
<header>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
    <div>
        <h2>{{ $user->name }}</h2>

    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</header>
<ul id="chat">



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
