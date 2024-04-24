<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Nicholas E.K. - Portofolio</title>
<meta name="description" content="">
<meta name="author" content="">
<!-- Basic Page Needs
================================================== -->
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<link href="public/css/bootstrap.css" rel="stylesheet">
<link href="public/css/custom.css" rel="stylesheet">
<link href="public/css/bootstrap-responsive.css" rel="stylesheet">
<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="public/images/favicon.ico">
<link rel="apple-touch-icon" href="public/images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="public/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="public/images/apple-touch-icon-114x114.png">
<!-- Scripts -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script>$('#myModal').modal()</script>
<script src="js/formvalidation.js"></script>
<script src="js/html5placeholder.jquery.js"></script>
<script src="js/jquery.tweet.js"></script>
</head>
<body>
<!-- Top Green Bar -->
<div class="topline">
</div>
<!-- Top Green Bar Ends-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</a>
			<div class="nav-collapse collapse">
				<!-- Menu Links
			================================================== -->
				<!-- Left menu links -->
				<ul class="nav leftmenu">
					<li><a href="index">Home</a></li>
					<li><a href="about">About me & my work</a></li>
				</ul>
				<!-- Right menu links -->
				<ul class="nav rightmenu">
					<li><a href="portofolio">Portofolio & projects</a></li>
					<li class="lastmenu"><a href="contact" class="lastmenu">Contact</a></li>
				</ul>
				<!-- End Menu Links
			================================================== -->
			</div>
			<!-- Menu Ends
			================================================== -->
			<!-- Logo-->
			<a class="brand logo" href="#">John<br/> Doe</a>
			<!-- End Logo-->
		</div>
	</div>
</div>
<!-- Container starts
================================================== -->
<div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
	<h1 class="title">Portofolio</h1>
	<div class="titlelinesimple">
	</div>
	<!-- Portofolio
	================================================== -->
	<div class="row center">
		<div class="span16">
			<div class="boxgrid slideright">
				<img class="cover" src="img/portofolio/1.jpg" alt=""/>
				<h3>Project Name</h3>
				<p>
					Decription<br/><a href="#" target="_BLANK">View link</a>
				</p>
			</div>
			<div class="boxgrid thecombo">
				<img class="cover" src="img/portofolio/2.jpg" alt=""/>
				<h3>John Doe</h3>
				<p>
					Photographer<br/><a href="#" target="_BLANK">View link</a>
				</p>
			</div>
			<div class="boxgrid slideright">
				<img class="cover" src="img/portofolio/3.jpg" alt=""/>
				<h3>John Doe</h3>
				<p>
					Photographer<br/><a href="#" target="_BLANK">View link</a>
				</p>
			</div>
			<div class="boxgrid thecombo">
				<img class="cover" src="img/portofolio/4.jpg" alt=""/>
				<h3>Project Name</h3>
				<p>
					Decription<br/><a href="#" target="_BLANK">View link</a>
				</p>
			</div>
			<div class="boxgrid slideright">
				<img class="cover" src="img/portofolio/5.jpg" alt=""/>
				<h3>John Doe</h3>
				<p>
					Art, Music, Word<br/><a href="#" target="_BLANK">Website</a>
				</p>
			</div>
			<div class="boxgrid thecombo">
				<img class="cover" src="img/portofolio/6.jpg" alt=""/>
				<h3>Project Name</h3>
				<p>
					Decription<br/><a href="#" target="_BLANK">View link</a>
				</p>
			</div>
		</div>
	</div>
	<!-- Footer 
================================================== -->
	<div class="footerli">
	</div>
	<div class="tweetarea">
		<div class="tweettext">
			<div class="row">
				<div class="span-one-third">
					<div class="tweet">
					</div>
				</div>
				<div class="span-one-third">
					<div class="centermargin">
						<div class="facebook">
							<a href="#"></a>
						</div>
						<div class="twitter">
							<a href="#"></a>
						</div>
						<div class="google">
							<a href="#"></a>
						</div>
						<div class="flickr">
							<a href="#"></a>
						</div>
					</div>
				</div>
				<div class="span-one-third center">
					 Have a project in mind? <br/>Contact me directly<br/>
					<span class="small"><a href="mailto:emailhire@gmail.com">emailhire@gmail.com</a></span>
				</div>
			</div>
		</div>
	</div>
	<div class="footer center">
		 &copy; Copyright Your Name 2015
	</div>
</div>
<!-- Ended Container-->
<div class="footerend">
</div>
<!-- Portofolio Script 
================================================== -->
<script type="text/javascript">
			$(document).ready(function(){
				//To switch directions up/down and left/right just place a "-" in front of the top/left attribute
				//Vertical Sliding
				$('.boxgrid.slidedown').hover(function(){
					$(".cover", this).stop().animate({top:'-260px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:300});
				});
				//Horizontal Sliding
				$('.boxgrid.slideright').hover(function(){
					$(".cover", this).stop().animate({left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({left:'0px'},{queue:false,duration:300});
				});
				//Diagnal Sliding
				$('.boxgrid.thecombo').hover(function(){
					$(".cover", this).stop().animate({top:'260px', left:'325px'},{queue:false,duration:300});
				}, function() {
					$(".cover", this).stop().animate({top:'0px', left:'0px'},{queue:false,duration:300});
				});
				//Partial Sliding (Only show some of background)
				$('.boxgrid.peek').hover(function(){
					$(".cover", this).stop().animate({top:'90px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
				});
				//Full Caption Sliding (Hidden to Visible)
				$('.boxgrid.captionfull').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'260px'},{queue:false,duration:160});
				});
				//Caption Sliding (Partially Hidden to Visible)
				$('.boxgrid.caption').hover(function(){
					$(".cover", this).stop().animate({top:'160px'},{queue:false,duration:160});
				}, function() {
					$(".cover", this).stop().animate({top:'220px'},{queue:false,duration:160});
				});
			});
		</script>
</body>
</html>