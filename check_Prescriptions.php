<?php
//echo ("123");

session_start();

if (empty($_SESSION['id'])){

  echo ("fail");
  $_SESSION['message']="Please login to take an appointment";
 header ('Location: login.php');
 echo ("hohoho");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Check Prescriptions</title>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/font2.css">
<!--
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
 -->
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
                <li><a class="menu" href="index.php#home" >Home</a></li>
                <li><a class="menu" href="index.php#about">about us</a></li>
                <li><a class="menu" href="index.php#service">our services </a></li>
                <li><a class="menu" href="index.php#team">our team</a></li>
                <li><a class="menu" href="index.php#contact"> contact us</a></li>
              <?php
				if(empty($_SESSION['id']))
						{
							echo "<li><a class='menu' href='signup.php'> Register</a></li>";
							echo "<li><a class='menu' href='login.php'> Login</a></li>";
							
						}
						else{
					  echo "<li><a class='menu' href='facilities.php'>Facilities</a></li>";
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
<div class="row">
  <h2>Sign Up</h2>
  
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      
      <h4 class="modal-title">View Prescriptions</h4>
    </div>
    <div class="modal-body">
      
 <div class="table-responsive">
       <table class="table table-bordered">
        <thead>
          <tr>
            <th width=10%>Appointment Date/Time</th>
            <th width=10%>Doctor</th>
            <th width=10%>Prescriptions</th>
           
          </tr>
        </thead>
        <tbody>
        
       
<?php
$m = new MongoClient();
if ($m)
{
//echo ("hogaya ");    

// select a database
$db = $m->awt;

// select a collection (analogous to a relational database's table)
$collection = $db->appointments;

// find a record

/*$document = array( "Username" => $_SESSION["email"],
                  "Password" => $_SESSION["password"]);*/
$rangeQuery = array('patientId' => New MongoId($_SESSION['id']));
$cursor = $collection->find($rangeQuery);
// iterate through the results
foreach ($cursor as $documents) {
/*echo ("_id:".$documents["_id"] . "<br>");
echo ("Timings :".$documents["Timings"] . "<br>");//
echo ("doctorId :".$documents["doctorId"] . "<br>");//
echo ("doctor Name :".$documents["DoctorFName"]." ".$documents["DoctorLName"]. "<br>");//
echo ("patientId :".$documents["patientId"] . "<br>");//
echo ("Patient Name :".$documents["FName"]."".$documents["LName"]. "<br>");//
echo ("Fee :".$documents["Fee"] . "<br>");
echo ("Date:".$documents["Date"] . "<br>");
echo ("Diagnosis :".$documents["Diagnosis"] . "<br>");//
echo ("Prescription :".$documents["Prescription"]."<br>");//
echo ("AppointmentNumber :".$documents["AppointmentNumber"] . "<br>");
*/
echo " <tr>";
echo "<td>".$documents["Timings"]."</td>";
echo "<td>".$documents["DoctorFName"]." ".$documents["DoctorLName"]."</td>";								
echo"<td><a href=view_appointment.php?flag=E&PNAME=".$documents["FName"].$documents["LName"]."&prescription=".$documents['Prescription']."&diagnosis=".$documents['Diagnosis']."&date=".$documents['Date']."&fee=".$documents['Fee']."&id=".$documents['_id']."'>View Prescriptions</a></td>";
echo"</tr>";
}

}
					

?>
		
   
         
          
          </tbody>
        
         </table>
      
         </form>
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
      <div class="col-xs-6 text-right"> <a href=""><i class="fa fa-facebook"></i></a>
      <a href=""><i class="fa fa-twitter"></i></a> <a href=""><i class="fa fa-skype"></i></a> </div>
    </div>
  </div>
</footer>

<!-- script tags
	============================================================= --> 
	<script src="js/jquery-2.1.1.js"></script>
	<!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>