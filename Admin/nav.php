<?php
include '../link.php';
include '../dbconnect.php';
?>
<html>
<head>
	<title></title>
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
			<div class="col-md-1">
				<img alt="Only for ADMIN" src="../image/admin.png" width="80" height="60">
			</div>
			<div class="col-md-1 dropdown" style="padding-top: 17px;">
               	<a href="secindex.php" class="dropbtn">
					Home
				</a>
			</div>
			<div class="col-md-2 dropdown">
            	<button class="dropbtn">
                	Manage Airline
                </button>
                <div class="dropdown-content">
                    <a href="insertairline.php" class="atag">Insert Airline</a>
                    <a href="viewairline.php" class="atag">View Airline</a>
                    <a href="updateairline.php" class="atag">Update Airline</a>
                    <a href="deleteairline.php" class="atag">Delete Airline</a>
                </div>
			</div>
			<div class="col-md-3 dropdown">
            	<button class="dropbtn">
                	Manage Flight Ticket
                </button>
                <div class="dropdown-content">
                    <a href="insertticket.php" class="atag">Insert Flight Ticket</a>
                    <a href="viewticket.php" class="atag">View Flight Ticket</a>
                    <a href="updateticket.php" class="atag">Update Flight Ticket</a>
                    <a href="deleteticket.php" class="atag">Delete Flight Ticket</a>
                </div>
			</div>
			<div class="col-md-2 dropdown" style="padding-top: 17px;">
               	<a href="profitloss.php" class="dropbtn">
					Profit & Loss Report
				</a>
			</div>
			<div class="col-md-2 dropdown" style="padding-top: 17px;">
               	<a href="orderhistory.php" class="dropbtn">
					Order History
				</a>
			</div>
			<div class="col-md-1 dropdown" style="padding-top: 17px;">
               	<a href="login.php" class="dropbtn">
					Logout
				</a>
			</div>
		</div>
	</div>
</form>
</body></html>