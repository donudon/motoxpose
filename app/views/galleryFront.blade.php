  @extends('layoutFront.master')

  @section('content')
<body>
  @include('layoutFront.header')

<div class="jumbotron" style="background:url('img/S6.jpg') no-repeat top center;width:100%;height:500px;">
	<div class="row" style="margin-top:50px;">
		<div class="col-md-12">
	        <h1 class="animated fadeInDown" align="center" style="font-size:60px;background-color:transparent;color:white;"><strong><em>GALLERY</em></strong></h1>	        
	    </div>
    </div>
    <div class="row">
    	<div class="col-md-12" align="center">
    		<button type="button" class="btn btn-default animated fadeInRight" id="buttonL">EXPLORE</button>
    	</div>
    </div>  
</div>
<?php 
	for ($i=0; $i <4 ; $i++) {
?>
<div class="row"  style="margin-top:-30px;">
	@foreach ($gallery as $keys => $value)
	<a href="/gallery/{{$value->link}}">
	<div class="col-md-3 gal" align="center">
		<div class="hovereffect">
	        <img class="img-responsive" src="{{$value->thumbnail}}" width="100%" height="300px" alt="" onclick="go({{$value->link}})">
	        <div class="overlay">
	        </div>
	    </div>
	</div>
	</a>
	@endforeach
	<!-- <div class="col-md-3 gal" align="center">
		<div class="hovereffect">
	        <img class="img-responsive" src="img/S2.jpg" width="100%" height="225px" alt="">
	        <div class="overlay">
	           <h2>Hover effect 3</h2>
	           <a class="info" href="#">link here</a>
	        </div>
	    </div>
	</div>
	<div class="col-md-3 gal" align="center">
		<div class="hovereffect">
	        <img class="img-responsive" src="img/S3.jpg" width="100%" height="225px" alt="">
	        <div class="overlay">
	           <h2>Hover effect 3</h2>
	           <a class="info" href="#">link here</a>
	        </div>
	    </div>
	</div>
	<div class="col-md-3 gal" align="center">
		<div class="hovereffect">
	        <img class="img-responsive" src="img/S4.jpg" width="100%" height="225px" alt="">
	        <div class="overlay">
	           <h2>Hover effect 3</h2>
	           <a class="info" href="#">link here</a>
	        </div>
	    </div>
	</div> -->
</div>
<?php
	}
?>
  @include('layoutFront.footer')