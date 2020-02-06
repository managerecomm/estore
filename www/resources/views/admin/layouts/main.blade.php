<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Document</title>
    <base href="{{ env('APP_URL') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="theme/css/bootstrap.min.css" rel="stylesheet" >
    <link href="theme/css/main.css" rel="stylesheet" >
    <link href="theme/css/custom.css" rel="stylesheet" >
</head>
<body>
<header class="header flexbox flex-1">
    <ul class="nav navbar-toolbar">
        <li><a href="/">Home</a></li>
    </ul>
    <ul class="nav navbar-toolbar">
        <li><a href="{{ env('APP_ADMIN_URL') }}">Control Panel</a></li>
    </ul>
</header>
    @yield('content')

    <script src="/theme/js/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="/theme/js/bootstrap.min.js"></script>
    <script src="/theme/js/jquery.cookie.js"></script>
    <script src="/theme/js/custom.js"></script>
</body>
</html>