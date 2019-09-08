<?php
session_start();
	$conn = mysqli_connect("localhost","root","root","employee");
	/*if(!$conn){
	echo "Connection failed: ".mysqli_connect_error();
	}
	else{
	echo "great work";
	}*/
 
   if(isset($_POST['feedbtn'])){
	  $uname=$_POST['name'];
	 $umail=$_POST['email'];
	 $comment=$_POST['comment'];
	
   $sql="INSERT INTO feedback (name, email, comment) VALUES ('$uname', '$umail', '$comment')";
   
   if($sql)
   {
      //echo "1 row inserted";
   mysqli_query($conn,$sql);
	$_SESSION['message']="Your feedback has been SUbmitted.Thank You!!";
	header("location: home.php");
	}
	   
 else{
	 $_SESSION['message']="something is wrong!!!!";
   }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
  if(isset($_SESSION['message']))
  {
	  echo '<div id="errormsg">'.$_SESSION['message'].'</div>';
	  unset($_SESSION['message']);
  }

?>
<div class="container1">
        <img src="travelhome.jpg" alt="couple-image">
        <h1 id="title"><b>FlyMe</b></h1>
                <a id="about" href="#aboutpage" role="button">About</a>
                <a id="visit" href="#visitpage">Visit</a>
                <a id="price" href="#pricepage">Price</a>
				<?php
				if(isset($_SESSION['$uname'])){
                echo '<a id="policy" href="logout.php">' .$_SESSION['$uname'].'</a>';
				}
				else{
					echo '<a id="policy" href="login.php">'."Login".'</a>';
				}
				?>
    </div>
    <br>
	
    <div class="jumbotron">
    <div class="container " id="aboutpage">
<p>
        <span class="glyphicon glyphicon-asterisk"></span> Lorem ipsum donec id elit non mi porta gravida at eget metus.Lorem ipsum donec id elit non mi porta gravida at eget metus.
        Lorem ipsum donec id elit non mi porta gravida at eget metus.Lorem ipsum donec id elit non mi porta gravida at eget metus.
        Lorem ipsum donec id elit non mi porta gravida at eget metus.
</p>
<p>
        <span class="glyphicon glyphicon-asterisk"></span> Lorem ipsum donec id elit non mi porta gravida at eget metus.Lorem ipsum donec id elit non mi porta gravida at eget metus.
        Lorem ipsum donec id elit non mi porta gravida at eget metus.Lorem ipsum donec id elit non mi porta gravida at eget metus.
        Lorem ipsum donec id elit non mi porta gravida at eget metus.
</p>

</div>
     </div>

    <div class="container " id="visitpage">
            <div class="row">
                    <div class="col-md-4">
                    <div class="thumbnail">
                       
                        <img id="countries" src="aus.jpg" alt="Australia" style="width:100%">
						
                         <a href="australia.php">
							<div class="caption text-center">
								<p><b>VISIT AUSTRALIA!!!!</b></p>
							</div>
                        </a>
					
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="thumbnail">
                        
                        <img id="countries" src="eng.jpg" alt="England" style="width:100%">
                         <a href="england.php"><div class="caption text-center">
                            <p><b>VISIT ENGLAND!!!!</b></p>
                        </div>
                        </a>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="thumbnail">
                      
                        <img id="countries" src="usa.jpg" alt="USA" style="width:100%">
                         <a href="usa.html"><div class="caption text-center">
                            <p><b>VISIT USA!!!!</b></p>
                        </div>
                        </a>
                    </div>
                    </div>
                </div>
    </div>
  
 
<div class="container" id="pricepage">
<div class="row">
  <div class="col-md-6 col-xs-12 nonvip ">
    <div class=" panel-heading text-center bg-1">
        <h1>NON-VIP</h1>
    </div>
    <div class="panel-body text-center">
       <p><span class="glyphicon glyphicon-remove-circle"></span>
         Get Special Discounts    
      </p>
       <p><span class="glyphicon glyphicon-remove-circle"></span>
        Off in Accomodation and Site-seeing charges!!!!
    </p>
       <p><span class="glyphicon glyphicon-remove-circle"></span> Eligible For Trips Yearly Once</p>
    </div>
    <div class="panel-footer text-center ">
        <h2><strong>0&dollar;<small>/For 6 mon</small></strong></h2>
        <button type="button" class="btn btn-danger">Take Trip</button>
    </div>
  </div>
  <div class="col-md-6 col-xs-12 vip">
        <div class="panel-heading text-center bg-1">
            <h1>VIP</h1>
        </div>
        <div class="panel-body text-center">
                <p><span class="glyphicon glyphicon-ok-circle"></span>
                    Get Special Discounts    
                 </p>
                  <p><span class="glyphicon glyphicon-ok-circle"></span>
                   Off in Accomodation and Site-seeing charges!!!!
               </p>
                  <p><span class="glyphicon glyphicon-ok-circle"></span> Eligible For Trips Yearly Once</p>
               </div>
       
        <div class="panel-footer text-center ">
            <h2><strong>49&dollar;<small>/Lifeitme</small></strong></h2>
            <button type="button" class="btn btn-success">Take Trip</button>
        </div>
    </div>
      </div>

</div>


<footer>
        <div class="container-fluid bg-grey">
                <h2 class="text-center">CONTACT</h2>
				


                <div class="row">
                  <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> HYD,INDIA</p>
                    <p><span class="glyphicon glyphicon-phone"></span> 8797564642</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> bjeevanreddy45@gmail.com</p>
						
                  </div>
				   <form action="home.php" method="post">
                  <div class="col-sm-7">
                    <div class="row">
                      <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                      </div>
                      <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                      </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comment" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                      <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit" name="feedbtn">Send</button>
                      </div>
                    </div>
                  </div>
				  </form>
                </div>
              </div>
    
      <h4><b>Cover template for Bootstrap, by &copy;Jeevan.</b>  </h4>

</footer>
</body>
</html>