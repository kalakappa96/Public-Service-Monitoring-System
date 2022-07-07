<?php

require_once('dbcon.php');

$target_path = "C:/wamp/www/buspass/upload/";
$base=$_REQUEST['image'];
$name=$_REQUEST['cmd'];
$uid=$_REQUEST['uid'];


echo $base;
echo $name;
// base64 encoded utf-8 string
$binary=base64_decode($base);
// binary, utf-8 bytes
header('Content-Type: bitmap; charset=utf-8');
// print($binary);
//$theFile = base64_decode($image_data);
$file = fopen($target_path,'w');
$file = fopen($name,'w');
fwrite($file, $binary);
fclose($file);
move_uploaded_file($file,"C:/wamp/www/buspass/upload/".$name);
copy($name,"C:/wamp/www/buspass/upload/".$name);

$ss="update id_details set image='$name' where id_card_no='$uid' ";

mysql_query($ss);


?>