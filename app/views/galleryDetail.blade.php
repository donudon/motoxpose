  @extends('layoutFront.master')

  @section('content')
<body>
  @include('layoutFront.header')

<div class="jumbotron">
  <div class="row" align="center">
		<div class="col-md-12"><h1>{{$gallery[0]->title}}</h1></div>
	</div>
	<?php
		$date = strtotime($gallery[0]->created_at);
		$date = date("F d, Y", $date);
	?>
	<div class="row"align="center">
		<div class="col-md-12"><h3>{{$date}} / BY Author</h1></div>
	</div> 
</div>
<div class="container">
	<!-- Slider -->
        <div class="row gallery">
            <div class="span12" id="slider">
            <?php
		      $img = explode(",", $gallery[0]->image);
		    ?>
                <!-- Top part of the slider -->
                <div class="row">
                    <div class="span8" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                @foreach($img as $k => $v)
                                
				                	<!--Photo-->@if ($v!="")<div class="@if ($k==0)active @endif item" data-slide-number="{{$k}}"><img style="height:500px;width:100%;" src="{{$v}}"></div>@endif

						        @endforeach
                                

                                <!-- <div class="item" data-slide-number="1">
                                <img src="http://placehold.it/770x300&text=two"></div>

                                <div class="item" data-slide-number="2">
                                <img src="http://placehold.it/770x300&text=three"></div>

                                <div class="item" data-slide-number="3">
                                <img src="http://placehold.it/770x300&text=four"></div>

                                <div class="item" data-slide-number="4">
                                <img src="http://placehold.it/770x300&text=five"></div>

                                <div class="item" data-slide-number="5">
                                <img src="http://placehold.it/770x300&text=six"></div>

                                <div class="item" data-slide-number="6">
                                <img src="http://placehold.it/770x300&text=six"></div>

                                <div class="item" data-slide-number="5">
                                <img src="http://placehold.it/770x300&text=six"></div>

                                <div class="item" data-slide-number="5">
                                <img src="http://placehold.it/770x300&text=six"></div>

                                <div class="item" data-slide-number="5">
                                <img src="http://placehold.it/770x300&text=six"></div>

                                <div class="item" data-slide-number="5">
                                <img src="http://placehold.it/770x300&text=six"></div>

                                <div class="item" data-slide-number="5">
                                <img src="http://placehold.it/770x300&text=six"></div>   -->                                      
                                
                            </div><!-- Carousel nav -->
                            <a class="carousel-control left" data-slide="prev" href="#myCarousel">‹</a> <a class="carousel-control right" data-slide="next" href="#myCarousel">›</a>
                        </div>
                    </div>

                    <!-- <div class="span4" id="carousel-text"></div> -->
                    
                    <div id="slide-content" style="display:none;position:relative;margin-left: 23px;">
                        @foreach($img as $k => $v)
                            <div id="slide-content-{{$k}}">
		                        <h2 style="color:white">Slider {{$k}}</h2>
		                    </div>     
				        @endforeach
                                                     
                    </div>
                </div>
            </div>
        </div>
    <!--/Slider-->
    <div class="row">
            @foreach($img as $k => $v)
                <div class="col-md-2">
                @if ($v!="")
                    <a class="thumbnail" id="carousel-selector-{{$k}}"><img src="{{$v}}"></a>
                @endif
                </div>     
	        @endforeach
    </div>
</div>
  @include('layoutFront.footer')