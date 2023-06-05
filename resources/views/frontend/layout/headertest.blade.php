<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>

	<title> rsT20 </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv='cache-control' content='no-cache'> 
	<meta http-equiv='expires' content='0'> 
	<meta http-equiv='pragma' content='no-cache'> 
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<link rel="icon" type="image/png" href="/favicon.ico"/>
    <link rel="apple-touch-icon" href="/favicon.ico" />
	
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap" rel="stylesheet">
	<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css'> -->
	<!-- Css Styles -->
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css'>

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}?v=1.3" type="text/css">
	
	<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>

</head>
<body id="page-top">

	<div class="fixed-social">
		<div class="social">
			<ul>
				<li> <a href="#" target="_blank"> <i class="fa fa-youtube-play"></i> </a> </li>
				<li> <a href="#" target="_blank"> <i class="fa fa-facebook"></i> </a> </li>
				<li> <a href="#" target="_blank"> <i class="fa fa-twitter"></i> </a> </li>
				<li> <a href="#" target="_blank"> <i class="fa fa-instagram"></i> </a> </li>
				<li> <a href="#" target="_blank"> <i class="fa fa-apple"></i> </a> </li>
				<li> <a href="#" target="_blank"> <i class="fa fa-android"></i> </a>  </li>
			</ul>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg d-block fixed-top" id="mainNav">
		<div class="top_menu">
			<div class="container-fluid relative">
				<a class="navbar-brand js-scroll-trigger" href="/#page-top">
					{{-- <h2 class="white">WTC</h2> --}}
					 <img src="/img/logo.png" alt="Logo" class="img-fluid center-block logo" /> 
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						@include('frontend.layout.navtest')
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div class="nav_height"></div>
	<div class="clear"></div>