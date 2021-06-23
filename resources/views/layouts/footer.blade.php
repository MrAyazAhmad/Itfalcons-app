
  <!-- ======= Footer ======= -->
  <footer id="footer">
   
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>ITFalcons</h3>
              <p>
                Service Road, New Super Town <br>
                 Lahore, Punjab, Pakistan<br><br>
                <strong>Phone:</strong> (+92) 313 4841115<br>
                <strong>Email:</strong> info@itfalcons.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/itfns/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/itfalcons/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <!-- <a href="https://www.instagram.com/itfalcons/" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                <a href="https://www.linkedin.com/company/it-falcons/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>          
                <li><i class="bx bx-chevron-right"></i><a href="{{url('/')}}">Home</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="#about">About</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="#services">Services</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="#portfolio">Portfolio</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="#team">Team</a></li>
                <li><i class="bx bx-chevron-right"></i><a href="#contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
            @foreach ($getService as $service)


              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/service_details')}}/{{$service->id}}">{{$service->name}}</a></li>
            @endforeach
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>ITFALCONS did a great job and accomplished on a short time</p>
             <form method="post" action="{{url('subscriber')}}" enctype="multipart/form-data">
              @csrf
              <input type="email" name="email"><input type="submit" value="Subscribe" onclick="subscribeEmail()">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ITFalcons</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/dewi-free-multi-purpose-html-template/ -->
        Designed by <a href="https://itfalcons.com/">ITFALCONS</a>
      </div>
    </div>
  </footer><!-- End Footer -->


   <script>
      function subscribeEmail(id)
      {
        if (confirm("Are you sure to subscribe?")) 
        
        
            swal({
                title: "Success!",
                text:  "Subscribed successfully",
                type: "success",
                timer: 3000,
                showConfirmButton: false
            });
            window.setTimeout(function(){ } ,3000);
            location.reload();
          }
    </script>