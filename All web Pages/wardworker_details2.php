<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->




<!DOCTYPE html>
<html>

<head>



	<title>Smart Solutions</title>
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
					<h1> <a class="navbar-brand" href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> Smart <span class="desc">Solutions</span></a></h1>
				</div>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div class="nav_right_top">
                
				
					<?php
					include('staff_menu.php');
					?>
				</div>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>
	</div>
	<!--/banner_info-->
	<div class="banner_inner_con">
	</div>
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			
		</div>
	</div>
	<!--//banner_info-->
	<!-- /inner_content -->
<div class="banner_bottom">
		<div class="container">
			<div class="tittle-w3ls_head">
				<h3 class="tittle-w3ls three">Add Ward Worker Info<span></span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
               
		   <form action="add_wardworker_details2.php" method="post">
  
  <table width="570" height="466" align="center">
  <tr>
    <td><div align="left">Worker Name</div></td>
    <td>
      <div align="left">
        <input type="text" name="t1" id="t1" style="width:200px;" />    
      </div></td>
  </tr>
  <tr>
    <td><div align="left">Ward</div></td>
    <td>
      <div align="left">
        <input type="text" name="t2" id="t2" value="<?php echo $_GET['ward'];?>" readonly style="width:200px;" />    
      </div></td>
  </tr>
  <tr>
    <td><div align="left">Area</div></td>
    <td>
      <div align="left">
        <input type="text" name="t3" id="t3" value="<?php echo $_GET['area'];?>" readonly style="width:200px;" />    
      </div></td>
  </tr>
  
  <tr>
    <td><div align="left">Address</div></td>
    <td><div align="left">
      <input type="text" name="t4" id="t4" style="width:200px;" />
    </div></td>
  </tr>
  <tr>
    <td><div align="left">Contact</div></td>
    <td><div align="left">
      <input type="text" name="t5" id="t5" style="width:200px;" />
    </div></td>
  </tr>
  <tr>
    <td><div align="left">E-mail</div></td>
    <td><div align="left">
      <input type="text" name="t6" id="t6" style="width:200px;" />
    </div></td>
  </tr>
  
  
  <tr>
    <td colspan="2">
    <div align="center">
      <input type="submit" name="b1" id="b1" value="Submit" style="width:200px;" />
    </div>    </td>
    </tr>
</table>

	
		   </form>
		  </div>
					<div class="login-social-grids">
						
					</div>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	    <p>&nbsp;</p>
	    <p>&nbsp;</p>
</div>

	<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
		  <div class="clearfix"></div>

			<p class="copy-right">&copy 2018 Smart Solutions. All rights reserved </p>
		</div>
</div>
	</div>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
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



</body>

</html>