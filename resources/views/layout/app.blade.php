<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', $title)</title> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Navbar Component -->
    @include('components.navbar')

    @include('components.header')

    <!-- Main Content -->
    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <!-- Footer Component -->
    @include('components.footer')

</body>

</html>
