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

<!-- popupforms urls -->

 <link href="{{URL::to('public/index/assets/vendor/popupform/css/opensans-font.css')}}" rel="stylesheet">
<link href="{{URL::to('public/index/assets/vendor/popupform/css/jquery-ui.min.css')}}" rel="stylesheet">
<link href="{{URL::to('public/index/assets/vendor/popupform/css/style.css')}}" rel="stylesheet">
<link href="{{URL::to('public/index/assets/vendor/popupform/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet">


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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

  <!-- sweet alert cdn -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  

  <!-- =======================================================
  * Template Name: Dewi - v2.2.1
  * Template URL: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<style type="text/css">
html{
  font-family: "Lato", sans-serif !important;

}
body{
  font-family: "Lato ", sans-serif !important;

}
:root {
  font-family: "Lato ", sans-serif !important;
  
}
  #hero {
    width: 100% !important;
    height: 60vh !important;
    /*background: url({{URL::to('public/image/service')}}/{{$getesrvicemain->s_image}}) top center !important;*/
    background-size: cover !important;
    position: relative !important;
    padding: 0 !important;
}
}
}
.responsive {
  width: 80%;
  padding: 10 10 10 10;
  height: auto;
}

</style>
</head>

<body>
  <!-- @include('layouts.nav') -->
  @if (\Session::has('success'))
     <script>
                                        Swal.fire ({
                                            title: "Thanks ",
                                            html: "<ul class='alert-font-size'> <li class='text-left'>Received Your Message We Will Contact You Soon</li><ul>",
                                            icon: "success"
                                        });
                                    </script>
            @endif


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

      <!-- <a href="../project_detail/{{$getesrvicemain->id}}" class="get-started-btn scrollto">Get Quote</a> -->

       <button type="button" class="get-started-btn scrollto" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Get Quote</button>

    </div>
  </header><!-- End Header -->


<!--   here is the modal section:  -->
<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Web Development</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="row g-3" action="{{url('detail_send')}}" method="POST" enctype="multipart/form-data">
          @csrf
  <div class="col-md-6">
    <label for= "contact">Name</label>
    <input type="text" name="name" class="form-control" id="inputEmail4" >
  </div>
  <div class="col-md-6">
    <label for= "contact">Email</label>
    <input type="email" name="email" class="form-control" id="inputPassword4">
  </div>
  <div class="col-md-6" style="padding-top:20px;">
<label for= "contact">Contact</label>
    <input type="number" name="contact" class="form-control" id="inputPassword4" >
  </div>
  <div class="col-6" style="padding-top:20px;">
    <label for= "contact">Technology</label>
    <select id="inputState" name="technology" class="form-control">
      <option selected>select</option>
        @foreach ($serviceTech as $tech)
           <option value="{{$tech->id}}">{{$tech->technology}}</option>
        @endforeach

    </select>
  </div>

  <div class="col-md-6" style="padding-top:20px;">
    <label for= "contact">Budget</label>
    <input type="number" name="budget" class="form-control" id="inputCity"  >
  </div>
  
  <div class="col-md-6" style="padding-top:20px;">
    <label for= "contact">Deadline</label>
    <input type="date" name="deadline" class="form-control" id="inputZip"  placeholder="Project Deadline">
  </div>

  <div class="col-12" style="padding-top:20px;">
    <label for= "contact">Requirements</label>
    <textarea class="form-control" name="requirement" id="inputAddress"></textarea>
  </div>
  <div class="col-12 modal-footer" style="padding-top:40px;">
      <button type="button" class="btn btn-secondary" data-dismiss="modal" style="">Close</button>
        <button type="submit" class="get-started-btn " style="background-color:#FD3800;">Send message</button>
      </div>
</form>
      </div>
      <!-- <div class="modal-footer">
       
      </div> -->
    </div>
  </div>
</div>

<!-- <script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.steps.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/main.js"></script> -->

<script src="{{URL::to('public/index/assets/vendor/popupform/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::to('public/index/assets/vendor/popupform/js/jquery.steps.js')}}"></script>
<script src="{{URL::to('public/index/assets/vendor/popupform/js/jquery-ui.min.js')}}"></script>
<script src="{{URL::to('public/index/assets/vendor/popupform/js/js/main.js')}}"></script>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="../../../../static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"67f1b6d76aecc611","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.0","si":10}'></script>

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
        @if(isset($getesrvicemain->s_image))

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
        @endif

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