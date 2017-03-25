	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<div class="container">
		<div class="col-md-12" align="center"><h2>Edit User</h2></div>
		<form class="form-horizontal" action="../edit" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="txtUserid" class="col-md-3 control-label">User ID</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtUserid" name="txtUserid" value="{{$data->id}}" readonly="readonly">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="txtUsername" class="col-md-3 control-label">User Name</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtUsername" name="txtUsername" value="{{$data->username}}" placeholder="Name">
		        <span class="text-danger">{{$errors->first('name')}} </span>
		      </div>
		    </div>
		    <div class="form-group" >
		      <label for="txtEmail" class="col-md-3 control-label">User Password</label>
		      <div class="col-md-6">
		        <input type="password" class="form-control" id="txtPassword" name="txtPassword" value="" placeholder="Password">
		        <span class="text-danger">{{$errors->first('email')}} </span>
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-md-10 col-md-offset-2">
		        <button type="submit" class="btn btn-primary">Update</button>
		        </div>
		    </div>
		</form>
	</div>
</body>
@stop
</html>
