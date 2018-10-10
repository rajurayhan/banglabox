@extends('backend.layouts.master')
@section('title')
Banglabox || Video
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
            Videos
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Videos</li>
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
              <h3 class="box-title">Video List</h3>
              <button type="button" class="btn btn-sm btn-success pull-right" data-toggle="modal" data-target="#addCategory">
                Add New</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="categoryList" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Title</th>
                  <th>Source</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($videos as $video)
                        <tr align="center"> 
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $video->title }}</td>
                            <td>{{ $video->url }}</td>
                            <td>
                            <!-- <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editCategory"><span class="glyphicon glyphicon-edit"></span></button> -->
                            <button type="button" class="btn btn-sm btn-warning" onclick="editCategory({{ $video->id }});"><span class="glyphicon glyphicon-edit"></span></button>
                            </td>
                            <td>
                                <form id="delete-form-{{ $video->id }}" action="{{ route('deleteVideo',$video->id) }}" style="display: none;" method="post">
                            
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                </form>
                                <button type="button" class="btn btn-sm btn-danger" onclick="
                                if(confirm('Are you sure, You want to delete this?'))
                                {
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $video->id }}').submit();}else{ event.preventDefault(); }">
                                    <span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>SL</th>
                  <th>Title</th>
                  <th>Source</th>
                  <th>Edit</th>
                  <th>Delete</th>
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
<div class="modal fade" id="addCategory">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add New Video</h4>
        </div>
        <div class="modal-body">
            <!-- Form Starts -->
            <form method="POST" action="{{ route('postVideo') }}">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="url">Youtube URL</label>
                        <input type="text" class="form-control"  name="url" placeholder="Vedio Source" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control"  name="title" placeholder="Vedio Title" autocomplete="off" required>
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

<div class="modal fade" id="editCategory">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit Video</h4>
        </div>
        <div class="modal-body">
            <!-- Form Starts -->
            <form method="POST" action="{{ route('updateVideo') }}">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="name">Youtube URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="Category Name" autocomplete="off" required>
                        <input type="hidden" class="form-control" id="vidID" name="vidID" placeholder="Video ID" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control"  name="title" id="title" placeholder="Vedio Title" autocomplete="off" required>
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

  function editCategory(id) {
    	// alert(id);
    	// $('#editExpenseModal').modal('show');
    	$.ajaxSetup({
	            headers: {
	                'X-CSRF-TOKEN': '<?= csrf_token() ?>'
	            }
	        });
	        $.ajax({
	            url: "{{ route('getVideo') }}",
	            data: {id},
	            type: 'GET',
	            datatype: 'JSON',
	            success: function (response) {
	            		console.log(response);
                        $('#vidID').val(response.id);
                        $('#url').val(response.url);
                        $('#title').val(response.title);
	            		$('#editCategory').modal('show');
	                },

	        });
			
	}
</script>
@endsection