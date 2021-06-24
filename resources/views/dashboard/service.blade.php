@extends('dashboard.layout.main')


@section('content')
  <div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="card">
            <div class="card-action">
                <h4 class="text-center">Service</h4> 
            </div>
            <div class="card-content">
            @if (\Session::has('success'))
              <div class="alert alert-success d-inline ml-2">
                
                  <strong>{!! \Session::get('success') !!}</strong>
                
              </div>
            @endif
              <a href="#" class="btn btn-info d-inline float-right mr-3" data-toggle="modal" data-target="#serviceModal">New Entry</a>
              <a href="service_technology" class="btn btn-success d-inline float-right mr-3">New Technology</a>
                <div class="table-responsive overflow-hidden pl-2 pr-2">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Icon</th>
                                <th>Name</th>
                                <th>Short Info</th>
                                <th>Description</th>
                                 <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $count = 1 ?>
                          @foreach ($getservice as $service)
                            <tr id="sid{{$service->id}}">
                              <td>@php echo $count @endphp</td>
                              <td><span class="{{$service->icon}}"></span></td>
                              <td>{{$service->name}}</td>
                              <td>{{$service->info}}</td>
                              <td>{!!$service->description!!}</td>
                              <td><img src="{{URL::to('public/image/service')}}/{{$service->s_image}}" alt="{{$service->s_image}}" style="height:50px; width:100px"></td>
                              <td><a href="edit_service/{{$service->id}}" class="btn btn-info">Edit</a></td>
                              <td><a href="javascript:void(0)" onclick="deleteService({{$service->id}})" class="btn btn-danger">Delete</a></td>
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

    <div class="modal fade" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New service</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <!--  <script type="text/javascript">
        $(document).ready(function() {
            $('#submit_form').attr("disabled", true);
        });
        </script> -->
          <div class="modal-body">
            <form method="post" action="{{url('add_service')}}" enctype="multipart/form-data" id="serviceForm" >
              @csrf
              <div class="form-group">
                <label for="firstname">Icon</label>
                <input type="text" class="form-control @error('icon') is-invalid @enderror text_field" id="icon" name="icon">
                <!-- Show error -->
                @error('icon')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <label for="lastname">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror text_field" id="name" name="name">
                <!-- Show error -->
                @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <label for="email">Short Info</label>
                <input type="text" class="form-control @error('info') is-invalid @enderror text_field" id="info" name="info">
                <!-- Show error -->
                @error('info')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <label for="long_description">Long Description</label>
                <textarea name="long_description" id="long_description" class="form-control @error('long_description') is-invalid @enderror text_field"></textarea>
                <!-- Show error -->
                @error('long_description')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <!-- <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control @error('s_image') is-invalid @enderror text_field" id="s_image" name="s_image">
                
              </div> -->
              <div class="form-group">
                  <p>Upload image file:</p>
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile" name="s_image">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <!-- Show error -->
                @error('s_image')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group">
                <label for="email">Description</label>
                <textarea name="description" class="form-control" id="description"></textarea>
                
              </div>
              <input type="submit" id="submit_form" class="btn btn-primary"  value="Submit">
              <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#description').summernote({
        height: 400
    });
</script>

    
    <script>
      function deleteService(id)
      {
        if (confirm("Do you really want to delete this record?")) 
        {
          $.ajax({
          url: 'deleteservice/'+id,
          type:"DELETE",
          data:{
            _token:$("input[name=_token]").val()
          },
          success:function(response){
            $('#sid'+id).remove();
            swal({
                title: "Success!",
                text:  "Record has been deleted..",
                type: "success",
                timer: 3000,
                showConfirmButton: false
            });
            window.setTimeout(function(){ } ,3000);
            location.reload();
          }
        });
        }
      }
    </script>

<script type="text/javascript">
function check_field()
{
 var icon=$("#icon").val();
 var name=$("#name").val();
 var info=$("#info").val();
 var long_description=$("#long_description").val();
 var s_image=$("#s_image").val();
 if(icon!="" && name!="" && info!="" && long_description!="" && s_image!="")
 {
  $("#submit_form").prop( "disabled", false);
  return true;
 }
 else
 {
  $("#submit_form").prop( "disabled", true);
  
  return false;
 }
}
</script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
@endsection