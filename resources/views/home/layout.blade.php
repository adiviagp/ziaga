<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="img/fav.png">
	<meta name="author" content="Colorlib">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	  <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
		<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
		<link rel="stylesheet" href="{{asset('assets/css/landing.css')}}">
	</head>
	<body>
	<div class="oz-body">
		<!-- Start Header Area -->
		<header id="home" class="default-header fixed-woy">
			<div class="container">
				<div class="header-wrap">
					<div class="header-top d-flex justify-content-between align-items-center">
						<div class="logo">
							<a  href="{{url('/')}}"><h1 class="logos" style="color:#927565">ZIAGA</h1></a>
						</div>


						<div class="main-menubar d-flex align-items-center">
								<nav class="auth">
								@if(Auth::user() && Auth::user()->role_id == 0)
								<a href="{{url('/kontributor/dashboard')}}" class="dashboard btn-outline-light btn btn-sm">Dashboard</a>
								@elseif(Auth::user() && Auth::user()->role_id == 1)
								<a href="{{url('/bnpb/dashboard')}}" class="dashboard btn-outline-dark btn btn-sm">Dashboard</a>
								@else
								<a href="{{url('masuk')}}" class="masuk" style="color:black">MASUK</a>
								<a href="{{url('daftar')}}" class="daftar" style="color:black">DAFTAR</a>
								@endif
							</nav>
							<div class="menu-bar d-lg-none d-xl-none"><span class="lnr lnr-menu"></span></div>
							<a href="#" style="margin-left:10px" id="addClass"><span class="btnsearch fa fa-search text-dark"></span></a>

						</div>
						<div id="qnimate" class="off">
						            <div id="search" class="open">
						            <button data-widget="remove" id="removeClass" class="close" type="button">×</button>
						            <form action="{{url('/cari')}}" method="post" autocomplete="off">
													{{csrf_field()}}
																<input type="text" class="form-control" placeholder="Type search keywords here" value="" name="cari" id="term">
						                    <button class="btn btn-lg btn-primary" type="submit"><span class="fa fa-search"></span> Search</button>
						            </form>
						            </div>
						        </div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
@yield('content')

		<!-- Strat Footer Area -->
		<footer class="section-gap">
			<div class="container text-center">
				<div class="row pt-60">
					<div class="col-lg-6 col-sm-6">
						<div class="single-footer-widget">
							<h6 class="text-uppercase mb-20">Related Link</h6>
							<ul class="footer-nav">
								<li><a href="#">BNPB</a></li>
							</ul>
						</div>
					</div>

					<div class="col-lg-6 col-sm-6">
            <div class="single-footer-widget">
							<h6 class="text-uppercase mb-20">Categories</h6>
							<ul class="footer-nav">
								<li><a href="{{url('kategori/1')}}">Gunung Berapi</a></li>
                <li><a href="{{url('kategori/2')}}">Gempa</a></li>
                <li><a href="{{url('kategori/3')}}">Tsunami</a></li>
								<li><a href="{{url('kategori/4')}}">Longsor</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<p class="footer-text m-0">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | ZIAGA Created with <i class="fa fa-heart" style="color:red"></i> By WIB Team</p>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->
	</div>
		<script src="{{asset('/assets/js/core/jquery.min.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="{{asset('/assets/js/core/bootstrap.min.js')}}"></script>
		<script src="{{asset('/assets/js/plugins/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('/assets/js/plugins/owl.carousel.min.js')}}"></script>
		<script src="{{asset('/assets/js/plugins/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('/assets/js/plugins/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('/assets/js/plugins/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('/assets/js/plugins/waypoints.min.js')}}"></script>
		<script src="{{asset('/assets/js/main.js')}}"></script>
		<script id="dsq-count-scr" src="//ziagawib.disqus.com/count.js" async></script>
    <script type="text/javascript">
		$(document).ready(function(){
			 $(".auth").removeClass("hide");
			if ($(window).width() < 778){
			 $(".auth").addClass("hide");
	 	}else{
			 $(".auth").removeClass("hide");
		}
			$(".gunung-api").addClass("table table-borderless table-hover");
			$(function(){
$("#addClass").click(function () {
				$('#qnimate').addClass('popup-box-on');
					});

					$("#removeClass").click(function () {
				$('#qnimate').removeClass('popup-box-on');
					});
});
		});
    </script>
		@yield('custom-js')
	</body>
</html>
