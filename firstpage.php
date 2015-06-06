<?php
if(isset($_POST['sign'])){

session_start();
$_SESSION["email"] = $_POST['email'];
$_SESSION["password"] = $_POST['password'];
header('Location: appointment.php');
}

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
  <div class="container"  style="width:100% ">
  <h2></h2>
  <div >
  <button type="button" class="btn btn-default">HOME</button>
  <button type="button" class="btn btn-default">DOCTORS</button>
  <button type="button" class="btn btn-default">ABOUT US</button>
  <button type="button" class="btn btn-default">CONTACT</button>
  <button type="button" class="btn btn-default">LOCATE US</button>
  
  <div class="divv" style="width:30%; align:right ">
  <table style="width:60%"> 
  <tr>
  <td style="width:20">
  <button  type="button"class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalup">SignUp</button>
  </td >
  <td style="text-align:center" > OR </td>
  <td style="width:20"><button  type="button"class="btn btn-default btn-block" data-toggle="modal" data-target="#myModalin">SignIn</button>
  </td>
  </tr>
 
  <!-- <button type="button" class="btn btn-link">Link</button> -->
  
 </table>
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
  <div class="modal fade" id="myModalup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SignUp</h4>
        </div>
        <div class="modal-body">
          <form a id= "#C4" class="form-horizontal" role="form">
  
	<div  class="form-group">
      <label class="control-label col-sm-2" for="Username">Username:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Username" placeholder="Enter name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Father's">Father's name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Father's" placeholder="Enter Father's name">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Last">Last name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Last" placeholder="Enter last name">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Address">Address:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="Address" placeholder="Address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="NIC">NIC:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="NIC" placeholder="Address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Contact">Contact:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="Contact" placeholder="Address">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="Age">Age:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="Age" placeholder="Age">
      </div>
    </div>
	<div class="form-group">
	
       <label  class="control-label col-sm-2"> Gender :  </label>  
       <input type="radio" name="optradio"> Male &nbsp; &nbsp; &nbsp; &nbsp;
	   <input type="radio" name="optradio"> Female
    
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
   <div class="modal fade" id="myModalin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SignUp</h4>
        </div>
        <div class="modal-body">
          <form  class="form-horizontal" role="form" method = "POST">
	<div class="form-group">
      <label class="control-label col-sm-2" for="email" >Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pwd" >Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="pwd" name="password" placeholder="Enter password">
      </div>
    </div>
	<div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2" >
        <button type="submit" class="btn btn-default" name="sign">Submit</button>
      </div>
    </div>
	</div>
    </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
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
  <br>
  <br>
  <br>
  <br>
  <br>
</div>

  <form a id= "#C4" class="form-horizontal" role="form">
  <br> 
  <br>
  
   
   <br>
   <br>
 
    <h2 align = "center" class="text-primary"> About US </h2> 
	<br>
	<br>
	<div class= "cont">
	THIS IS PHOTOSHOP'S VERSION OF LOREM IPSUM PROIN GRAVIDA NIBH VEL AENEAN SOLLICITUDIN. LOREM QUIS BIBENDUM AUCTOR. <br>

This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. <br>

Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue.<br>

Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Vivamus non eros fermentum, sodales mi ut neque.
Proin auctor eros in purus aliquet dignissim.
Nullam eu lacus eget dolor blandit rutrum a eget nunc.
Duis ullamcorper libero id orci laoreet interdum.
Integer aliquam eros sit amet tortor egestas consectetur.
      </div>
</div>
 <br>
 <br>
 <br>
  <h2 align= "center" class="text-primary" > MEET WITH THE DOCTORS OF CMS </h2>
  <br> <br>     
  <div class= "cont">
  <div class="row">
    
    <div class="col-md-4"  style="width:150px;height:100px">
      <a href="1.jpg" class="thumbnail">
       <img src="1.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:130px">
      </a>
    </div>
	<div class="col-md-4">
      <a href="2.jpg" class="thumbnail" style="width:1000px;height:130px">
        <p>DOCTORS.</p>      
        
      </a>
    </div>
  </div>
 
   <br> <br>     
  
  <div class="row">
    
    <div class="col-md-4"  style="width:150px;height:100px">
      <a href="1.jpg" class="thumbnail">
       <img src="1.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:130px">
      </a>
    </div>
	<div class="col-md-4">
      <a href="2.jpg" class="thumbnail" style="width:1000px;height:130px">
        <p>DOCTORS.</p>      
        
      </a>
    </div>
  </div>
  <br> <br>   
  <div class="row">
    
    <div class="col-md-4"  style="width:150px;height:100px">
      <a href="1.jpg" class="thumbnail">
       <img src="1.jpg" alt="Moustiers Sainte Marie" style="width:150px;height:130px">
      </a>
    </div>
	<div class="col-md-4">
      <a href="2.jpg" class="thumbnail" style="width:1000px;height:130px">
        <p>DOCTORS</p>      
      </a>
    </div>
  </div>
</div>
 </div>

</body>
</html>