<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'My App')</title>
    @vite('resources/css/app.css')
</head>

<body>

    <main>
        @yield('content')
    </main>

</body>

</html>