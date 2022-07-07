<?php
require_once('db_con.php');
$s1=$_POST['s1'];
$s2=$_POST['s2'];
$s3=$_POST['s3'];
$s4=$_POST['s4'];
$s5=$_POST['s5'];

$ss="insert into  feedback  values('$s1','$s2','$s3','$s4','$s5')";

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