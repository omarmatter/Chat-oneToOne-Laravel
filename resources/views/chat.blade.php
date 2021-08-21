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

             @yield('content')

        </main>
    </div>
    <script src="{{ asset('jquery.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>userId={{ Auth::user()->id }}</script>
    <script src="{{ asset('js/app.js') }}" ></script>
</body>
</html>

