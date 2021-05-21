@extends('dashboard.layout.main')


@section('content')
<div class="" id="aboutEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit About</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('update_aboutIcon',$about->id)}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="{{$about->id}}">
              <div class="form-group">
                <label for="firstname">Icon</label>
                <span class="{{$about->icon}}" style="font-size:20px"></span>
                <input type="text" class="form-control" name="icon" value="{{$about->icon}}">
              </div>
              <div class="form-group">
                <label for="lastname">Number</label>
                <input type="number" class="form-control" name="number" value="{{$about->number}}">
              </div>
              <div class="form-group">
                <label for="email">Work</label>
                <input type="text" class="form-control" name="work" value="{{$about->work}}">
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection