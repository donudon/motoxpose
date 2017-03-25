	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<div class="container">
		<div class="col-md-12" align="center"><h2>Edit Gallery</h2></div>
		<form class="form-horizontal" action="../editG" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="txtUserid" class="col-md-3 control-label">Gallery ID</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtUserid" name="txtUserid" value="{{$data->id}}" readonly="readonly">
		      </div>
		    </div>
		    <div class="form-group" >
		    	<div class="col-md-3"></div>
		   		<div class="col-md-6">
                    <img width="200px" src="{{$data->thumbnail}}">
                </div>        
            </div>
            <div class="form-group" >
		    	<label for="txtThumbnail" class="col-md-3 control-label">Gallery Link</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtLink" name="txtLink"  value="{{$data->link}}">
                </div>      
            </div>
            <div class="form-group" >
		    	<label for="txtThumbnail" class="col-md-3 control-label">Gallery Title</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtTitle" name="txtTitle"  value="{{$data->title}}">
                </div>      
            </div>
		    <div class="form-group" >
                <label for="txtThumbnail" class="col-md-3 control-label">Gallery Thumbnail</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtThumbnail" name="txtThumbnail"  value="{{$data->thumbnail}}">
                </div>
            </div>
            	<?php
			      $img = explode(",", $data->image);
			      $cap = explode(",", $data->details);
			    ?>
            @for ($i=0; $i<20 ;$i++)
		    <div class="form-group" >
		    	@if (isset($img[$i])&&$img[$i]!="")
		    	<div class="col-md-12" align="center">
		    		<img width="200px" src="{{$img[$i]}}">
	    		</div>
		    	@endif
                <label for="txtImage" class="col-md-3 control-label">Gallery Images-{{$i+1}}</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtImage-{{$i}}" name="txtImage-{{$i}}" value="@if (isset($img[$i])){{$img[$i]}}@endif">
                </div>
            </div>
            <div class="form-group">
		      <label for="txtUsername" class="col-md-3 control-label">Gallery Caption-{{$i+1}}</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtCaption-{{$i}}" name="txtCaption-{{$i}}" value="@if (isset($img[$i])){{$cap[$i]}}@endif" >
		        <span class="text-danger">{{$errors->first('name')}} </span>
		      </div>
		    </div>
            @endfor
		    <div class="form-group">
		      <label for="txtUsername" class="col-md-3 control-label">Gallery Description</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtDescription" name="txtDescription" value="{{$data->caption}}" >
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
