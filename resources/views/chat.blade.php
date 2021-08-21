<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')  }}">
    <title>Document</title>
</head>
<body>
    <div id="container">
        <aside>
            <header>
                <input type="text" placeholder="search">
            </header>
            <ul id="users">


            </ul>
        </aside>
        <main>
            <header>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/chat_avatar_01.jpg" alt="">
                <div>
                    <h2>Chat with Vincent Porter</h2>
                    <h3>already 1902 messages</h3>
                </div>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_star.png" alt="">
            </header>
            <ul id="chat">
                <li class="you">
                    <div class="entete">
                        <span class="status green"></span>
                        <h2>Vincent</h2>
                        <h3>10:12AM, Today</h3>
                    </div>
                    <div class="triangle"></div>
                    <div class="message">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    </div>
                </li>
                <li class="me">
                    <div class="entete">
                        <h3>10:12AM, Today</h3>
                        <h2>Vincent</h2>
                        <span class="status blue"></span>
                    </div>
                    <div class="triangle"></div>
                    <div class="message">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    </div>
                </li>
                <li class="me">
                    <div class="entete">
                        <h3>10:12AM, Today</h3>
                        <h2>Vincent</h2>
                        <span class="status blue"></span>
                    </div>
                    <div class="triangle"></div>
                    <div class="message">
                        OK
                    </div>
                </li>
                <li class="you">
                    <div class="entete">
                        <span class="status green"></span>
                        <h2>Vincent</h2>
                        <h3>10:12AM, Today</h3>
                    </div>
                    <div class="triangle"></div>
                    <div class="message">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    </div>
                </li>
                <li class="me">
                    <div class="entete">
                        <h3>10:12AM, Today</h3>
                        <h2>Vincent</h2>
                        <span class="status blue"></span>
                    </div>
                    <div class="triangle"></div>
                    <div class="message">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                    </div>
                </li>
                <li class="me">
                    <div class="entete">
                        <h3>10:12AM, Today</h3>
                        <h2>Vincent</h2>
                        <span class="status blue"></span>
                    </div>
                    <div class="triangle"></div>
                    <div class="message">
                        OK
                    </div>
                </li>
            </ul>
            <footer>
                <form method="POST" action="{{ route('chat') }}">
                    @csrf
                <textarea placeholder="Type your message" name="message"></textarea>
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_picture.png" alt="">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1940306/ico_file.png" alt="">
                <button>Send<button>
            </form>
            </footer>
        </main>
    </div>
    <script>userId={{ Auth::user()->id }}</script>
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>

