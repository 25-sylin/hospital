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
	<form action="" method="">
	<input type="email" name="email" id="email" placeholder="mail">
	<button type="submit" onclick="fun()" id="submit">save</button>
</form>
</div>
</body>
<script type="text/javascript">
// function fun(){
// 	var a=document.getElementById('mail').value;
// 	if(a==''){
// 		alert('enter mail id');
// 	}else{
// 	 $(document).ready(function(){

//             // $("#submit").click(function(){
//                 var mail=$("#mail").val();
//                 $.ajax({
//                     url:'insert.php',
//                     method:'GET',
//                     data:{
                       
//                         mail:mail
//                     },
//                    success:function(data){
//                        alert(data);
//                    };
//                 });
//             });
//         });
// 	}



function fun()
{

	var email = document.getElementById("email").value;


	if(email=="")

	{

		alert("Enter Email Name");

		return false;

	}

	else


{

		$.ajax({
						type: "POST",
					   url: "insert.php",
					   data: "add=1&email="+email,
					   success: function(msg){
					alert(msg);
					console.log(msg); 
					   if(msg==1)
					   {
								
									 
   					alert('Added Successfully');
						location.reload();
						}
						else
						{
						alert("some Error Present");
						
						}
						
					}
					});
	}


}
</script>
</html>


