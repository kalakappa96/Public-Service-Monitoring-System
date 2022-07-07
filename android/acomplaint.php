<?php

require_once('db_con.php');
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];
$s6='img';
$s7=substr($s3,0,2).rand();





$ss="insert into  complaintdetails  values('$s1','$s2','$s3','$s4','$s5',curdate(),curtime(),'$s6','$s7')";

$rs=mysql_query($ss);

 if($rs)
 {
 
 //$mm="select * from userdetails where userid='111'";
//$mm1=mysql_query($mm);
//$mm2=mysql_fetch_array($mm1);

//$contact=$mm2['contact'];

	
	
    // $msg="your complaint Id Is:".$complaint_id;

   echo $s7;

	
 }
 else
 {
     echo "not inserted";
 }
  




?>
