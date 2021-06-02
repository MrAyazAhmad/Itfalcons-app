<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::to('public/image/favicon.png')}}" rel="icon">
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

      <h1 class="logo"><a href="{{url('/')}}" class="logo"><img src="{{URL::to('public/image/logo.png')}}" alt="" class="img-fluid"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <!-- <a href="index.html" class="logo"><img src="{{URL::to('public/image/logo.png')}}" alt="" class="img-fluid"></a> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
         <!--  <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li> -->

        </ul>
      </nav><!-- .nav-menu -->

      <a href="#about" class="get-started-btn scrollto">Get Started</a>

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            @foreach ($getPortfolioImg as $image)
              <img src="{{URL::to('public/image/portfolio')}}/{{$image->portfolio_img}}" class="img-fluid" alt="">
            @endforeach
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: {{$getPortfolio->category}}</li>
              <li><strong>Client</strong>: {{$getPortfolio->client}}</li>
              <li><strong>Project date</strong>: {{$getPortfolio->project_date}}</li>
              <li><strong>Project URL</strong>: <a href="//{{$getPortfolio->project_url}}">{{$getPortfolio->project_url}}</a></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>This is an example of portfolio detail</h2>
          <p>
          {{$getPortfolio->description}}
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@extends('layouts.footer')


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