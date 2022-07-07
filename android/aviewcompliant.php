<?php

    mysql_connect("localhost","root",""); // host, username, password...
    mysql_select_db("smart_solutions"); // db name...
      
    $q=mysql_query("SELECT * FROM complaintdetails");
    while($row=mysql_fetch_assoc($q))
            $json_output[]=$row;
      
    print(json_encode($json_output));
      
    mysql_close();
     
?>


