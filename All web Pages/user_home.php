<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
session_start();
$u=$_SESSION['t1'];
$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);
$ss="select * from userdetails where email='$u'";
$rs=mysqli_query($con,$ss);
$row=mysqli_fetch_array($rs,MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
	<title>PSMS</title>

	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Conceit Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
	<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
					<div class="logo-w3layouts-agileits">
						<h1> <a class="navbar-brand" href="#"><i class="fa fa-clone" aria-hidden="true"></i> PSMS <span class="desc">Public Service Monitoring System</span></a></h1>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_left_top" >
			<p style="margin-left:470px; color:#0000FF; font-weight:bold;">welcome: <span style="color:#FF0000; font-weight:bold;"> <?php echo $row['fname'];?></span> <span style="color:#0000FF; font-weight:bold;">UID :<span style="color:#FF0000; font-weight:bold;"> <?php echo $row['userid'];?></span></p> 
						<?php
						
						include('user_menu.php');
						
						?>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
	<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Keep City Clean and Green</h3>
						
						<div class="top-buttons">
							<div class="bnr-button"></div>
					        <div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Clean India</h3>
						
						<div class="top-buttons">
							
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Smart Solutions</h3>
						<p>Solutions made easy</p>
						<div class="top-buttons">
							
							
							<div class="clearfix"> </div>
						</div>

					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">

					
						
						<div class="top-buttons">
						
							
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
		
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			
		</a>
		<!-- The Modal -->
	</div>
	<!--//banner -->
	<!--/ab-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">About Us</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_grid help">
						<img src="images/ab.png" alt=" " class="img-responsive">
					</div>
					<div class="col-md-6 banner_bottom_left">
						<h4>Working to build a better web design</h4>
						<p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
							pulvinar neque pharetra ac.</p>
						<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
							pulvinar neque pharetra ac.</p>
						</div>
					<div class="clearfix"></div>
				</div>
			</div>
			</div>
	</div>
	<!--//ab-->
	<!--/what-->
	<div class="works">
		<div class="container">
			<h3 class="tittle-w3ls cen">What we do</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="ser-first">
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-shield" aria-hidden="true"></span>
						<h3>Complaint Registration</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-pencil" aria-hidden="true"></span>
						<h3>Complaint Status</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-star" aria-hidden="true"></span>
						<h3>Analysis of Solved Problems</h3>
						<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="col-md-3 ser-first-grid text-center">
						<span class="fa fa-thumbs-up" aria-hidden="true"></span>
						<h3>Analysis of UnSolved Problems</h3>
					  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>

		</div>
	</div>
	<!--//what-->
	<!--/banner_bottom-->
<!--//banner_bottom-->
<!--/projects-->
<div class="banner_bottom proj">
		<div class="wrap_view">
			
			</div>

		</div>
	</div>

	<!--//projects-->
	<!--/blog-->
	

	<!--//blog-->
	<!--/bottom-->
	<div class="banner_bottom">
		<div class="container">
			<h3 class="tittle-w3ls">Let’s Change Keep Our City Clean and Green
			</h3>
			<div class="inner_sec_info_wthree_agile">
				<div class="help_full">

					<div class="col-md-6 banner_bottom_left">
						<h4>Entrepreneurs Get Their Act Together </h4>
						<p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
							pulvinar neque pharetra ac. Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla
							viverra pharetra sem, eget pulvinar neque pharetra ac.

						</p>
					


					</div>

					<div class="col-md-6 banner_bottom_grid help">
						<img src="images/banner_mid.jpg" alt=" " class="img-responsive">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--//bottom-->
	<!--/testimonials-->
	
	<!--//testimonials-->

	<!-- /newsletter-->
	
	<!-- //newsletter-->

	<!-- footer -->
	<div class="footer">
		
			
			<div class="clearfix"></div>
			<p class="copy-right">@PSMS 2022 All rights reserved </a></p>
		</div>

	</div>
	<!-- //footer -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>

	<!-- js -->
	<!-- Smooth-Scrolling-JavaScript -->
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll, .navbar li a, .footer li a").click(function (event) {
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //Smooth-Scrolling-JavaScript -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script type="text/javascript" src="js/jquery-1.7.2.js"></script>
	<script src="js/jquery.quicksand.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

</body>

</html>