@extends('backend.layouts.master')
@section('title')
Banglabox || Articles
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
            Articles
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Articles</li>
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
              <h3 class="box-title">Article List</h3>
              <a href="{{ route('newArticle') }}"><button type="button" class="btn btn-sm btn-success pull-right">
                Add New</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="articleList" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Created At</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                      <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td><img src="{{ route('home') }}/uploads/featured/{{ $article->image }}"  class="img-thumbnail img-responsive" style="max-width: 150px;"></td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category->name }}</td>
                        <td>{{ $article->slug }}</td>
                        <td>{{ $article->creted_at }}</td>
                        <td><a href="{{ route('editArticle', $article->id) }}"><button type="button" class="btn btn-sm btn-warning"><span class="glyphicon glyphicon-edit"></span></button></a></td>
                      </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>SL</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Created At</th>
                  <th>Actions</th>
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


@endsection

@section('footSection')
<!-- DataTables -->
<script src="{{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
  $(function () {
    $('#articleList').DataTable()
    // $('#example2').DataTable({
    //   'paging'      : true,
    //   'lengthChange': false,
    //   'searching'   : false,
    //   'ordering'    : true,
    //   'info'        : true,
    //   'autoWidth'   : false
    // })
  })
</script>
@endsection