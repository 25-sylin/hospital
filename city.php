<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div>
	<select name="cars" id="country">
	<?php
$sql=mysqli_query($con,"select * from `country`");
while($row=mysqli_fetch_array($sql)){
	?>
	
    <option value="<?php echo $row['cid'];?>"><?php echo $row['cname'];?></option>
   
  
  
</select>
</div>

<div>
	<select name="state" id="state">
	<?php
	//echo"select * from `state` where cid=".$row['cid'];die();
	$sql1=mysqli_query($con,"select * from `state` where cid=".$row['cid']);
	while($sql2=mysqli_fetch_array($sql1)){
	?>
	 <option value="<?php echo $sql2['sid'];?>"><?php echo $sql2['sname'];?></option>
	 <?php
	}
	?>
</select>
</div>
<?php
}
?>
<!-- <div>
	
<select name="city" id="city"></select>
</div> -->
</body>



</html>