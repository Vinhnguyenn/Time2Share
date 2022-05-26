<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Link -->
    <link rel="stylesheet" href="/css/master.css">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">

    <!-- Scripts -->
    <script src="/js/main.js" defer></script>
    
    <title>@yield('title')</title>
</head>
<body>
    @include('components.navigation')
    @yield('content')
</body>
</html> 