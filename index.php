<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<title>GUMBALL ARCADE HOME</title>
<!-- BOOTSTRAP CORE CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="assets/css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="assets/css/animations.min.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="assets/css/style-green.css" rel="stylesheet" />
<!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<?php
		
		//set the gpio's mode to output		
		system("gpio mode 3 in");
		//reading pin's status
		exec ("gpio read 3", $status, $return );
		//set the gpio to high/low
		if ($status[0] == "0" ) { 
		header('Location: http://192.168.1.115/wait.php'); }
		else if ($status[0] == "1" ) {
		//header('Location: http://192.168.1.115/index.php');
		}
		//reading pin's status
		exec ("gpio read ".$pic, $status, $return );
		//print it to the client on the response
		
	

?>
</head>
<body data-spy="scroll" data-target="#work">

<!--WORK SECTION START-->
<section id="work" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Games!!!</h3>
<hr />
</div>
</div>
<div class="row text-center animate-in" data-anim-type="fade-in-up" >
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pad-bottom">
<div class="caegories">
<a href="#" data-filter="*" class="active btn btn-custom btn-custom-two btn-sm">All</a>
<a href="#" data-filter=".mobile" class="btn btn-custom btn-custom-two btn-sm">mobile friendly</a>
<a href="#" data-filter=".strategy" class="btn btn-custom btn-custom-two btn-sm">strategy</a>
<a href="#" data-filter=".luck" class="btn btn-custom btn-custom-two btn-sm" >Luck</a>
<a href="#" data-filter=".classic" class="btn btn-custom btn-custom-two btn-sm" >classic games</a>
</div>
</div>
</div>


<div class="row text-center animate-in" data-anim-type="fade-in-up" id="work-div">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 strategy classic">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="/pong/">

<img src="assets/img/portfolio/1.jpg" class="img-responsive img-rounded" alt="" />


<h4>breakout</h4>
</div>
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 mobile luck classic">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="slots/">

<img src="assets/img/portfolio/2.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Lucky 7's!</h4>
</div>
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 mobile strategy">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="/games/l/platformer%201/">

<img src="assets/img/portfolio/3.jpg" class="img-responsive img-rounded" alt="/games/l/platformer%201/" />
</a>

<h4>Platformer</h4>
</div>
</div>


<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 mobile strategy">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="/games/l/platformer%202/">

<img src="assets/img/portfolio/4.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Platformer 2</h4>
</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 mobile strategy">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="/games/l/cannon/">

<img src="assets/img/portfolio/5.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Cannon</h4>
</div>
</div>

<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 strategy">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="/games/l/runner/">

<img src="assets/img/portfolio/6.jpg" class="img-responsive img-rounded" alt="" />
</a>

<h4>Runner</h4>

</div>
</div>
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 strategy">
<div class="work-wrapper">

<a class="fancybox-media" title="Image Title Goes Here" href="/games/l/tower_man/">

<img src="assets/img/portfolio/7.JPG" class="img-responsive img-rounded" alt="" />
</a>

<h4>towerman</h4>
</div>
</div>

</div>
</div>



</div>
</div>
</section>
<!--WORK SECTION END-->


<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="assets/js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="assets/js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="assets/js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>

</html>
