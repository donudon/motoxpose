	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<div class="container">
		<div class="col-md-12" align="center"><h2>Add New Slider</h2></div>
		<form class="form-horizontal" action="addS" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="txtUserid" class="col-md-3 control-label">Slider ID</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtUserid" name="txtUserid" value="{{$id}}" readonly="readonly">
		      </div>
		    </div>
		    <div class="form-group" >
		      <label for="txtImage" class="col-md-3 control-label">Slider Image URL</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control"  id="txtImage" name="txtImage" value="" required>
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
