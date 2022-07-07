<?php


$con=mysql_connect("localhost","root","");// use to establish the connection with server
mysql_select_db("smart_complaint",$con);// select the db


      
    $q=mysql_query("SELECT * FROM add_status");
    while($row=mysql_fetch_assoc($q))
            $json_output[]=$row;
      
    print(json_encode($json_output));
      
    mysql_close();
     
?>


