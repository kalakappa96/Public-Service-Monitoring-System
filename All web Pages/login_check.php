<?php
session_start();

$u=$_POST['t1'];

$p=$_POST['t2'];


$_SESSION['t1']=$u;


//require_once('dbcon.php');

$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);

$ss="select * from login where username='$u'";
$rs=mysqli_query($con,$ss);
$row=mysqli_fetch_array($rs,MYSQLI_ASSOC);




if(empty($row))
{
  ?>
  
  <script>
  alert("Invalid User");
  document.location="signin.html";
  </script>
  <?php
}

else
{

  $pass=$row["password"];
  $type=$row["utype"];
  if($p==$pass)
  {
  
  if($type=="admin")
  {
  
	 ?>
     <script>
	 alert ("welocme to admin home page");
	 document.location="admin_home.php";
	 </script>
     <?php
  
  }
  if($type=="user")
  {
  ?>
     <script>
	 alert ("welocme to user home page");
	 document.location="user_home.php";
	 </script>
     <?php
  }
  if($type=="staff")
  {
  ?>
     <script>
	 alert ("welocme to staff home page");
	 document.location="staff_home.php";
	 </script>
     <?php
  }
  if($type=="wardworker")
  {
  ?>
     <script>
	 alert ("welocme to wardworker home page");
	 document.location="wardworker_home.php";
	 </script>
     <?php
  }
  if($type=="authority")
  {
  ?>
     <script>
	 alert ("welocme to authority home page");
	 document.location="authority_home.php";
	 </script>
     <?php
  }
 }
    else
  {
  ?>
     <script>
  alert("Invalid Password");
  document.location="signin.html";
  </script>
  <?php
  }
}


?>