@extends('dashboard.layout.main')


@section('content')
<div class="" id="aboutEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create About</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('createaboutVideo')}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="">
              <div class="form-group">
                <label for="firstname">Video Link</label>
                <input type="text" class="form-control" name="video" value="">
              </div>
              <div class="form-group">
                <label for="lastname">Heading</label>
                <input type="text" class="form-control" name="heading" value="">
              </div>
              <div class="form-group">
                <label for="email">Description</label>
                <input type="text" class="form-control" name="des" value="">
              </div>
              <div class="form-group">
                <label for="email">Sub Description 1</label>
                <input type="text" class="form-control" name="sudes1" value="">
              </div>
              <div class="form-group">
                <label for="email">Sub Description 2</label>
                <input type="text" class="form-control" name="sudes2" value="">
              </div>
              <div class="form-group">
                <label for="email">Sub Description 3</label>
                <input type="text" class="form-control" name="sudes3" value="">
              </div>
              <div class="form-group">
                <label for="email">Sub Description 4</label>
                <input type="text" class="form-control" name="sudes4" value="">
              </div>
              <div class="form-group">
                <label for="email">Description 2</label>
                <input type="text" class="form-control" name="des2" value="">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection