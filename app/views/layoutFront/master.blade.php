<!DOCTYPE html>
<html>
<head>
	<title>{{$title}}</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="icon" href="img/facebook.png" type="image/png"
sizes="16x16"> -->     <link rel="shortcut icon" href="<?php if($title=="MotoXpose - Blogs")echo "../"?>logo.ico" />     <!--
<link rel="icon" type="image/gif/png" href="mouse_select_left.png"> -->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php if($title=="MotoXpose - Blogs")echo "../"?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php if($title=="MotoXpose - Blogs")echo "../"?>css/addition.css">
	<link rel="stylesheet" href="<?php if($title=="MotoXpose - Blogs")echo "../"?>css/animate.css">
	<!-- Latest compiled and minified JavaScript & Jquery -->	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php if($title=="MotoXpose - Blogs")echo "../"?>js/bootstrap.min.js"</script>	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php if($title=="MotoXpose - Blogs")echo "../"?>js/addition.js"></script>
	<style type="text/css">
		.slide:nth-child(1) {
		  left: 0;
		}
		.slide:nth-child(1) .slide__bg {
		  left: 0;
		  background-image: url("{{$data[0]->image}}");
		}
		.slide:nth-child(1) .slide__overlay-path {
		  fill: #e99c7e;
		}
		@media (max-width: 991px) {
		  .slide:nth-child(1) .slide__text {
		    background-color: rgba(233, 156, 126, 0.8);
		  }
		}
		.slide:nth-child(2) {
		  left: 100%;
		}
		.slide:nth-child(2) .slide__bg {
		  left: -50%;
		  background-image: url("{{$data[1]->image}}");
		}
		.slide:nth-child(2) .slide__overlay-path {
		  fill: #e1ccae;
		}
		@media (max-width: 991px) {
		  .slide:nth-child(2) .slide__text {
		    background-color: rgba(225, 204, 174, 0.8);
		  }
		}
		.slide:nth-child(3) {
		  left: 200%;
		}
		.slide:nth-child(3) .slide__bg {
		  left: -100%;
		  background-image: url("{{$data[2]->image}}");
		}
		.slide:nth-child(3) .slide__overlay-path {
		  fill: #adc5cd;
		}
		@media (max-width: 991px) {
		  .slide:nth-child(3) .slide__text {
		    background-color: rgba(173, 197, 205, 0.8);
		  }
		}
		.slide:nth-child(4) {
		  left: 300%;
		}
		.slide:nth-child(4) .slide__bg {
		  left: -150%;
		  background-image: url("{{$data[3]->image}}");
		}
		.slide:nth-child(4) .slide__overlay-path {
		  fill: #cbc6c3;
		}
		@media (max-width: 991px) {
		  .slide:nth-child(4) .slide__text {
		    background-color: rgba(203, 198, 195, 0.8);
		  }
		}
	</style>	

	<script>
		function go(link){
			alert(link);
			location.href = "/gallery/"+link;
		}
	</script
	@yield('content')
</head>
