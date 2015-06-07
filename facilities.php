<?php
if(isset($_POST['sign'])){

session_start();
$_SESSION["email"] = $_POST['email'];

$_SESSION["password"] = $_POST['password'];

$_SESSION["category"] = $_POST['type'];
//echo $_SESSION["category"];
//echo $_POST['type'];
header('Location: appointment.php');

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
      <div class="col-xs-3 header-logo"> <br>
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
                <li><a class="menu " href="index.php#home" >Home</a></li>
                <li><a class="menu" href="index.php#about">about us</a></li>
                <li><a class="menu" href="index.php#service">our services </a></li>
                <li><a class="menu" href="index.php#team">our team</a></li>
                <li><a class="menu" href="index.php#contact"> contact us</a></li>
                <li><a class="menu" href="signup.php"> Register</a></li>
                <li><a class="menu" href="login.php"> Login</a></li>
				<li><a class="menu active" href="facilities.php"> Facilities</a></li>
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
					<div class="row">
						<h2>Sign In</h2>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 class="modal-title">Facilities</h1>
        </div>
        <div class="modal-body">
      <form  class="form-horizontal" role="form" method = "POST">
	<div class="form-group">
       <button type="button" class="btn btn-link"><h1><a href="check_Prescriptions.php">View Prescriptions</a></h1></button>
    </div>
    <div class="form-group">
       <button type="button" class="btn btn-link"><h1><a href="appointment.php">Take Appointment</a></h1></button>
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