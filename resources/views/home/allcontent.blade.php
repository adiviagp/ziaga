@extends('home.layout')
@section('content')
<!-- Start Banner Area -->
<section class="banner-area relative">
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-center">
      <div class="banner-left col-lg-6">
        <img width="80%" height="auto" class="d-flex mx-auto img-fluid" src="{{ asset('/assets/img/natural/gunungberapi.png')}}" alt="">
      </div>
      <div class="col-lg-6">
        <div class="story-content">
          <h1 class="sp-1">Bencana Alam</h1><br>
          <p class="description">suatu peristiwa atau rangkaian peristiwa luar biasa yang disebabkan oleh alam (gempa bumi, tsunami, gunung meletus, banjir, kekeringan, angin topan, dan tanah longsor) sehingga mengakibatkan timbulnya korban jiwa, kerusakan lingkungan, kehilangan harta benda, dan dampak psikologis.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Banner Area -->

<!-- Start ARTIKEL Area -->
<section id="berita">
  <h1 style="font-size:48px;margin-left:20px">Berita</h1>
  <div class="container berita">
    <div class="row">
      <div class="card-list">
      @foreach($konten as $content)

                  <!-- card -->
                  <a href="{{url('/post/'.$content -> id)}}">
                  <div class="card">
                    <img class="card-img-top" src="{{asset('/images/'.$content->thumbnail)}}" alt="Card image cap">
                    <div class="card-overlay"></div>
                    <div class="card-body">
                      <div class="kategori"><span>{{$content -> category -> kategori }}</span></div>
                      <h5 class="card-title">{{$content -> title }}</h5>
                      <p class="card-text">{!! str_limit($content -> isi_artikel, 150, '. . .') !!}</p>
                      <div class="more"><a href="#" class="btn">Selengkapnya</a></div>
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


@endsection
@section('custom-js')
<script type="text/javascript">
(document).ready(function(){
  $('.multiple-items').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });

});
</script>
<script type="text/javascript">
$(document).ready(function(){
$(window).scroll(function(){
  var scroll = $(window).scrollTop();
  if (scroll > 50) {
    $(".fixed-woy").css("background" , "#ffffff");
  }

  else{
    $(".fixed-woy").css("background" , "transparent");
  }
})
})
</script>
@endsection
