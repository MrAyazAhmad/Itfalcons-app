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
              <a href="addVideo" class="btn btn-info d-inline float-right mr-3" >New Entry</a>
                <div class="table-responsive overflow-hidden pl-2 pr-2">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Video Link</th>
                                <th>Heading</th>
                                <th>Descriptions</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $count = 1 ?>
                          @foreach ($getabout as $about)
                            <tr id="aid{{$about->id}}">
                              <td>@php echo $count @endphp</td>
                              <td>{{$about->video}}</td>
                              <td>{{$about->heading}}</td>
                              <td><a href="javascript:void(0)" onclick="Description({{$about->id}})" class="btn btn-info">View</a></td>
                              <td><a href="edit_aboutVideo/{{$about->id}}" class="btn btn-info">Edit</a></td>
                              <td><a href="javascript:void(0)" onclick="deleteAboutvideo({{$about->id}})" class="btn btn-danger">Delete</a></td>
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

  <div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-center">
          <h5 class="modal-title" id="exampleModalLabel">Description</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="departmentEditForm" method="post">
            @csrf
            <input type="hidden" name="id" id="id">
            <div class="form-group">
              <label for="email">Description 1</label>
              <textarea class="form-control" id="description" rows="2" readonly></textarea>
            </div>
            <div class="form-group">
              <label for="email">Sub Description 1</label>
              <textarea class="form-control" id="description1" rows="5" readonly></textarea>
            </div>
            <div class="form-group">
              <label for="email">Sub Description 2</label>
              <textarea class="form-control" id="description2" rows="5" readonly></textarea>
            </div>
            <div class="form-group">
              <label for="email">Sub Description 3</label>
              <textarea class="form-control" id="description3" rows="5" readonly></textarea>
            </div>
            <div class="form-group">
              <label for="email">Sub Description 4</label>
              <textarea class="form-control" id="description4" rows="5" readonly></textarea>
            </div>
            <div class="form-group">
              <label for="email">Description 2</label>
              <textarea class="form-control" id="description5" rows="5" readonly></textarea>
            </div>
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function Description(id)
    {
      $.get('videoDescriptions/'+id,function(description){
           
        $("#id").val(description.id);
        $("#description").val(description.des);
        $("#description1").val(description.sudes1);
        $("#description2").val(description.sudes2);
        $("#description3").val(description.sudes3);
        $("#description4").val(description.sudes4);
        $("#description5").val(description.des2);
        $("#descriptionModal").modal('toggle');
      });
    }
  </script>

    <script>
      function deleteAboutvideo(id)
      {
        if (confirm("Do you really want to delete this record?")) 
        {
          $.ajax({
          url: 'deleteaboutVideo/'+id,
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