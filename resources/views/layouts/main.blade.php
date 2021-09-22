<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CGMDEV Apps</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!--alpine JS-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/67ca50a492.js" crossorigin="anonymous"></script>
    @livewireStyles
</head>
<body class="font-sans">
    @yield('content')
    @livewireScripts
</body>
</html>