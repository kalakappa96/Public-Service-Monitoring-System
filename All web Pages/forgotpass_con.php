<?php

require_once('dbcon.php');

$username=$_POST['t1'];
$userid=$_POST['t2'];

$ss="select * from login where username='$username'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);



if(empty($row))
{

   echo "invalid username";
}   
   
else
{

    $userid=$row['userid'];
	
	if($userid==$userid)
	{
	    $mm="select * from login where username='$username'";
        $mm1=mysql_query($mm);
        $mm2=mysql_fetch_array($mm1);
		echo "password is".$mm2['password'];
	}
	
	else
	{
	   echo "invalid user id";
	}
}	

	?>