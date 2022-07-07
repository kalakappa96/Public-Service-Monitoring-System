<?php
define("DBSERVER","localhost");
define("DBUSER","root");
define("DBPASSWORD","");
define("DBNAME","smart_solutions");

$con=mysql_connect(DBSERVER,DBUSER,DBPASSWORD);
$rs=mysql_select_db(DBNAME,$con);
 if(!$rs)
 {
    echo "connection is not established";
  }
  
  ?>
  

