@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - Pending Posts')
@section('active','pending-posts')
@section('breadcumb','DASHBOARD')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">Pending Posts</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">

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

                    <table id="post" class="table table-striped table-bordered">
                      <thead class="text-primary">
                        <th>
                          Title
                        </th>
                        <th>
                          Category
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($content as $content)
                        <tr>
                          <td>
                            <p>{{$content -> title}}</p>
                          </td>
                          <td>
                            <p>{{$content -> category -> kategori}}</p>
                          </td>
                          <td class="td-action" style="display:flex">
                            <a href="{{url('/post/'.$content -> id)}}" target="_blank" rel="tooltip" title="View Post" class="btn btn-success btn-link btn-sm">
                              <i class="material-icons">visibility</i>
                            </a>

                            <form action="{{url('/bnpb/posts/'.$content -> id.'/status')}}" method="post">
                              {{ csrf_field() }}{{ method_field('PUT') }}
                              <button type="submit" rel="tooltip" title="Accept Post" name="status_id" value="1" class="btn btn-link btn-sm">
                                <i class="material-icons">check</i>
                              </button>
                            <button type="submit" rel="tooltip" title="Decline post" name="status_id" value="4" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">cancel</i>
                            </button>
                          </form>

                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
