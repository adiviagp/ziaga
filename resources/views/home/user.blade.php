@extends('home.layout')
@section('title','Ziaga Dashboard - Profile')
@section('content')
<!-- Start Banner Area -->
<section class="banner-area relative">
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-center">
      <div class="banner-left col-lg-6" style="padding:50px">
        <img width="50%" height="auto" style="border-radius:50%" class=" d-flex mx-auto img-fluid" src="{{url('/images/'.$profile -> foto)}}" alt="">
        <div class="text-center" style="margin-top:25px">
          <h3 class="sp-1">Total Post :</h3><h1>{{ $profile -> content -> count() }}</h1>
        </div>
      </div>
      <div class="col-lg-6 ">
        <div class="story-content shadow" style="padding:50px;margin-top:50px">
          <h1 class="sp-1">{{ $profile -> namaDepan }} {{ $profile -> namaBelakang }}</h1><br>
          <p style="opacity:1" class="btn btn-outline-primary disabled">{{ $profile -> provinsi }}</p>
          <p class="description">{{ $profile -> tentangSaya }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Banner Area -->

<!-- Start ARTIKEL Area -->
<section id="berita">
  <h1 style="font-size:48px;margin-left:20px">Berita oleh {{ $profile -> namaDepan }} {{ $profile -> namaBelakang }}</h1>
  <div class="container berita">
    <div class="row">
      <div class="card-list">
      @foreach($content as $content)

                  <!-- card -->
                  <a href="{{url('/post/'.$content -> id)}}">
                  <div class="card">
                    <img class="card-img-top" src="{{asset('/images/'.$content->thumbnail)}}" alt="Card image cap">
                    <div class="card-overlay"></div>
                    <div class="card-body">
                      <div class="kategori"><span>{{$content -> category -> kategori }}</span></div>
                      <h5 class="card-title">{{$content -> title }}</h5>
                      <p style="margin-top:10px;margin-bottom:10px" class="card-text">{!! str_limit($content -> isi_artikel, 150, '. . .') !!}</p>
                      <div class="more"><a href="{{url('/post/'.$content -> id)}}" class="btn">Selengkapnya</a></div>
                    </div>
                  </div>
                  </a>
                  <!--  -->

                  <!--  -->
                  @endforeach
</div>
    </div>
  </div>
</section>
<!-- END ARTIKEL AREA -->
<!-- END ARTIKEL AREA -->


@endsection
@section('custom-js')
<script type="text/javascript">
$(document).ready(function(){
  $(".daftar").addClass("text-white");
  $(".masuk").addClass("text-white");
  $(".lnr-menu").addClass("text-white");
  $(".btnsearch").removeClass("text-dark");
  $(".btnsearch").addClass("text-white");
});
$(window).scroll(function() {
var scroll = $(window).scrollTop();

if (scroll >= 50) {
    $(".fixed-woy").css("background" , "#ffffff");
    $(".default-header").addClass("bg-light shadow-sm");
    $(".daftar").addClass("btn btn-sm btn-outline-success text-success").removeClass("text-white");
    $(".masuk").removeClass("text-white");
    $(".lnr-menu").removeClass("text-white");
    $(".btnsearch").addClass("text-dark").removeClass("text-white");
    $(".dashboard").addClass("btn-outline-dark").removeClass("btn-outline-light");
} else {
  $(".fixed-woy").css("background" , "transparent");
    $(".default-header").removeClass("bg-light");
    $(".btnsearch").removeClass("text-dark").addClass("text-white");
    $(".default-header").removeClass("shadow-sm");
    $(".daftar").addClass("text-white").removeClass("btn btn-sm btn-outline-success text-success");
    $(".masuk").addClass("text-white");
    $(".lnr-menu").addClass("text-white");
    $(".dashboard").removeClass("btn-outline-dark").addClass("btn-outline-light");
}
});
</script>
@endsection
