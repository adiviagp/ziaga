@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - Edit Category')
@section('active','category')
@section('breadcumb','DASHBOARD')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Edit Category</h4>
                </div>
                <div class="edit-profile card-body">

                  <form action="#" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}{{ method_field('PUT') }}

                    <div class="row">
                      <div class="col-md-4">
                      <div class="text-center">
                        <div class="fileinput fileinput-exists text-center" data-provides="fileinput">
                          <div class="fileinput-new thumbnail">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail" style="">
                            <img class="card-img-top" src="#asseturl" alt="Card image cap">
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
                            <label class="bmd-label-floating">Title</label>
                            <input type="text" name="title" class="form-control" value="#" required>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                              <label class="bmd-label-floating"> Description</label>
                              <textarea class="form-control" rows="5" name="description">Description</textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-info pull-right" name="status_id" value="0">Edit</button>
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
