<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogy</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a class="p-3" href="">Home</a>
            </li>
            <li>
                <a class="p-3" href="">Dashboard</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('posts') }}">Post</a>
            </li>
        </ul>


        <ul class="flex items-center">
            @auth
                <li>
                    <a class="p-3" href="">Coldy Daroy</a>
                </li>
                <li>
                    <a class="p-3 text-red-500" href="">Logout</a>
                </li>
            @endauth

            @guest
                <li>
                    <a href="{{ route('login') }}" class="p-3" href="">Login</a>
                </li>
                <li>
                    <a class="p-3" href="{{ route('register') }}">Register</a>
                </li>
            @endguest

        </ul>
    </nav>
    @yield('content')
</body>

</html>