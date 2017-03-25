  @extends('layoutFront.master')

  @section('content')
<body>
  @include('layoutFront.header')

<div class="jumbotron" style="background:url('img/S5.jpg') no-repeat top center;width:100%;height:500px;">
	<div class="row" style="margin-top:50px;">
		<div class="col-md-12">
	        <h1 class="animated fadeInDown" align="center" style="font-size:60px;background-color:transparent;color:white;"><strong><em>ABOUT US</em></strong></h1>	        
	    </div>
    </div>
    <div class="row">
    	<div class="col-md-12" align="center">
    		<button type="button" class="btn btn-default animated fadeInRight" id="buttonL">LEARN MORE</button>
    	</div>
    </div>  
</div>
<div class="container">
 	<div class="divider"><strong><em></em></strong></div>
 	<div class="row contentH">
 		<div align="right" class="col-md-6"><br><br><br>
 			<h3 align="center" style="background-color:black;color:#f9ec59;width:300px;">MISSION</h3>
 			<br>Author x Date
 			<br><p style="width:300px;">Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd asdsa asd asdsad asdasd asd asd asdasd asd asd asd asd asd as asd saas asds adas dasd asdasd asd as</p>
 		</div>
 		<div class="col-md-6"><br><br><br>
 			<img src="img/S2.jpg" width="300px" height="225px">
 		</div>
 	</div>
 	<div class="row contentH">
 		<div class="col-md-4"><br><br><br>
 			<h3 align="center" style="background-color:#f9ec59;color:black;width:300px;">ABOUT US</h3>
 			<br>Author x Date
 			<br><p style="width:300px;">Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd</p>
 		</div>
 		<div class="col-md-4"><br><br><br>
 			<h3 align="center" style="background-color:#f9ec59;color:black;width:300px;">HISTORY</h3>
 			<br>Author x Date
 			<br><p style="width:300px;">Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd</p>
 		</div>
 		<div class="col-md-4"><br><br><br>
 			<h3 align="center" style="background-color:#f9ec59;color:black;width:300px;">INSPIRATION</h3>
 			<br>Author x Date
 			<br><p style="width:300px;">Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd</p>
 		</div>
 	</div>
 </div>
  @include('layoutFront.footer')