<?php
$host="localhost";
	$uname="root";
	$pwd="";
	$db="smart_solutions";
	
$cn=new mysqli($host,$uname,$pwd,$db);
	//$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	//mysql_select_db($db,$con) or die("db selection failed");
	 
	
$username=$_REQUEST['s1'];

$password=$_REQUEST['s2'];


	 
	$r="select * from login where username='$username'  and password='$password' ";
	$result=mysqli_query($cn ,$r);
	while($row=mysqli_fetch_array($result))
	{
		
		$type=$row['utype'];
	}
	 
       	echo $type;

	//close($con);
?>
