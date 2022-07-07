<?php 
require_once('dbcon.php');
$worker_name=$_POST['t1'];
$ward=$_POST['t2'];
$area=$_POST['t3'];
$addrs=$_POST['t4'];
$contact=$_POST['t5'];
$email=$_POST['t6'];
$cid=$_POST['t7'];
$status=$_POST['t8'];
$ss="insert into assigned_wordworker values('$worker_name','$ward','$area','$address','$contact','$email','$cid','$status')";
$res=mysql_query($ss);
if($res){
echo "inserted successfully";
}
else{
echo "not inserted";
}

?>
