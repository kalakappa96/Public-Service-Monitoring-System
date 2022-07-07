<?php 
$server="localhost";
$user="root";
$password="";
$dbname="smart_solutions";
$con=mysqli_connect($server,$user,$password,$dbname);

$staff_name=$_POST['t1'];
$department=$_POST['t2'];
$contact=$_POST['t3'];
$email=$_POST['t4'];
$address=$_POST['t5'];

$ss="insert into staff_details values('$staff_name','$department','$contact','$email','$address')";
$res=mysqli_query($con,$ss);

$pass=rand();
$pass1=md5($pass);

$mm="insert into login values('$email','$pass','staff')";
mysqli_query($con,$mm);

// $msg="username".$email."and password is".$pass;
// $ch = curl_init();
// $user="pjmudagal93@gmail.com:363899";
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
// curl_close($ch)
 
?>
<script>
alert("inserted successfully username is <?php echo $email;?> and password is<?php echo $pass;?>");
document.location="staffdetails.php";
</script>



