@extends('home.layout')
@section('title')
{{$content -> title }} - ZIAGA
@endsection
@section('content')
			<section class="video-area pt-40 pb-40" style="	background: url({{url('/images/'.$content->thumbnail) }}) no-repeat center center/cover;">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="video-content">
						<div class="video-desc">
							<h1 class="h1 text-white text-uppercase">{{$content -> title }}</h1>
						<a href="{{ url('/profile/'.$content -> user -> id )}}">	<h4 class="text-white">Posted By {{$content -> user -> namaDepan}} {{$content -> user -> namaBelakang}}</h4></a>
						</div>
					</div>
				</div>
			</section>
			<section class="about-generic-area">
				<div class="container border-top-generic">
					<div class="row">
						<div class="col-md-12">
							<div>{!! $content->isi_artikel !!}</div>
						</div>
					</div>
					<!-- SHARE -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_counter addthis_pill_style"></a>
				</div>
				<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5156a09e76c1568f"></script>
				<!-- SHARE -->
				</div>
			</section>

      <section class="generic-banner elements-banner relative">
        <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row height align-items-center justify-content-center">
      <div class="col-lg-10">
        <div class="banner-content text-center">
          <h2>Komentar</h2>
          <div id="disqus_thread"></div>
          <script>
          (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = 'https://ziagawib.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
          </script>
          <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('custom-js')
<script type="text/javascript">
$(document).ready(function(){
	$(".logos").css("color","#fff");
  $(".daftar").addClass("text-white");
  $(".masuk").addClass("text-white");
  $(".lnr-menu").addClass("text-white");
  $(".btnsearch").removeClass("text-dark");
  $(".btnsearch").addClass("text-white");
});
$(window).scroll(function() {
var scroll = $(window).scrollTop();

if (scroll >= 50) {
		$(".logos").css("color","#927565");
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
