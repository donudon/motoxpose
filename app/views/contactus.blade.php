  @extends('layoutFront.master')

  @section('content')
<body>
  @include('layoutFront.header')

<div class="jumbotron" style="background:url('img/S7.jpg') no-repeat top center;width:100%;height:500px;">
	<div class="row" style="margin-top:50px;">
		<div class="col-md-12">
	        <h1 class="animated fadeInDown" align="center" style="font-size:60px;background-color:transparent;color:white;"><strong><em>CONTACT US</em></strong></h1>	        
	    </div>
    </div>
    <div class="row">
    	<div class="col-md-12" align="center">
    		<button type="button" class="btn btn-default animated fadeInRight" id="buttonL">TELL US</button>
    	</div>
    </div>  
</div>
<div class="container" style="margin-bottom: 20px;">
	<div class="row contentH">
 		<div align="center" class="col-md-12"><br><br><br>
 			<img src="img/Label.jpg" style="width: 87%;margin-top: -43px;">
 		</div>
 	</div>
 	<div class="row contentH">
 		<form class="form-horizontal" action="send" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <div class="col-md-2"></div>
		      <div class="col-md-4">
		      	<label for="txtUsername">Your Name (Required)</label>
		        <input type="text" class="form-control" id="txtName" name="txtUsername" value="{{Input::old('txtUsername')}}">
		        <span class="text-danger">{{$errors->first('username')}} </span>
		      </div>
		      <div class="col-md-4">
		      	<label for="txtUsername">Your Email (Required)</label>
		        <input type="text" class="form-control" id="txtEmail" name="txtUsername" value="{{Input::old('txtUsername')}}">
		        <span class="text-danger">{{$errors->first('username')}} </span>
		      </div>
		      <div class="col-md-2"></div>
		    </div>
		    <div class="form-group">
		      <div class="col-md-2"></div>
		      <div class="col-md-8">
		      	<label for="txtUsername">Subject</label>
		        <input type="text" class="form-control" id="txtSubject" name="txtUsername" value="{{Input::old('txtUsername')}}">
		        <span class="text-danger">{{$errors->first('username')}} </span>
		      </div>
		      <div class="col-md-2"></div>
		    </div>
		    <div class="form-group">
		      <div class="col-md-2"></div>
		      <div class="col-md-8">
		      	<label for="txtUsername">Your Message</label>
		      	<textarea class="form-control" id="txtMessage"></textarea>
		        <span class="text-danger">{{$errors->first('username')}} </span>
		      </div>
		      <div class="col-md-2"></div>
		    </div>
		    <div class="form-group">
		      <div class="col-md-2"></div>
		      <div class="col-md-8" align="right">
		        <button type="submit" class="btn btn-default" style="background-color:#f9ec59;color:black;border-radius:0;font-size:20px;">Register</button>
	          </div>
	          <div class="col-md-2"></div>
		    </div>
		</form>
 	</div>
 	<!-- <div class="divider"><strong><em></em></strong></div>
 	<div class="row contentH">
 		<div align="center" class="col-md-12"><br><br><br>
 			<h3 align="center" style="background-color:black;color:#f9ec59;width:300px;">CONTACT INFO</h3>
 		</div>
 	</div>
 	<div class="row contentH">
 		<div align="right" class="col-md-6" style="font-size:20px;">
 			<br><strong>MotoXpose</strong>
 			<br><p style="width:300px;font-size:15px;">Jl. Batu Tulis No.4 <br>Batu Ampar, Kramat Jati <br>Jakarta Timur 13520</p>
 		</div>
 		<div class="col-md-6" style="font-size:20px;">
 			<br><strong>Email :</strong> motoxpose@gmail.com
 			<br><strong>Phone :</strong> 08123345678
 		</div>
 	</div>
 	<div class="divider"><strong><em></em></strong></div>
 	<div class="row contentH">
 		<div align="center" class="col-md-12"><br><br><br>
 			<h3 align="center" style="background-color:#f9ec59;color:black;width:300px;">TELL US</h3>
 			
 		</div>

 	</div>
 	<div class="row contentH">
 		<div class="col-md-3">
 		</div>
 		<div class="col-md-6" style="font-size:18px;">
 			<form>
				<div class="form-group">
					<label for="FullName">Full Name</label>
					<input type="text" class="form-control" id="fname">
				</div>
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="email">Message</label>
					<textarea class="form-control" id="message" rows="5" required="" data-validation-required-message="Please enter a message."></textarea>
				</div>
				<div class="form-group" align="right">
					<button type="submit" class="btn btn-default" style="background-color:#f9ec59;color:black;border-radius:0;font-size:20px;">Send a Message</button>
				</div>	
			</form>
		</div>
 		<div class="col-md-3">
 		</div>
 	</div> -->
 </div>
  @include('layoutFront.footer')