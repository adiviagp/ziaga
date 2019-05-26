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
                  <h4 class="card-title">Edit Post</h4>
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

                  <form action="{{url('/kontributor/posts/'.$content -> id.'/update')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}{{ method_field('PUT') }}
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Title</label>
                          <input type="text" name="title" class="form-control" value="{{$content -> title}}" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                      <div class="text-center">
                        <div class="fileinput fileinput-exists text-center" data-provides="fileinput">
                          <div class="fileinput-new thumbnail">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail" style="">
                            <img class="card-img-top" src="{{asset('images/'.$content->thumbnail)}}" alt="Card image cap">
                          </div>
                          <div>
                            <span style="cursor:pointer" class="btn btn-rose btn-round btn-file">
                              <span class="fileinput-new">Select Thumbnail</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="thumbnail">
                            </span>
                            <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-8">
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating"> Category</label>
                              <select class="form-control" name="category_id">
                                <option value="{{$content -> category -> id}}">{{$content -> category -> kategori }}</option>
                                @foreach($categories as $category)
                                <option value="{{$category -> id}}">{{$category -> kategori }}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating"> Description</label>
                              <textarea class="form-control" rows="5" name="description">{{$content -> description}}</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-12">
                        <div class="form-group" >
                          <!-- <label class="bmd-label-floating">Isi Artikel</label> -->
                          <textarea class="form-control" name="isi_artikel" rows="20">{{$content -> isi_artikel}}</textarea>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info pull-right" name="status_id" value="3">Edit</button>
                    <div class="clearfix"></div>
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
