<?php
include("connection.php");
//echo"dd";die();
$mail=$_POST['email'];
//echo"insert into `mail`(mail)value('$mail')";die();
$a=mysqli_query($con,"insert into `mail`(mail)value('$mail')");
if($a){
	echo"succ";
}else{
	echo"error";
}

?>