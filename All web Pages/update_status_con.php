<?php


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



$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);

$id=$_POST['id'];
$cid=$_POST['t1'];
$status=$_POST['t2'];
$photo=$_FILES['file']['name'];

$ss="update add_status set photo='$photo',status='$status' where complaintid='$id'";
mysqli_query($con,$ss);


?>

<script>
alert("Update successfully");
document.location="worker_complaints_view.php";
</script>