<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no" />

	<link rel="shortcut icon" href="favicon.ico"/> 
	<link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/css/jquery-ui.structure.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('public/fonts/font-awesome.min.css')}}">        
	<link href="{{ asset('public/css/style.css')}}" rel="stylesheet" type="text/css"/>     
	<title>Let's Travel</title>
</head>
<body class="style-2" data-color="theme-1">


	<div class="loading orange">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object object_four"></div>
				<div class="object object_three"></div>
				<div class="object object_two"></div>
				<div class="object object_one"></div>
			</div>
		</div>
	</div>

	@include('UI.header')

	@yield('main')

	@include('UI.footer')	



</body>
<script src="{{ asset('public/js/jquery-2.1.4.min.js')}}"></script>
<script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('public/js/idangerous.swiper.min.js')}}"></script>
<script src="{{ asset('public/js/jquery.viewportchecker.min.js')}}"></script>
<script src="{{ asset('public/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('public/js/jquery.mousewheel.min.js')}}"></script>
<script src="{{ asset('public/js/all.js')}}"></script>
</html>	