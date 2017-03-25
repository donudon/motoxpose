	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<div class="container">
		<div class="col-md-12" align="center"><h2>Edit Ads</h2></div>
		<form class="form-horizontal" action="../editA" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="txtAdsId" class="col-md-3 control-label">Ads ID</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtAdsId" name="txtAdsId" value="{{$data->id}}" readonly="readonly">
		      </div>
		    </div>
		    <div class="form-group" >
		      <label for="txtImage" class="col-md-3 control-label">Slider Image</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control"  id="txtImage" name="txtImage" value="">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="txtAdsname" class="col-md-3 control-label">Ads Start Date</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtADate" name="txtADate" value="{{$data->startdate}}" readonly="readonly">
		        <span class="text-danger">{{$errors->first('name')}} </span>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="txtEDate" class="col-md-3 control-label">Ads End Date</label>
		      <div class="col-md-6">
		        <input type="date" class="form-control" id="txtEDate" name="txtEDate" value="{{$data->enddate}}">
		        <span class="text-danger">{{$errors->first('name')}} </span>
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="txtAdsname" class="col-md-3 control-label">Ads Total View</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtView" name="txtView" readonly="readonly" value="{{$data->totalview}}" placeholder="Name">
		        <span class="text-danger">{{$errors->first('name')}} </span>
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
