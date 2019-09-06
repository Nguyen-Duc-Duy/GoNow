<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no" />

	<link rel="shortcut icon" href="{{ asset('public/logo/icon logo GoNow.png')}}"/>
	<!-- boostrap -->
	<link href="{{ asset('public/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('public/bootstrap-4.3.1.css/bootstrap.css')}}">

	<link href="{{ asset('public/css/jquery-ui.structure.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('public/fonts/font-awesome.min.css')}}">        
	<link href="{{ asset('public/css/style.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('public/css/mystyle.css')}}" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="{{ asset('public/css/mediacss.css')}}">
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
<!-- jquery -->
<script src="{{ asset('public/js/jquery-2.1.4.min.js')}}"></script>
<!-- boostrap -->
<script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/bootstrap-4.3.1/js/bootstrap.js')}}"></script>

<script src="{{ asset('public/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('public/js/idangerous.swiper.min.js')}}"></script>
<script src="{{ asset('public/js/jquery.viewportchecker.min.js')}}"></script>
<script src="{{ asset('public/js/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('public/js/jquery.mousewheel.min.js')}}"></script>
<script src="{{ asset('public/js/all.js')}}"></script>
<script src="{{ asset('public/js/myscript.js')}}"></script>
</html>	