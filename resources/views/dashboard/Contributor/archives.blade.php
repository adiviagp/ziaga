@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - Archives')
@section('active','archive')
@section('breadcumb','ARCHIVES')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">Archives</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="post" class="table table-striped table-bordered">
                      <thead class="text-primary">
                        <th>
                          Title
                        </th>
                        <th>
                          Cataegory
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
                            <a href="{{url('/kontributor/posts/'.$content -> id.'/edit')}}" rel="tooltip" title="Edit Post" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </a>

                            <form action="{{url('/kontributor/posts/'.$content -> id.'/status')}}" method="post">
                              {{ csrf_field() }}{{ method_field('PUT') }}
                              <button type="submit" rel="tooltip" title="Publish" name="status_id" value="1" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">publish</i>
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
