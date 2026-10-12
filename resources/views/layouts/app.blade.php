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
                <a href="{{ route('dashboard') }}" class="p-3" href="">Dashboard</a>
            </li>
            <li>
                <a class="p-3" href="{{ route('posts') }}">Post</a>
            </li>
        </ul>


        <ul class="flex items-center">
            @auth
                <li>
                    <a class="p-3" href="">{{ auth()->user()->name . ' ' . auth()->user()->username }}</a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class=" text-red-500">Logout</button>
                    </form>
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