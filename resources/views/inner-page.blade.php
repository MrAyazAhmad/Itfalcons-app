<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Service -</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::to('public/image/favicon.png')}}" rel="icon">
  <!-- <link href="{{URL::to('public/index/assets/img/favicon.png')}}" rel="icon"> -->
  <link href="{{URL::to('public/index/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::to('public/index/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('public/index/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('public/index/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('public/index/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{URL::to('public/index/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{URL::to('public/index/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{URL::to('public/index/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::to('public/index/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Dewi - v2.2.1
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">Dewi</a></h1> -->
      
      <h1 class="logo"><a href="{{url('/')}}" class="logo"><img src="{{URL::to('public/image/logo.png')}}" alt="" class="img-fluid"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="{{URL::to('public/index/assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="../">Home</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <!-- <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section> -->
    <!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container mt-2">
        <h2>
          {{$getesrvicemain->name}}
        </h2>
        <p>{{$getesrvicemain->description}}</p>
        <a href="../project_detail/{{$getesrvicemain->id}}" class="btn btn-info">Get Started</a>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@extends('layouts.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{URL::to('public/index/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::to('public/index/assets/js/main.js')}}"></script>

</body>

</html>