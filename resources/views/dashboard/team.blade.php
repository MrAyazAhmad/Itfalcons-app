@extends('dashboard.layout.main')


@section('content')
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
                              <td><img src="<?php echo url('/'); ?>/public/image/team/{{$team->image}}" alt="{{$team->image}}" style="height:50px; width:100px"></td>
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
              <div class="">
                <label for="firstname">Image</label>
                <input type="file" class="form-control" id="image" name="image">
              </div>
              <div class="form-group">
                <label for="lastname">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="email">Designation</label>
                <input type="text" class="form-control" id="designation" name="designation">
              </div>
              <div class="form-group">
                <label for="email">Facebook Link</label>
                <input type="text" class="form-control" id="fb" name="fb">
              </div>
              <div class="form-group">
                <label for="email">Twitter Link</label>
                <input type="text" class="form-control" id="twt" name="twt">
              </div>
              <div class="form-group">
                <label for="email">Instagram Link</label>
                <input type="text" class="form-control" id="inst" name="inst">
              </div>
              <div class="form-group">
                <label for="email">Linkedin Link</label>
                <input type="text" class="form-control" id="lnkd" name="lnkd">
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
@endsection