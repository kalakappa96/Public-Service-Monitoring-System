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


<script type="text/javascript">
     function dropdown(ddl1,ddl2) {
    var colours = new Array('Lifting of Dead -Big Animals', 'Lifting of dead- Small Animals', 'other');
    var shapes = new Array('Cleaning not carried out', 'Container/Dustbin not lifted/notclear', 'Lifting of building materials','Hawkers not maintaining cleanliness','Improper diposal of hotel/restaurant','other');
    var names = new Array('Insufficient lighting', 'Street light not working', 'Street Light pole collapsed','Street light working in day time','Street light not working in BRTS road','other');
	var un=new Array('on road side','on the footpath','others');
	var hs=new Array('on road side','breaking of pipe lines','borewells not working','others');
	
	var un1=new Array('not cleaned','no sufficient water supply','no proper maintainance','others');
	
	var un2=new Array('no dustbin','broken benches','play area not maintained','others');
	
	var un3=new Array('Damaged Road','Damage Footpath','Damage Road Divider','No Marking on Bump','others');
	
	var un4=new Array('unclcear dustbin','garden','leacking water tank','others');

    switch (ddl1.value) {
        case 'Dead Animals':
            ddl2.options.length = 0;
            for (i = 0; i < colours.length; i++) {
                createOption(ddl2, colours[i], colours[i]);
            }
            break;
        case 'Garbage':
            ddl2.options.length = 0; 
        for (i = 0; i < shapes.length; i++) {
            createOption(ddl2, shapes[i], shapes[i]);
            }
            break;
        case 'Street light':
            ddl2.options.length = 0;
            for (i = 0; i < names.length; i++) {
                createOption(ddl2, names[i], names[i]);
            }
            break;
			
			 case 'Stagnant water':
            ddl2.options.length = 0;
            for (i = 0; i < un.length; i++) {
                createOption(ddl2, un[i], un[i]);
            }
            break;
			
			 case 'water leakage':
            ddl2.options.length = 0;
            for (i = 0; i < hs.length; i++) {
                createOption(ddl2, hs[i], hs[i]);
            }
            break;
			
			
			
			
			
			 case 'public toilet':
            ddl2.options.length = 0;
            for (i = 0; i < un1.length; i++) {
                createOption(ddl2, un1[i], un1[i]);
            }
            break;
			
			
			
			case 'public parks':
            ddl2.options.length = 0;
            for (i = 0; i < un2.length; i++) {
                createOption(ddl2, un2[i], un2[i]);
            }
            break;
			
			
			case 'Roads and Footpath':
            ddl2.options.length = 0;
            for (i = 0; i < un3.length; i++) {
                createOption(ddl2, un3[i], un3[i]);
            }
            break;
			
			
			
			case 'college campus':
            ddl2.options.length = 0;
            for (i = 0; i < un4.length; i++) {
                createOption(ddl2, un4[i], un4[i]);
            }
            break;
			
			
			
			
            default:
                ddl2.options.length = 0;
            break;
    }

}

    function createOption(ddl, text, value) {
        var opt = document.createElement('option');
        opt.value = value;
        opt.text = text;
        ddl.options.add(opt);
    }
</script>
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
                <p style="margin-left:470px; color:#0000FF; font-weight:bold;">welcome: <span style="color:#FF0000; font-weight:bold;"> <?php echo $row['fname'];?></span>     <span style="color:#0000FF; font-weight:bold;">UID:<span style="color:#FF0000; font-weight:bold;"> <?php echo $row['userid'];?></span> </p> 
				 
				
				
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                             
                             <ul class="nav navbar-nav">
							<li ><a  href="user_home.php">Home</a></li>
            
			               <li class="active"><a  href="ComplaintDetails.php">Complaint Reg</a></li>
			              <li ><a  href="check_status.php">Check Status</a></li>				
				          <li><a  href="feedback.php">FeedBack</a></li>
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
				<h3 class="tittle-w3ls three">Complaint Registration<span></span></h3>
			</div>
			<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
                <script src="countries.js"> </script>
                
					<div class="login-form-rec">
                    
		 <form action="add_ComplaintDetails.php" method="post" enctype="multipart/form-data">
  
  <table width="570" height="466" align="left">
  <tr>
    <td><div align="left">User ID</div></td>
    <td>
      <div align="left">
        <input type="text" name="t1" id="t1" style="width:200px;"  />    
      </div></td>
  </tr>
  <tr>
    <td><div align="left">Complaint Type</div></td>
    <td><div align="left">
        <select name="dd1" id="dd1" onChange="dropdown(this,document.getElementById('dd12'))" style="width:200px;">
     <option> </option>
      <option value="Garbage">Garbage</option>
      <option value="Street light">Street light</option>
      <option value="water leakage">water leakage</option>
      <option value="Dead Animals">Dead Animals</option>
     
      <option value="Roads and Footpath">Roads and Footpath</option>
        </select> </div>   </td>
  </tr>
  <tr>
    <td><div align="left">Complaint Name</div></td>
    <td><div align="left">
      <select name="dd12" id="dd12" style="width:200px;">
      </select>  </div>  </td>
  </tr>
  
  <tr>
    <td><div align="left">Ward</div></td>
    <td><input type="text" name="t4" id="t4" style="width:200px;" /></td>
  </tr>
  <tr>
    <td><div align="left">Area</div></td>
    <td><input type="text" name="t5" id="t5" style="width:200px;" /></td>
  </tr>
  <tr>
    <td><div align="left">Photo</div></td>
    <td><input type="file" name="file" id="file" style="width:200px;" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>      <input type="submit" name="b1" id="b1" value="Submit" style="width:200px;" />    </td>
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