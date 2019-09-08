<?php
    
    session_start();
	/*$conn = mysqli_connect("localhost","root","root","employee");
	date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d h:i:s A', time());
	//$time= date('h:i:s');
	$sql="INSERT INTO sessiontable(loggeddate) VALUES('$date')";
	mysqli_query($conn,$sql);*/
	
	
	session_destroy();
	
	unset($_SESSION['$uname']);
	header("location: home.php");


 ?>