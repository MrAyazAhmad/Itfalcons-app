@extends('dashboard.layout.main')


@section('content')
<div class="" id="portfolioEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Portfolio</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
            @if (\Session::has('success'))
              <div class="alert alert-success d-inline ml-2 mr-2">
                
                  <strong>{!! \Session::get('success') !!}</strong>
                
              </div>
            @endif
          <div class="modal-body">
            <form method="post" action="{{url('update_portfolio',$portfolio->id)}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="{{$portfolio->id}}">
              <div class="row">
                <div class="form-group col-4">
                  <label for="firstname">Name</label>
                  <input type="text" class="form-control" name="name" value="{{$portfolio->name}}">
                </div>
                <div class="form-group col-4">
                  <label for="email">Type</label>
                  <select name="type" id="getroleF" class="form-control" required>
                    <option value="{{$portfolio->type}}">{{$portfolio->type}}</option>
                    <option value="">none</option>
                    <?php if ("web" != $portfolio->type) { ?>
                    <option value="web">web</option> <?php }
                    if ("card" != $portfolio->type) { ?>
                    <option value="card">card</option> <?php }
                    if ("app" != $portfolio->type) { ?>
                    <option value="app">app</option> <?php }
                    ?>
                  </select>
                </div>
                <div class="form-group col-4">
                  <label for="lastname">Category Name</label>
                  <input type="text" class="form-control" name="category" value="{{$portfolio->category}}">
                </div>
                <div class="form-group col-4">
                  <label for="lastname">Client Name</label>
                  <input type="text" class="form-control" name="client" value="{{$portfolio->client}}">
                </div>
                <div class="form-group col-4">
                  <label for="lastname">Project Date</label>
                  <input type="date" class="form-control" name="project_date" value="{{$portfolio->project_date}}">
                </div>
                <div class="form-group col-4">
                  <label for="lastname">Project Url</label>
                  <input type="text" class="form-control" name="project_url" value="{{$portfolio->project_url}}">
                </div>
                <div class="form-group col-4">
                  <label for="lastname">Short Info</label>
                  <textarea name="info" class="form-control">{{$portfolio->info}}</textarea>
                </div>
                <div class="form-group col-8">
                  <label for="lastname">Description</label>
                  <textarea name="description" class="form-control">{{$portfolio->description}}</textarea>
                  <!-- <input type="text" class="form-control" name="description" value="{{$portfolio->description}}"> -->
                </div>
              </div>
              <!-- <div class="row">
              </div> -->
              <div class="row">
                <div class="col-12">
                  <label for="email" >Image</label>
                  <br>
                  <img src="{{URL::to('public/image/portfolio')}}/{{$portfolio->image}}" class="pb-1 pr-5 pl-5 col-6" alt="">
                  <input type="file" class="form-control"  name="image" >
                </div>
              </div>
                
                  <label for="email" class="col-12 text-center"><strong>Sub Images</strong></label>
                 <input type="file" class="form-control" id="image" name="image2[]" multiple>
              <div class="row">
                @foreach ($portfolioimg as $img)
                  <div class="col-6 text-center" id="pI_id{{$img->id}}">
                    <img src="{{URL::to('public/image/portfolio')}}/{{$img->portfolio_img}}" class="col-12" alt="" style="height:200px;">
                    <a href="javascript:void(0)" onclick="editPortfolioImg({{$img->id}})" class="btn btn-info p-2">Edit</a>
                    <a href="javascript:void(0)" onclick="deletePortfolio({{$img->id}})" class="btn btn-danger p-2">Delete</a>
                  </div>
                
                @endforeach
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div> 
    
    <div class="modal fade" id="portfolioImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Sub Portfolio Image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('update_portfolioImg')}}" enctype="multipart/form-data" id="portfolioForm">
              @csrf
              <div class="">
                <input type="hidden" name="id2" id="id2">
                <label for="email">Image</label>
                <input type="file" class="form-control" id="image" name="image2">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      function editPortfolioImg(id)
      {
        
          console.log(id);  
          $("#id2").val(id);
          $("#portfolioImageModal").modal('toggle');
      }
    </script>
    <script>
      function deletePortfolio(id)
      {
        if (confirm("Do you really want to delete this record?")) 
        {
          console.log("check");
          $.ajax({
          url: '../deleteportfolioimg/'+id,
          type:"DELETE",
          data:{
            _token:$("input[name=_token]").val()
          },
          success:function(response){
            $('#pI_id'+id).remove();
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