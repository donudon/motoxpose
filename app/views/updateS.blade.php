	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<div class="container">
		<div class="col-md-12" align="center"><h2>Edit Slider</h2></div>
		<form class="form-horizontal" action="../editS" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="txtUserid" class="col-md-3 control-label">Slider ID</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtSliderid" name="txtSliderid" value="{{$data->id}}" readonly="readonly">
		      </div>
		    </div>
		    <div class="form-group" >
		      <label for="txtImage" class="col-md-3 control-label">Slider Image</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control"  id="txtImage" name="txtImage" value="{{$data->image}}"required>
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
