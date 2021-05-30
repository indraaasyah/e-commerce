<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{asset('themes/eshop/assets/images/favicon.png')}}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('themes/eshop/assets/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('themes/eshop/assets/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('themes/eshop/assets/css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('themes/eshop/assets/style.css')}}">
    <link rel="stylesheet" href="{{asset('themes/eshop/assets/css/responsive.css')}}">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	{{-- <div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div> --}}
	<!-- End Preloader -->
	
	
	<!-- Header -->
	@include('themes.eshop.partials.header')
	<!--/ End Header -->
	
	@yield('content')
	
	@include('themes.eshop.partials.services')

	@include('themes.eshop.partials.modals')

	@include('themes.eshop.partials.footer')
 
	<!-- Jquery -->
    <script src="{{asset('themes/eshop/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('themes/eshop/assets/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('themes/eshop/assets/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('themes/eshop/assets/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('themes/eshop/assets/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('themes/eshop/assets/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('themes/eshop/assets/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('themes/eshop/assets/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('themes/eshop/assets/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('themes/eshop/assets/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('themes/eshop/assets/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('themes/eshop/assets/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('themes/eshop/assets/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('themes/eshop/assets/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('themes/eshop/assets/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('themes/eshop/assets/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('themes/eshop/assets/js/active.js')}}"></script>
</body>
</html>