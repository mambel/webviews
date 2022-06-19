<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        .active  a {
            color:red;
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>
    @include('partials.nav')
    @yield('content')
</body>
</html>
