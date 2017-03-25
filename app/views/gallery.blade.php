	@extends('layout.master')

	@section('content')
<body>
	@include('layout.header')
	<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Thumbnail</th>
      <th>Link</th>
      <th>Title</th>
      <th>img</th>
      <th>caption</th>
      <th>Created At</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $data as $key => $val)
      <?php
        $img = explode(",", $val->image);
      ?>
    <tr>
      <td><!--ID-->{{$val->id}}</td>
      <td><!--Username--><img width="200px" src="{{$val->thumbnail}}"></td>
      <td><!--Username-->{{$val->link}}</td>
      <td><!--ID-->{{$val->title}}</td>
      <td width="250px">
        @foreach($img as $k => $v)
                <!--Photo-->@if ($v!="")<img src="{{$v}}" width="100px">@endif
        @endforeach
      </td>
      <td><!--Username-->{{$val->caption}}</td>
      <td><!--Username-->{{$val->created_at}}</td>
      <td><!--Edit Del-->
          <a href="updateG/{{$val->id}}" class="btn btn-primary">Update</a>
          <a href="deleteG/{{$val->id}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</a>
      </td>
    </tr>   
    @endforeach
  </tbody>
</table>
<div class="col-md-12" align="center">
		<a href="../insertG" class="btn btn-primary">Insert</a>
    {{$data->links()}}
</div>

</body>
@stop
