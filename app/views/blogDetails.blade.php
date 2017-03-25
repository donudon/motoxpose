  @extends('layoutFront.master')

  @section('content')
<body>
  @include('layoutFront.header')

<div class="jumbotron" style="background:url('{{$blog[0]->thumbnail}}') no-repeat top center;width:100%;height:500px;">
</div>
<div class="jumbotron" style="background-color:black;color:white;">
  <div class="row" align="center">
		<div class="col-md-12"><h1>{{$blog[0]->title}}</h1></div>
	</div>
	<?php
		$date = strtotime($blog[0]->date_created);
		$date = date("m dd, Y", $date);
	?>
	<div class="row"align="center">
		<div class="col-md-12"><h3>{{$date}} / BY {{$blog[0]->author}}</h1></div>
	</div> 
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12"><h1>{{$blog[0]->content}}</h1></div>
	</div>
</div>
  @include('layoutFront.footer')