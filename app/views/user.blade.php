	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>User ID</th>
      <th>Username</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $data as $key => $val)

    <tr>
      <td><!--ID-->{{$val->id}}</td>
      <td><!--Username-->{{$val->username}}</td>
      <td><!--Edit Del-->
          <a href="update/{{$val->id}}" class="btn btn-primary">Update</a>
          <a href="delete/{{$val->id}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete {{$val->name}}?')">Delete</a>
      </td>
    </tr>   
    @endforeach
  </tbody>
</table>
<div class="col-md-12" align="center">
		<a href="../insert" class="btn btn-primary">Insert</a>
    {{$data->links()}}	
</div>

</body>
@stop


