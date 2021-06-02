<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="{{URL::to('public/image/favicon.png')}}" rel="icon">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('public/login/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{URL::to('public/login/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('public/login/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{URL::to('public/login/css/style.css') }}">

    <title>ITFalcons | Login</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url({{URL::to('public/login/images/bg_1.jpg') }});"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
            
                @yield('content')
        
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="{{URL::to('public/login/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{URL::to('public/login/js/popper.min.js') }}"></script>
    <script src="{{URL::to('public/login/js/bootstrap.min.js') }}"></script>
    <script src="{{URL::to('public/login/js/main.js') }}"></script>
  </body>
</html>