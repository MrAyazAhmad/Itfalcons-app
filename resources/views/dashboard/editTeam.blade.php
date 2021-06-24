@extends('dashboard.layout.main')


@section('content')
<div class="" id="teamEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Team</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('update_team',$team->id)}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="{{$team->id}}">
              <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" name="name" value="{{$team->name}}">
              </div>
              <div class="form-group">
                <label for="lastname">Designation</label>
                <input type="text" class="form-control" name="designation" value="{{$team->designation}}">
              </div>
              <div class="form-group">
                <label for="email">Facebook Link</label>
                <input type="text" class="form-control" name="fb" value="{{$team->fb}}">
              </div>
              <div class="form-group">
                <label for="email">Twitter Link</label>
                <input type="text" class="form-control" name="twt" value="{{$team->twt}}">
              </div>
              <div class="form-group">
                <label for="email">Instagram Link</label>
                <input type="text" class="form-control" name="inst" value="{{$team->inst}}">
              </div>
              <div class="form-group">
                <label for="email">Linkedin Link</label>
                <input type="text" class="form-control" name="lnkd" value="{{$team->lnkd}}">
              </div>
              <div class="">
                  <p>Upload image file:</p>
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile" name="image">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <!-- Show error -->
                @error('image')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   <img src="{{URL::to('public/image/team')}}/{{$team->image}}" class="pb-1 pr-5 pl-5 col-6" alt="">
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection