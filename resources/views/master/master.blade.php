<!DOCTYPE html>
<html>
  <head>
    @include('include.header')
    <meta charset="utf-8">
    <title>FRUNIPRINT</title>
  </head>
  <body>
    @include('include.menu')

    @yield('content')

  </body>
    @include('include.footer')
</html>
