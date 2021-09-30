<?php
include("connection.php");
$op=$_POST['op'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$city=$_POST['city'];
$state=$_POST['state'];
$gender=$_POST['male'];

//echo"insert into `newpat`(opnum,name,phone,city,state,gender)value('$op','$name','$phone','$city','$state','$gender')";die();

$sql=mysqli_query($con,"insert into `newpat`(opnum,name,phone,city,state,gender)value('$op','$name','$phone','$city','$state','$gender')");
if($sql){
	header('Location: newpatient.php');
}else{
	echo"error";
}

?>