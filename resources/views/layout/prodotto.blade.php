<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/prodotto.css')}}">
</head>
<body>
    @include('partials.header')

    @yield('main')

    @include('partials.footer')
    <script src="{{asset('javascript/app.js')}}"></script>
</body>
</html>