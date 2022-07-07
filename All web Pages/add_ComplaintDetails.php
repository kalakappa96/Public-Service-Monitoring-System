<?php

$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);

$file_exts = array("jpg", "bmp", "pjpeg", "gif", "png","pdf","JPG","mp4","mp3");
	
	$upload_exts = end(explode(".", $_FILES["file"]["name"]));
	

	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/JPG")
	|| ($_FILES["file"]["type"] =="audio/mp3")
	|| ($_FILES["file"]["type"] =="video/mp4")
	|| ($_FILES["file"]["type"] == "image/png")
	|| ($_FILES["file"]["type"] == "application/pdf")
	|| ($_FILES["file"]["type"] == "image/pjpeg"))	&& ($_FILES["file"]["size"] < 20000000000)
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
	if (file_exists("./upload/" .
	$_FILES["file"]["name"]))
	{
	   echo "<div class='error'>"."(".$_FILES["file"]["name"].")".
	    " already exists. "."</div>";
	}
	
	else	
	
	{	
	
	move_uploaded_file($_FILES["file"]["tmp_name"],	"./upload/" . $_FILES["file"]["name"]);	
	echo "<div class='sucess'>"."Stored in: " ."./upload/" . $_FILES["file"]["name"]."</div>";
}	}	}	

else	
{	
echo "<div class='error'>Invalid file</div>";	
}

$userid=$_POST['t1'];
$cmptype=$_POST['dd1'];
$cmpname=$_POST['dd12'];
$ward=$_POST['t4'];
$area=$_POST['t5'];
$photo=$_FILES['file']['name'];

$cmpid=substr($cmptype,0,2).rand();

$ss1="select * from userdetails where userid='$userid'";
$rs1=mysqli_query($con,$ss1);
$rw1=mysqli_fetch_array($rs1,MYSQLI_ASSOC);

if(!empty($rw1))
{
$contact=$rw1['contact'];


$ss="insert into complaintdetails values('$userid','$cmptype','$cmpname','$ward','$area',curdate(),curtime(),'$photo','$cmpid')";
mysqli_query($con,$ss);





// 		$msg = "Your Complaint Id is".$cmpid;;
		
// 	$ch = curl_init();
// $user="kartikkardigudd@gmail.com:kartik123";
// $receipientno=$contact; 
// $senderID="TEST SMS"; 
// $msgtxt=$msg; 
// curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
// $buffer = curl_exec($ch);
// if(empty ($buffer))
// { echo " buffer is empty "; }
// else
// { echo $buffer; } 
// curl_close($ch);

// //////admin msg ///////

// $msg = "You have one complaint kindly check it";
		
// 	$ch = curl_init();
// $user="kartikkardigudd@gmail.com:kartik123";
// $receipientno="7022275443"; 
// $senderID="TEST SMS"; 
// $msgtxt=$msg; 
// curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
// $buffer = curl_exec($ch);
// if(empty ($buffer))
// { echo " buffer is empty "; }
// else
// { echo $buffer; } 
// curl_close($ch);

?>

<script>
alert("Compalint Registered successfully");
document.location="user_home.php";
</script>
<?php

}
else
{
?>
<script>
alert("Invalid user id");
document.location="user_home.php";
</script>
<?php
}
?>