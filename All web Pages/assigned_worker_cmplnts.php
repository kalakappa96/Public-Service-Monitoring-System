<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->




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


				
				<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


<ul class="nav navbar-nav">
							<li ><a  href="staff_home.php">Home</a></li>
            
			<li ><a  href="assign_cmplnts_staff_view.php">Assigned Complaints</a>
				
				</li>
			<li class="active"><a href="assigned_worker_cmplnts.php">Forward Complaints</a>
				
				</li>				
				<li><a  href="wardworker_details.php">Add Wardworkers</a>
				
				</li>
                
                <li><a  href="feedback_view_staff.php">FeedBack</a>
				
				</li>
                
               
                           <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a  href="changepass.php">Changepass</a></li>
								<li><a href="logout.php">Logout</a></li>


							</ul>
						</li>
							
						</ul>
                 
				
					<!-- <?php
					include('staff_menu.php');
					?> -->
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
				<h3 class="tittle-w3ls three">Forwarded Complaints<span></span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="login-form-rec" style="margin-left:-20px;">
               
		  <?php 
		    
$server="localhost";
$user="root";
$password="";
$dbname="smart_solutions";
$con=mysqli_connect($server,$user,$password,$dbname);
		    $ss="select * from assigned_wordworker";
		    $res=mysqli_query($con,$ss);
		  ?>
		  <table width="1017" border="1">
            <tr>	
              <td width="187" bgcolor="#0000FF" ><span style="color:#FFFFFF;"><strong>Assigned to</strong></span></td>
              <td width="80" bgcolor="#0000FF" ><span style="color:#FFFFFF;"><strong>Ward</strong></span></td>
              <td width="69" bgcolor="#0000FF"><span style="color:#FFFFFF;"><strong>Area</strong></span></td> 
              
              <td width="136" bgcolor="#0000FF"><span style="color:#FFFFFF;"><strong>Contact</strong></span></td>
              <td width="97" bgcolor="#0000FF"><span style="color:#FFFFFF;"><strong>Email</strong></span></td>
              <td width="130" bgcolor="#0000FF"><span style="color:#FFFFFF;"><strong>Complaint ID</strong></span></td>
              <td width="141" bgcolor="#FF0000"><span style="color:#FFFFFF;"><strong>Complaint Status</strong></span></td>
            
            </tr>
            <?php
			while($row=mysqli_fetch_array($res))
			{
			   $id=$row['cid'];?>
			
			
            <tr>
              <td><?php echo $row['worker_name'];?></td>
              <td><?php echo $row['ward'];?></td>
              <td><?php echo $row['area'];?></td>
              
              <td><?php echo $row['contact'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['cid'];?></td>
               <?php
				 $status="select * from add_status where complaintid='$id'";
				 $status1=mysqli_query($con,$status);
				 $status2=mysqli_fetch_array($status1);
				 
				 if(empty($status2))
				 {
				 ?>
                 
                 
                 <td> <div align="center" style="color:red;font-weight:bold;">Pending</div></td>
                 <?php
				 }
				 else
				 {
				 ?>
                  <td> <div align="center" style="color:#00CC33; font-weight:bold;"><?php echo $status2['status'];?></div></td>
                  <?php } ?>
            
            </tr>
            <?php
			}
			?>
          </table>
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

			<p class="copy-right">@PSMS 2022. All rights reserved </p>
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