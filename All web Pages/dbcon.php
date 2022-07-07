<?php
  
  $server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password);
  mysqli_select_db($con,$dbname);
   
?>