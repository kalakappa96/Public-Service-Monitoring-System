<?php 
require_once('dbcon.php');
$username=$_POST['username'];
$password=$_POST['password'];
$hintquestion=$_POST['hintquestion'];
$hintanswer=$_POST['hintanswer'];

$ss="insert into login values('$username','$password','$hintquestion','$hintanswer')";
$res=mysql_query($ss);

//$pass=rand();


 
?>
<script>
//alert("inserted successfully");
//document.location="staffdetails.php";
</script>



