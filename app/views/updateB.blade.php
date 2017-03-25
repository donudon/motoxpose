	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<div class="container">
		<div class="col-md-12" align="center"><h2>Edit Article</h2></div>
		<form class="form-horizontal" action="../editB" method="post" enctype="multipart/form-data">
		    <div class="form-group">
		      <label for="txtArticleid" class="col-md-3 control-label">Article ID</label>
		      <div class="col-md-6">
		        <input type="text" class="form-control" id="txtArticleid" name="txtArticleid" value="{{$data->id}}" readonly="readonly">
		      </div>
		    </div>
		    <div class="form-group">
                <label for="txtTitle" class="col-md-3 control-label">Article Title</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="txtTitle" name="txtTitle" value="{{$data->title}}" placeholder="Name">
                    <span class="text-danger">{{$errors->first('name')}} </span>
                </div>
            </div>
            <div class="form-group" >
                <label for="txtLink" class="col-md-3 control-label">Article Link</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="txtLink" name="txtLink" value="{{$data->link}}" placeholder="Email">
                    <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
            </div>
            <div class="form-group" >
                <label for="txtType" class="col-md-3 control-label">Article Type</label>
                <div class="col-md-6">
                  <select class="form-control" id="sel1" name="txtType" value="{{$data->type}}">
                    <option value="News" @if($data->type=="News") selected @endif>News</option>
                    <option value="Events" @if($data->type=="Events") selected @endif>Events</option>
                    <option value="Activities" @if($data->type=="Activities") selected @endif>Activities</option>
                  </select>
                </div>
            </div>
            <div class="form-group" >
                <label for="txtSynopsys" class="col-md-3 control-label">Article Read More</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtSynopsis" name="txtSynopsis"  value="{{$data->synopsis}}">
                </div>
            </div>
            <div class="form-group" >
                <label for="txtImage" class="col-md-3 control-label">Article Thumbnail</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtImage" name="txtImage"  value="{{$data->thumbnail}}">
                </div>
            </div>
            <div class="form-group" >
                <label for="txtAuthor" class="col-md-3 control-label">Article Author</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="txtAuthor" name="txtAuthor" value="{{$data->author}}" placeholder="Address">
                    <span class="text-danger">{{$errors->first('address')}}</span>
                </div>
            </div>
            <div class="form-group" >
                <label for="area" class="col-md-6 control-label">Article Content</label>
                <!-- {{$data->content}} -->
            </div>
            <div class="form-group" >
                <label for="area" class="col-md-1 control-label"></label>
                <div class="col-md-9">
                    <textarea name="editor" id="editor" class="ckeditor">{{$data->content}}</textarea>
                    <span class="text-danger">{{$errors->first('address')}}</span>
                </div>
            </div>
            <script type="text/javascript">
                CKEDITOR.replace( 'editor' );
                //CKEDITOR.instances.editor.editable().setHtml( '<p>FooBar</p>' );
                //  var t = <%=editortext.InnerText %>;
                // CKEDITOR.instances.editor.setData(t);
            </script>
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
