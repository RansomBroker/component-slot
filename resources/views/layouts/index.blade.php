<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> App Name  @yield('title')</title>

    <!-- include css  -->
    @include('layouts.includes.css')
  </head>
  <body>
    <div class="container-fluid">
      <!-- content -->
      @yield('content')
    </div>

    <!-- include js  -->
    @include('layouts.includes.js')
  </body>
</html>
