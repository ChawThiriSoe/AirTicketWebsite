<?php
include '../link.php';
include '../dbconnect.php';
?>
<html>
<head>
	<title>Welcome from the Admin page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: skyblue;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  color: black;
}

.dropdown a{
text-decoration: none;
color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.atag:hover{text-decoration: none; color: black;}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #1b2932; color: white; text-decoration: none;}
</style>
</head>
<body>
<form action="" method="post">
	<div class="container-fluid" style="background-color: skyblue;">
		<div class="row" style="padding: 10px;">
			<div class="col-md-2">
				<img alt="Only for ADMIN" src="../image/admin.png" width="80" height="60">
			</div>
			<div class="col-md-2 dropdown" style="padding-top: 17px;">
               	<a href="firstindex.php" class="dropbtn">
					Home
				</a>
			</div>
			<div class="col-md-2 dropdown" style="padding-top: 17px;">
               	<a href="login.php" class="dropbtn">
					Login
				</a>
			</div>
			<div class="col-md-2 dropdown" style="padding-top: 17px;">
               	<a href="register.php" class="dropbtn">
					Register
				</a>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row" style="padding: 20px; padding-bottom: 315px;">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h3>Welcome from the Management of Online Air Ticket Website</h3><br>
				<h5>
					Before, you do the management, firstly, you have to login.<br><br>
					If you do not have any account, you can make registeration.
				</h5>
			</div>
		</div>
	</div>
</form>
</body></html>
<?php include 'footer.php';?>