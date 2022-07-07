<?php
$server="localhost";
$user="root";
$password="";
$dbname="smart_solutions";
$con=mysqli_connect($server,$user,$password,$dbname);

$fname=$_POST['t1'];
$userid=substr($fname,0,2).rand();
$lname=$_POST['t2'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['t5'];
$addrs=$_POST['t6'];
$contact=$_POST['t7'];
$email=$_POST['t8'];


$mm="select * from userdetails where email='$email'";
$mm1=mysqli_query($con,$mm);
$mm2=mysqli_fetch_array($mm1);

if(empty($mm2))
{


   


$sql="insert into userdetails values('$userid','$fname','$lname','$gender','$country','$state','$city','$addrs','$contact','$email')";
mysqli_query($con,$sql);
$pass=rand();
$pass1=md5($pass);


$ss="insert into login values('$email','$pass','user')";
mysqli_query($con,$ss);






		$msg = "Your UserName is". $email."Password is ".$pass."and user id is:".$userid;
		
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
alert("your username is <?php echo $email;?> and password is<?php echo $pass;?>and your user id is <?php echo $userid;?>" );
document.location="index.html";
</script>
<?php
}

 


  
else
{
?>

<script>
alert("Sorry This user has Already Exist!" );
document.location="registration.html";
</script>
<?php
}
?>
