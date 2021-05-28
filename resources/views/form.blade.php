<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FormWizard_v6</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{URL::to('public/form/fonts/material-design-iconic-font/css/material-design-iconic-font.css')}}">
    <link href="{{URL::to('public/index/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{URL::to('public/form/css/style.css')}}">
	</head>
	<body>
		<div class="wrapper">
            <form method ="post" action="{{url('detail_send')}}" enctype="multipart/form-data">
            @csrf
            	<div id="wizard">
                <h2 class="text-center mb-4">{{$service->name}}</h2>
            		<!-- SECTION 1 -->
                <h4></h4>
                <section>
	                	<div class="form-header">
	                		<div class="avartar">
								
									      <img src="{{URL::to('public/form/images/avartar.png')}}" alt="">
					
							        </div>
                      <div class="form-group">
                        <div class="form-holder active">
                          <input type="text" placeholder="First Name" class="form-control" name="name">
                        </div>
                        <div class="form-holder active">
                          <input type="text" placeholder="Email" class="form-control" name="email">
                        </div>
                        <div class="form-holder active">
                            <select class="form-control" name="technology">
                              <option value="">Technology Option</option>
                              @foreach ($change as $tech)
                                <option value="{{$tech->technology}}">{{$tech->technology}}</option>
                              @endforeach
                            </select>
                        </div>
                      </div>
	                  </div>
                    
                    <div class="form-group">
                      <div class="form-holder active">
                        <input type="number" placeholder="Budget" class="form-control" name="budget">
                      </div>
                      <div class="form-holder active">
                        <input type="text" placeholder="Project Deadline" class="form-control" name="deadline">
                      </div>
                      <div class="form-holder active">
                        <textarea name="requirement" placeholder="Project Requirement" rows="4" class="form-control"></textarea>
                      </div>
                    </div>
                    

                    <button class="btn pr-5 pl-5 rounded-pill" id="btn_color">Finish</button>
	              </section>
              </div>  
            </form> 
					

		<!-- <script src="{{URL::to('public/form/js/jquery-3.3.1.min.js')}}"></script> -->

		<!-- JQUERY STEP -->
		<!-- <script src="{{URL::to('public/form/js/jquery.steps.js')}}"></script> -->

		<!-- <script src="{{URL::to('public/form/js/main.js')}}"></script> -->
<!-- Template created and distributed by Colorlib -->
</body>
</html>