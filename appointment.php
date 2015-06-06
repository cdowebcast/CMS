<?php
session_start();
echo $_SESSION["email"];

echo $_SESSION["password"];
echo ("Heya");
?>
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
    .but{
	    width: 100%;
	}
	.h2{
	  color: blue;
	}
	.mod {
	width: 100%;
	}
	.cont {
	margin-left: 7%;
	margin-right: 7%;
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
    <div class="col-sm-4" style="background-color:lavenderblush;"> </ditv>
  <div class="col-sm-4" style="background-color:lavender;"></div>
	 </div>
  <div class="container" width=100%>
  <form action= "firstpage.html" method = "get">
  <button type="button" class="btn btn-default">HOME</button>
   <button align="right" type="button" class="btn btn-default">SignOut</button>
  </form>
  
  
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
  <div class = "mod">
 <div class="col-sm-4" >
   <div class="but">
  <button type="button"class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal" >Doctors Timetable
  </div>
  </div>
 
  <div class="col-sm-4">
  <div class="but">
  <button type="button"class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal3" >Emergency Cases
  </div>
  
  </div>
<div class="col-sm-4">
  <div class="but">
  <button type="button"class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal2" >Opening Hours
  </div>
  
  </div>
  
   
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Doctors Timetable</h4>
        </div>
        <div class="modal-body">
          <p>Monday - Friday  &nbsp 8:00 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 17: 00 </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Opening Timings</h4>
        </div>
        <div class="modal-body">
          <p>Monday - Friday  &nbsp 8:30 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:20 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:30 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:30 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:30 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:30 - 17: 00 </p>
		  <p>Monday - Friday  &nbsp 8:30 - 17: 00 </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Emergency Cases</h4>
        </div>
        <div class="modal-body">
          <p>Monday - Friday  &nbsp 8:00 - 4: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 4: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 4: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 4: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 4: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 4: 00 </p>
		  <p>Monday - Friday  &nbsp 8:00 - 4: 00 </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
     </div> 
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
 <h2 align= "center" class="text-primary" >  MAKE AN APPOINTEMENT </h2>
 <br>
 <form a id= "#C4" class="form-horizontal" role="form">
  
	<div  class="form-group">
      <label class="control-label col-sm-2" for="Username">NAME:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Username" placeholder="Enter your Name">
      </div>
    </div>
   <div class="form-group">
      <label class="control-label col-sm-2" for="Last">Last name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Last" placeholder="Enter last name">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2" for="Contact">Date</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="datefrom" placeholder="Select Date">
      </div>
    </div>
	
	<div class="form-group">
      
    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; <b>Preferred Doctor </b> : &nbsp; &nbsp;
	   <button class="btn btn-default dropdown-toggle" type="dropdown" id="menu1" data-toggle="dropdown"> Doctors
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      
    </ul>

  </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
   
   

  
  
  </div>
</body>
</html>

  