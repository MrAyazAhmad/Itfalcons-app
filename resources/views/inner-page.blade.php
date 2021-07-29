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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <!-- =======================================================
  * Template Name: Dewi - v2.2.1
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<style type="text/css">
  #hero {
    width: 100% !important;
    height: 60vh !important;
    /*background: url({{URL::to('public/image/service')}}/{{$getesrvicemain->s_image}}) top center !important;*/
    background-size: cover !important;
    position: relative !important;
    padding: 0 !important;
}
.responsive {
  width: 80%;
  padding: 10 10 10 10;
  height: auto;
}

</style>
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
          <li><a href="../">Back Home</a></li>
          

        </ul>
      </nav><!-- .nav-menu -->

      <a href="../project_detail/{{$getesrvicemain->id}}" class="get-started-btn scrollto">Get Quote</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <video autoplay muted loop id="myVideo">
  <source src="{{URL::to('public')}}/video/video1.mp4" type="video/mp4">
</video>
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>{{$getesrvicemain->name}}</h1>
   
    </div>
  </section><!-- End Hero -->


  <main id="main">

   

    <section class="inner-page">
      <div class="container mt-2">
        <h2 style="text-align: center;">

          {{$getesrvicemain->name}}
        </h2><br>
      </div>
      <div class="container mt-2">
        <p>{{$getesrvicemain->long_description}}</p>
        <br>
      </div>
        <!-- <div class="container mt-2">
          <img src="{{URL::to('public/image/service')}}/{{$getesrvicemain->s_image}}" class="img-fluid" alt="">
        </div> -->
        <div class="container mt-2">
        <p>{!!$getesrvicemain->description!!}</p>
        <!-- <a href="../project_detail/{{$getesrvicemain->id}}" class="btn btn-info">Get Started</a> -->
      </div>
        <!-- <img src="{{URL::to('public/image/service')}}/{{$getesrvicemain->s_image}}" class="responsive"> -->

        <div class="row">
          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

          </div>
          <div class="col-lg-8 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="">
              <img src="{{URL::to('public/image/service')}}/{{$getesrvicemain->s_image}}" class="card-img-top" alt="...">

            </div>
          </div>
          <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          </div>

        </div>

    </section>





<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


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