<?php

require_once('dbcon.php');

$id=$_GET['id'];

$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);


$ss="delete from userdetails where userid='$id'";
mysqli_query($con,$ss);

?>

<script>
alert("deleted successfully");
document.location="userdetails_view.php";
</script>