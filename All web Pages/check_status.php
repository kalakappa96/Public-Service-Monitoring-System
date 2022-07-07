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
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
    <style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
-->
    </style>
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
			              <li class="active" ><a  href="check_status.php">Check Status</a></li>				
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
               
                
					<div class="login-form-rec">
		 <!-- Form -->
        <?php
//session_start();
$uname=$_SESSION['t1'];

require_once('dbcon.php');

$q1="select * from userdetails where email='$uname'";
$q2=mysqli_query($con,$q1);
$q2=mysqli_fetch_array($q2);

$uid=$q2['userid'];




$ss1="select * from complaintdetails where userid='$uid'";
$rs1=mysqli_query($con,$ss1);
$rw1=mysqli_fetch_array($rs1);

if(empty($rw1))
{

   echo "<h1 style=color:red> Sorry ! Complaint is not Registered</h1>";
}

else
{

   $mm="select * from complaintdetails where userid='$uid'";
   $mm1=mysqli_query($con,$mm);
?>


<table width="937" border="1" style="margin-left:-100px;">
  <tr>
    <td width="117" bgcolor="#0000FF"><span class="style1">Complaint Id</span></td>
    <td width="114" bgcolor="#0000FF"><span class="style1">Complaint Date</span></td>
    <td width="128" bgcolor="#0000FF"><span class="style1"> Status photo</span></td>
     <td width="116" bgcolor="#0000FF"><span class="style1">Complaint Status</span></td>
    <td width="38" bgcolor="#0000FF"><span class="style2"></span></td>
    <td width="293" bgcolor="#0000FF"><span class="style2"></span></td>
  </tr>
  <?php
  
  while($mm2=mysqli_fetch_array($mm1))
  {
     $cid=$mm2['cmpid'];
     $cdate=$mm2['adate'];

      $cmpid=$mm2['cmpid'];
      $nn="select * from add_status where complaintid='$cmpid' and (status='progressing' or status='solved')";
	  $nn1=mysqli_query($con,$nn);
	  $nn2=mysqli_fetch_array($nn1);
	  
	 // echo $nn;
	  
  ?>
  <tr>
    <td><?php echo $mm2['cmpid'];?></td>
    <td><?php echo $mm2['adate'];?></td>
     <td><img src="upload/<?php echo $mm2['photo'];?>" width="100" height="100"></td>
    <?php 
	if(empty($nn2))
	{
	?>
    <td>Pending </td>
    <?php
	}
	
	else
	{
	?>
    <td><?php echo $nn2['status'];?></td>
    <?php
	}
	
    
    
     $ddate=date('Y-m-d');
			   		   
$startTimeStamp = strtotime($cdate);
$endTimeStamp = strtotime($ddate);

$timeDiff = abs($endTimeStamp - $startTimeStamp);

$numberDays = $timeDiff/86400;  // 86400 seconds in one day

// and you might want to convert to integer
$numberDays = intval($numberDays);

//echo $numberDays;

$count=3;

$diff=$count-$numberDays;

//echo $diff;

$msg="";
$msg1="";

if($diff<0)
{

?>
 <td colspan="2"> <a href="send_authority.php?id=<?php echo $cid;?>" style="color:#CC0000; font-weight:bold;">time period was over and you can send your complaints to higher authority</a> </td>
    <?php
}

else
{
?>
 <td width="84" colspan="2"> <a href="#" style="color:#CC0000; font-weight:bold;">Remaining Days Left <?php echo $diff;?></a> </td>
  
   <?php
}
        ?>      

   
    
 
  </tr>
  <?php
  }
  }
  ?>
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