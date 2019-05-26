@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - All Category')
@section('active','category')
@section('breadcumb','DASHBOARD')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <a href="{{url('/bnpb/kategori/tambah')}}" class="btn btn-success pull-right " style="margin-bottom:50px">Tambah Kategori</a>
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">All Category</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="post" class="table table-striped table-bordered">
                      <thead class="text-primary">
                        <th>
                          Category
                        </th>
                        <th>
                          Article
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($kategori as $kategori)
                        <tr>
                          <td>
                            <p>{{$kategori -> kategori}}</p>
                          </td>
                          <td>
                            <p>{{$kategori -> content -> count()}}</p>

                          </td>
                          <td class="td-action">
                            <a href="{{url('/kategori/' .$kategori->id)}}" target="_blank" rel="tooltip" title="View Post" class="btn btn-success btn-link btn-sm">
                              <i class="material-icons">visibility</i>
                            </a>
                            <a href="{{url('/bnpb/kategori/edit/' .$kategori->id)}}" rel="tooltip" title="Edit Post" class="btn btn-primary btn-link btn-sm">
                              <i class="material-icons">edit</i>
                            </a>
                            <button type="button" rel="tooltip" title="Trash" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </button>
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
