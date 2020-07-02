<?php

session_start();

include("includes/db.php");
include("functions/functions.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Annova Research</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/style.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div id="top">
   <div class="container">
   <div class="col-md-6 offer">
   <a href="#" class="btn btn-success btn-sm">
   ANNOVA
   </a>
   <a href="#">Phone:8887951971</a>/<a href="#">vikashdeepak2014@gmail.com</a>
   
   </div>
   <div class="col-md-6">
   <ul class="menu">
   <li>
   <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-rss"></i></a>
   </li>
   
   </ul>
   </div>
   </div>
   
<div class="navbar navbar-default" id="navbar">  <!--navbar navbar-default start-->
   <div class="container">
   <div class="navbar-header">
   
   <a class="navbar-brand home" href="index.html">
   <img src="images/logo2.png" alt="Annova" class="hidden-xs">
   <img src="images/logo2.png" alt="Annova" class="visible-xs">
   </a>
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
    <span class="sr-only">Toggle Navigation</span>
	<i class="fa fa-align-justify"></i>
   
   </button>
   <button type="button" class="navbar-togglele" data-toggle="navbar-toggle" data-target="#search">
   <span class="sr-only"></span>
   <i class="fa fa-search"></i>
   
   </button>
</div>
<div  class="navbar-collapse" id="navigation">
   <div class="padding-nav">
   <ul class="nav navbar-nav navbar-left" style="background-color:#ff9999;">
   <li class="active">
   <a href="index.html">Home</a>
   </li>
   <li>
   <a href="research.html">Research</a>
   </li>
    <li>
   <a href="policy.html">Policy Design</a>
   </li>
   
   
   
   <li>
   <a href="service.html">Services</a>
   </li>
   
   <li>
   <a href="about.html">About Us</a>
   </li>
   
   
   
   <li>
   <a href="contact.html">Contact Us</a>
   </li>
   
   
   
   
   </ul>
   </div>
   <a href="service.html" class="btn btn-primary navbar-btn right">
   
   <i class="fa fa-shopping.cart"></i>
   <span>Service Price</span>
   
   </a>
   <div class="navbar-collapse collapse right">
   <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
   
   <span class="sr-only"> Toggle Search</span>
   <i class="fa-fa-search"></i>
   
   </button>
   </div>
   
   <div class="collapse clearfix" id="search">
   
   
   

 
<form class="navbar-form" method="get" action="">

<div class="input-group">

<input type="text" name="user_query" placeholder="Search" class="form-control" required="">
<span class="input-group-btn">
<button type="submit" value="Search" name="search" class="btn btn-primary">
<i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
</div>
   </div>
   </div>
     </div>
	  </div>
	 
	  <div class="container">
            <div class="row">
			<div class="col-xs-12 col-sm-12 col-lg-2" >
			<center>
			<a  href="index.html"><img src="images/logo2.png" alt="iteph" class="img-responsive" STYLE="width: 100PX;height: 100PX;" />
			
			</a>
			</center>
                
			</div>
			<div class="col-xs-12 col-sm-12 col-lg-10" style="padding-top: 27px">
			<center><h2 style="color:blue;text-align:center;text-shadow: 2px 2px 5px yellow;font-size:50px;">ANNOVA RESEARCH</h2>
			
			<div style="text-align:center;padding-top:15px; color:#A52A2A;font-size:20px;">( RESEARCH INNOVATE IMPLEMENT )</div></center>
			</div>
			 </div>
			  <div class="row">
              <div class="col-xs-12 col-sm-12 col-lg-12" style="padding-top: 5px">
                <div class="header_inner" >

<div class="container">
  <h2>Gallery</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
	<div class="carousel-inner">

      <div class="item active">
        <img src="images/lake.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Social Research</h3>
          <p>Social Research so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="images/health.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Innovate</h3>
          <p>Think Innovation!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/growth.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Analytics</h3>
          <p>Connecting World!</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
	</div>
	</div>

<div class="container text-center border-bottom" id="services">
<h1>Our Services</h1>
<div class="row mt-16">
<div class="col-sm-4 mb-16">
<a href="#"><i class="fa fa-bar-chart" style="font-size:200px;color:blue;"></i></i></a>
<h4 class="mt-4">Research Application</h4>

</div>
<div class="col-sm-4 mb-4">
<a href="#"><i  class="fas fa-desktop fa-10x text-primary"></i></i></a>
<h4 class="mt-4">PHD Guidance</h4>

</div>
<div class="col-sm-4 mb-4">
<a href="#"><i  class="fas fa-database fa-10x text-info"></i></i></a>
<h4 class="mt-4">Analytics </h4>

</div>
</div>

</div>

<div class="jumbotron" style="background-color:#ffa500;">
<div class="container">
<h2 class="text-center text-white">Team</h2>
<div class="row mt-5">
<div class="col-lg-3 col-sm-6">
<div class="card mb-5">
<div class="card-body text-center">
  <img src="images/logo3.jpg" alt="" class="img-fluid" style="width:50%;border-radius:100px;">
  <h4 class="card-title">Research Expert</h4>
  
    <h4><b>PHD Guidance</b></h4> 
    <p>Great Thinkers</p> 

</div>
</div>
</div>

<div class="col-lg-3 col-sm-6">
<div class="card mb-5">
<div class="card-body text-center">
  <img src="images/newplot.png" alt="" class="img-fluid" style="width:50%;border-radius:100px;">
  <h4 class="card-title">Survey Expert</h4>
  
    <h4><b>Survey Design</b></h4> 
    <p>Great Innovators</p> 

</div>
</div>
</div>


<div class="col-lg-3 col-sm-6">
<div class="card mb-5">
<div class="card-body text-center">
  <img src="images/logo4.jpg" alt="" class="img-fluid" style="width:50%;border-radius:100px;">
  <h4 class="card-title">Analytics Expert</h4>
  
    <h4><b>Data Analysis</b></h4> 
    <p>Great Handelers</p> 

</div>
</div>
</div>

<div class="col-lg-3 col-sm-6">
<div class="card mb-5">
<div class="card-body text-center">
  <img src="images/logo5.jpg" alt="" class="img-fluid" style="width:50%;border-radius:100px;">
  <h4 class="card-title">Counsultants</h4>
  
    <h4><b>Strategic Mooters</b></h4> 
    <p>Great Policy Designers</p> 

</div>
</div>
</div>




</div>
</div>
</div>


<div class="container">  <!--Timer-->
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>









<div class="container">
<h2 class="text-center">Contact Us</h2>
<div class="row">
<div class="col-md-8">
<form action="contact.php" method="post">
 <input class="form-control" name="name" placeholder="Name"/><br/>
 <input class="form-control" name="phone" placeholder="Phone"/><br/>
 <input class="form-control" name="email" placeholder="Email"/><br/>
 <input class="form-control" name="text" placeholder="How Can We Help You?"
 style="height:150px;"></textarea><br/>
 									
 <input class="btn btn-primary" type="submit" value="Send"/><br/><br/>
 </form>
</div>


<div class="container">  <!--Chat Window-->

<button class="open-button" onclick="openForm()">Chat</button>

<div class="chat-popup" id="myForm">
  <form action="" class="form-container">
    <h1>Chat</h1>

    <label for="msg"><b>Message</b></label>
    <textarea placeholder="Type message.." name="msg" required></textarea>
                    

					<div class="text-center">
						<button style="font-size:24px"><i class="fa fa-refresh">refresh</i></button>
							
						
					</div>
					


    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>





<!--Footer Start-->
<div id="footer">
<div class="container">
<div class="row">
<div class="col-md col-sm-6">
<h4> Pages</h4>
<ul>
<li><a href="#">Research</a></li>
<li><a href="contact.html">Contact Us</a></li>
<li><a href="service.html">Services</a></li>
<li><a href="service.html">PHD Guidance</a></li>
</ul>
<hr>
<h4>User Section</h4>
<ul>
<li><a href="#">Login</a></li>
<li><a href="#">Register</a></li>
</ul>
<hr class="hidden-md hidden-lg hidden-sm">
</div>
<div class="col-md-3 col-sm-6">
<h4>Top Service Categories</h4>
<ul>
<li><a href="#"> Synopsis Plan</a></li>
<li><a href="#"> PHD Guidance</a></li>
<li><a href="#"> Survey Design</a></li>
<li><a href="#"> Data Analysis</a></li>
<li><a href="#"> Counsultancy</a></li>


</ul>
<hr class="hidden-md hidden-lg">

</div>
<div class="col-md-3 col-sm-6">
<h4>where to find us</h4>
<p>

<strong><a href="https://drvikas2021.github.io/Annovaaresearch.com/">Annovaresearch.com</strong>
<br>Aliganj
<br>Lucknow
<br>Uttar Pradesh
<br>vikashdeepak2014@gmail.com
<br>+91 8887951971
</p>
<a href="contact.html">Go to contact us page</a>
<hr class="hidden-md hidden-lg">

</div>
<div class="col-md-3 col-sm-6">
<h4>Get the news</h4>
<p class="text-muted">
  subscribe here for getting news of Annova Research lucknow
  </p>
  <form action="" method="post">
  <div class="input-group">
  <input type="text" name="email" class="form-control">
  <span class="input-group-btn">
  <input type="submit" class="btn btn-default" value="subscribe">
  
  </span>
  
</div>
</form>
<hr>
<h4>Stay In Touch</h4>
<p class="social">
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-google-plus"></i></a>
<a href="#"><i class="fa fa-envelope"></i></a>
</p>
</div>
</div>
</div>
</div>
<div id="copyright">
<div class="container">
<div class="col-md-6">
<p class="pull-left">
   &copy; 2020 annovaresearch.com
   </p>
   </div>
   <div class="col-md-6">
   <p class="pull-right">
      Template By: <a href=" https://drvikas2021.github.io/Annovaaresearch.com/">Annovaresearch.com</a>
	  </p>
	  
	  </div>
	  </div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




</body>
</html>


<?php
//Admin mail
if(isset($_POST['submit'])){
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$text=$_POST['text'];

$insert_message="insert into message (name,phone,email,text) values('$name','$phone','$email','$text')";
$data= mysqli_query($con,$insert_message);
if($data)
{
	echo "Data Inserted";
}
else
{
	echo"All fields required";
}

}
?>
