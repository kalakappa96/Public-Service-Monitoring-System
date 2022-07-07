<?php
$host="localhost";
	$uname="root";
	$pwd="";
	$db="smart_complaint";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	
$username=$_POST['username'];

$password=$_POST['password'];

$flag['password']=0;
$flag['type']=0;

	 
	$r=mysql_query("select * from login where username='$username' and password='$password'  ",$con);

	while($row=mysql_fetch_array($r))
	{
		
		$type=$row['utype'];
	}
	 
	echo $type;
	mysql_close($con);
?>
