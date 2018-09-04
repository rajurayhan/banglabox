@extends('backend.layouts.master')
@section('title')
Banglabox || Newsletter
@endsection
@section('headSection')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Users
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Subscriber</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

    <!--------------------------
    | Your Page Content Here |
    -------------------------->
    
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Subscriber List</h3>
              <button type="button" class="btn btn-sm btn-success pull-right" onclick="sendNewsLetter()">
                Send Newsletter</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="categoryList" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Email</th>
                  <th>Subscribed At</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($subscribers as $subscriber)
                        <tr> 
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $subscriber->email }}</td>
                            <td>{{ $subscriber->created_at }}</td>
                            <td><span class="label label-@if($subscriber->status){{ 'success' }}@else{{ 'danger' }}@endif">@if($subscriber->status){{ 'Active' }}@else{{ 'Unsubscribed' }}@endif</span></td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>SL</th>
                  <th>Email</th>
                  <th>Subscribed At</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    

    </section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Add Modal -->
<div class="modal fade" id="addUser">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New User</h4>
        </div>
        <div class="modal-body">
            <!-- Form Starts -->
            <form method="POST" action="{{ route('postUser') }}">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control"  name="name" placeholder="User Name" autocomplete="off" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control"  name="email" placeholder="User Email" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control"  name="password" placeholder="User Password" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="active">Status</label>
                        <select class="form-control" name="active">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                        </select>
                    </div>
                    
                    
                </div>
                <!-- /.box-body -->
            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>  
        <!-- Form Ends -->
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- Edit Modal -->

<div class="modal fade" id="editUser">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit User</h4>
        </div>
        <div class="modal-body">
            <!-- Form Starts -->
            <form method="POST" action="{{ route('updateUser') }}">
                {{ csrf_field() }}
                <div class="box-body">
                <div class="form-group">
                        <label for="name">User Name</label>
                        <input type="text" class="form-control" id="name"  name="name" placeholder="User Name" autocomplete="off" required>
                        <input type="hidden" class="form-control" id="userID"  name="userID" placeholder="User ID" autocomplete="off" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="User Email" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control"  name="password" placeholder="User Password" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="active">Status</label>
                        <select class="form-control" name="active" id="active">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                        </select>
                    </div>
                    
                    
                </div>
                <!-- /.box-body -->
            
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>  
        <!-- Form Ends -->
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('footSection')
<!-- DataTables -->
<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script>
  $(document).ready(function() {
        $('#categoryList').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    } );

  function editUser(id) {
    	// alert(id);
    	// $('#editExpenseModal').modal('show');
    	$.ajaxSetup({
	            headers: {
	                'X-CSRF-TOKEN': '<?= csrf_token() ?>'
	            }
	        });
	        $.ajax({
	            url: "{{ route('getUserInfo') }}",
	            data: {id},
	            type: 'GET',
	            datatype: 'JSON',
	            success: function (response) {
	            		console.log(response);
                        $('#userID').val(response.id);
	            		$('#name').val(response.name);
                        $('#email').val(response.email);
                        $('#active').val(response.active);
	            		$('#editUser').modal('show');
	                },

	        });
			
	}

    function sendNewsLetter(){
        // alert('Newsletter Button!');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': '<?= csrf_token() ?>'
            }
        });
        
        $.ajax({
	            url: "{{ route('sendNewsletter') }}",
	            type: 'GET',
	            datatype: 'JSON',
	            success: function (response) {
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-top-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                        }
                    toastr.success(response, 'Success');
	            },

	        });

    }
</script>
@endsection