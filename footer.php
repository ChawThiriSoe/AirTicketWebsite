<?php
include 'link.php';
include 'dbconnect.php';

?>
<html>
<head>
	<title>Welcome From Travel_City</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
.foota{
text-align: center;
font: 18px 'Times';
color: #87cefa;
text-decoration: none;
}
.foota:hover{
color: #87cefa;
text-decoration: none;
font: bold 18px 'Times';
}
.foota1{
text-align: center;
font: 20px 'Times';
color: #87cefa;
text-decoration: none;
}
.foota1:hover{
color: #87cefa;
text-decoration: none;
font: bold 19px 'Times';
}
.foot{
background: #1b2932;
color: #87cefa;
}
.mid{
background: #93d2fa;
}
.foot1{
padding: 10px 30px;
}
.foot1h{
color: #e7f5fe;
font: bold 24px 'Palatino Linotype';
}
.foot1f{
font: 18px 'Times';
}
.footi{
font-size: 30px;
padding-bottom: 25px;
padding-right: 20px;
color: #87cefa;
}
.footi:hover{
font-size: 31px;
color: #e7f5fe;
}
.footi1{
font-size: 30px;
padding-bottom: 25px;
padding-right: 20px;
color: #87cefa;
}
.foot1f1{
font-size: 17px;
color: gray;
font-family: Palatino Linotype;
}
</style>
</head>
<body>
<!-- footer start -->
<div class="container-fluid foot">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-3 foot1">
			<h4 class="foot1h">Contact Us</h4>
			<br>
			<i class="far fa-map" style="font-size:22px; color: #e7f5fe;"></i>
			<font class="foot1f">
				&#160;&#160;&#160;No (71/A), Corner of Thit Taw street and Min Ye' Kyaw Swar street, Ahlone Township, Yangon
			</font>	
			<br><br>
			<i class="fas fa-mobile-alt" style="font-size:22px; color: #e7f5fe;"></i>
			<font class="foot1f">
				&#160;&#160;&#160;&#160;+09450160660, +09799556253
			</font>
			<br><br>
			<i class="far fa-envelope" style="font-size:22px; color: #e7f5fe;"></i>
			<font class="foot1f">
				&#160;&#160;&#160;&#160;travelcityagency@gmail.com
			</font>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-3 foot1">
			<h4 class="foot1h">Useful Link</h4><br>
			<a href="home.php" class="foota">Home</a><br><br>
			<a href="flight.php" class="foota">Flights</a><br><br>
			<a href="collection.php" class="foota">Your collection</a><br><br>
			<a href="airline.php" class="foota">Airline</a><br><br>
			<a href="aboutus.php" class="foota">About Us</a><br><br>
			<a href="faq.php" class="foota">FAQ</a>
		</div>
		<div class="col-md-3 foot1" style="padding-top: 80px;">
			<h4 class="foot1h">Let's make member</h4><br>
			<a href="login.php" class="foota">Login now</a><br><br>
			<a href="register.php" class="foota">Enroll now</a><br><br>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-5">
			<h4 class="foot1h">Stalk Us On</h4><br>
				<a href="https://www.facebook.com/Travelcitytours.tc/"><i class="fa fa-facebook footi"></i></a>
				<a href="https://twitter.com/travel?lang=en"><i class="fa fa-twitter footi"></i></a>
				<a href="https://www.instagram.com/city_travel_py/?igshid=1e5tp06s7cb2"><i class="fa fa-instagram footi"></i></a>
				<a href="home.php"><i class="fa fa-google footi"></i></a>
				<a href="www.youtube.com"><i class="fa fa-youtube footi"></i></a>
		</div>
		<div class="col-md-4">
			<h4 class="foot1h">We Accept</h4><br>
			<i class="fa fa-cc-visa footi1"></i>
			<i class="fa fa-cc-paypal footi1"></i>
			<i class="fa fa-cc-jcb footi1"></i>
			<i class="fa fa-cc-mastercard footi1"></i>
		</div>
		<div class="col-md-1"></div>
	</div>
	<div class="row foot1">
		<div class="col-md-12" style="text-align: center;">
			<a href="term.php" class="foota1">Terms & Condition&#160;&#160;&#124;&#160;&#160;</a>
			<a href="privacy.php" class="foota1">Privacy Policy</a>
		</div>
	</div>
	<div class="row" style="background: black; padding: 10px;">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<i class="foot1f1">&#169; 2019 Travel_City Travel Agency. All rights reserved.</i>
		</div>
	</div>
	<div class="row" style="background: black; padding-bottom: 15px;">
		<div class="col-md-2"></div>
		<div class="col-md-10">
			<i class="foot1f1">&#160;Developed and Maintained by Chaw Thiri Soe ( Info Myanmar University )</i>
		</div>
	</div>
</div>
<!-- footer end -->
</body>
</html>