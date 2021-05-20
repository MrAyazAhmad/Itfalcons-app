@extends('dashboard.layout.main')


@section('content')
  <div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="card">
            <div class="card-action">
                <h4 class="text-center">Portfolio</h4> 
            </div>
            <div class="card-content">
              <a href="#" class="btn btn-info d-inline float-right mr-3" data-toggle="modal" data-target="#portfolioModal">New Entry</a>
                <div class="table-responsive overflow-hidden pl-2 pr-2">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Info</th>
                                <th>Type</th>
                                <th>Image</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $count = 1 ?>
                          @foreach ($getportfolio as $portfolio)
                            <tr id="pid{{$portfolio->id}}">
                              <td>@php echo $count @endphp</td>
                              <td>{{$portfolio->name}}</td>
                              <td>{{$portfolio->info}}</td>
                              <td>{{$portfolio->type}}</td>
                              <td><img src="<?php echo url('/'); ?>/public/image/portfolio/{{$portfolio->image}}" alt="{{$portfolio->image}}" style="height:50px; width:100px"></td>
                              <td><a href="edit_portfolio/{{$portfolio->id}}" class="btn btn-info">Edit</a></td>
                              <td><a href="javascript:void(0)" onclick="deletePortfolio({{$portfolio->id}})" class="btn btn-danger">Delete</a></td>
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

    <div class="modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Portfolio</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('add_portfolio')}}" enctype="multipart/form-data" id="portfolioForm">
              @csrf
              <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="form-group">
                <label for="lastname">Info</label>
                <input type="text" class="form-control" id="name" name="info">
              </div>
              <div class="form-group">
                <label for="email">Portfolio Type</label>
                <input type="text" class="form-control" id="type" name="type">
              </div>
              <div class="">
                <label for="email">Image</label>
                <input type="file" class="form-control" id="image" name="image">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    
    
    <script>
      function deletePortfolio(id)
      {
        if (confirm("Do you really want to delete this record?")) 
        {
          $.ajax({
          url: 'deleteportfolio/'+id,
          type:"DELETE",
          data:{
            _token:$("input[name=_token]").val()
          },
          success:function(response){
            $('#pid'+id).remove();
          }
        });
        }
      }
    </script>
@endsection