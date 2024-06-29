<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="build/assets/app-BTnjDj8l.css" type="text/css"> --}}
    @vite('resources/css/app.css')
</head>
<body>
    @include('sweetalert::alert')
    <div>
        @yield('app')
    </div>
</body>
</html>