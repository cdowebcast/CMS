<?php

session_start();

if(isset($_POST['newSubmit']))
{
echo ("hello\n");
echo("<br>".$_POST['firstname']."<br>");
echo($_POST['last']);//
echo($_POST['nic']);//
echo($_POST['address']);
echo($_POST['contact']);
echo($_POST['optradio']);
echo($_POST['email']);
echo($_POST['age']);
$gen=$_POST['username'];
echo($_POST['password']);
// connect
$m = new MongoClient();
if ($m)
{
echo ("hogaya");    
}
// select a database
$db = $m->awt;
// select a collection (analogous to a relational database's table)
$collection = $db->patients12;
// add a record
$document = array( "FName" => $_POST['firstname'],
                  "LName" => $_POST['last'], //
                  "NIC" =>$_POST['nic'], //
                  "Address" => $_POST['address'],
                  "Contact" => $_POST['contact'],
                  "Gender" => $_POST['optradio'],
                  "Email" => $_POST['email'],
                  "Age" => $_POST['age'],
                  "Username" => $_POST['username'],
		  "Password" => $_POST['password']
		  );
$collection->insert($document);
if($collection){
  $_SESSION['message']="Patient Created Successfully. Login to continue";
header('Location: login.php');
// find everything in the collection
/*
$cursor = $collection->find();
// iterate through the results
foreach ($cursor as $documents) {
echo ("First Name :".$documents["FName"] . "<br>");
echo ("Last Name :".$documents["LName"] . "<br>");//
echo ("NIC :".$documents["NIC"] . "<br>");//
echo ("Address :".$documents["Address"] . "<br>");
echo ("Contact :".$documents["Contact"] . "<br>");
echo ("Gender :".$documents["Gender"] . "<br>");
echo ("Email :".$documents["Email"] . "<br>");
echo ("Age :".$documents["Age"] . "<br>");
echo ("Username :".$documents["Username"] . "<br>") ;
echo ("Password :".$documents["Password"]."<br>");
				}
*/
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Signup</title>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- ====================================================
	header section -->
<header class="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-2 header-logo"> <br>
        <a href="index.php"><img src="img/logo.png" alt="" class="img-responsive logo"></a> </div>
      <div class="col-md-13">
        <nav class="navbar navbar-default">
          <div class="container-fluid nav-bar"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="menu active" href="index.php#home" >Home</a></li>
                <li><a class="menu" href="index.php#about">about us</a></li>
                <li><a class="menu" href="index.php#service">our services </a></li>
                <li><a class="menu" href="index.php#team">our team</a></li>
                <li><a class="menu" href="index.php#contact"> contact us</a></li>
                <li><a class="menu" href="signup.php"> Register</a></li>
                <li><a class="menu" href="login.php"> Login</a></li>
              </ul>
            </div>
            <!-- /navbar-collapse --> 
          </div>
          <!-- / .container-fluid --> 
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- end of header area --> 
<section class="about text-center" id="sign_up">
			<div class="container">
					<div class="row" style="margin-top: 120px">
						<h2>Sign Up</h2>

 
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form a id= "#C4" class="form-horizontal" role="form" method="POST">
  
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="Fname">First name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" name ="firstname" id="First" placeholder="Enter First name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Last">Last name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Last" name="last" placeholder="Enter last name" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="NIC">NIC:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="NIC" name="nic" placeholder="Enter NIC" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Address">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Address" name="address" placeholder="Enter Address" required>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="Contact">Contact:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="Contact" name="contact" placeholder="Enter contact" required>
      </div>
    </div>
	<div class="form-group">
	
       <label  class="control-label col-sm-2"> Gender :  </label>  
       <input type="radio" name="optradio" value="male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
	   <input type="radio" name="optradio" value="female" required> Female
    
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Age">Age:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="Age" name="age" placeholder="Enter Age">
      </div>
    </div>
	<div  class="form-group">
      <label class="control-label col-sm-2" for="Username">Username:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Username" name="username" placeholder="Enter username" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name = "password" placeholder="Enter password" required>
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name=newSubmit>Submit</button>
      </div>
    </div>
  </form>
        </div>
      </div>
      
    
 
					</div>
			<div>
			</section>


<!-- footer starts here -->
<footer class="footer clearfix">
  <div class="container">
    <div class="row">
      <div class="col-xs-6 footer-para">
        <p>&copy;CMS All right reserved</p>
      </div>
      <div class="col-xs-6 text-right"> <a href=""><i class="fa fa-facebook"></i></a> <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-skype"></i></a> </div>
    </div>
  </div>
</footer>

<!-- script tags
	============================================================= --> 
<script src="js/jquery-2.1.1.js"></script> 
<!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="js/gmaps.js"></script> -->
<script src="js/smoothscroll.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!--<script src="js/custom.js"></script>-->
</body>
</html>