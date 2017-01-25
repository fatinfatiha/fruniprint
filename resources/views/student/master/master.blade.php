<!DOCTYPE html>
<html>
  <head>
    @include('student.include.header')
    <meta charset="utf-8">
    <title>FRUNIPRINT</title>
  </head>
  <body>
    @include('student.include.menu')

    @yield('content')

  </body>
    @include('student.include.footer')
</html>
