<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <!-- Styles -->

</head>

<body class="antialiased">
    <nav>
        <a href="{{route('home.index')}}">Home</a>
        <a href="{{route('home.about')}}">About</a>
        <a href="{{route('home.category')}}">Category</a>
        <a href="{{route('guitars.index')}}">Guitars</a>
    </nav>

    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen   bg-center bg-gray-100   dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        @yield('content')

    </div>
</body>
@yield('script_one')

</html>