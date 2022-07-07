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
					<h1> <a class="navbar-brand" href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> PSMS<span class="desc">Public Service Monitoring System</span></a></h1>
				</div>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<div class="nav_right_top">
                
				
					<?php
					include('worker_menu.php');
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
				<h3 class="tittle-w3ls three">Update Complaint Status<span></span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
		   <form action="update_status_con.php" method="post" enctype="multipart/form-data">
           <?php
		   $id=$_GET['id'];
		   
		    
	
	require_once('dbcon.php');
	$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);
	$ss="select a.cmpid,b.status,b.photo from complaintdetails a,add_status b where a.cmpid=b.complaintid and b.complaintid='$id'";
	$rs=mysqli_query($con,$ss);
	$row=mysqli_fetch_array($rs);
	?>
		   
		   
  
  <table width="675" height="345" align="center">
  <input type="hidden" name="id" value="<?php echo $id;?>">
  <tr>
    <td><div align="left">Complaint Id</div></td>
    <td>
      <div align="left">
        <input type="text" name="t1" id="t1" value="<?php echo $_GET['id'];?>" readonly style="width:200px;" />    
      </div></td>
  </tr>
  <tr>
    <td width="184"><div align="left">Status</div></td>
    <td width="370">
      <div align="left">
        <input type="text" name="t2" id="t2" value="<?php echo $row['status'];?>" style="width:200px;"  />    
      </div></td>
  </tr>
  <tr>
    <td height="52"><div align="left">Upload Photo</div></td>
    <td>
      <div align="left">
        <input type="file" name="file" id="t3" value="" readonly style="width:200px;"  />    
      </div></td>
  </tr>
  <tr>
    <td height="100"><div align="left">Complaint Snap</div></td>
    <td>
   
    
      <div align="left"><img src="upload/<?php echo $row['photo'];?>" width="100" height="100">    </div></td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
    <td><div align="left"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="b1" id="b1" value="Update Complaint Status" style="width:260px;"  /></td>
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