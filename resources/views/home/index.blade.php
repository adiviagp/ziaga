@extends('home.layout')
@section('title','ZIAGA - Portal Edukasi Kesiapsiagaan Bencana')
@section('content')
<!--
<section id="header">

  <div class="container">
    <div class="row highlight">
      <div class="story-content">

      <h1 class="sp-2"><span>Portal Edukasi Kesiapsiagaan Bencana</span></h1>
    </div>
    </div>
  </div>
</section> -->
<section class="banner-area relative">
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-center">
      <div class="col-lg-12">
        <img class="d-flex mx-auto img-fluid" src="{{asset('assets/img/ZIAGA.png')}}" alt="">
      </div>
    </div>
  </div>
</section>
<!-- End Banner Area -->
<section id="kategori">
  <div class="container">
    <div class="row">

      @foreach($category as $kategori)

      <div class="col-sm-6 col-md-3">
        <a href="{{ url('/kategori/'.$kategori -> id)}}">
        <div class="kotak">
          <img src="{{ asset('/assets/img/natural/'. $kategori -> thumbnail)}}">
          <h3>{{ $kategori -> kategori }}</h3>
        </div>
      </a>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- Start ARTIKEL Area -->
<section id="berita">
  <h1 style="font-size:48px;margin-left:20px">Berita Terbaru</h1>
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
<div style="margin:0 auto">
<a href="{{url('/konten')}}" style="margin-top:20px" class="genric-btn primary-border circle arrow">Artikel Lainnya<span class="lnr lnr-arrow-right"></span></a>
</div>
    </div>
  </div>
</section>
<!-- END ARTIKEL AREA -->



<!-- Start about Area -->
<section id="tentang" class="about-area pt-100 pb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="story-content">
          <h2>Gabung Menjadi<span> kontributor</span></h2>
          <p class="mt-30">

 Berbagi pengetahuan dan memberikan banyak manfaat mengenai hal-hal kebencanaan. Menulis menjadi lebih bermanfaat karena tulisan yang anda buat dapat memberikan persiapan kepada pengetahuan masyarakat dalam mempersiapkan diri menghadapi berbagai hal mengenai bencana.          </p>
          <div class="col-lg-10 d-flex justify-content-end">
            <a href="{{ url('/daftar')}}"><button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span class="mr-10">Gabung Sekarang</span><span class="lnr lnr-arrow-right"></span></button></a> <br>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid d-flex mx-auto" src="{{asset('/assets/img/blogger.jpg')}}" alt="">
      </div>
    </div>
  </div>
</section>
<!-- Start Conatct- Area -->

<!-- End Conatct- Area -->

@endsection
@section('custom-js')
<script type="text/javascript">

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
    $(".default-header").removeClass("shadow-sm");
}
});
</script>
@endsection
