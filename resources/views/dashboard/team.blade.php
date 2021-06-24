@extends('dashboard.layout.main')


@section('content')
 @if($errors->first('image') || $errors->first('name') || $errors->first('designation'))
                                        <script>
                                      swal({
                title: "Error!",
                text:  "Something is missing!",
                type: "error",
                timer: 3000,
                showConfirmButton: false
            });
                                        </script>
                                        <<!-- div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Mail Didn't Sent!
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div> -->
                                        @endif
  <div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="card">
            <div class="card-action">
                <h4 class="text-center">Team</h4> 
            </div>
            <div class="card-content">
            @if (\Session::has('success'))
              <div class="alert alert-success d-inline ml-2">
                
                  <strong>{!! \Session::get('success') !!}</strong>
                
              </div>
                           @endif
              <a href="#" class="btn btn-info d-inline float-right mr-3" data-toggle="modal" data-target="#teamModal">New Entry</a>
                <div class="table-responsive overflow-hidden pl-2 pr-2">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Facebook</th>
                                <th>Twitter</th>
                                <th>Instagram</th>
                                <th>Linkedin</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $count = 1 ?>
                          @foreach ($getteam as $team)
                            <tr id="tid{{$team->id}}">
                              <td>@php echo $count @endphp</td>
                              <td><img src="{{URL::to('public/image/team')}}/{{$team->image}}" alt="{{$team->image}}" style="height:50px; width:100px"></td>
                              <td>{{$team->name}}</td>
                              <td>{{$team->designation}}</td>
                              <td>{{$team->fb}}</td>
                              <td>{{$team->twt}}</td>
                              <td>{{$team->inst}}</td>
                              <td>{{$team->lnkd}}</td>
                              <td><a href="edit_team/{{$team->id}}" class="btn btn-info">Edit</a></td>
                              <td><a href="javascript:void(0)" onclick="deleteTeam({{$team->id}})" class="btn btn-danger">Delete</a></td>
                            </tr>
                            @php $count++ @endphp
                          @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
  </div>

    <div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Team</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
                                                  
          <div class="modal-body">
            <form method="post" action="{{url('add_team')}}" enctype="multipart/form-data" id="teamForm">
              @csrf
              <div >
                  <p>Upload image file:</p>
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input  @error('image') is-invalid @enderror" id="customFile" name="image">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>

                <!-- Show error -->
                @error('image')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <label for="lastname">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

                 <!-- Show error -->
                @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               
              </div>
              <div class="form-group">
                <label for="email">Designation</label>
                <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation">

                   <!-- Show error -->
                @error('designation')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
               
              </div>
              <div class="form-group">
                <label for="email">Facebook Link</label>
                <input type="text" class="form-control @error('fb') is-invalid @enderror" id="fb" name="fb">
                  <!-- Show error -->
                @error('fb')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              
              </div>
              <div class="form-group">
                <label for="email">Twitter Link</label>
                <input type="text" class="form-control @error('twt') is-invalid @enderror" id="twt" name="twt">
  <!-- Show error -->
                @error('twt')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
             
              </div>
              <div class="form-group">
                <label for="email">Instagram Link</label>
                <input type="text" class="form-control @error('inst') is-invalid @enderror" id="inst" name="inst">
  <!-- Show error -->
                @error('inst')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                
              </div>
              <div class="form-group">
                <label for="email">Linkedin Link</label>
                <input type="text" class="form-control @error('lnkd') is-invalid @enderror" id="lnkd" name="lnkd">
  <!-- Show error -->
                @error('lnkd')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    
    <script>
      function deleteTeam(id)
      {
        if (confirm("Do you really want to delete this record?")) 
        {
          $.ajax({
          url: 'deleteteam/'+id,
          type:"DELETE",
          data:{
            _token:$("input[name=_token]").val()
          },
          success:function(response){
            $('#tid'+id).remove();
          }
        });
        }
      }
    </script>

  <!-- sweet alert cdn -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
@endsection