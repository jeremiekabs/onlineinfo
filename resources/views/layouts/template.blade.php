
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Administration Info7/7</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Vendor CSS Files -->
  <link href="{{asset("assets/vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/boxicons/css/boxicons.min.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/qassetsll/qassetsll.snow.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/qassetsll/qassetsll.bubble.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/remixicon/remixicon.css")}}" rel="stylesheet">
  <link href="{{asset("assets/vendor/simple-datatables/style.css")}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  
  @include('layouts.topbar')

  @include('layouts.sidebar')

  @yield('content')

  @include('layouts.footer')

  <<!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <script src="{{asset("assets/vendor/php-email-form/validate.js")}}"></script>
  <script src="{{asset("assets/vendor/aos/aos.js")}}"></script>
  <script src="{{asset("assets/vendor/swiper/swiper-bundle.min.js")}}"></script>

  <!-- Main JS File -->
  <script src="{{asset("assets/js/main.js")}}"></script>

</body>

</html>