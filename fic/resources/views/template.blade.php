<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header class="flex justify-between items-center py-4">
        <div class="flex items-center flex-grow gap-4">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('form') }}">Form</a></li>
            </ul>
        </div>

        @auth
        <a href="{{ route('dashboard') }}">Dashboard</a>
        @else
        <a href="{{ route('register') }}">Register</a>
        <a href="{{ route('login') }}">Login</a>
        @endif
    </header>

    @yield('content')
</body>
</html>
