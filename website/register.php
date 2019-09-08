<?php
session_start();
	$conn = mysqli_connect("localhost","root","root","employee");
	/*if(!$conn){
	echo "Connection failed: ".mysqli_connect_error();
	}
	else{
	echo "great work";
	}*/
 
   if(isset($_POST['regbtn'])){
	  $uname=$_POST['username'];
	 $umail=$_POST['mail'];
	 $upass=$_POST['password'];
	 $upass2=$_POST['password2'];
	 if(!empty($uname) && !empty($uemail) && !empty($upass) && !empty($upass2)){
    if($upass==$upass2){
	 
   $sql="INSERT INTO profile (username, mail, password) VALUES ('$uname', '$umail', '$upass')";
   if(!$sql)
   {
   die("SORRY MAN PROFILE IS NOT AVAIABLE");}
   else{
      //echo "1 row inserted";
   mysqli_query($conn,$sql);
	$_SESSION['message']="Your are done";
	$_SESSION['$uname']=$uname;
	header("location: home.php");
   }
 }
	 }
 else{
	 $_SESSION['message']="something is wrong!!!!";
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
<h2>REGISTRATION FORM</h2>
</div>
<?php
  if(isset($_SESSION['message']))
  {
	  echo '<div id="errormsg">'.$_SESSION['message'].'</div>';
	  unset($_SESSION['message']);
  }

?>
<form action="register.php" method="post">
<table align="center">
 <tr>
 <td>USERNAME:</td>
 <td><input type="text" name="username" class="textbox"></td>
 </tr>
 <tr>
 <td>EMAIL:</td>
 <td><input type="mail" name="mail" class="textbox"></td>
 </tr>
 <tr>
 <td>PASSWORD:</td>
 <td><input type="password" name="password" class="textbox"></td>
 </tr>
 <tr>
 <td>PASSWORD AGAIN:</td>
 <td><input type="password" name="password2" class="textbox"></td>
 </tr>
 <tr>
 <td></td>
 <td><input type="submit" name="regbtn" value="Register"></td>
 <td><button class="btn btn-success"><a href="login.php" style="color: black;" "text-decoration: none;">Login</a></button></td>
 </tr>
</body>
</html>
