<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS here -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('web/img/favicon.png')}}">
        <link rel="stylesheet" href="{{ asset('web/css/preloader.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/swiper-bundle.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/backtotop.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{ asset('web/flaticon/flaticon.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/font-awesome-pro.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/default.css')}}">
        <link rel="stylesheet" href="{{ asset('web/css/style.css')}}">
    </head>
    <body>


  <x-layout.header />
    <main class="">
        @yield('content')
    </main>
  <x-layout.footer />  
  <script src="{{ asset('asset/js/vendor/jquery.js')}}"></script>
      <script src="{{ asset('web/js/vendor/waypoints.js')}}"></script>
      <script src="{{ asset('web/js/bootstrap-bundle.js')}}"></script>
      <script src="{{ asset('web/js/meanmenu.js')}}"></script>
      <script src="{{ asset('web/js/swiper-bundle.js')}}"></script>
      <script src="{{ asset('web/js/tweenmax.js')}}"></script>
      <script src="{{ asset('web/js/owl-carousel.js')}}"></script>
      <script src="{{ asset('web/js/magnific-popup.js')}}"></script>
      <script src="{{ asset('web/js/parallax.js')}}"></script>
      <script src="{{ asset('web/js/backtotop.js')}}"></script>
      <script src="{{ asset('web/js/nice-select.js')}}"></script>
      <script src="{{ asset('web/js/countdown.min.js')}}"></script>
      <script src="{{ asset('web/js/counterup.js')}}"></script>
      <script src="{{ asset('web/js/wow.js')}}"></script>
      <script src="{{ asset('web/js/isotope-pkgd.js')}}"></script>
      <script src="{{ asset('web/js/imagesloaded-pkgd.js')}}"></script>
      <script src="{{ asset('web/js/ajax-form.js')}}"></script>
      <script src="{{ asset('web/js/main.js')}}"></script>
    </body>
</html>
