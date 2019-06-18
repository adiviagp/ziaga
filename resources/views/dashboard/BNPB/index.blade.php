@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard')
@section('active','dashboard')
@section('breadcumb','DASHBOARD ADMIN')
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

    <!-- <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title ">Total Artikel Berdasarkan Jenis Bencana</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="post" class="table table-striped table-bordered">

                  <body>
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <div id="chart1" style="width: 100%; height: 400px; margin: 0 auto;"></div>
                  </body>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#posts" data-toggle="tab">
                      <i class="material-icons">border_color</i> Total Artikel Berdasarkan Jenis Bencana
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#archive" data-toggle="tab">
                      <i class="material-icons">book</i> Viewer Counter per Bulan
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
                  <body>
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <div id="chart1" style="width: 100%; height: 400px; margin: 0 auto;"></div>
                  </body>
                </table>
                <div class="more">
                  <a href="{{url('/bnpb/posts')}}">See All Posts</a>
                </div>
              </div>
              <div class="tab-pane" id="archive">
                <table class="table">
                  <body>
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <div id="chart2" style="width: 100%; height: 400px; margin: 0 auto;"></div>
                  </body>
                </table>
                <div class="more">
                  <a href="{{url('/bnpb/posts')}}">See All Posts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
foreach ($label as $query) {$dataLabel[]=$query;}
?>

<script>
  Highcharts.chart('chart1', {
      chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie',
          style: {
            fontFamily: 'Trebuchet MS, Arial'
          }
      },
      title: {
          text: 'Total Artikel Berdasarkan Jenis Bencana',
      },
      tooltip: {
          pointFormat: '<b>{point.y} {series.name}</b>'
      },
      plotOptions: {
          pie: {
              allowPointSelect: true,
              cursor: 'pointer',
              showInLegend: true,
              dataLabels: {
                  enabled: true,
                  format: '{point.y} Artikel ({point.percentage:.1f}%)',
                  style: {
                      color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                  }
              }
          }
      },
      series: [{
          name: 'Artikel',
          colorByPoint: true,
          data: <?php echo json_encode($dataLabel, JSON_NUMERIC_CHECK); ?>
      }]
  });
  </script>
  <script>
  Highcharts.chart('chart2', {
    chart: {
        type: 'column',
        style: {
          fontFamily: 'Trebuchet MS, Arial'
        }
    },
    title: {
        text: 'Viewer Counter per Bulan'
    },
    xAxis: {
        categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total fruit consumption'
        }
    },
    tooltip: {
        pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
        shared: true
    },
    plotOptions: {
        column: {
            stacking: 'percent'
        }
    },
    series: [{
        name: 'John',
        data: [5, 3, 4, 7, 2]
    }, {
        name: 'Jane',
        data: [2, 2, 3, 2, 1]
    }, {
        name: 'Joe',
        data: [3, 4, 4, 2, 5]
    }]
});
</script>

@endsection
