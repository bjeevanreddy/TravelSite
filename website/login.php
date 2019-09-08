<?php  
     session_start();
	 
	$conn = mysqli_connect("localhost","root","root","employee");
	/*if(!$conn){
	echo "Connection failed: ".mysqli_connect_error();
	}
	else{
	echo "great work";
	}*/
 
   if(isset($_POST['loginbtn'])){
	  $uname=$_POST['username'];
	 $upass=$_POST['password'];
    
	$sql= "SELECT * FROM profile WHERE username='$uname' AND password='$upass'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)==1)
	{
		//echo "success";
	$_SESSION['message']="Your are logged in";
	
	$_SESSION['$uname']=$uname;
	header("location: home.php");
   }
 else{
	 //echo "sorry";
	 $_SESSION['message']="Password and username not foound";
 }
   }

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h2>LOGIN PAGE</h2>
</div>
<?php
  if(isset($_SESSION['message']))
  {
	  echo '<div id="errormsg">'.$_SESSION['message'].'</div>';
	  unset($_SESSION['message']);
  }

?>
<form action="login.php" method="post">
<table align="center">
 <tr>
 <td>USERNAME:</td>
 <td><input type="text" name="username" class="textbox"></td>
 </tr>
 
 <td>PASSWORD:</td>
 <td><input type="password" name="password" class="textbox"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="loginbtn" value="LOGIN"></td>
 <td><button class="btn btn-info"><a href="register.php" style="color: black;" "text-decoration: none;">SIGNUP</a></button></td>
 </tr>
 
 
 </table>
 </form>

</body>
</html>
