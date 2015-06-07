<?php
session_start();
if(isset($_POST['message'])){
  echo $_POST['message'];
  echo("asasda");
}
if(isset($_POST['sign'])){
$_SESSION["email"] = $_POST['email'];

$_SESSION["password"] = $_POST['password'];

$_SESSION["category"] = $_POST['type'];

//echo $_SESSION["category"];
//echo $_POST['type'];
if ($_SESSION["category"]=='patient'){
  
  $m = new MongoClient();
if ($m)
{
//echo ("hogaya ");    

// select a database
$db = $m->awt;

// select a collection (analogous to a relational database's table)
$collection = $db->patient;

// find a record

$document = array( "Username" => $_SESSION["email"],
                  "Password" => $_SESSION["password"]);
$cursor=$collection->findOne($document);
if ($cursor){

    //echo ("Username :".$cursor["Username"] . "<br>");
   //  echo ("Password :".$cursor["Password"] . "<br>");
 //    echo ("Valid username or password");
$_SESSION["id"]=$cursor["_id"];
//echo $_SESSION["id"];
header('Location: appointment.php');  
     
}
else{
     echo ("invalid username or password");
}
// find everything in the collection
//$cursor = $collection->find();
// iterate through the results


}
}


else if ($_SESSION["category"]=='admin'){
  
  $m = new MongoClient();
if ($m)
{
//echo ("hogaya ");    

// select a database
$db = $m->awt;

// select a collection (analogous to a relational database's table)
$collection = $db->admin;

// find a record

$document = array( "Username" => $_SESSION["email"],
                  "Password" => $_SESSION["password"]);
$cursor=$collection->findOne($document);
if ($cursor){

    //echo ("Username :".$cursor["Username"] . "<br>");
   //  echo ("Password :".$cursor["Password"] . "<br>");
 //    echo ("Valid username or password");
$_SESSION["id"]=$cursor["_id"];
header('Location: admin.php');  
     
}
else{
     echo ("invalid username or password");
}
// find everything in the collection
//$cursor = $collection->find();
// iterate through the results


}
}
else if ($_SESSION["category"]=='doctor'){
  
  $m = new MongoClient();
if ($m)
{
//echo ("hogaya ");    

// select a database
$db = $m->awt;

// select a collection (analogous to a relational database's table)
$collection = $db->doctor;

// find a record

$document = array( "Username" => $_SESSION["email"],
                  "Password" => $_SESSION["password"]);
$cursor=$collection->findOne($document);
if ($cursor){

    //echo ("Username :".$cursor["Username"] . "<br>");
   //  echo ("Password :".$cursor["Password"] . "<br>");
 //    echo ("Valid username or password");
$_SESSION["id"]=$cursor["_id"];
header('Location: checkappointment.php');  
     
}
else{
  echo ("<script>alert('Invalid Username or Password!');</script>");

//     echo ("invalid username or password");
}
// find everything in the collection
//$cursor = $collection->find();
// iterate through the results


}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
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
      <div class="col-md-9">
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
					<div class="row" style="margin-top: 70px">
						<h2>Login</h2>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
      <form  class="form-horizontal" role="form" method ="POST">
	<div class="form-group">
      <label class="control-label col-sm-2" for="email" >Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control"  id="email" name="email" placeholder="Enter email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd" >Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password" required>
      </div>
    </div>
    
    <div class="form-group">
          <label class="control-label col-sm-2" for="Contact" >Type</label>
          <div class="col-sm-10">
            <select class="form-control" name="type" id="type" placeholder="Select Type" required>
              <option value="" disabled selected>Select Type</option>
             <option  value="patient">Patient</option>
	      <option value="doctor">Doctor</option>
              <option  value="admin">Administrator</option>
              </select>
          </div>
        </div>
    
    
	<div class="form-group">        
      <div class="col-sm-offset-1 col-sm-2" >
        <button type="submit" class="btn btn-default" name="sign">Submit</button>
      </div>
    </div>
	</div>
    </form>
        </div>
      </div>
 					</div>
			<div>
			</section>
<!-- end of about section --> 

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
<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script src="js/gmaps.js"></script> 
<script src="js/smoothscroll.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>