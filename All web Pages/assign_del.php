<?php
$server="localhost";
$user="root";
$password="";
$dbname="smart_solutions";
$con=mysqli_connect($server,$user,$password,$dbname);

$id=$_GET['id'];

$ss="delete from assigned_staff where cmpid='$id'";
mysqli_query($con,$ss);
?>

<script>
    
    alert("deleted successfully");
    document.location="assign_staff_view.php";
</script>