	@extends('layout.master')

	@section('content')
<body>

	<div class="container">
		<div class="col-md-12" align="center"><h2>Customer Information Management</h2></div>
		<form class="form-horizontal" action="login" method="post">
		    <div class="form-group">
		      <label for="txtUsername" class="col-md-3 control-label">Username</label>
		      <span class="text-danger">{{$errors->first('username')}} </span>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtUsername" name="txtUsername" value="{{Input::old('txtUsername')}}" placeholder="Username">
		      </div>
		    </div>
		    <div class="form-group" >
		      <label for="txtPassword" class="col-md-3 control-label">Password</label>
		      <span class="text-danger">{{$errors->first('password')}} </span>
		      <span class="text-danger">{{$errors->first('wrong')}} </span>
		      <div class="col-md-6">
		        <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-md-10 col-md-offset-2">
		        <a href="register.php"><h4>Register</h4></a>
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-md-10 col-md-offset-2">
		        <button type="reset" class="btn btn-default">Cancel</button>
		        <button type="submit" class="btn btn-primary">Login</button>
		        </div>
		    </div>
		</form>

	</div>
</body>
</html>
	@stop