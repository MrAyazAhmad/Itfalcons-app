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
                <label for="lastname">Description</label>
                <textarea name="description" class="form-control">{{$service->description}}</textarea>
                <!-- <input type="text" class="form-control" name="description" value="{{$service->description}}"> -->
              </div>          
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection