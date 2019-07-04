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

                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="posts">
                <table class="table">

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


      <!--  -->

      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
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

              <div class="tab-pane active" id="archive">

                <!--  -->
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

                <!--  -->

                    <div id="chartContainer" style="width: 100%; height: 400px; margin: 0 auto;"></div>


              </div>
            </div>
          </div>
        </div>
      </div>

      <!--  -->
      <!--  -->

      <div class="col-lg-12 col-md-12">
        <div class="card">
          <div class="card-header card-header-tabs card-header-warning">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
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
                                    @foreach($contentt as $content)
                                    <tr>
                                      <td>
                                        <p>{{$content -> title}}</p>
                                      </td>
                                      <td>
                                        <p>{{$content -> category -> kategori}}</p>
                                      </td>
                                      <td class="td-action" style="display:flex">
                                          {{ views($content)->count() }} view
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

      <!--  -->
    </div>
  </div>
</div>






<?php
foreach ($label as $query) {$dataLabel[]=$query;}
?>
<?php
foreach ($vieww as $queryy) {$dataLabell[]=$queryy;}
?>

<script src="{{asset('/assets/js/highcharts.js')}}"></script>
<script src="{{asset('/assets/js/export-data.js')}}"></script>
<script src="{{asset('/assets/js/exporting.js')}}"></script>


</script>
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
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
 animationEnabled: true,
 title:{
   text: ""
 },
 axisX:{
   valueFormatString: "DD MMM"
 },
 axisY: {
   title: "Jumlah page view",
   includeZero: false,
   scaleBreaks: {
     autoCalculate: true
   }
 },
 data: [{
   type: "line",
   xValueFormatString: "DD MMM",
   color: "#F08080",
   dataPoints: [
        @foreach($vieww as $con)
          { x: new Date({{ $con -> x }}), y:{{ $con -> y }}  },
        @endforeach
   ]
 }]
});
chart.render();

}
</script>
<script src="{{asset('/assets/js/canvasjs.min.js')}}"></script>

<script type="text/javascript">
$(function(){
    $('#date_filter').datepicker({
       format: "dd.mm.yyyy",
       todayBtn: "linked",
       language: "de"
    });
});
</script>



@endsection
