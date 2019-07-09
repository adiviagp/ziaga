@extends('dashboard.master.layout')
@section('title','Ziaga Dashboard')
@section('active','dashboard')
@section('breadcumb','DASHBOARD ADMIN')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12">
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
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="featured card card-stats">
          <div class="card-header">
            <div class="card-icon">
              <img src="{{asset('/assets/img/blog.svg')}}">
            </div>
            <div class="detail text-center">
              <p class="card-category">Published Posts</p>
              <h3 class="card-title">{{$publish}}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="featured card card-stats">
          <div class="card-header">
            <div class="card-icon">
              <img src="{{asset('/assets/img/user.svg')}}">
            </div>
            <div class="detail text-center">
              <p class="card-category">Contributors</p>
              <h3 class="card-title">{{$user}}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="featured card card-stats">
          <div class="card-header">
            <div class="card-icon">
              <img src="{{asset('/assets/img/checking.svg')}}">
            </div>
            <div class="detail text-center">
              <p class="card-category">Total Views</p>
              <h3 class="card-title">{{$viewer}}</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="featured card card-stats">
          <div class="card-header">
            <div class="card-icon">
              <img src="{{asset('/assets/img/tag.svg')}}">
            </div>
            <div class="detail text-center">
              <p class="card-category">Tingkat Kesehatan Sistem</p>
              <h3 class="card-title">
                Terjadi {{$statusViewer}} jumlah pembaca dan ketersediaan Artikel yang {{$statusArtikel}}.
                <br>Disarankan untuk {{$keputusan}}.
                <h6>Publish ± {{round($z)}} Artikel lagi untuk memenuhi target bulan ini.</h6>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab">
                      <i class="material-icons">border_color</i> Total Artikel Berdasarkan Jenis Bencana
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

                  <script src="https://code.highcharts.com/highcharts.js"></script>
                  <script src="https://code.highcharts.com/modules/exporting.js"></script>
                  <script src="https://code.highcharts.com/modules/export-data.js"></script>
                  <div id="chart1" style="width: 100%; height: 400px; margin: 0 auto;"></div>

                </table>
                <div class="more">
                  <a href="{{url('/bnpb/posts')}}">See All Posts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab">
                      <i class="material-icons">book</i> Jumlah Pembaca per Hari dalam Sebulan Terakhir
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="archive">
                <table class="table">

                  <!-- <form action="" method="get">
                  <div class="row">
                      <div class="col-md-4">
                          <input type="text" class="form-control" name="date_filter" id="date_filter"/>
                      </div>
                      <div class="col-md-8">
                          <input type="submit" name="filter_submit" class="btn btn-success" value="Filter" />
                      </div>
                  </div>
                  </form> -->

                  <script src="https://code.highcharts.com/highcharts.js"></script>
                  <script src="https://code.highcharts.com/modules/exporting.js"></script>
                  <script src="https://code.highcharts.com/modules/export-data.js"></script>
                  <div id="chart2" style="width: 100%; height: 400px; margin: 0 auto;"></div>

                </table>
                <div class="more">
                  <a href="{{url('/bnpb/posts')}}">See All Posts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab">
                      <i class="material-icons">book</i> Artikel dengan Jumlah Pembaca Terbanyak
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="archive">
                <table id="post" class="table table-striped table-bordered">
                  <thead class="text-primary">
                    <th>
                      Title
                    </th>
                    <th>
                      Category
                    </th>
                    <th>
                      Views
                    </th>
                  </thead>
                  <tbody>
                    @foreach($contentviewer as $content)
                    <tr>
                      <td>
                        <p>{{$content -> title}}</p>
                      </td>
                      <td>
                        <p>{{$content -> kategori}}</p>
                      </td>
                      <td>
                        <p>{{$content -> viewer}}</p>
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
</div>

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
          data: <?php echo json_encode($label, JSON_NUMERIC_CHECK); ?>
      }]
  });
</script>

<script>
Highcharts.chart('chart2', {
    chart: {
        type: 'spline',
        style: {
          fontFamily: 'Trebuchet MS, Arial'
        }
    },
    title: {
        text: 'Jumlah Pembaca per Hari dalam Sebulan Terakhir',
    },
    legend: {
        layout: 'vertical',
        align: 'left',
        verticalAlign: 'top',
        floating: true,
        borderWidth: 1,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || '#FFFFFF'
    },
    xAxis: {
        type: "date",
        tickInterval: 1,
        categories:
        <?php
          echo json_encode($tanggalView);
        ?>,
    },
    yAxis: {
        tickInterval: 5,
        title: {
            text: 'Pembaca'
        },
    },
    tooltip: {
          pointFormat: '<b>{point.y} Pembaca</b>'
    },
    series: [{
        connectNulls: true,
        showInLegend: false,
        data:
        <?php
          echo json_encode($totalView);
        ?>,
    }]
});
</script>
@endsection
