@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard - Contributors')
@section('active','contributors')
@section('breadcumb','CONTRIBUTORS')
@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">Contributors</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="post" class="table table-striped table-bordered">
                      <thead class="text-primary">
                        <th>
                          Nama
                        </th>
                        <th>
                          Total Posts
                        </th>
                        <th>
                          Action
                        </th>
                      </thead>
                      <tbody>
                        @foreach($kontributor as $kontributor)
                        <tr>
                          <td>
                            {{$kontributor -> namaDepan }} {{$kontributor -> namaBelakang }}
                          </td>
                          <td class="text-primary">
                            {{$kontributor -> total}} Article
                          </td>
                          <td class="td-action">
                            <button type="button" rel="tooltip" title="View Detail" class="btn btn-link btn-sm">
                              <i class="material-icons">visibility</i>
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
