@extends('dashboard.layout.main')


@section('content')
<div class="" id="serviceEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Technology</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('update_serviceTech',$service->id)}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="{{$service->id}}">
              
              <div class="form-group">
                <label for="firstname">Service Name</label>
                <input type="text" class="form-control" name="service_id" value="{{$service->service_id}}" readonly>
              </div>
              <div class="form-group">
                <label for="lastname">Technology</label>
                <input type="text" class="form-control" name="technology" value="{{$service->technology}}">
              </div>          
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection