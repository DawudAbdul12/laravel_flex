<!doctype html>
<html lang="en">

  <head>
    <title>Wholesome Craft</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- include navigation -->
        @include("includes.nav-links")
    <!-- include navigation -->
  </head>
   
  <body>
   
    {{-- Vue --}}
    <div id="app"></div>
    <script src="{{ asset('js/app.js')}}"></script>
    {{-- Vue --}}

    <!-- footer includes -->
     @include("includes.footer-links")
    <!-- footer includes -->

    
  </body>

</html>