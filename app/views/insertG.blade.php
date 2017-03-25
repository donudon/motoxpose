	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<div class="container">
		<div class="col-md-12" align="center"><h2>Add New Gallery</h2></div>
		<form class="form-horizontal" action="addG" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="txtUserid" class="col-md-3 control-label">Gallery ID</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtUserid" name="txtUserid" value="{{$id}}" readonly="readonly">
		      </div>
		    </div>
		     <div class="form-group" >
		    	<label for="txtThumbnail" class="col-md-3 control-label">Gallery Link</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtLink" name="txtLink"  value="{{Input::old('txtLink')}}">
                </div>      
            </div>
            <div class="form-group" >
		    	<label for="txtThumbnail" class="col-md-3 control-label">Gallery Title</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtTitle" name="txtTitle"  value="{{Input::old('txtTitle')}}">
                </div>      
            </div>
		    <div class="form-group" >
		      <label for="txtThumb" class="col-md-3 control-label">Gallery Thumbnail</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" name="txtThumb" value="{{Input::old('txtImage')}}"required>
		      </div>
		    </div>
			@for ($i=0; $i<20 ;$i++)
		    <div class="form-group" >
                <label for="txtImage" class="col-md-3 control-label">Gallery Images-{{$i+1}}</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtImage-{{$i}}" name="txtImage-{{$i}}">
                </div>
            </div>
            <div class="form-group">
		      <label for="txtUsername" class="col-md-3 control-label">Gallery Caption-{{$i+1}}</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtCaption-{{$i}}" name="txtCaption-{{$i}}">
		        <span class="text-danger">{{$errors->first('name')}} </span>
		      </div>
		    </div>
            @endfor
		    <div class="form-group">
		      <label for="txtCaption" class="col-md-3 control-label">Gallery Description</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtDescription" name="txtDescription" value="{{Input::old('txtUsername')}}" >
		        <span class="text-danger">{{$errors->first('name')}} </span>
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
