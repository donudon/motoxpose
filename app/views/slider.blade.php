	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Img</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $data as $key => $val)

    <tr>
      <td><!--ID-->{{$val->id}}</td>
      <td><!--img--><img src="{{$val->image}}" width="20%"></td>
      <td><!--Edit Del-->
          <a href="updateS/{{$val->id}}" class="btn btn-primary">Update</a>
          <a href="deleteS/{{$val->id}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete {{$val->name}}?')">Delete</a>
      </td>
    </tr>   
    @endforeach
  </tbody>
</table>
<div class="col-md-12" align="center">
		<a href="../insertS" class="btn btn-primary">Insert</a>
    {{$data->links()}}
</div>

</body>
@stop
