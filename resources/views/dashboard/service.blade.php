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
                              <td>{{$service->description}}</td>
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
          <div class="modal-body">
            <form method="post" action="{{url('add_service')}}" enctype="multipart/form-data" id="serviceForm">
              @csrf
              <div class="form-group">
                <label for="firstname">Icon</label>
                <input type="text" class="form-control" id="icon" name="icon">
              </div>
              <div class="form-group">
                <label for="lastname">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Short Info</label>
                <input type="text" class="form-control" id="info" name="info">
              </div>
              <div class="form-group">
                <label for="email">Description</label>
                <textarea name="description" class="form-control" id="description"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
@endsection