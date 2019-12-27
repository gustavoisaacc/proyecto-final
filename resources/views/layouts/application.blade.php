<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>@yield('title', 'Inicio')</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600,400,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>