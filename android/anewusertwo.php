<?php
require_once('db_con.php');
$s1=$_REQUEST['s1'];
$s2=$_REQUEST['s2'];
$s3=$_REQUEST['s3'];
$s4=$_REQUEST['s4'];
$s5=$_REQUEST['s5'];
$s6=$_REQUEST['s6'];
$s7=$_REQUEST['s7'];
$s8=$_REQUEST['s8'];
$s9=$_REQUEST['s9'];

$ss="insert into userdetails  values('111','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9')";

$rs=mysql_query($ss);

 if($rs)
 {
   echo "inserted";
 }
 else
 {
     echo "not inserted";
 }
  




?>