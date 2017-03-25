@extends('layout.master')

@section('content')
    <body>
    @include('layout.header')
    <div class="container">
        <div class="col-md-12" align="center"><h2>Add New Article</h2></div>
        <form class="form-horizontal" action="addB" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="txtUserid" class="col-md-3 control-label">Article ID</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="txtUserid" name="txtUserid" value="{{$id}}" readonly="readonly">
                </div>
            </div>
            <div class="form-group">
                <label for="txtTitle" class="col-md-3 control-label">Article Title</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="txtTitle" name="txtTitle" value="{{Input::old('txtUsername')}}" >
                    <span class="text-danger">{{$errors->first('name')}} </span>
                </div>
            </div>
            <div class="form-group" >
                <label for="txtLink" class="col-md-3 control-label">Article Link</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="txtLink" name="txtLink" value="{{Input::old('txtEmail')}}" >
                    <span class="text-danger">{{$errors->first('email')}}</span>
                </div>
            </div>
            <div class="form-group" >
                <label for="txtType" class="col-md-3 control-label">Article Thumbnail</label>
                <div class="col-md-6">
                  <select class="form-control" id="sel1" name="txtType">
                    <option value="News">News</option>
                    <option value="Events">Events</option>
                    <option value="Activities">Activities</option>
                  </select>
                </div>
            </div>
            <div class="form-group" >
                <label for="txtSynopsys" class="col-md-3 control-label">Article Read More</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtSynopsis" name="txtSynopsis"  value="{{Input::old('txtSynopsis')}}">
                </div>
            </div>
            <div class="form-group" >
                <label for="txtImage" class="col-md-3 control-label">Article Thumbnail</label>
                <div class="col-md-6">
                    <input type="text" class="form-control"  id="txtImage" name="txtImage"  value="{{Input::old('txtImage')}}"required>
                </div>
            </div>
            <div class="form-group" >
                <label for="txtAuthor" class="col-md-3 control-label">Article Author</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" id="txtAuthor" name="txtAuthor" value="{{Input::old('txtAddress')}}">
                    <span class="text-danger">{{$errors->first('address')}}</span>
                </div>
            </div>
            <div class="form-group" >
                <label for="area" class="col-md-6 control-label">Article Content</label>
            </div>
            <div class="form-group" >
                <label for="area" class="col-md-1 control-label"></label>
                <div class="col-md-9">
                    <textarea name="editor" class="ckeditor"> </textarea>
                    <span class="text-danger">{{$errors->first('address')}}</span>
                </div>
            </div>
            <script type="text/javascript">
                CKEDITOR.replace( 'editor' );
            </script>
            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <button type="reset" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>

    </div>
    </body>
    @stop
    </html>
