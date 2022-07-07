<?php




/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



$fname=$_POST['t2'];
$uid=substr($fname,0,2).rand();
$mname=$_POST['t3'];
$lname=$_POST['t4'];
$contactno=$_POST['t5'];
$gender=$_POST['r1'];
$username=$_POST['t7'];
$password=$_POST['t8'];
$adrs=$_POST['t9'];
$pcode=$_POST['t10'];
$photo=$_FILES['file']['name'];



$con=mysql_connect("localhost","root","");
mysql_select_db("grocerry_shop",$con);

$k="select * from user_reg where username='$username'";

$k1=mysql_query($k);
$k2=mysql_fetch_array($k1);

if(empty($k2))
{



$file_exts = array("jpg", "bmp", "pjpeg", "gif", "png","pdf");

$upload_exts = end(explode(".", $_FILES["file"]["name"]));


if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "image/pjpeg"))	&& ($_FILES["file"]["size"] < 2000000)
&& in_array($upload_exts, $file_exts))
{
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
}
else
{
echo "Upload: " . $_FILES["file"]["name"] . "<br>";
echo "Type: " . $_FILES["file"]["type"] . "<br>";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
// Enter your path to upload file here
if (file_exists("./uploads/" .
$_FILES["file"]["name"]))
{
echo "<div class='error'>"."(".$_FILES["file"]["name"].")".
" already exists. "."</div>";
}

else 

{ 

move_uploaded_file($_FILES["file"]["tmp_name"],	"./uploads/" . $_FILES["file"]["name"]); 
echo "<div class='sucess'>"."Stored in: " ."./uploads/" . $_FILES["file"]["name"]."</div>";
}	}	} 

else 
{ 
echo "<div class='error'>Invalid file</div>"; 
}







$sql="insert into user_reg values('$uid','$fname','$mname','$lname','$contactno','$gender','$username','$password','$adrs','$pcode','$photo')";

mysql_query($sql);


$ss="insert into login values('$username','$password','customer')";

mysql_query($ss);


include('way2sms-api.php');



		$msg = "Your UserName is " . $username . "\n Password is ".$password;
		
		if(sendWay2SMS ( '7760143639' , 'K2928C' ,$contactno,$msg))
		{
			echo $msg;
		}
		else
		{
			echo "Invalid Phone Number";
		}




?>
<script>

alert("insereted successufully..");

document.location="index.php";

</script>

<?php
}

else
{
?>

<script>

alert("This User Has Already Exist!!");

document.location="user_info.html";

</script>

<?php
}
?>
