	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<div class="container">
		<div class="col-md-12" align="center"><h2>Add New User</h2></div>
		<form class="form-horizontal" action="add" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="txtUserid" class="col-md-3 control-label">User ID</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtUserid" name="txtUserid" value="{{$id}}" readonly="readonly">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="txtUsername" class="col-md-3 control-label">User Name</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtUsername" name="txtUsername" value="{{Input::old('txtUsername')}}" placeholder="Name">
		        <span class="text-danger">{{$errors->first('username')}} </span>
		      </div>
		    </div>
		    <div class="form-group" >
		      <label for="txtPassword" class="col-md-3 control-label">User Password</label>
		      <div class="col-md-6">
		        <input type="password" class="form-control" id="txtPassword" name="txtPassword" value="" placeholder="Password">
		        <span class="text-danger">{{$errors->first('password')}}</span>
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-md-10 col-md-offset-2">
		        <button type="reset" class="btn btn-default">Cancel</button>
		        <button type="submit" class="btn btn-primary">Register</button>
		        </div>
		    </div>
		</form>

	</div>
</body>
@stop
</html>
