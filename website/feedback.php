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
	 $umail=$_POST['email'];
	 $comment=$_POST['comment'];
	
   $sql="INSERT INTO feedback (username, email, comment) VALUES ('$uname', '$umail', '$comment')";
   if(!$sql)
   {
   die("SORRY MAN PROFILE IS NOT AVAIABLE");}
   else{
      //echo "1 row inserted";
   mysqli_query($conn,$sql);
	$_SESSION['message']="Your feedback has been SUbmitted.Thank You!!";
	$_SESSION['$uname']=$uname;
	header("location: home.php");

 }
	 }
 else{
	 $_SESSION['message']="something is wrong!!!!";
 }
   }

?>