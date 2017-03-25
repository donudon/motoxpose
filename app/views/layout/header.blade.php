<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Moto</a>
	    </div>

	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	      	<li class=""><a class="lh" href="../user">User<span class="sr-only">(current)</span></a></li>
	        <li class=""><a class="lh" href="../slider">Slider</a></li>
	        <li class=""><a class="lh" href="../blog">Blog Generator<span class="sr-only">(current)</span></a></li>
	        <li class=""><a class="lh" href="../gallery">Gallery</a></li>
	        <li class=""><a class="lh" href="../ads">Ads<span class="sr-only">(current)</span></a></li>
	      </ul>
	      	@include('../search')
	      <ul class="nav navbar-nav navbar-right">
	        
	        <li><a href="">Welcome, {{$user}}
	        </a></li>
	        <li><a href="../logout">Logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
	</div>