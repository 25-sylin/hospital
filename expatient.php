<!DOCTYPE html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<html>
<body>

	<div class="sidenav">
  <a href="home.php">HOME</a>
  <a href="service.php">RECEPTION</a>
  <a href="client.php">DOCTOR</a>
  <a href="contact.php">LAB</a>
</div>
<div class="main">
	<center>
		<ul id="list">
 <a href="newpatient.php"><li><i class="fa fa-address-book" style="font-size:20px">NEW PATIENTS</i></li></a>
  <a href="expatient.php"><li><i class="fa fa-address-book" style="font-size:20px">EXCISTING PATIENTS</i></li></a>
  <li><i class="fa fa-address-book" style="font-size:25px">add new</i></li>
  <li><i class="fa fa-address-book" style="font-size:25px">add new</i></li>
  <li><i class="fa fa-address-book" style="font-size:25px">add new</i></li>
  </ul>
  </center>

</div>
<div style="margin-left: 200px;">

<h3>add existing patient</h3>
<form action="exaction.php" method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

</div>


</body>
</html>
