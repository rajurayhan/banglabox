@extends('backend.layouts.master')
@section('title')
Banglabox || Add New Article
@endsection
@section('headSection')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

    <!-- Select 2 -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">

    {{-- TinyMCE --}}
    <script type="text/javascript" src="{{URL::asset('vendor/tinymce/js/tinymce/tinymce.min.js')}}"></script>

    <!-- Tags Input -->
    <!-- <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}"> -->
    <link rel="stylesheet" href="{{ asset('vendor/tagsinput/jquery.tagsinput.min.css') }}">

    <!-- Dropify -->
    <link rel="stylesheet" href="{{ asset('vendor/dorpify/dist/css/dropify.min.css') }}">

    <script>
      var editor_config = {
        path_absolute : "/",
        selector: "#description",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'BanglaBox Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };

      tinymce.init(editor_config);
    </script>
    <style type="text/css">
        [class^='select2'] {
          border-radius: 0px !important;
          line-height: 22px !important;
        }
    }
    </style>
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
      <div class="row">
        <!-- left column -->
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {{-- <form method="post" action="{{ route('updateArticle') }}" enctype="multipart/form-data"> --}}
              {{ Form::open(['route'=>['updateArticle', $article->id], 'class'=>'form','enctype' =>'multipart/form-data' ,'files'=>true]) }}
              {{-- {{ csrf_field() }} --}}
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" placeholder="Enter Title" required>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  {{-- <input type="text" class="form-control" id="title" placeholder="Enter Title"> --}}
                  <textarea id="description" name="description" rows="20">{{ $article->description }}</textarea>
                </div>
              </div>
              <!-- /.box-body -->

              {{-- <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div> --}}
          </div>
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-3">
          <!-- Horizontal Form -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Featured Image</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="category_id" class="col-sm-2 control-label">Tags</label> -->

                  <div class="col-sm-12">
                    <!-- <select multiple data-role="tagsinput" class="form-controll">
                    </select> -->
                    {{-- <input type="file" class="form-control" id="dropify" name="image" placeholder="Upload Image"> --}}
                    {{-- {!! Form::file('image', ['id' => 'dropify', 'class' => 'form-control']) !!} --}}
                    <div>
                       <img src="{{ route('home') }}/uploads/featured/{{ $article->image }} " id="blah" alt="" style="width: 100%">
                    </div>
                    <input type="file" name="image" id="" onchange="readURL(this);" class="form-control"  />
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
          

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="category_id" class="col-sm-2 control-label">Category</label> -->

                  <div class="col-sm-12">
                    <select name="category_id" id="category_id" class="form-control select2"  data-placeholder="Select a Category"
                        style="width: 100%;">
                      @foreach($categories as $category)
                        <option @if($article->category_id == $category->id){{ 'selected' }}@endif value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tags</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <!-- <label for="category_id" class="col-sm-2 control-label">Tags</label> -->

                  <div class="col-sm-12">
                    <!-- <select multiple data-role="tagsinput" class="form-controll">
                    </select> -->
                    <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter Tags">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Publish</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label for="status" class="col-sm-2 control-label">Status</label>

                  <div class="col-sm-10">
                    <select name="status" id="status" class="form-control">
                        <option value="1">Published</option>
                        <option value="0">Draft</option>
                    </select>
                  </div>
                </div>

                <div class="form-group" style="margin-top:50px !important;">
                  <label for="status" class="col-sm-2 control-label">Visibility</label>

                  <div class="col-sm-10">
                    <select name="visibility" id="visibility" class="form-control">
                        <option value="1">Public</option>
                        <option value="0">Private</option>
                    </select>
                  </div>
                </div>                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="button" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-success pull-right">Publish</button>
              </div>
              <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        {{ Form::close()}}

          

        </div>
        <!--/.col (right) -->
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
<script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- Tags Input -->
<!-- <script type="text/javascript" src="{{URL::asset('vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script> -->
<script src="{{ asset('vendor/tagsinput/jquery.tagsinput.min.js') }}"></script>

<script src="{{ asset('vendor/dorpify/dist/js/dropify.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
        $('#tags').tagsInput();
        $('#tags').importTags('{{ $article->tags }}');
        $('#visibility').val({{ $article->visibility }});
        $('#status').val({{ $article->status }});
        $('#category_id').val({{ $article->category_id }});

        $('#dropify').dropify({
          messages: {
              'default': 'Drag and drop a file here or click',
              'replace': 'Drag and drop or click to replace',
              'remove':  'Remove',
              'error':   'Ooops, something wrong happended.'
          }
      });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    // .width(350)
                    // .height(250);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>


@endsection