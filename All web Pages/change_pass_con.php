<?php
session_start();

$u=$_SESSION['t1'];
$p=$_POST['t2'];
$new=$_POST['t3'];
$confirm=$_POST['t4'];

$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);


$s1="select * from login where username='$u'";
$rs=mysqli_query($con,$s1);
$row=mysqli_fetch_array($rs,MYSQLI_ASSOC);

 if(empty($row))
 {
   ?>
   <script>
   alert("Invalid User");
   document.location="changepass.php";
   </script>
   <?php
 }
 else
 {
     $pass=$row['password'];
     if($p==$pass)
	 {
	   if($new==$confirm)
	   {
	      $s1="update login set password='$new' where username='$u'";
		  mysqli_query($con,$s1);
		  
		  ?>
           <script>
   alert("Password Updated Successfully");
   document.location="index.html";
   </script>
          
          <?php
	   }
	   else
	   {
	   ?>
	     <script>
   alert("New password and confirm password must be same");
   document.location="changepass.php";
   </script>
   <?php
	   }
	 }
	 else
	 ?>
      <script>
   alert("Invalid Password");
   document.location="changepass.php";
   </script>
     <?php
	  
 }
 
 ?>