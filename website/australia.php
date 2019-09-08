<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Australia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container1">
   <img src="Tourism-Australia.png" alt="ausimage">
   <h1 id="title"><b>FlyMe</b></h1>
  <?php
	echo '<a id="policy" href="logout.php">' .$_SESSION['$uname'].'</a>';
	?>
</div>
<div class="container">
        <div class="jumbotron">
          <h1>Australia Brief&darr;</h1>
          <p>
              
                <b>&RightArrowBar; </b>Australia, officially the Commonwealth of Australia, is a sovereign country comprising the mainland of the Australian continent, the island of Tasmania, and numerous smaller islands. 
                It is the largest country in Oceania and the world's sixth-largest country by total area.

          </p>
        </div>
      </div>
<div class="text-center">
    <h1 style="text-decoration: underline;">Popular Places:</h1>
</div>
<div class="container ">
<div class="row">
    <div class="col-sm-4">
        <img id="countries" src="sydny.jpg" alt="sydneyimage">
        <div class="caption text-center"><b>SYDNEY</b></div>
    </div>
   
    <div class="col-sm-4">
            <img id="countries" src="gcoast.jpg" alt="gcoastimage">
            <div class="caption text-center"><b>GOLDCOAST</b></div>
    </div>
    <div class="col-sm-4">
            <img id="countries" src="melbourne.jpg" alt="melbourneimage">
            <div class="caption text-center"><b>MELBOURNE</b></div>
        
    </div>

</div>
</div>
<br>
<div class="container ">
<div class="row">
        <div class="col-md-6">
                <img id="countries" src="cairns.jpg" alt="cairnsimage">
                <div class="caption text-center"><b>CAIRNS</b></div>
            </div>
        <div class="col-md-6">
                <img id="countries" src="brisbane.jpg" alt="cairnsimage">
                <div class="caption text-center"><b>BRISBANE</b></div>
            
            </div>
    </div>
    </div>

</body>
</html>