<?php

$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);

$id=$_GET['id'];


$ss="select * from complaintdetails where cmpid='$id'";
$rs=mysqlI_query($con,$ss);
$row=mysqlI_fetch_array($rs);
$ward=$row['ward'];
$area=$row['area'];

$mm="select * from wardworker_details where ward='$ward' and area='$area'";
$mm1=mysqli_query($con,$mm);
$rw=mysqli_fetch_array($mm1);

if(empty($rw))
{
  
  ?>
  <script>
  document.location="forward_worker_status.php?ward=<?php echo $ward;?>&area=<?php echo $area;?>";
  </script>
  <?php
}

else
{
   $name=$rw['worker_name'];
   $contact=$rw['contact'];
   $email=$rw['email'];
   
   $query="insert into assigned_wordworker values('$name','$ward','$area','$contact','$email','$id','sent')";
   mysqli_query($con,$query);
   
     




		$msg = "You have one complaint kindly check ";
			$ch = curl_init();
$user="pjmudagal93@gmail.com:363899";
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
   alert("forward successfully");
   document.location="assign_cmplnts_staff_view.php";
   </script>
   <?php

}

?>