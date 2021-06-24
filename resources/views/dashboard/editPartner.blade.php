@extends('dashboard.layout.main')


@section('content')
<div class="" id="teamEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Technology</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('update_technology',$partner->id)}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="{{$partner->id}}">
              <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" name="partner_name" value="{{$partner->partner_name}}">
              </div>
              
           
               <div class="form-group">
                  <p>Upload image file:</p>
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="customFile" name="company_logo">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                <!-- Show error -->
                @error('company_logo')
                       <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                       </span>
                   @enderror
                   <img src="{{URL::to('public/image/partner')}}/{{$partner->company_logo}}" class="pb-1 pr-5 pl-5 col-6" alt="">
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection