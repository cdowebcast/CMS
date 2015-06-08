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
if(isset($_POST['sub']))
{
echo ("hello\n");
echo("<br>".$_POST['fname']."<br>");
echo($_POST['lname']);//
echo($_POST['nic']);//
echo($_POST['Address']);
echo($_POST['contact']);
echo($_POST['optradio']);
echo($_POST['email']);
echo($_POST['age']);
echo($_POST['fees']);
$gen=$_POST['Username'];
echo($_POST['Password']);
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
<link rel="stylesheet" href="css/font.css">
<link rel="stylesheet" href="css/font2.css">
<!--
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
 -->

  <style>
     
	  .btnC{
	  margin-left:1000px;
	  }
</style>

  }
</style>

</head>
<script>


function myFunction() {
    document.getElementById("mon1").disabled = false;
	 document.getElementById("mon2").disabled = false;
	  document.getElementById("mon3").disabled = false;
}
function myFunction2() {
    document.getElementById("tue1").disabled = false;
	 document.getElementById("tue2").disabled = false;
	  document.getElementById("tue3").disabled = false;
}
function myFunction3() {
    document.getElementById("wed1").disabled = false;
	 document.getElementById("wed2").disabled = false;
	  document.getElementById("wed3").disabled = false;
}
function myFunction4() {
    document.getElementById("thur1").disabled = false;
	 document.getElementById("thur2").disabled = false;
	  document.getElementById("thur3").disabled = false;
}
function myFunction5() {
    document.getElementById("fri1").disabled = false;
	 document.getElementById("fri2").disabled = false;
	  document.getElementById("fri3").disabled = false;
}
function myFunction6() {
    document.getElementById("sat1").disabled = false;
	 document.getElementById("sat2").disabled = false;
	  document.getElementById("sat3").disabled = false;
}
function myFunction7() {
    document.getElementById("sun1").disabled = false;
	 document.getElementById("sun2").disabled = false;
	  document.getElementById("sun3").disabled = false;
}
</script>
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
						<h2>Doctors</h2>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Doctors SignUp</h4>
        </div>
		
		<div class="modal-body">
      <form  class="form-horizontal" role="form" method = "POST">
	<div class="form-group">
      <label class="control-label col-sm-2" for="fname" required>FIRST NAME</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required>
      </div>
    </div>
		<div class="form-group">
      <label class="control-label col-sm-2" for="lname" required>LAST NAME:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
      </div>
    </div>
		<div class="form-group">
      <label class="control-label col-sm-2" for="nic" required>NIC</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="nic" name="nic" placeholder="Enter NIC" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Address" required>Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Address" name= "Address"placeholder="Enter Address" required>
      </div>
    </div>
		<div class="form-group">
      <label class="control-label col-sm-2" for="contact" required>Contact:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter Contact" required>
      </div>
    </div>
	<div class="form-group">
	
       <label  class="control-label col-sm-2" required> Gender :  </label>  
       <input type="radio" name="optradio" value="Male"required> Male &nbsp; &nbsp; &nbsp; &nbsp;
	   <input type="radio" name="optradio" value="Female" required> Female
    </div>
	 <div class="form-group">
      <label class="control-label col-sm-2" for="email"  required>Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
      </div>
    </div>
		<div class="form-group">
      <label class="control-label col-sm-2" for="age" >Age:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="age" name="age" placeholder="Enter Age" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="qualification" required>Qualification:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter email" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="specialization" required>Specialization:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Specialization" name="Specialization" placeholder="Enter Specialization" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="fees" required>Fees:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="fees" name="fees" placeholder="Enter fees" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="ava" name="ava" required> Availability</label>
      <div class="col-sm-10">
  <form  class="form-horizontal" role="form" method = "POST">     
 <table class="table" id="myTable">
    <thead>
      <tr>
        <th>Day</th>
        <th> &nbsp &nbsp Time In</th>
		<th>Time Out</th>
		<th> Number Of patients</th>
		
      </tr>
    </thead>
     <tr>
        <td><label class="checkbox-inline">
      <input type="checkbox" value="Monday" onclick="myFunction()">Monday
    </label></td>
        <td><input type= "text" name="mon1" id="mon1" required disabled ></td>
		  <td><input type= "text" name="mon2" id="mon2" required disabled></td>
		   <td><input type= "text" name="mon3" id="mon3" required disabled></td>
		   
      </tr>
      <tr>
        <td><label class="checkbox-inline" onclick="myFunction2()">
      <input type="checkbox" value="">Tuesday
    </label></td>
         <td><input type= "text" name="tue1" id="tue1" required disabled></td>
		  <td><input type= "text" name="tue2" id="tue2" required disabled></td>
		   <td><input type= "text" name="tue3" id="tue3" required disabled></td>
		   
      </tr><tr>
        <td><label class="checkbox-inline" onclick="myFunction3()">
      <input type="checkbox" value="">Wednesday
    </label></td>
        <td><input type= "text" name="wed1" id="wed1" disabled required></td>
		  <td><input type= "text" name="wed2" id="wed2" disabled required></td>
		   <td><input type= "text" name="wed3" id="wed3" disabled required></td>
		   
      </tr><tr>
        <td><label class="checkbox-inline" onclick="myFunction4()">
      <input type="checkbox" value="">Thursday
    </label></td>
         <td><input type= "text" name="thur1" id="thur1" disabled required></td>
		  <td><input type= "text" name="thur2" id="thur2" disabled required></td>
		   <td><input type= "text" name="thur3" id="thur3" disabled required></td>
      </tr><tr>
        <td><label class="checkbox-inline" onclick="myFunction5()">
      <input type="checkbox" value="">Friday
    </label></td>
         <td><input type= "text" name="fri1" id="fri1" disabled required></td>
		  <td><input type= "text" name="fri2" id="fri2" disabled required></td>
		   <td><input type= "text" name="fri3" id="fri3" disabled required></td>
		   
      </tr><tr>
        <td><label class="checkbox-inline" onclick="myFunction6()">
      <input type="checkbox" value="">Saturday
    </label></td>
        <td><input type= "text" name="sat1" id="sat1" disabled required></td>
		  <td><input type= "text" name="sat2" id="sat2" disabled required></td>
		   <td><input type= "text" name="sat3" id="sat3" disabled required></td>
		   
      </tr><tr>
        <td><label class="checkbox-inline" onclick="myFunction7()">
      <input type="checkbox" value="">Sunday
    </label></td>
         <td><input type= "text" name="sun1" id="sun1" disabled required></td>
		  <td><input type= "text" name="sun2" id="sun2" disabled required></td>
		   <td><input type= "text" name="sun3" id="sun3" disabled required></td>
      </tr>
    
  </table>
  
  
</div>
  
    </div>
    <div  class="form-group">
      <label class="control-label col-sm-2" for="Username" >Username:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Username"  name="Username" placeholder="Enter username" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="Password" placeholder="Enter password" required>
      </div>
    </div>		
	<div class="form-group">        
      <div class="col-sm-offset-1 col-sm-2" >
       	   <button type="submit" class="btn btn-default" name="sub">Submit</button>
      </div> 
    </div>
	<div>
		<form action="admin.php">
		 <button type="submit" class="btn btn-default btnC" name="can">Cancel</button>
		 </form>
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