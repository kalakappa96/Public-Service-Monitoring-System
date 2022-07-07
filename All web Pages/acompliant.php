<?php
$userid=$_POST['UserId'];
$ComplaintType=$_POST['ComplaintType'];
$ComplaintName=$_POST['ComplaintName'];
$Ward=$_POST['Ward'];
$Area=$_POST['Area'];
$img=$_POST['img'];

$cmpid=substr($ComplaintType,0,3).rand();


$flag['code']=0;

$con=mysql_connect("localhost","root","");// use to establish the connection with server
mysql_select_db("SC",$con);// select the db





if($r=mysql_query("insert into complaintdetails values('$userid','$ComplaintType','$ComplaintName','$Ward','$Area',curdate(),curtime(),'$img','$cmpid')",$con))
	{

 	 
		$flag['code']=1;
		
	}

	print(json_encode($flag));

?>
