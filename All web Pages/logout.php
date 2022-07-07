<?php
session_start();

 $u= $_SESSION['t1'];
 //if(session_is_registered('txt_username')){
 session_unset();
 session_destroy();
 
?>

<script>
alert("Logged Out Successfully");
document.location="index.html";

</script>