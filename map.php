<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Appointment</title>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel='stylesheet' href='css/font.css'>
<link rel='stylesheet' href='css/font2.css'>
</head>
<body>

<!-- ====================================================
	header section -->
<header class="top-header">
  <div class="container">
    <div class="row" >
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
                <li><a class="menu active" href="index.php#home">Home</a></li>
                <li><a class="menu" href="index.php#about">about us</a></li>
                <li><a class="menu" href="index.php#service">our services </a></li>
                <li><a class="menu" href="index.php#team">our team</a></li>
                <li><a class="menu" href="index.php#contact"> contact us</a></li>
                <li><a class="menu" href="map.php"> locate us</a></li>
               <?php
				if(empty($_SESSION['id']))
						{
							echo "<li><a class='menu' href='signup.php'> Register</a></li>";
							echo "<li><a class='menu' href='login.php'> Login</a></li>";
							
						}
						else{
					  echo "<li><a class='menu' href='appointment.php'>Take Appointment</a></li>";
							echo "<li><a class='menu' href='signout.php'>Sign Out</a></li>";
							echo $_SESSION['email'];
						}
			?>
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
<div class="row" style='margin-top: 70px'>
  <h2>Location</h2>
  
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h1 class="modal-title">GOOGLE MAP</h1>
    </div>
    <div class="modal-body">
     

<div id="mapholder">

<script>
 getLocation();
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    var latlon = 24.866816 + "," + 67.0252984;

    var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&sensor=false";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}
</script>

</div>
Location:</br>
&nbsp Latitude: 24.866816 </br>
&nbsp Longitude: 67.0252984 </br>
<div class="form-group">        
      <div class="form-group">
       <button type="button" class="btn btn-link"><h3><a href="index.php">Close</a></h3></button>
    </div>
    </div>
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