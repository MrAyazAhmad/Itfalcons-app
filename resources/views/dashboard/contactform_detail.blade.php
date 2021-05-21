@extends('dashboard.layout.main')

@section('content')
 <section style="padding-top: 0px">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header text-center">
                    <h3>Contactform</h3>
                  </div>
                  <div class="card-body">
                    <table id="contactformTable" class="table table-striped p-0">
                      <thead class="thead-dark p-0">
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($contactforms as $contactform)
                        <tr id="cid{{$contactform->id}}" class="p-0">
                          <td>{{$contactform->name}}</td>
                          <td>{{$contactform->email}}</td>
                          <td>{{$contactform->subject}}</td>
                          <td>{{$contactform->message}}</td>
                          <td><a href="javascript:void(0)" onclick="Link({{$contactform->id}})" class="btn btn-info">View</a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



         <!-- View Description Model -->
        <div class="modal fade" id="linkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header d-flex justify-content-center">
                <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="contactformEditForm" method="post">
                  @csrf
                  <input type="hidden" name="id" id="id">
                  <div class="form-group">
                  	<label for="name">Name</label>
                  	<input type="text" name="name" id="name" class="form-control" readonly>
                  	<label for="email">Email</label>
                  	<input type="email" name="email" id="email" class="form-control" readonly>
                  	<label for="subject">Subject</label>
                  	<input type="text" name="subject" id="subject" class="form-control" readonly>
                    <label for="email">Message</label>
                    <textarea id="message" rows="5" class="form-control" readonly></textarea>
                    <!-- <input type="text" class="form-control" id="inst_link3" readonly> -->
                  </div>
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

@endsection



 <script>
    function Link(id)
    {
      $.get('contactforms/'+id,function(contactform){
           
        $("#id").val(contactform.id);
        $("#name").val(contactform.name);
        $("#email").val(contactform.email);
        $("#subject").val(contactform.subject);
        $("#message").val(contactform.message);
        $("#linkModal").modal('toggle');
      });
    }
  </script>

