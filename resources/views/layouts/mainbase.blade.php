<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'My App')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.7/css/dataTables.dataTables.css" />


</head>

<body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.7/js/dataTables.js"></script>


    <div class="flex h-screen overflow-hidden">
        @include('components.sidebar')
        <div class="flex flex-col flex-1 overflow-hidden">
            @include('components.navbar')
            <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
                @yield('content')
            </main>
        </div>
    </div>


</body>

</html>