<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Laravel Movies')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <nav class="nav justify-content-center  ">
            <a class="nav-link active" href="#" aria-current="page">Movies</a>
            <a class="nav-link" href="#">Film</a>
            <a class="nav-link" href="#">Contact</a>
        </nav>
    </header>
    <main class="bg-dark">
        @yield('content')
    </main>
    <footer></footer>
</body>

</html>