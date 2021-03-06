@extends('dashboard.layout.main')


@section('content')
 @if($errors->first('image') || $errors->first('name') || $errors->first('designation') || $errors->first('description'))
                                        <script>
                                      swal({
                title: "Error!",
                text:  "Something is missing!",
                type: "error",
                timer: 3000,
                showConfirmButton: false
            });
                                        </script>
                                       
                                        @endif
  <div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="card">
            <div class="card-action">
                <h4 class="text-center">Testimonial</h4> 
            </div>
            <div class="card-content">
            @if (\Session::has('success'))
              <div class="alert alert-success d-inline ml-2">
                
                  <strong>{!! \Session::get('success') !!}</strong>
                
              </div>
            @endif
              <a href="#" class="btn btn-info d-inline float-right mr-3" data-toggle="modal" data-target="#testimonialModal">New Entry</a>
                <div class="table-responsive overflow-hidden pl-2 pr-2">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $count = 1 ?>
                          @foreach ($gettestimonial as $testimonial)
                            <tr id="tid{{$testimonial->id}}">
                              <td>@php echo $count @endphp</td>
                              <td><img src="{{URL::to('public/image/testimonial')}}/{{$testimonial->image}}" alt="{{$testimonial->image}}" style="height:50px; width:100px"></td>
                              <td>{{$testimonial->name}}</td>
                              <td>{{$testimonial->designation}}</td>
                              <td>{{$testimonial->description}}</td>
                              <td><a href="edit_testimonial/{{$testimonial->id}}" class="btn btn-info">Edit</a></td>
                              <td><a href="javascript:void(0)" onclick="deleteTestimonial({{$testimonial->id}})" class="btn btn-danger">Delete</a></td>
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

    <div class="modal fade" id="testimonialModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Testimonial</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('add_testimonial')}}" enctype="multipart/form-data" id="testimonialForm">
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
                <label for="email">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"></textarea>
                <!-- Show error -->
                @error('description')
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
      function deleteTestimonial(id)
      {
        if (confirm("Do you really want to delete this record?")) 
        {
          $.ajax({
          url: 'deletetestimonial/'+id,
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
@endsection