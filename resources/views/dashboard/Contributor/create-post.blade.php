@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - Create Posts')
@section('active','posts')
@section('breadcumb','DASHBOARD')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Create Post</h4>


                </div>
                <div class="edit-profile card-body">
                    <!-- count error -->
                    @if (count($errors) > 0)
                    <div class="alert alert-danger imgdiv">
                      <strong>Whoops!</strong> There were some problems with your input.
                      <ul>
                        <!-- print  error -->
                        @foreach ($errors->all() as $error_val)
                        <li>{{ $error_val }}</li>
                        @endforeach
                      </ul>
                    </div>
                    @endif
                    @if ($success_message = Session::get('success'))
                    <div class="alert alert-success alert-block imgdiv">
                      <button type="button" class="close imgdiv" data-dismiss="alert">×</button>
                      <strong>{{ $success_message }}</strong>
                    </div>
                    @endif

                  <form action="{{url('/kontributor/posts/create')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" name="title" class="form-control" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                      <div class="text-center">
                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                          <div class="fileinput-new thumbnail">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail" style=""></div>
                          <div>
                            <span style="cursor:pointer" class="btn btn-rose btn-round btn-file">
                              <span class="fileinput-new">Select Thumbnail</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="thumbnail">
                            </span>
                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-8">
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating"> Category</label>
                              <select class="form-control" name="category_id">
                                @foreach($categories as $category)
                                <option value="{{$category -> id}}">{{$category -> kategori }}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating"> Description</label>
                              <textarea class="form-control" rows="5" name="description"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group" >
                          <textarea class="form-control"  rows="20" name="isi_artikel"></textarea>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-success pull-right" name="status_id" value="3">Publish</button>
                    <button type="submit" class="btn btn-info pull-right" name="status_id" value="0">Save to Archive</button>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('custom-js')
<script>
			CKEDITOR.replace( 'isi_artikel' );
		</script>
@endsection
