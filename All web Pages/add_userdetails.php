<?php 
require_once('dbcon.php');
$user_id=$_POST['t1'];
$fname=$_POST['t2'];
$lname=$_POST['t3'];
$gender=$_POST['t4'];
$country=$_POST['t5'];
$state=$_POST['t6'];
$city=$_POST['t7'];
$address=$_POST['t8'];
$contact=$_POST['t9'];
$email=$_POST['t10'];

$ss="insert into userdetails values('$user_id','$fname','$lname','$gender','$country','$state','$city','$address','$contact','$email')";
$res=mysql_query($ss);
 if($res)
 {
     echo "inserted successfully";
 }
 else
 {
     echo "not inserted";
 }

?>
