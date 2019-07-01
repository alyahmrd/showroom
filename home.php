<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iMOTO</title>
	<link rel="icon" href="images/icon.png" /> <!-- icon of the page -->
	<link rel='stylesheet'href ='css/bootstrap.css'/>
        <link rel='stylesheet'href ='css/font-awesome.min.css'/>
        <link rel='stylesheet'href ='css/style.css'/>
        <link rel='stylesheet'href='css/media.css'/>
        <link rel='stylesheet'href='css/animate.css'/>
 <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>


<body>

<!-- start nav bar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php" style=" color:blue;font-size: 21px;line-height: 18px;font-style: italic;">iMOTO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         
		 <li><a href="login_form.php">Login</a></li>
       
		<li><a href="index.php">Shopping Cart</a></li>
		
        <
		<li><a href="map.php">Find Us</a></li>
      </ul>
	  
     
      <ul class="nav navbar-nav navbar-right">
        
         <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end nav bar-->

<!-- start video-->
<div class="homepage-block-full-width">
	<video class="homepage-video" width="100%" height="auto"  muted  autoplay loop>
		<source src="video/video1.mp4" type="video/mp4">
		Your browser does not support the video tag.
	</video>
</div>


<!-- end video-->







<!-- start about us  -->
<section class="about text-center wow slideInUp" data-wow-duration="2s" data-wow-offset="300" > <!-- el text center da hy5li el goz2 da f el nos -->
	<!-- el hidden da by5ali el el h1 de f el mobile le m2as el so3'er t5tfii -->
	<h1 class="hidden-xs">Meet our new Store <span>iMOTO</span></h1>
	<!-- el visible hna el gomla de htban bm2as as3'r f el mobile w matbnsh f el pc  -->
	<h3 class="visible-xs">Meet our new Store <span>iMOTO</span></h5>

    <p class="lead">Hello Let me introduce our new Products </p> <!-- el lead da by5li el css f el p mo5talef w a7la -->

</section>

<!-- End about us  -->

<!-- start slider -->

		<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->

  <div class="carousel-inner" role="listbox">
    
    <div class="item active">
      <img src="images/mercedes1.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      <img src="images/mercedes.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
	<div class="item">
      <img src="images/aston.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- end slider -->

<!-- start price table -->
<section class="price_table text-center">
	<div class="container">
		<h1> Our Amazing <span>PRICES</span> & <span>OFFERS</span></h1>
		<div class="row">

				<div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="2s" data-wow-offset="200">
						<div class="img">
							<img  class="center-block" src="images/mercedes1.jpg" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li >$359.000</li>
							<li class="right-text">$500.000</li>
							<a href="cart.html" style="background-color: #337ab7">add to cart</a>
								
						</ul>
					</div>	
				</div>

				<div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="3s" data-wow-offset="200">
						<div class="img">
							<img src="images/ford1.jpg" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li >$195.000</li>
							<li class="right-text">$300.000</li>
							<a href="cart.html" style="background-color: #337ab7">add to cart</a>
								
						</ul>
					</div>	
				</div>

				<div class="col-md-4 col-sm-6 col-xm-12">
					<div class="price_box wow fadeInUp" data-wow-duration="4s" data-wow-offset="200">
						<div class="img">
							<img src="images/buggati1.jpg" alt="img">
						</div>
						<ul class="info list-unstyled">
							<li >$300.000</li>
							<li class="right-text">$595.00</li>
							<a href="cart.html" style="background-color: #337ab7">add to cart</a>
								
						</ul>	
					</div>	
				</div>

				
		
	</div>
	
</section>

<!-- End price table -->
<!-- start section contact us -->
<section class="contact-us text-center">
	<div class="container">
		<div class="row">
			
		<i class="fa fa-headphones fa-5x"></i>
		<h1 >TELL US WHAT YOU FEEL</h1>
		<p class="lead">Feel free to contact us anytime</p>
<div class="col-md-6 wow bounceInLeft"data-wow-duration="1s" data-wow-offset="300" >
		<form role="role ">

		<div class="form-group">
			<input type="text" class="form-control input-lg"  placeholder="username" name="">
		</div>

		<div class="form-group">
			<input type="text" class="form-control input-lg" placeholder="email" name="">
		</div>

		<div class="form-group">
			<input type="text" class="form-control input-lg" placeholder="Cell phone" name="">
		</div>

		</form>
	</div>
	<div class="col-md-6 wow rubberBand"data-wow-duration="1s" data-wow-offset="300">
		<div class="form-group">
			<textarea class="form-control input-lg" placeholder="Your Message"></textarea>
			
		</div>
		<button type="button" class="btn-lg btn-block" style="background-color: #337ab7" > Contact Us</button>
		
	</div>
	</div>
</div>
	
</section>
<!-- End section contact us -->






<!-- start Footer -->
<section class="footer">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6">
				<h2 style="color:#337ab7">Site Map</h2>
				<ul class="list-unstyled threecol ">
					<li>Home</li>
					<li>Shoping cart</li>
					<li>Brands</li>
					
					<li>Find Us</li>
					<li>Contact Us</li>

				</ul>
			</div>
			<div class="col-lg-6">
				<h2 style="color:#337ab7">Follow us </h2>
				<ul class="list-unstyled icons">
					<li> <i class="fa fa-facebook fa-5x " aria-hidden="true"></i></li>
					 <li><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></li>
					<li> <i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></li>
					<li><i class="fa fa-youtube-play fa-5x" aria-hidden="true"></i></li>
				</ul>
			</div>
			
		</div>
		
	</div>

	<div class="copyright text-center">
                   Copyright&copy;2019 <span>iMOTO</span>.ALYAHMED
            </div>
        </section>
        <!-- End Footer -->




<!--  -->



 <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/wow.min.js"></script>
        <script>new WOW().init();</script>

</body>
</html>﻿