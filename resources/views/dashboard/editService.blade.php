@extends('dashboard.layout.main')


@section('content')
<div class="" id="serviceEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('update_service',$service->id)}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="{{$service->id}}">
              <div class="form-group">
                 <label for="email">Icon</label>
                <span class="{{$service->icon}}"></span>
                <input type="text" class="form-control" name="icon" value="{{$service->icon}}">
              </div>
              <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" name="name" value="{{$service->name}}">
              </div>
              <div class="form-group">
                <label for="lastname">Short Info</label>
                <input type="text" class="form-control" name="info" value="{{$service->info}}">
              </div>
              <div class="form-group">
                <label for="lastname">Long description</label>
                <input type="text" class="form-control" name="long_description" value="{{$service->long_description}}">
              </div>
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
                   <img src="{{URL::to('public/image/service')}}/{{$service->s_image}}" class="pb-1 pr-5 pl-5 col-6" alt="">
              </div>






              <div class="form-group">
                <label for="lastname">Description</label>
                <textarea name="description" class="form-control" id="description">{!!$service->description!!}</textarea>

                <!-- <textarea name="description" class="form-control">{!!$service->description!!}</textarea> -->
                <!-- <input type="text" class="form-control" name="description" value="{{$service->description}}"> -->
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

@endsection