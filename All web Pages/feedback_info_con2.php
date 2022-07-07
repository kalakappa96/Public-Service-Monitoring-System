<?php
$citizen_name=$_POST['t1'];
$complaint_id=$_POST['t2'];
$complaint_status=$_POST['t3'];
$about_service=$_POST['t4'];
$worker_status=$_POST['t5'];

require_once('dbcon.php');


$ss="select * from complaintdetails where cmpid='$complaint_id' ";
$rs=mysql_query($ss);
$rw=mysql_fetch_array($rs);

if(empty($rw))
{
?>
<script>


alert("Sorry! you can't send the feedback without complaint registration or Invalid Complaint Id");
window.history.go(-1);

</script>
<?php  
 }
 
 else
 {  
 
   $ss1="select * from feedback where complaint_id='$complaint_id' ";
$rs1=mysql_query($ss1);
$rw1=mysql_fetch_array($rs1);
  if(empty($rw1))
  {

$s="insert into feedback values('$citizen_name','$complaint_id','$complaint_status','$about_service','$worker_status')";
mysql_query($s);

?>
<script>


alert("send your feedback successfully");
window.history.go(-1);

</script>
<?php

}

if(!empty($rw1))
{
    $s2="update feedback set citizen_name='$citizen_name',complaint_status='$complaint_status',about_service='$about_service',worker_status='$worker_status' where complaint_id='$complaint_id'";
	mysql_query($s2);
	
	?>
    <script>


alert("send your feedback successfully");
window.history.go(-1);

</script>
    <?php
}

}


?>



