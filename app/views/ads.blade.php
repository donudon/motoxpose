	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Image</th>
      <th>Start Date</th>
      <th>End Date</th>
      <th>Total View</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $data as $key => $val)

    <tr>
      <td><!--ID-->{{$val->id}}</td>
      <td><!--img--><img src="{{$val->image}}" width="70%"></td>
      <td><!--ID-->{{$val->startdate}}</td>
      <td><!--ID-->{{$val->enddate}}</td>
      <td><!--ID-->{{$val->totalview}}</td>
      <td><!--Edit Del-->
          <a href="updateA/{{$val->id}}" class="btn btn-primary">Update</a>
          <a href="deleteA/{{$val->id}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete {{$val->name}}?')">Delete</a>
      </td>
    </tr>   
    @endforeach
  </tbody>
</table>
<div class="col-md-12" align="center">
		<a href="../insertA" class="btn btn-primary">Insert</a>
    {{$data->links()}}
</div>

</body>
@stop
