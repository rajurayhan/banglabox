@extends('backend.layouts.master')
@section('title')
Banglabox || Users
@endsection
@section('headSection')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
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
            <li class="active">Users</li>
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
              <h3 class="box-title">User List</h3>
              <button type="button" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#addUser">
                Add New</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="categoryList" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr align="center"> 
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td><span class="label label-@if($user->active){{ 'success' }}@else{{ 'danger' }}@endif">@if($user->active){{ 'Active' }}@else{{ 'Inactive' }}@endif</span></td>
                            
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" onclick="editUser({{ $user->id }});"><span class="glyphicon glyphicon-edit"></span></button>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('deleteUser',$user->id) }}" style="display: none;" method="post">
                            
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                </form>
                                <button type="button" class="btn btn-sm btn-danger" onclick="
                                if(confirm('Are you sure, You want to delete this?'))
                                {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $user->id }}').submit();}else{ event.preventDefault(); }">
                                    <span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
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

<script>
  $(function () {
    $('#categoryList').DataTable()
    // $('#example2').DataTable({
    //   'paging'      : true,
    //   'lengthChange': false,
    //   'searching'   : false,
    //   'ordering'    : true,
    //   'info'        : true,
    //   'autoWidth'   : false
    // })
  })

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
</script>
@endsection