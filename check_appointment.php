<?php
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
<title>Check Appointment</title>
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
      <div class="col-xs-5 header-logo"> <br>
        <a href="index.php"><img src="img/logo.png" alt="" class="img-responsive logo"></a> </div>
      <div class="col-md-7">
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
      
      <h4 class="modal-title">View Appointment</h4>
    </div>
    <div class="modal-body">
      
 <div class="table-responsive">
       <table class="table table-bordered">
        <thead>
          <tr>
        
            <th width=10%>Patient Name</th>
            <th width=10%>Date</th>
            <th width=20%>Timings</th>
            <th width=20%>Appointment Number</th>
            <th width=20%>Action</th>
          </tr>
        </thead>
        <tbody>
        
       
<?php
//echo ("123");
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
$cursor=$collection->find();
foreach ($cursor as $documents) {
$aid=$documents['_id'];  
$pid=$documents['patientId'];
$pfname=$documents['FName'];
$plname=$documents['LName'];
$date=$documents['Date'];
$timings=$documents['Timings'];
$did=$documents['doctorId'];
$dfname=$documents['doctorFName'];
$dlname=$documents['doctorLName'];
$prescription=$documents['Prescription'];
$diagnosis=$documents['Diagnosis'];
$appointmentnumber=$documents['AppointmentNumber'];
$fee=$documents['Fee'];
echo  "<td >".$documents['FName']."\t".$documents['LName']."</td>";
echo  "<td >".$documents['Date']."</td>";
echo  "<td >".$documents['Timings']."</td>";
echo  "<td >".$documents['AppointmentNumber']."</td>";
echo"   <td><a href='view_appointment.php?flag=V&PNAME=
".$documents['FName'].$documents['LName']."&prescription=".$documents['Prescription']."
&diagnosis=".$documents['Diagnosis']."&date=".$documents['Date']."&fee=".$documents['Fee']."&id=".$documents['_id']."' > View </a></t>";
//  echo ("Password :".$cursor["Password"] . "<br>");
//    echo ("Valid username or password");
//$_SESSION["id"]=$cursor["_id"];
/*	echo      "<td><a href=update.php?flag=U&ST_ID=".oci_result($stmt, "ST_ID").">Update</a></td>";
	echo      "<td><a href=update.php?flag=D&ST_ID=".oci_result($stmt, "ST_ID").">Delete</a></td>";
	echo      "<td><a href=grade1.php?flag=U&ST_ID=".oci_result($stmt, "ST_ID").">UPLOAD GRADE</a></td></tr>";
*/
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
            
        				
        				
						
		
   
          </tr>
 
        
          
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