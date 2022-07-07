<?php 
require_once('dbcon.php');
$citizen_name=$_POST['t1'];
$complaint_id=$_POST['t2'];
$complaint_status=$_POST['t3'];
$about_service=$_POST['t4'];
$worker_status=$_POST['t5'];

$ss="insert into feedback values('$citizen_name','$complaint_id','$complaint_status','$about_service','$worker_status')";
$res=mysql_query($ss);
if($res){
echo "inserted successfully";
}
else{
echo "not inserted";
}

?>
