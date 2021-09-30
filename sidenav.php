<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
</style>
</head>
<body>

<h2>Vertical Tabs</h2>
<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
  <?php
  $sql=mysqli_query($con,"select * from `country`");
  while($row=mysqli_fetch_array($sql)){
  ?>
  <button class="tablinks" onclick="openCity(<?php echo $row['cid'];?>)" id="defaultOpen"><?php echo $row['cname'];?></button>
  <?php
}
?>
 <!--  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
</div>

<?php   if(isset($_REQUEST['id'])){ ?>
<div id="London" class="tabcontent">
<?php
$id = $_GET['id'];
  $sql1=mysqli_query($con,"select * from `state` where cid='$id'");
  while($row1=mysqli_fetch_array($sql1)){
  ?>
  <h3><?php echo $row1['sname'];?></h3>
  <?php
}
?>
</div>
<?php } ?>
<!-- <div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
 -->
<script>
function openCity(id) {
  // var i, tabcontent, tablinks;
  // tabcontent = document.getElementsByClassName("tabcontent");
  // for (i = 0; i < tabcontent.length; i++) {
  //   tabcontent[i].style.display = "none";
  // }
  // tablinks = document.getElementsByClassName("tablinks");
  // for (i = 0; i < tablinks.length; i++) {
  //   tablinks[i].className = tablinks[i].className.replace(" active", "");
  // }
  // document.getElementById(cityName).style.display = "block";
  // evt.currentTarget.className += " active";
  window.location.href='/kims/sidenav.php?id='+id;
}

// Get the element with id="defaultOpen" and click on it
//document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
