@extends('dashboard.layout.main')

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-globe text-warning"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Capacity</p>
                <p class="card-title">150GB<p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i>
            Update Now
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-money-coins text-success"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Revenue</p>
                <p class="card-title">$ 1,345<p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-calendar-o"></i>
            Last day
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-vector text-danger"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Errors</p>
                <p class="card-title">23<p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-clock-o"></i>
            In the last hour
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-favourite-28 text-primary"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Followers</p>
                <p class="card-title">+45K<p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i>
            Update now
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Users Behavior</h5>
          <p class="card-category">24 Hours performance</p>
        </div>
        <div class="card-body ">
          <canvas id=chartHours width="400" height="100"></canvas>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-history"></i> Updated 3 minutes ago
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Email Statistics</h5>
          <p class="card-category">Last Campaign Performance</p>
        </div>
        <div class="card-body ">
          <canvas id="chartEmail"></canvas>
        </div>
        <div class="card-footer ">
          <div class="legend">
            <i class="fa fa-circle text-primary"></i> Opened
            <i class="fa fa-circle text-warning"></i> Read
            <i class="fa fa-circle text-danger"></i> Deleted
            <i class="fa fa-circle text-gray"></i> Unopened
          </div>
          <hr>
          <div class="stats">
            <i class="fa fa-calendar"></i> Number of emails sent
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-title">NASDAQ: AAPL</h5>
          <p class="card-category">Line Chart with Points</p>
        </div>
        <div class="card-body">
          <canvas id="speedChart" width="400" height="100"></canvas>
        </div>
        <div class="card-footer">
          <div class="chart-legend">
            <i class="fa fa-circle text-info"></i> Tesla Model S
            <i class="fa fa-circle text-warning"></i> BMW 5 Series
          </div>
          <hr />
          <div class="card-stats">
            <i class="fa fa-check"></i> Data information certified
          </div>
        </div>
      </div>
    </div>
  </div>
   @foreach ($getContact as $Contact)
            <div class="row" id="cid{{$Contact->id}}">
              <div class="col-lg-8 col-md-12">
                <div class="card">
                  <div class="card-header card-header-warning">
                    <h4 class="card-title">Map</h4>
                    <p class="card-category" id="locationReload">{{$Contact->location}}</p>
                  </div>
                  <div class="card-body table-responsive">
                    <iframe style="border:0;  width: 100%; height: 350px;" src="{{$Contact->mapp}}" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>    
              </div>

              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Contact</h4>
                    <p class="card-category">Update Contact</p>
                  </div>
                  <div class="card-body table-responsive">
                  <a href="javascript:void(0)" onclick="editContact({{$Contact->id}})" class="btn btn-info">Edit</a>
                  
                  </div>
                </div>
              </div>
            </div>


            
            @endforeach 


             <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit Contact</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form id="contactForm" method="post">
                    @csrf

                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                      <label for="firstname">Mapp</label>
                      <input type="text" class="form-control" id="mapp">
                    </div>
                    <div class="form-group">
                      <label for="lastname">Location</label>
                      <input type="text" class="form-control" id="location">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                      <label for="email">Phone</label>
                      <input type="text" class="form-control" id="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
                </div>
              </div>
            </div>
          </div>







 <script>
    function editContact(id)
    {
      $.get('contacts/'+id,function(contact){
        $("#id").val(contact.id);
        $("#mapp").val(contact.mapp);
        $("#location").val(contact.location);
        $("#email").val(contact.email);
        $("#phone").val(contact.phone);
        $("#contactModal").modal('toggle');
      });
    }
    $("#contactForm").submit(function(e){
      e.preventDefault();

      let id = $("#id").val();
      let mapp = $("#mapp").val();
      let location = $("#location").val();
      let email = $("#email").val();
      let phone = $("#phone").val();
      let _token = $("input[name=_token]").val();

      $.ajax({
        url: "{{route('contact.update')}}",
        type:"PUT",
        data:{
          id:id,
          mapp:mapp,
          location:location,
          email:email,
          phone:phone,
          _token:_token
        },
        success:function(response){
          
            alert("Updated........!");
          $("#contactModal").modal('toggle');
          $("#contactForm")[0].reset();
          window.location.reload(true);
        }
      });    
    });
   
  </script>
  @endsection
      
     