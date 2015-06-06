<!DOCTYPE html>
<html lang="en">
<head>
<style>
     .divv{
	  float : right; 
         }
		 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 50%;
      margin: auto;
  }
</style>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1 align= "center"> CMS </h1>
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;"></div>
    <div class="col-sm-4" style="background-color:lavenderblush;"> </div>
    <div class="col-sm-4" style="background-color:lavender;"></div>
  </div>
  <div class="container" width=100%>
  <h2></h2>
  <button type="button" class="btn btn-default">HOME</button>
  <button type="button" class="btn btn-default">DOCTORS</button>
  <button type="button" class="btn btn-default">ABOUT US</button>
  <button type="button" class="btn btn-default">CONTACT</button>
  <button type="button" class="btn btn-default">LOCATE US</button>
  <div class="divv">
 
  <button  align="right" type="button" class="btn btn-default">Signup</a></button>
  or
  <button align="right" type="button" class="btn btn-default"><a id= "C4">SignIn</button>
  <!-- <button type="button" class="btn btn-link">Link</button> -->
</div>  
</div>
 <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="1.jpg" alt="Chania" width="460" height="345">
      </div>
      <div class="item">
        <img src="2.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <h2> <a id= "C4">SIGNUP</a></h2>
  <form  class="form-horizontal" role="form" method="POST">
   
	<div a id= "C4" class="form-group">
      <label class="control-label col-sm-2" for="Username">Username:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Username" name="Username" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Father">Father's name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Father" name="Father"placeholder="Enter Father's name">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Last">Last name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Last" name="Last" placeholder="Enter last name">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Address">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Address" name="Address" placeholder="Address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="NIC">NIC:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="NIC" name="NIC" placeholder="Address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Contact">Contact:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="Contact"  name="Contact" placeholder="Address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="Email" placeholder="Enter email">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Age">Age:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="Age" name="Age" placeholder="Address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" name = "Gender" for="Gender">Gender:</label>
      <div class="col-sm-10">          
        <input type="checkbox" name = "gender" class="form-control" id="gender" value = "Male" >Male
		 <input type="checkbox" name = "gender" class="form-control" id="gender" value = "Female">Female
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="newSubmit" >Submit</button>
      </div>
    </div>
  </form>
</div>


</body>
</html>

<?php

if(isset($_POST['newSubmit']))
{

echo ("hello\n");
echo("<br>".$_POST['gender']."<br>");
echo($_POST['Username']);
echo($_POST['Father']);
echo($_POST['Last']);
echo($_POST['Address']);
echo($_POST['NIC']);
echo($_POST['Contact']);
echo($_POST['Email']);

   echo($_POST['pwd']);
   echo($_POST['Age']);
   $gen=$_POST['gender'];

}


?>
<?php
// connect
$m = new MongoClient();
if ($m)
{
echo ("hogaya ");    
}
// select a database
$db = $m->awt;

// select a collection (analogous to a relational database's table)
$collection = $db->patients3;

// add a record

$document = array( "Username" => $_POST['Username'],
                  "Father's name" => $_POST['Father'],
                  "Last name" =>$_POST['Last'],
                  "Address" => $_POST['Address'],
                  "NIC" => $_POST['NIC'],
                  "Contact" => $_POST['Contact'],
                  "Email" => $_POST['Email'],
                  "Password" => $_POST['pwd'],
                  "Age" => $_POST['Age'],
		  "Gender" => $gen
		  );
$collection->insert($document);
if($collection){
// find everything in the collection
$cursor = $collection->find();
// iterate through the results

foreach ($cursor as $documents) {
    echo ("Username :".$documents["Username"] . "<br>");
     echo ("Father :".$documents["Father's name"] . "<br>");
     echo ("Last :".$documents["Last name"] . "<br>");
      echo ("Address :".$documents["Address"] . "<br>");
       echo ("NIC :".$documents["NIC"] . "<br>");
        echo ("Contact :".$documents["Contact"] . "<br>");
         echo ("Email :".$documents["Email"] . "<br>");
          echo ("Password :".$documents["Password"] . "<br>");
           echo ("Age :".$documents["Age"] . "<br>") ;
	   echo ("Gender :".$documents["Gender"]."<br>");


}

}

?>