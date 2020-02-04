<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Document</title>
    <base href="{{ $_ENV['APP_URL'] }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="theme/css/bootstrap.min.css" rel="stylesheet" >
    <link href="theme/css/main.css" rel="stylesheet" >
    <link href="theme/css/custom.css" rel="stylesheet" >
</head>
<body>
    @yield('content')

    <script src="theme/js/jquery.min.js"></script>
    <script src="//unpkg.com/@popperjs/core@2"></script>
    <script src="theme/js/bootstrap.min.js"></script>
</body>
</html>