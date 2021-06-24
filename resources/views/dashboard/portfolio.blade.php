@extends('dashboard.layout.main')


@section('content')
 @if($errors->first('name') || $errors->first('info') || $errors->first('type') || $errors->first('category') || $errors->first('client')|| $errors->first('project_date') || $errors->first('project_url')|| $errors->first('description')|| $errors->first('image')|| $errors->first('image2[]'))
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
                <h4 class="text-center">Portfolio</h4> 
            </div>
            <div class="card-content">
            @if (\Session::has('success'))
              <div class="alert alert-success d-inline ml-2">
                
                  <strong>{!! \Session::get('success') !!}</strong>
                
              </div>
            @endif
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
                              <td><img src="{{URL::to('public/image/portfolio')}}/{{$portfolio->image}}" alt="{{$portfolio->image}}" style="height:50px; width:100px"></td>

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
              <div class="row">
              <div class="form-group col-md-6 col-sm-12">
                <label for="firstname">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">

                <!-- Show error -->
                @error('name')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="lastname">Info</label>
                <input type="text" class="form-control @error('info') is-invalid @enderror" id="name" name="info">

                <!-- Show error -->
                @error('info')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="email">Portfolio Type</label>
                <select name="type" id="getroleF" class="form-control @error('type') is-invalid @enderror " >
                  <!-- Show error -->
                @error('type')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                  <option value="">none</option>
                  <option value="web">web</option>
                  <option value="car">card</option>
                  <option value="app">app</option>
                </select>
                <!-- <input type="text" class="form-control" id="type" name="type"> -->
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="email">Category Name</label>
                <input type="text" class="form-control @error('category') is-invalid @enderror" id="category" name="category">
                <!-- Show error -->
                @error('category')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="email">Client Name</label>
                <input type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client">

                <!-- Show error -->
                @error('client')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group col-md-6 col-sm-12">
                <label for="email">Project Date</label>
                <input type="date" class="form-control @error('project_date') is-invalid @enderror" id="date" name="project_date">

                <!-- Show error -->
                @error('project_date')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group  col-md-12">
                <label for="email">Project URL</label>
                <input type="text" class="form-control @error('project_url') is-invalid @enderror" id="url" name="project_url">
                <!-- Show error -->
                @error('project_url')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
              <div class="form-group  col-md-12">
                <label for="email">Long Description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"></textarea>
                <!-- Show error -->
                @error('description')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
            <div class="col-md-12">
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
              <div class="col-md-12">
                  <p>Upload image file:</p>
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input  @error('image2[]') is-invalid @enderror" id="customFile" name="image2[]">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>

                <!-- Show error -->
                @error('image2[]')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
              </div>
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
            //SWEET ALERTS
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