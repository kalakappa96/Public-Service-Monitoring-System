<?php
$server="localhost";
$user="root";
$password="";
$dbname="smart_solutions";
$con=mysqli_connect($server,$user,$password,$dbname);


$id=$_GET['id'];

$ss="delete from feedback where complaint_id='$id'";
mysqli_query($con,$ss);

?>

<script>
alert("deleted successfully");
document.location="feedback_view_admin.php";
</script>