@extends('dashboard.layout.main')


@section('content')
<div class="" id="portfolioEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Portfolio</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
              <!-- <span aria-hidden="true">&times;</span> -->
            <!-- </button> -->
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('update_portfolio',$portfolio->id)}}" enctype="multipart/form-data">
              @csrf
              
              <input type="hidden" name="id" id="id" value="{{$portfolio->id}}">
              <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" name="name" value="{{$portfolio->name}}">
              </div>
              <div class="form-group">
                <label for="lastname">Info</label>
                <input type="text" class="form-control" name="info" value="{{$portfolio->info}}">
              </div>
              <div class="form-group">
                <label for="email">Type</label>
                <input type="text" class="form-control" name="type" value="{{$portfolio->type}}">
              </div>
              <div class="">
                <label for="email">Image</label>
                
                <img src="<?php echo url('/'); ?>/public/image/portfolio/{{$portfolio->image}}" alt="">
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