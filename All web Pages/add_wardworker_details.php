<?php 


$server="localhost";
  $user="root";
  $password="";
 $dbname="smart_solutions";
 $con=mysqli_connect($server,$user,$password,$dbname);

$worker_name=$_POST['t1'];
$ward=$_POST['t2'];
$area=$_POST['t3'];
$addrs=$_POST['t4'];
$contact=$_POST['t5'];
$email=$_POST['t6'];



$ss="insert into wardworker_details values('$worker_name','$ward','$area','$addrs','$contact','$email')";
$res=mysqli_query($con,$ss);

$pass=rand();
$pass1=md5($pass);

 $log="insert into login values('$email','$pass','wardworker')";
   mysqli_query($con,$log);
   
   



		$msg = "Your UserName is" .$email ."Password is ".$pass;
		
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
alert("Add Successfully your username is <?php echo $email;?> and password is<?php echo $pass;?>" );
document.location="staff_home.php"; 
</script>
