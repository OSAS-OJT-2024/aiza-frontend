<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Other meta tags and title -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <div class="mt-20">
        @yield('content')
    </div>

    @vite('resources/js/app.js')
</body>
</html>
