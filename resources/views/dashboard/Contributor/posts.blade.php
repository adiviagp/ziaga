@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - All Posts')
@section('active','posts')
@section('breadcumb','DASHBOARD')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">All Posts</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="post" class="table table-striped table-bordered">
                      <thead class="text-primary">
                        <th>
                          Title
                        </th>
                        <th>
                          Cetegory
                        </th>
                        <th>
                          Status
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
                          <td>
                            @if($content -> status_id == 1)
                            <span class="badge badge-success">Published</span>
                            @elseif($content -> status_id == 3)
                            <span class="badge badge-secondary">Pending</span>
                            @elseif($content -> status_id == 4)
                            <span class="badge badge-danger">Decline</span>
                            @endif
                          </td>
                          <td class="td-action" style="display:flex">
                            <a href="{{url('/post/'.$content -> id)}}" target="_blank" rel="tooltip" title="View Post" class="btn btn-success btn-link btn-sm">
                              <i class="material-icons">visibility</i>
                            </a>
                            <a href="{{url('/kontributor/posts/'.$content -> id.'/edit')}}" rel="tooltip" title="Edit Post" class="btn btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </a>

                            <form action="{{url('/kontributor/posts/'.$content -> id.'/status')}}" method="post">
                              {{ csrf_field() }}{{ method_field('PUT') }}
                              <button type="submit" rel="tooltip" title="Archive" name="status_id" value="0" class="btn btn-link btn-sm">
                                <i class="material-icons">archive</i>
                              </button>
                            <button type="submit" rel="tooltip" title="Trash" name="status_id" value="2" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">delete</i>
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
