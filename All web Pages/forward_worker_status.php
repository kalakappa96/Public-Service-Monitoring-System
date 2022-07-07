<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

</body>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	color: #0000FF;
}
.style2 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<body>
<?php
$ward=$_GET['ward'];
$area=$_GET['area'];
?>
<div align="center" class="style1">Sorry! For this Area and Ward there is no any Ward Worker</div>
<p align="center" class="style2" ><a href="wardworker_details2.php?ward=<?php echo $ward;?>&area=<?php echo $area;?>" style="color:#FF0000;">Click Here to Add Ward Worker Details </a> </p>
</body>
</html>
