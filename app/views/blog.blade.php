	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>Link</th>
      <th>Type</th>
      <th>Read More</th>
      <th>Thumbnail</th>
      <th>Date</th>
      <th>Author</th>
      <th>Content</th>
      <th>Action</th>
    </tr>
  </thead>
        <tbody>
        @foreach( $data as $key => $val)
            <tr>
                <td><!--ID-->{{$val->id}}</td>
                <td><!--Title-->{{$val->title}}</td>
                <td><!--Link-->{{$val->link}}</td>
                <td><!--Link-->{{$val->type}}</td>
                <td><!--Link-->{{$val->synopsis}}</td>
                <td><!--Thumbnail--><img src="{{$val->thumbnail}}" width="200px"></td>
                <td><!--Date Created-->{{$val->date_created}}</td>
                <td><!--Author-->{{$val->author}}</td>
                <td><!--Content-->{{$val->content}}</td>
                <td><!--Edit Del-->
                    <a href="updateB/{{$val->id}}" class="btn btn-primary">Update</a>
                    <a href="deleteB/{{$val->id}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete {{$val->title}}?')">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
</table>
<div class="col-md-12" align="center">
		<a href="../insertB" class="btn btn-primary">Insert</a>
    {{$data->links()}}
</div>

</body>
@stop
