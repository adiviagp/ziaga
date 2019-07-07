@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - Trash')
@section('active','trash')
@section('breadcumb','TRASH')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">TRASH</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
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

                            <form action="{{url('/kontributor/posts/'.$content -> id.'/status')}}" method="post">
                              {{ csrf_field() }}{{ method_field('PUT') }}
                              <button type="submit" rel="tooltip" title="Restore" name="status_id" value="0" class="btn btn-link btn-sm">
                                <i class="material-icons">restore</i>
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
