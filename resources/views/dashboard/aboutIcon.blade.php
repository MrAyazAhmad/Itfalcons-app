@extends('dashboard.layout.main')


@section('content')
  <div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="card">
            <div class="card-action">
                <h4 class="text-center">About</h4> 
            </div>
            <div class="card-content">
            @if (\Session::has('success'))
              <div class="alert alert-success d-inline ml-2">
                
                  <strong>{!! \Session::get('success') !!}</strong>
                
              </div>
            @endif
              <a href="#" class="btn btn-info d-inline float-right mr-3" data-toggle="modal" data-target="#aboutModal">New Entry</a>
                <div class="table-responsive overflow-hidden pl-2 pr-2">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Icon</th>
                                <th>Number</th>
                                <th>Work</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $count = 1 ?>
                          @foreach ($getabout as $about)
                            <tr id="aid{{$about->id}}">
                              <td>@php echo $count @endphp</td>
                              <td><span class="{{$about->icon}}" style="font-size:20px"></span></td>
                              <td>{{$about->number}}</td>
                              <td>{{$about->work}}</td>
                              <td><a href="edit_aboutIcon/{{$about->id}}" class="btn btn-info">Edit</a></td>
                              <td><a href="javascript:void(0)" onclick="deleteAboutIcon({{$about->id}})" class="btn btn-danger">Delete</a></td>
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

    <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New About</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('add_aboutIcon')}}" enctype="multipart/form-data" id="aboutForm">
              @csrf
              <div class="form-group">
                <label for="icon">Icon</label>
                <input type="text" class="form-control" id="icon" name="icon">
              </div>
              <div class="form-group">
                <label for="number">Number</label>
                <input type="number" class="form-control" id="number" name="number">
              </div>
              <div class="form-group">
                <label for="email">Work</label>
                <input type="text" class="form-control" id="work" name="work">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    
    <script>
      function deleteAboutIcon(id)
      {
        if (confirm("Do you really want to delete this record?")) 
        {
          $.ajax({
          url: 'deleteaboutIcon/'+id,
          type:"DELETE",
          data:{
            _token:$("input[name=_token]").val()
          },
          success:function(response){
            $('#aid'+id).remove();
          }
        });
        }
      }
    </script>
@endsection