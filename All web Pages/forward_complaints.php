<?php
$server="localhost";
$user="root";
$password="";
$dbname="smart_solutions";
$con=mysqli_connect($server,$user,$password,$dbname);

$id=$_GET['id'];
$type=$_GET['type'];
$dept="";

if(($type=='Grarbage') ||  ($type=='water leakage') || ($type=='Dead Animals') || ($type=='Roads and Footpath'))
{

   $dept="HDMC";
}

else
{
   $dept="keb";
}


$ss="select * from staff_details where Dept='$dept'";
$rs=mysqli_query($con,$ss);
$row=mysqli_fetch_array($rs);

$staff_name=$row['staff_name'];
$contact=$row['contact'];
$ddept=$row['Dept'];
$email=$row['email'];

$mm="insert into assigned_staff values('$staff_name','$ddept','$contact','$email',curdate(),'sent','$id')";
mysqli_query($con,$mm);


$nn="insert into add_status values('$id','progressing','')";
mysqlI_query($con,$nn);








		$msg = "You have one complaint kindly check ";
			$ch = curl_init();
$user="kartikkardigudd@gmail.com:kartik123";
$receipientno=$contact; 
$senderID="TEST SMS"; 
$msgtxt=$msg; 
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; } 
curl_close($ch);
?>

<script>
alert("forward complaint successfully");
document.location="ComplaintDetails_view.php";
</script>