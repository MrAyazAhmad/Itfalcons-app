<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>IT Falcons</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{URL::to('public/image/favicon.png')}}" rel="icon">
  <link href="{{URL::to('public/index/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>

  <!-- sweet alert cdn -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>  
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

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

</head>


<body>

@include('layouts.nav')
@if (\Session::has('success'))
     <script>
                                        Swal.fire ({
                                            title: "Thanks for Contact Us ",
                                            html: "<ul class='alert-font-size'> <li class='text-left'>Check Your Email</li> <li class='text-left'>Received Your Message We Will Contact You Soon</li><ul>",
                                            icon: "success"
                                        });
                                    </script>
            @endif

            @if (\Session::has('subscribe'))
     <script>
                                        Swal.fire ({
                                            title: "Thanks for Support ",
                                            html: " <p class='text-center'>You Subscribed Now</p>",
                                            icon: "success"
                                        });
                                    </script>
            @endif

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <video autoplay muted loop id="myVideo">
  <source src="{{URL::to('public')}}/video/video.mp4" type="video/mp4">
</video>
    <div class="hero-container" data-aos="fade-up" data-aos-delay="150">
      <h1>Plan. Launch. Grow.</h1>
      <h2>Build or Scale up your Business By Our ExpertTeam</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Let's Begin</a>
      
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-simple-smile"></i>
                  <span data-toggle="counter-up">65</span>
                  <p>Happy Clients</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-document-folder"></i>
                  <span data-toggle="counter-up">85</span>
                  <p>Projects</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-clock-time"></i>
                  <span data-toggle="counter-up">12</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box">
                  <i class="icofont-award"></i>
                  <span data-toggle="counter-up">15</span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">
            <img src="{{URL::to('public/index/assets/img/thumnail.png')}}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=1Bj9i2EVQbY" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>Build or Scale up your Business <br>By Our ExpertTeam</h3>
            <br>
            <p class="font-italic">
              Our solutions are “Brilliantly Built” because they have our customers at the center. Backed by fanatical support, in depth expertise of consultants. We deliver lifestyle, not just solutions.
            </p>
            <ul>
              <li><i class="bx bx-check-double"></i> 7X24 SUPPORT</li>
              <li><i class="bx bx-check-double"></i> INNOVATION</li>
              <li><i class="bx bx-check-double"></i> OPTIMIZE CODE</li><!-- 
              <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li> -->
            <p>
             Our commitment is to ensure the quality of service through offering consistent engagements.
            </p>
            </ul>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
              <img src="{{URL::to('public/index/assets/img/mission.png')}}" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="fa fa-star"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Mission</a></h5>
                <p class="card-text">Our mission “Commitment to excellence” putting us in continuous efforts to take our company on higher notes. In this technological era, <span id="dots_mission" class="inline">...</span><span id="more_mission"  style="display: none;">everyone wants faster, effective and quicker solutions to cultivate their businesses. From consulting till the final outcome, our technical experts provide best solutions to stand out your business. Experienced strategic planners advise you creative and unique strategies and solutions to manage your business in efficient and profitable way.</span><a style="cursor: pointer; pointer; color: ##FF4A17; font-weight: bold;" id="myBtn_mission" class="toggle_btn less" onclick="myFunctionMission()"> &nbsp&nbsp read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card">
              <img src="{{URL::to('public/index/assets/img/team1.png')}}" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="fa fa-users"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Our Team</a></h5>
                <p class="card-text">IT Falcons consulting team is well-experienced and passionate to advise you what and how to use technology to better <span id="dots_team" >...</span><span id="more_team"  style="display: none;">your company’s progress in efficient  and productive way. Our team not only advise but also planes, design and install IT systems for their clients. We are working with industries and on commercial level to provide help and advice about their business and IT problems. </span><a style="cursor: pointer; color: #FF4A17; font-weight: bold;" id="myBtn_team" class="toggle_btn less" onclick="myFunctionTeam()"> &nbsp&nbsp read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card">
              <img src="{{URL::to('public/index/assets/img/trust1.png')}}" class="card-img-top" alt="...">
              <div class="card-icon">
                <i class="ri-movie-2-line"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Trust</a></h5>
                <p class="card-text">Our commitment is to ensure the quality of service offering and building trust through our approach of consistent engagement and <span id="dots_trust" class="inline">...</span><span id="more_trust"  style="display: none;"> feedback. </span><a style="cursor: pointer; pointer; color: ##FF4A17; font-weight: bold;" id="myBtn_trust" class="toggle_btn less" onclick="myFunctionTrust()"> &nbsp&nbsp read more </p>
              </div>
            </div>
          </div>
        </div>

      </div>
      <script>
        function myFunctionPortfolio() {
  var x = document.getElementById("myDIV");
  var btnText = document.getElementById("myBtn_portfolio");
  if (x.style.display === "none") {
    x.style.display = "block";
    btnText.innerHTML = "See Less"; 

  } else {
    x.style.display = "none";
    btnText.innerHTML = "See More"; 
    document.getElementById("portfolio").scrollIntoView({behavior: 'smooth'});

  }
}
function myFunctionMission() {
  var dots = document.getElementById("dots_mission");
  var moreText = document.getElementById("more_mission");
  var btnText = document.getElementById("myBtn_mission");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

function myFunctionTeam() {
  var dots = document.getElementById("dots_team");
  var moreText = document.getElementById("more_team");
  var btnText = document.getElementById("myBtn_team");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}


function myFunctionTrust() {
  var dots = document.getElementById("dots_trust");
  var moreText = document.getElementById("more_trust");
  var btnText = document.getElementById("myBtn_trust");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

    </section><!-- End About Boxes Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          @foreach($getPartners as $partner)

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{URL::to('public/image/partner/')}}/{{$partner->company_logo}}" class="img-fluid" alt="">
          </div>
          @endforeach

          
        </div>

      </div>
    </section><!-- End Clients Section -->

  

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check our Services</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          @foreach ($getService as $service)
            <div class="col-md-6">
              <div class="icon-box">
                <i class="{{$service->icon}}"></i>
                <h4><a href="service_details/{{$service->id}}">{{$service->name}}</a></h4>
                <p>{{$service->info}}</p>
              </div>
            </div>
          @endforeach
          <div class="col-md-6">
              <div class="icon-box">
                <i class="fab fa-btc"></i>
                <h4><a href="{{url('/cryptocurrency')}}">Crypto Currency</a></h4>
                <p>Crypto Currency</p>
              </div>
            </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">
          @foreach ($getTestimonial as $Testimonial)


          <div class="testimonial-item">
            <img src="{{URL::to('public/image/testimonial')}}/{{$Testimonial->image}}" class="testimonial-img" alt="">
            <h3>{{$Testimonial->name}}</h3>
            <h4>{{$Testimonial->designation}}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{$Testimonial->description}}.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
          @endforeach

    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check our Portfolio</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($getPortfolio as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio->type}}">
              <img src="{{URL::to('public/image/portfolio')}}/{{$portfolio->image}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$portfolio->name}}</h4>
                <p>{{$portfolio->info}}</p>
                <a href="{{URL::to('public/image/portfolio')}}/{{$portfolio->image}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$portfolio->name}}"><i class="bx bx-plus"></i></a>
                <a href="portfolio_detail/{{$portfolio->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          @endforeach
          <div id="myDIV"  style="display: none;">

          @foreach ($collections as $portfolio)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$portfolio->type}}">
              <img src="{{URL::to('public/image/portfolio')}}/{{$portfolio->image}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{$portfolio->name}}</h4>
                <p>{{$portfolio->info}}</p>
                <a href="{{URL::to('public/image/portfolio')}}/{{$portfolio->image}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$portfolio->name}}"><i class="bx bx-plus"></i></a>
                <a href="portfolio_detail/{{$portfolio->id}}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          @endforeach
        </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active" id="myBtn_portfolio" class="toggle_btn less" onclick="myFunctionPortfolio()">See More</li>

            </ul>
          </div>
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <p>Check our Team</p>
        </div>

        <div class="row">
            @foreach ($getTeam as $Team)


          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="pic"><img src="{{URL::to('public/image/team/')}}/{{$Team->image}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{$Team->name}}</h4>
                <span>{{$Team->designation}}</span>
                <div class="social">
                  <a href="{{$Team->fb}}"><i class="icofont-twitter"></i></a>
                  <a href="{{$Team->twt}}"><i class="icofont-facebook"></i></a>
                  <a href="{{$Team->inst}}"><i class="icofont-instagram"></i></a>
                  <a href="{{$Team->lnkd}}"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

          

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up"">

    <div class=" section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>


      
      <div class="row">

        <div class="col-lg-6">
      @foreach ($getContactMap as $Contact)
            <div class="row" id="cid{{$Contact->id}}">
              <div class="col-lg-12 col-md-12">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.132967979645!2d74.37454781448217!3d31.493028755644133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391905fbc3136747%3A0x9c2c1b783238ca17!2sITFalcons!5e0!3m2!1sen!2s!4v1624001262179!5m2!1sen!2s" style="width:100%"  height="372" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  <!-- </div> -->
                <!-- </div>     -->

              </div>
          </div>
          @endforeach

        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">

          

            <form  action="{{url('add-contactform')}}" method="POST" enctype="multipart/form-data" class="php-email-form" id="form1" enctype='multipart/form-data'>
                        @csrf
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>

              </div>
              <div class="col-md-6 form-group ">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
              </div>
              <div class="col-md-12 form-group ">
                <input type="text" class="form-control" name="subject" id="subject1" placeholder="Subject" required>
              </div>
              <div class=" col-md-12 form-group ">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" id="message1" required></textarea>
              </div>
             
              <div class="text-center pt-3 "><button type="submit" >Send Message</button></div>
            </div>
            </form>
        </div>

      </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@extends('layouts.footer')


  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{URL::to('public/index/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <!-- <script src="{{URL::to('public/index/assets/vendor/php-email-form/validate.js')}}"></script> -->
  <script src="{{URL::to('public/index/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{URL::to('public/index/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL::to('public/index/assets/js/main.js')}}"></script>



  <script>!function(e,t,a){var c=e.head||e.getElementsByTagName("head")[0],n=e.createElement("script");n.async=!0,n.defer=!0, n.type="text/javascript",n.src=t+"/static/js/chat_widget.js?config="+JSON.stringify(a),c.appendChild(n)}(document,"https://app.engati.com",{bot_key:"03fca553472a45cc",welcome_msg:true,branding_key:"default",server:"https://app.engati.com",e:"p" });</script>

</body>

</html>