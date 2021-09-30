<?php
include("connection.php");

?>

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

<h3>add new patient</h3>
<form action="newpataction.php" method="POST">
	<label for="fname">Op.No:</label><br>
	<?php
//echo"select * from `newpat` ORDER BY `opnum` DESC LIMIT 1";die();
  $sql=mysqli_query($con,"select * from `newpat` ORDER BY `opnum` DESC LIMIT 1;");
  $row=mysqli_fetch_assoc($sql);

   //print_r($b);die();
  ?>
	<input type="text" name="op" readonly value="<?php echo $row['opnum']+1;?>"><br>

  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" placeholder="John"><br>

  <label for="phone">Phone:</label><br>
  <input type="text" id="phone" name="phone" placeholder="9999999999"><br>

   <label for="city">City:</label><br>
  <input type="text" id="city" name="city" placeholder="chennai"><br>

  <label for="state">State:</label><br>
  <input type="text" id="state" name="state" placeholder="tamil nadu"><br>

  <label for="gender">Gender:</label><br>
  <input type="radio" id="gender"  name="male" value="male">Male
  <input type="radio"  id="gender" name="male" value="female">Female</br>
  <input type="submit" value="Submit">
</form> 

</div>

<div style="float: right;margin-top: -300px;">
  <table border="1">
    <tr>
      <th>OP.NUM</th>
      <th>NAME</th>
      <th>PHONE</th>
      <th>CITY</th>
      <th>GENDER</th>
      <th>ACTION</th>
    </tr>
    <?php
    $a=mysqli_query($con,"select * from `newpat`");
    while($b=mysqli_fetch_array($a)){
      ?>
    <tr>
      <td><?php echo $b['opnum'];?></td>
       <td><?php echo $b['name'];?></td>
        <td><?php echo $b['phone'];?></td>
         <td><?php echo $b['city'];?></td>
          <td><?php echo $b['gender'];?></td>
           <td><a href="print.php?id=<?php echo $b['nid'];?>"><button>generate opcard</button></td>
    </tr>
    <?php
  }
  ?>
  </table>
</div>


</body>
</html>
