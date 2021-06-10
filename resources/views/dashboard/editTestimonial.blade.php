@extends('dashboard.layout.main')


@section('content')
<div class="" id="testimonialEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Testimonial</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('update_testimonial',$testimonial->id)}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="{{$testimonial->id}}">
              <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" name="name" value="{{$testimonial->name}}">
              </div>
              <div class="form-group">
                <label for="lastname">Designation</label>
                <input type="text" class="form-control" name="designation" value="{{$testimonial->designation}}">
              </div>
              <div class="form-group">
                <label for="email">Description</label>
                <textarea name="description" class="form-control" id="description" rows="4">{{$testimonial->description}}</textarea>
              </div>
              <div class="">
                <label for="email">Image</label>
                <img src="{{URL::to('public/image/testimonial')}}/{{$testimonial->image}}" alt="">
                <input type="file" class="form-control" name="image" >
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection