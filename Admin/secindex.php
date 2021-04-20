<?php
include '../link.php';
include '../dbconnect.php';
?>
<html>
<head>
	<title>Welcome from the Admin page</title>
	<?php include 'nav.php';?>
</head>
<body>
<div class="container-fluid">
	<div class="row" style="padding: 20px; padding-bottom: 279px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h3>Welcome from the Management of Online Air Ticket Website</h3><br>
			<h5>
				You can manage the Airline information by inserting, updating, deleting and viewing.<br><br>
				You can manage the Flight Ticket information by inserting, updating, deleting and viewing.<br><br>
				You can view the order information and Profit information.
			</h5>
		</div>
	</div>
</div>
</body>
</html>
<?php include 'footer.php';?>