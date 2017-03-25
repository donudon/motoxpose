  @extends('layoutFront.master')

  @section('content')
<body>
  @include('layoutFront.header')

  <div class="slider-container">
    <div class="slider-control left inactive"></div>
    <div class="slider-control right"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">
      <div class="slide slide-0 active">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <!-- <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 150,0 500,405 0,405" />
          </svg> -->
          <!-- <div class="slide__text">
            <h2 class="slide__text-heading">Project name 1</h2>
            <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
            <a href="img/S1.jpg"
            class="slide__text-link">Project link</a>
          </div> -->
        </div>
      </div>
      <div class="slide slide-1 ">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <!-- <div class="slide__text">
            <h2 class="slide__text-heading">Project name 2</h2>
            <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
            <a href="img/S2.jpg" 
            class="slide__text-link">Project link</a>
          </div> -->
        </div>
      </div>
      <div class="slide slide-2">
        <div class="slide__bg"></div>
          <!-- <div class="slide__text">
            <h2 class="slide__text-heading">Project name 3</h2>
            <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
            <a href="img/S3.jpg"
            class="slide__text-link">Project link</a>
          </div>
        </div> -->
      </div>
      <div class="slide slide-3">
        <div class="slide__bg"></div>
        <div class="slide__content">
<!--           <div class="slide__text">
            <h2 class="slide__text-heading">Project name 4</h2>
            <p class="slide__text-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio veniam minus illo debitis nihil animi facere, doloremque voluptate tempore quia.</p>
            <a href="img/S4.jpg"
            class="slide__text-link">Project link</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron">
   	<div class="row">
   		<div class="ads col-md-2" align="center">@if ($jmlAds>=5)<img id="demo" src="{{$ads[4]->image}}" width="200px;">@else <br><br><br>AVAILABLE @endif</div>
      <div class="ads col-md-2" align="center">@if ($jmlAds>=3)<img id="demo" src="{{$ads[2]->image}}" width="200px;">@else <br><br><br>AVAILABLE @endif</div>
   		<div class="ads col-md-2" align="center">@if ($jmlAds>=1)<img id="demo" src="{{$ads[0]->image}}" width="200px;">@else <br><br><br>AVAILABLE @endif</div>
   		<div class="ads col-md-2" align="center">@if ($jmlAds>=2)<img id="demo" src="{{$ads[1]->image}}" width="200px;">@else <br><br><br>AVAILABLE @endif</div>
      <div class="ads col-md-2" align="center">@if ($jmlAds>=4)<img id="demo" src="{{$ads[3]->image}}" width="200px;">@else <br><br><br>AVAILABLE @endif</div>
      <div class="ads col-md-2" align="center">@if ($jmlAds>=6)<img id="demo" src="{{$ads[5]->image}}" width="200px;">@else <br><br><br>AVAILABLE @endif</div>
   	</div> 
  </div>
  <div class="container">
   	<div class="divider"><strong><em>Latest News</em></strong></div>
   	<div class="row contentH">
    @foreach ($news as $key => $val)
   		<div class="col-md-4"><br><br><br>
   			<img src="{{$val->thumbnail}}" width="300px" height="225px">
   			<h3>{{$val->title}}</h3>
   			<br>{{$val->author}} x {{$val->date_created}}
   			<br>{{$val->synopsis}}
   		</div>
    @endforeach
   		<!-- <div class="col-md-4"><br><br><br>
   			<img src="img/S2.jpg" width="300px" height="225px">
   			<h3>Bla Bla Bla</h3>
   			<br>Author x Date
   			<br>Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd
   		</div>
   		<div class="col-md-4"><br><br><br>
   			<img src="img/S3.jpg" width="300px" height="225px">
   			<h3>Bla Bla Bla</h3>
   			<br>Author x Date
   			<br>Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd
   		</div> -->
   	</div>
   	<div class="divider"><strong><em>Community/Events</em></strong></div>
   	<div class="row contentH">
   		@foreach ($events as $key => $val)
        <div class="col-md-4"><br><br><br>
          <img src="{{$val->thumbnail}}" width="300px" height="225px">
          <h3>{{$val->title}}</h3>
          <br>{{$val->author}} x {{$val->date_created}}
          <br>{{$val->synopsis}}
        </div>
      @endforeach
   		<!-- <div class="col-md-4"><br><br><br>
   			<img src="img/S2.jpg" width="300px" height="225px">
   			<h3>Bla Bla Bla</h3>
   			<br>Author x Date
   			<br>Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd
   		</div>
   		<div class="col-md-4"><br><br><br>
   			<img src="img/S3.jpg" width="300px" height="225px">
   			<h3>Bla Bla Bla</h3>
   			<br>Author x Date
   			<br>Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd
   		</div> -->
   	</div>
   	<div class="divider"><strong><em>MotoXpose Activities</em></strong></div>
   	<div class="row contentH">
   		@foreach ($activities as $key => $val)
        <div class="col-md-4"><br><br><br>
          <img src="{{$val->thumbnail}}" width="300px" height="225px">
          <h3>{{$val->title}}</h3>
          <br>{{$val->author}} x {{$val->date_created}}
          <br>{{$val->synopsis}}
        </div>
      @endforeach
   		<!-- <div class="col-md-4"><br><br><br>
   			<img src="img/S2.jpg" width="300px" height="225px">
   			<h3>Bla Bla Bla</h3>
   			<br>Author x Date
   			<br>Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd
   		</div>
   		<div class="col-md-4"><br><br><br>
   			<img src="img/S3.jpg" width="300px" height="225px">
   			<h3>Bla Bla Bla</h3>
   			<br>Author x Date
   			<br>Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd
   		</div> -->
   	</div>
   </div>
  @include('layoutFront.footer')