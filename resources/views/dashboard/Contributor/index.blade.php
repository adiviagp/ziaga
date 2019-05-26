@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard')
@section('active','dashboard')
@section('breadcumb','DASHBOARD KONTRIBUTOR')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="featured card card-stats">
          <div class="card-header">
            <div class="card-icon">
              <img src="{{asset('/assets/img/blog.svg')}}">
            </div>
            <div class="detail text-center">
              <p class="card-category">Total Posts</p>
              <h3 class="card-title">{{$post}}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="featured card card-stats">
          <div class="card-header">
            <div class="card-icon">
              <img src="{{asset('/assets/img/checking.svg')}}">
            </div>
            <div class="detail text-center">
              <p class="card-category">Archive</p>
              <h3 class="card-title">{{$archive}}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="featured card card-stats">
          <div class="card-header">
            <div class="card-icon">
              <img src="{{asset('/assets/img/recycle-bin.svg')}}">
            </div>
            <div class="detail text-center">
              <p class="card-category">Trash</p>
              <h3 class="card-title">{{$trash}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title ">Total Post Berdasarkan Jenis Bencana</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="post" class="table table-striped table-bordered">

                  <body>
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                  </body>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#posts" data-toggle="tab">
                      <i class="material-icons">border_color</i> Post
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#archive" data-toggle="tab">
                      <i class="material-icons">book</i> Archive
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#trash" data-toggle="tab">
                      <i class="material-icons">delete</i> Trash
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="posts">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Bencana Gunung Meletus di desa sukaBencana</td>
                      <td class="td-action text-right">
                        <a href="{{url('/gunung-meletus.html')}}" target="_blank" rel="tooltip" title="View Post" class="btn btn-success btn-link btn-sm">
                          <i class="material-icons">visibility</i>
                        </a>
                        <a href="{{url('/dashboard/contributor/posts/2/edit')}}" rel="tooltip" title="Edit Post" class="btn btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </a>
                        <button type="button" rel="tooltip" title="Trash" class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="more">
                  <a href="{{url('/dashboard/contributor/posts')}}">See All Posts</a>
                </div>
              </div>
              <div class="tab-pane" id="archive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Banjir di Sungai Nil mengakibatkan rumah warga hanyut</td>
                      <td class="td-action text-right">
                        <a href="{{url('/dashboard/contributor/posts/2/edit')}}" rel="tooltip" title="Edit Post" class="btn btn-link btn-sm">
                          <i class="material-icons">edit</i>
                        </a>
                        <button type="button" rel="tooltip" title="Trash" class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="more">
                  <a href="{{url('/dashboard/contributor/archives')}}">See All Archives</a>
                </div>
              </div>
              <div class="tab-pane" id="trash">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Gunung Wacana Kembali Berstatus Siaga 2</td>
                      <td class="td-actions text-right">
                        <button type="button" rel="tooltip" title="Restore to Archive" class="btn btn-primary btn-link btn-sm">
                          <i class="material-icons">undo</i>
                        </button>
                        <button type="button" rel="tooltip" title="Remove Permanently" class="btn btn-danger btn-link btn-sm">
                          <i class="material-icons">close</i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="more">
                  <a href="{{url('/dashboard/contributor/trash')}}">See All Trash</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>


<?php
  $dataPosts = array();
  foreach ($label as $query) {
    $dataPosts[]=array("label"=>$query->kategori,"y"=>$query->total);
  }
?>
<script>
  window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    exportEnabled: true,
    data: [{
      type: "pie",
      showInLegend: true,
      legendText: "{label}",
      indexLabelFontSize: 16,
      indexLabel: "{label} - #percent%",
      yValueFormatString: "#,# Posts",
      dataPoints: <?php echo json_encode($dataPosts, JSON_NUMERIC_CHECK); ?>
    }]
  });
  chart.render();
  }
</script>

@endsection
