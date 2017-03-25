  @extends('layoutFront.master')

  @section('content')
<body>
  @include('layoutFront.header')

<div class="jumbotron" style="background:url('img/S5.jpg') no-repeat top center;width:100%;height:500px;">
</div>
<div class="jumbotron">
  <div class="row">
    <div class="ads col-md-3" style="margin-top:-80px;"></div>
    <div class="ads col-md-6" style="margin-top:-80px;font-size:20px;"><br><br><a href="/blogf?filter=news" id="h" class="hvr-underline-from-center" style="color:white;text-decoration:none;">Latest News</a> /  <a href="/blogf?filter=events" class="hvr-underline-from-center" style="color:white;text-decoration:none;">Events</a> /  <a href="/blogf?filter=activities" class="hvr-underline-from-center" style="color:white;text-decoration:none;">MotoXpose Activities</a></div>
    <div class="ads col-md-3" style="margin-top:-80px;"></div>
  </div> 
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-8"><div class="divider"><strong><em>Latest News</em></strong></div>
      <?php
        $filter = $_GET['filter'];
      ?>
      @if ($filter=="news")
        @foreach ($news as $key => $val)
          <div class="row">
            <div class="col-sm-5">
            <img src="{{$val->thumbnail}}" width="100%" height="225px">
          </div>
          <div class="col-sm-6 contentH" width="400px">
            <p style="font-size:21px;line-height:120%;letter-spacing:2px;"><strong><a href="/blog/{{$val->link}}" class="blink">{{$val->title}}</a></strong></p>
            <p style="font-size:12px;color:grey;letter-spacing:2px;"><strong>{{$val->author}} x {{$val->date_created}}</strong></p>
            <p style="font-size:12px;color:grey;letter-spacing:1px;">{{$val->synopsis}}</p>
          </div>
        </div>
        @endforeach
      @endif
      @if ($filter=="events")
        @foreach ($events as $key => $val)
          <div class="row">
            <div class="col-sm-5">
            <img src="{{$val->thumbnail}}" width="100%" height="225px">
          </div>
          <div class="col-sm-6 contentH" width="400px">
            <p style="font-size:21px;line-height:120%;letter-spacing:2px;"><strong><a href="/blog/{{$val->link}}" class="blink">{{$val->title}}</a></strong></p>
            <p style="font-size:12px;color:grey;letter-spacing:2px;"><strong>{{$val->author}} x {{$val->date_created}}</strong></p>
            <p style="font-size:12px;color:grey;letter-spacing:1px;">{{$val->synopsis}}</p>
          </div>
        </div>
        @endforeach
      @endif
      @if ($filter=="activities")
        @foreach ($activities as $key => $val)
          <div class="row">
            <div class="col-sm-5">
            <img src="{{$val->thumbnail}}" width="100%" height="225px">
          </div>
          <div class="col-sm-6 contentH" width="400px">
            <p style="font-size:21px;line-height:120%;letter-spacing:2px;"><strong><a href="/blog/{$val->link}}" class="blink">{{$val->title}}</a></strong></p>
            <p style="font-size:12px;color:grey;letter-spacing:2px;"><strong>{{$val->author}} x {{$val->date_created}}</strong></p>
            <p style="font-size:12px;color:grey;letter-spacing:1px;">{{$val->synopsis}}</p>
          </div>
        </div>
        @endforeach
      @endif
        
      <!-- <div class="row">
        <div class="col-sm-5">
          <img src="img/S1.jpg" width="100%" height="225px">
        </div>
        <div class="col-sm-6 contentH" width="400px">
          <p style="font-size:21px;line-height:120%;letter-spacing:2px;"><strong>VOLKSWAGEN ABU DHABI: OETTINGER BODY-KIT NOW FREE WITH SELECT GOLF GTI MODELS</strong></p>
          <p style="font-size:12px;color:grey;letter-spacing:2px;"><strong>DANIEL PRICE x JANUARY 23, 2017</strong></p>
          <p style="font-size:12px;color:grey;letter-spacing:1px;">Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <img src="img/S1.jpg" width="100%" height="225px">
        </div>
        <div class="col-sm-6 contentH" width="400px">
          <p style="font-size:21px;line-height:120%;letter-spacing:2px;"><strong>VOLKSWAGEN ABU DHABI: OETTINGER BODY-KIT NOW FREE WITH SELECT GOLF GTI MODELS</strong></p>
          <p style="font-size:12px;color:grey;letter-spacing:2px;"><strong>DANIEL PRICE x JANUARY 23, 2017</strong></p>
          <p style="font-size:12px;color:grey;letter-spacing:1px;">Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <img src="img/S1.jpg" width="100%" height="225px">
        </div>
        <div class="col-sm-6 contentH" width="400px">
          <p style="font-size:21px;line-height:120%;letter-spacing:2px;"><strong>VOLKSWAGEN ABU DHABI: OETTINGER BODY-KIT NOW FREE WITH SELECT GOLF GTI MODELS</strong></p>
          <p style="font-size:12px;color:grey;letter-spacing:2px;"><strong>DANIEL PRICE x JANUARY 23, 2017</strong></p>
          <p style="font-size:12px;color:grey;letter-spacing:1px;">Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <img src="img/S1.jpg" width="100%" height="225px">
        </div>
        <div class="col-sm-6 contentH" width="400px">
          <p style="font-size:21px;line-height:120%;letter-spacing:2px;"><strong>VOLKSWAGEN ABU DHABI: OETTINGER BODY-KIT NOW FREE WITH SELECT GOLF GTI MODELS</strong></p>
          <p style="font-size:12px;color:grey;letter-spacing:2px;"><strong>DANIEL PRICE x JANUARY 23, 2017</strong></p>
          <p style="font-size:12px;color:grey;letter-spacing:1px;">Description asdasdsda asd asd asddasd asd as dsadasdasdada asd as as dasd asdsad a asd asd asasd asd asdsadas dasd asd asd asd asd asd asd a asdasdasdsad asdasdasd</p>
        </div>
      </div>-->
    </div>
    <div class="col-sm-4">
      <!-- SnapWidget -->
      <!-- SnapWidget -->
    <div class="divider"><strong><em>What's New on</em><img src="img/logo.jpg" height="30px" align="right"></strong></div>
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="https://snapwidget.com/embed/350236" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
      </div>
  </div>
 </div>
  @include('layoutFront.footer')