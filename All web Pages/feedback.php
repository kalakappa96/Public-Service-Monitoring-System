<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);
session_start();
$u=$_SESSION['t1'];
require_once('dbcon.php');
$ss="select * from userdetails where email='$u'";
$rs=mysqli_query($con,$ss);
$row=mysqli_fetch_array($rs);
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
				<div class="nav_right_top">
                <p style="margin-left:470px; color:#0000FF; font-weight:bold;">welcome: <span style="color:#FF0000; font-weight:bold;"> <?php echo $row['fname'];?></span></p> 
				
					
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                             
                             <ul class="nav navbar-nav">
							<li ><a  href="user_home.php">Home</a></li>
            
			               <li><a  href="ComplaintDetails.php">Complaint Reg</a></li>
			              <li ><a  href="check_status.php">Check Status</a></li>				
				          <li class="active"><a  href="feedback.php">FeedBack</a></li>
                           <li><a  href="logout.php">Logout</a></li>
                
                           <li><a  href="changepass.php">ChangePassword</a></li>
							
</ul>
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
				<h3 class="tittle-w3ls three">Send Your FeedBack<span></span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
               
                
					<div class="login-form-rec">
		   <form action="feedback_info_con.php" method="post">
  
  <table width="570" height="380" align="left">
  <tr>
    <td height="57"><div align="left">Citizen Name</div></td>
    <td>
      <div align="left">
        <input type="text" name="t1" id="t1" style="width:200px;">    
      </div></td>
  </tr>
  <tr>
    <td height="57"><div align="left">Complaint ID</div></td>
    <td>
      <div align="left">
        <input type="text" name="t2" id="t2" style="width:200px;">    
      </div></td>
  </tr>
  <tr>
    <td><div align="left">Complaint Status</div></td>
    <td><div align="left">Solved
      <input type="radio" name="t3" id="radio" value="solved">
      Unsolved
      <input type="radio" name="t3" id="radio2" value="unsolved">    
    </div></td>
  </tr>
  
  <tr>
    <td><div align="left">About Service</div></td>
    <td><div align="left">Poor
      <input type="radio" name="t4" id="radio3" value="poor">
      Good
      <input type="radio" name="t4" id="radio4" value="good">
      Very Good
      <input type="radio" name="t4" id="radio5" value="very good">
      Excellent 
      <input type="radio" name="t4" id="radio6" value="excellent">
    </div></td>
  </tr>
  <tr>
    <td><div align="left">Worker Status</div></td>
    <td><div align="left">Satisfied
      <input type="radio" name="t5" id="radio7" value="satisfied">
      Unsatisfied
      <input type="radio" name="t5" id="radio8" value="unsatisfied">
    </div></td>
  </tr>
  
  <tr>
    <td colspan="2">
    <div align="center">
      <input type="submit" name="b1" id="b1" value="Submit"  style="width:200px;"/>
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

			<p class="copy-right">@PSMS 2022 All rights reserved  </p>
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