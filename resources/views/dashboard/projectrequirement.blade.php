@extends('dashboard.layout.main')

@section('content')
 <section style="padding-top: 0px">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header text-center">
                    <h3>Project Requirements</h3>
                  </div>
                  <div class="card-body">
                    <table id="contactformTable" class="table table-striped p-0">
                      <thead class="thead-dark p-0">
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Technology</th>
                          <th>Deadline</th>
                          <th>Contact</th>
                          <th>Budget</th>
                          <th>Requirement</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($projectreqs as $projectreq)
                        <tr id="pid{{$projectreq->id}}" class="p-0">
                          <td>{{$projectreq->name}}</td>
                          <td>{{$projectreq->email}}</td>
                          <td>{{$projectreq->technology}}</td>
                          <td>{{$projectreq->deadline}}</td>
                          <td>{{$projectreq->contact}}</td>
                          <td>{{$projectreq->budget}}</td>
                          <td>{{$projectreq->requirement}}</td>
                          <td><a href="javascript:void(0)" onclick="Link({{$projectreq->id}})" class="btn btn-info">View</a></td>
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
                  	<label for="subject">Technology</label>
                  	<input type="text" name="technology" id="technology" class="form-control" readonly>
                    <label for="email">Deadline</label>
                    <input type="text" id="deadline" name="deadline" class="form-control" readonly>
                    <label for="email">Contact</label>
                    <input type="text" id="contact" name="contact" class="form-control" readonly>
                    <label for="subject">Budget</label>
                    <input type="text" name="budget" id="budget" class="form-control" readonly>
                    <label for="email">Requirement</label>
                    <input type="text" id="requirement" name="requirement"  class="form-control" readonly>
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
      $.get('projectreqs/'+id,function(projectreq){
           
        $("#id").val(projectreq.id);
        $("#name").val(projectreq.name);
        $("#email").val(projectreq.email);
        $("#technology").val(projectreq.technology);
        $("#deadline").val(projectreq.deadline);
        $("#contact").val(projectreq.contact);
         $("#budget").val(projectreq.budget);
        $("#requirement").val(projectreq.requirement);
        $("#linkModal").modal('toggle');
      });
    }
  </script>

