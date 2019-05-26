@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - Settings')
@section('active','settings')
@section('breadcumb','SETTINGS')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="edit-profile card-body">
                  <form action="{{url('/kontributor/'.$auth.'/settingUpdate')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}{{ method_field('PUT') }}

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

                    <div class="row">
                      <div class="col-md-3">
                      <div class="text-center">
                        <div class="fileinput fileinput-exists text-center" data-provides="fileinput">
                          <div class="fileinput-new thumbnail">
                          </div>
                          <div class="fileinput-preview fileinput-exists thumbnail" style="">
                            <img class="card-img-top" src="{{asset('/images/'.$setting -> foto)}}" alt="Card image cap">
                          </div>
                          <div>
                            <span style="cursor:pointer" class="btn btn-rose btn-round btn-file">
                              <span class="fileinput-new">Select Thumbnail</span>
                              <span class="fileinput-exists">Change</span>
                              <input type="file" name="foto">
                            </span>
                            <a href="#" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-9">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Position</label>
                            <input type="text" class="form-control" value="Kontributor" disabled required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Email address</label>
                            <input type="email" class="form-control" value="{{$setting -> email }}" disabled required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Nama Depan</label>
                            <input type="text" class="form-control" required value="{{$setting -> namaDepan }}" name="namaDepan">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Nama Belakang</label>
                            <input type="text" class="form-control" required value="{{$setting -> namaBelakang}}" name="namaBelakang">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="bmd-label-floating">Alamat</label>
                            <input type="text" class="form-control" required name="alamat" value="{{$setting -> alamat }}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Kota</label>
                            <input type="text" class="form-control" required name="kota" value="{{$setting -> kota}}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Provinsi</label>
                            <input type="text" class="form-control" required name="provinsi" value="{{$setting -> provinsi}}">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="bmd-label-floating">Kode Pos</label>
                            <input type="text" class="form-control" required name="kodePos" value="{{$setting -> kodePos }}">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <div class="form-group">
                              <label class="bmd-label-floating">Tentang Saya</label>
                              <textarea class="form-control" rows="5" name="tentangSaya">{{$setting -> tentangSaya}}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <div class="row">
                        <div class="col-md-12 change-Password"><label for="">Change Password (Leave Blank If Doesn't Change The Password)</label></div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">Recent Password</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="bmd-label-floating">New Password</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div> -->
                    </div>
                    </div>

                    <button type="submit" class="btn btn-success pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
