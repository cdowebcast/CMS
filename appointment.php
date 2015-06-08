<?php
session_start();

if (empty($_SESSION['id'])){

  echo ("fail");
  $_SESSION['message']="Please login to take an appointment";
 header ('Location: login.php');
//  echo ($_SESSION['email']);
}
if(isset($_POST['appSubmit'])){
echo $_POST['username'];
echo $_POST['date'];
echo $_POST['doctor'];
echo $_POST['timings'];



$m = new MongoClient();
if ($m)
{
//echo ("hogaya");    
}
// select a database
$db = $m->awt;
// select a collection (analogous to a relational database's table)
$collection = $db->appointments;
// add a record
$document = array( "patientId" =>New MongoId($_SESSION["id"]),
                  "FName" => $_POST['username'], //
                  "LName" =>"", //
                  "Date" => $_POST['date'],
                  "Timings" => $_POST['timings'],
                  "doctorId" => "",
                  "DoctorFName" => $_POST['doctor'],
                  "DoctorLName" => " ",
                  "Prescription" => "",
		  "Diagnosis" => "",
		  "Fee" => "",
		  "AppointmentNumber" => 13
		  );
$collection->insert($document);
if($collection){
  $_SESSION['message']="Patient Created Successfully. Login to continue";
header('Location: facilities.php');
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
<title>Appointment</title>
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
<div class="row" style='margin-top: 70px'>
  <h2>Appointment</h2>
  
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"></h4>
    </div>
    <div class="modal-body">
      <form a id= "#C4" class="form-horizontal" role="form" name="newForm" method="POST">
        <div  class="form-group">
          <label class="control-label col-sm-2" for="Username">Patient Name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Username" name="username" placeholder="Enter your Name">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Contact">Date</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="datefrom" name="date" placeholder="Date format: 'DD-MM-YYYY'">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="Contact">Doctor</label>
          <div class="col-sm-10">
	   
            <select class="form-control" name="doctor" id="doctor">
              <option value="0" disabled>Select Doctor</option>
            

<?php
//echo ("123");
$m = new MongoClient();
if ($m)
{
echo ("hogaya ");    

// select a database
$db = $m->awt;

// select a collection (analogous to a relational database's table)
$collection = $db->doctor;

// find a record

/*$document = array( "Username" => $_SESSION["email"],
                  "Password" => $_SESSION["password"]);*/
$cursor=$collection->find();
foreach ($cursor as $documents) {
$dfname=$documents['FName'];
$dlname=$documents['LName'];
  echo  "<option value=".$dfname.">Dr ".$documents['FName']."\t".$documents['LName']."</option>";
   //  echo ("Password :".$cursor["Password"] . "<br>");
 //    echo ("Valid username or password");
//$_SESSION["id"]=$cursor["_id"];
//header('Location: checkappointment.php');    
}
// find everything in the collection
//$cursor = $collection->find();
// iterate through the results

//echo $documents['FName'];

//echo $documents['LName'];
}
else{
  echo ("error");
}

?>
	    </select>

          </div>
        </div>
	<div class="form-group">
          <label class="control-label col-sm-2" for="Contact">Timings</label>
          <div class="col-sm-10">
	   
            <select class="form-control" name="timings" id="timings">
              <option value="0" disabled>Select Timeslots</option>
	      <option value="Monday 8:30 pm to 11:30 pm">Monday 8:30 pm to 11:30 pm</option>
	      <option value="Tuesday 6:30 pm to 9:30 pm">Tuesday 6:30 pm to 9:30 pm</option>
	      <option value="Wednesday 2:00 pm to 5:00 pm">Wednesday 2:00 pm to 5:00 pm</option>
	      <option value="Thursday 10:30 am to 12:30 pm">Thursday 10:30 am to 12:30 pm</option>
	      <option value="Friday 09:30 am to 11:00 am">Friday 09:30 am to 11:00 am</option>
	      <option value="Saturday 3:00 pm to 6:00 pm">Saturday 3:00 pm to 6:00 pm</option>
	    </select>
	    </div>
	    </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" name="appSubmit">Submit</button>
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
	<!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>