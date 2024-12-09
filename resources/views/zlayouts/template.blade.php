<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Info 7/7</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  

  <!-- Vendor CSS Files -->
  <link href="{{asset("front/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("front/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("front/vendor/aos/aos.css")}}" rel="stylesheet">
  <link href="{{asset("front/vendor/swiper/swiper-bundle.min.css")}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset("front/css/main.css")}}" rel="stylesheet">
  {{-- <link href=""{{asset("{{asset("front/css/main.css")}}")}}" rel="stylesheet"> --}}

  <!-- =======================================================
  * Template Name: ZenBlog
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Updated: Aug 08 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">



  @include('zlayouts.topbar')

  @yield('content')

  @include('zlayouts.footer')





  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset("front/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("front/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{asset("front/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("front/vendor/swiper/swiper-bundle.min.js")}}"></script>

  <!-- Main JS File -->
  <script src="{{asset("front/js/main.js")}}"></script>

</body>

</html>