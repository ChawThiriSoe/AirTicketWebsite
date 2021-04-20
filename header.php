<?php
include 'link.php';
include 'dbconnect.php';
?>
<html>
<head>
	<title></title>
	 <link rel="icon" href="image/air ticket.png" type="image/png"> 
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
.menu {
height: 80px;
background: skyblue;
}
.head{
padding: 10px;
height: 40px;
background: #1b2932;
}
.menu ul {
text-align: center;
line-height: 80px;
}
.menu ul li {
font: bold 14px Verdana, 'Lucida Grande';
}
.nava, .dropOut ul li a{
font: bold 14px Verdana, 'Lucida Grande';
}
.nava:hover {
color: white;
text-decoration: none;
}
.dropOut ul li a:hover {
color: white;
text-decoration: none;
}
ul > li {
display: inline-block;
}
.menu ul li a {
padding: 20px;
color: #0d1419;
text-decoration: none;
}
.dropOut .triangle {
position: absolute;
border-left: 8px solid transparent;
border-right: 8px solid transparent;
border-bottom: 8px solid #79b9e1;
top: -8px;
left: 50%;
margin-left: -8px;
}
.dropdownContain {
position: absolute;
left: 67%;
}
.dropOut {
width: 160px;
background: #79b9e1;
float: left;
position: relative;
margin-top: 0px;
opacity: 0;
border-radius: 10px;
box-shadow: 0 1px 6px rgba(0,0,0,.15);
transition: all .1s ease-out;
z-index: 1;
}
.dropOut ul {
padding: 10px 0;
}
.dropOut ul li {
text-align: center;
width: 140px;
height: 40px;
margin: 0px 10px;
line-height: 40px;
color: #777;
border-radius: 6px;
transition: background .1s ease-out;
}
.dropul{ color: #0d1419; }
.dropOut ul li:hover {background: #6ca4c8;}
ul li:hover .dropdownContain { top: 65px;  }
ul li:hover .dropOut { opacity: 1; margin-top: 6px; color: #c0392b; }

.top{
padding-right: 40px;
color: skyblue;
font: bold 15px Verdana, 'Lucida Grande';
}
.top:hover{
text-decoration: none;
color: white;
 }
.logo{
width: 80px;
height: 58px;
}
.logo:hover{
border-radius: 20px;
border: 1px solid red;
}

</style>
</head>
<body>
<!-- header start -->
<div class="container-fluid">
	<div class="row head">
		<div class="col-md-6" style="padding-left: 70px;">
			<i class="far fa-envelope" style="font-size:18px; color: #e7f5fe;"></i>
			<font class="top"><i>&#160;&#160;travelcityagency@gmail.com</i></font>
			<i class="fas fa-mobile-alt" style="font-size:18px; color: #e7f5fe;"></i>
			<font class="top"><i>&#160;&#160;+09450160660</i></font>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<i class="fa fa-lock" style="font-size:18px; color: #e7f5fe;"></i>
			<a href="login.php" class="top">&#160;&#160;Login</a>
			<i class="fa fa-plus" style="font-size:18px; color: #e7f5fe;"></i>
			<a href="register.php" class="top">&#160;&#160;Register</a>
		</div>
	</div>
	<div class="row menu">
		<div class="col-md-1"></div>
		<div class="col-md-2" style="padding-top: 10px;">
			<img alt="Air Ticket" src="image/air ticket.png" class="logo">
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-8">
			<nav>
				<ul>
					<li><a href="home.php" class="nava">Home</a></li>
					<li><a href="flight.php" class="nava">Flight</a></li>
					<li><a href="collection.php" class="nava">Your Collection</a></li>
					<li><a href="airline.php" class="nava">Airline</a></li>
					<li>
						<a href="" class="nava">Help</a>
						<div class="dropdownContain">
							<div class="dropOut">
								<div class="triangle"></div>
								<ul>
									<li><a href="contactus.php">Contact Us</a></li>
									<li><a href="aboutus.php">About Us</a></li>
									<li><a href="faq.php">FAQ</a></li>
									<li><a href="login.php">Sign Out</a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<!-- header end -->
</body>
</html>