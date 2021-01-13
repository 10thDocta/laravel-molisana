<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <!-- Header -->
    @include('partials.header')
    <!-- / header -->
    <!-- Main content -->
    @yield('main_content')
    <!-- / main content -->
    <!-- Footer -->
    @include('partials.footer')
    <!-- / footer -->
    <!-- Js-->
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    <!-- / Js-->
  </body>
</html>