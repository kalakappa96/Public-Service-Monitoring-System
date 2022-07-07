<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Smart City</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start slider -->
<link rel="stylesheet" href="css/fwslider.css" media="all">
<script src="js/jquery-ui.min.js"></script>
<script src="js/fwslider.js"></script>
<script src="js/menu_jquery.js"></script>
<!--end slider -->
</head>
<body>
<!-- header_top -->
<div class="top_bg">
<div class="container">
<div class="header_top">
	<div class="top_left">
		
	</div>
	<div class="top_right">
		<ul>
			
			<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" method="post" action="login_check.php">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Username</label>
						                          <input type="text" name="t1" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="t2" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	
						            	</fieldset>
						            <span><a href="forgot_pass.html">Forgot your password?</a></span>
							 </form>
				        </div>
			      </div>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
		<div class="create_btn">
			<a class="arrow"  href="registration.html">Create Account <img src="images/right_arrow.png" alt=""/>  </a>
		</div>
		
		<ul class="icon1 sub-icon1 profile_img">
			
		</ul>
		
		<div class="clearfix"></div>
		</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li><a class="color1" href="index.html">Home</a></li>
            
			<li class="grid"><a class="color2" href="about.html">About Us</a>
				
				</li>
			<li class="active grid"><a class="color4" href="mission.html">Our Mission</a>
				
				</li>				
			
                
                <li><a class="color5" href="feedback1.php">Send FeedBack</a>
				
				</li>
			
		 </ul> 
							
    </div>
</div>
</div>
<!-- content -->
<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2 align="left">&nbsp;</h2>
		<h2 align="left">Feedback</h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">
		 <!-- Form -->
		   <form action="feedback_info_con.php" method="post">
  
  <table width="570" height="466" align="left">
  <tr>
    <td>Citizen Name</td>
    <td><label>
      <input type="text" name="t1" id="t1">
    </label></td>
  </tr>
  <tr>
    <td width="184">Complaint ID</td>
    <td width="370"><label>
      <input type="text" name="t2" id="t2">
    </label></td>
  </tr>
  <tr>
    <td>Complaint Status</td>
    <td><label>Solved
        <input type="radio" name="t3" id="radio" value="solved">
    Unsolved
    <input type="radio" name="t3" id="radio2" value="unsolved">
    </label></td>
  </tr>
  
  <tr>
    <td>About Service</td>
    <td>Poor
      <input type="radio" name="t4" id="radio3" value="poor">
      Good
      <input type="radio" name="t4" id="radio4" value="good">
      Very Good
      <input type="radio" name="t4" id="radio5" value="very good">
      Excellent 
      <input type="radio" name="t4" id="radio6" value="excellent"></td>
  </tr>
  <tr>
    <td>Worker Status</td>
    <td>Satisfied
      <input type="radio" name="t5" id="radio7" value="satisfied">
      Unsatisfied
      <input type="radio" name="t5" id="radio8" value="unsatisfied"></td>
  </tr>
  
  <tr>
    <td colspan="2"><label>
    <div align="center">
      <input type="submit" name="b1" id="b1" value="Submit" />
    </div>
    </label></td>
    </tr>
</table>

	
		   </form>
			<!-- /Form -->
		</div>
	</div>
	<div class="registration_left">
		<h2>&nbsp;</h2>
		<div class="registration_form">
		 <!-- Form -->
			
			<!-- /Form -->
		</div>
	</div>
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
<!-- footer_top -->
<div class="footer_top">
 <div class="container">
	<div class="span_of_4">
	  <div class="clearfix"></div>
		</div>
		<!-- start span_of_2 -->
		<div class="span_of_2">
		<div class="span1_of_2">
			<h5>need help? <a href="#">contact us <span> ></span> </a> </h5>
			<p>(or) Call us: +91-70-45022088</p>
		</div>
		<div class="span1_of_2">
			<h5>follow us </h5>
			<div class="social-icons">
				     <ul>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
				        <li><a href="#" target="_blank"></a></li>
					</ul>
			</div>
		</div>
		<div class="clearfix"></div>
		</div>
  </div>
</div>
<!-- footer -->
<div class="footer">
 <div class="container">
	<div class="copy">
		<p class="link">&copy; All rights reserved | groceryshop.com</p>
	</div>
 </div>
</div>
</body>
</html>