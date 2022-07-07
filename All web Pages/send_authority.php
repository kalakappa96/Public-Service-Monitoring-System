<?php

$id=$_GET['id'];
$contact="7204451618";
$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);

require_once('dbcon.php');

$ss="insert into assigned_authority values('$id',curdate(),curtime())";
mysqli_query($con,$ss);

		$msg="This complaint has not yet solved and complaint id is ".$id; 
		
			$ch = curl_init();
$user="pjmudagal93@gmail.com:363899";
$receipientno=$contact; 
$senderID="TEST SMS"; 
$msgtxt=$msg; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);
?>

<script>
alert("sent successfully");
document.location="check_status.php";
</script>