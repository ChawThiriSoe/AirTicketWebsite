<?php
include 'link.php';
include 'dbconnect.php';
session_start();

$uname=$_SESSION['cusName'];
$phone=$_SESSION['cusPhone'];
$email=$_SESSION['cusEmail'];
?>
<html>
<head>
<title>Check Out The Tickets</title>
<?php include 'header.php';?>
<style>
.bbn{
 width: 200px;
 height: 50px;
 font-size: 14px;
 background-color: black;
 color: white;
 border-radius: 10px;
 font-weight: bold;
 }
 .bbn:hover{
 background: skyblue;
 color: black;
 }
</style>
</head>
<body>
<div class="container-fluid" style="padding-top: 20px; padding-bottom: 30px;">
	<form action="" method="post">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
					<h2 align="center">
						Pay with Credit Card
					</h2>
					<div class="row" style="margin-top: 20px;">
						<div class="col-md-6">
							<h4>
								Name
							</h4>
						</div>
						<div class="col-md-4">
							<input type="text" name="name" class="form-control text" value="<?php echo $uname;?>">
						</div>
						<div class="col-md-2"></div>
					</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-6">
						<h4>
							Email
						</h4>
					</div>
					<div class="col-md-4">
						<input type="email" name="email" class="form-control text" value="<?php echo $email;?>">
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-6">
						<h4>
							Mobile Phone Number
						</h4>
					</div>
					<div class="col-md-4">
						<input type="text" name="phone" class="form-control text" value="<?php echo $phone;?>">
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-6">
						<h4>
							Credit Card Number
						</h4>
					</div>
					<div class="col-md-4">
						<input type="text" name="cardno" class="form-control text" required>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-6">
						<h4>
							Credit Card Name
						</h4>
					</div>
					<div class="col-md-4">
						<select name="cardname" class="form-control">
							<option>----Please select Credit Card----</option>
							<option>Visa Card</option>
							<option>Master Card</option>
							<option>PayPal</option>
							<option>UnionPay</option>
							<option>MPU Card</option>
							<option>KBZ Card</option>
						</select>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="margin-top: 20px;">
					<div class="col-md-6"></div>
					<div class="col-md-4">
						<input type="submit" class="bbn" name="go" value="Submit">
					</div>
					<div class="col-md-2"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		</form>
	</div>
</body>
</html>
<?php 
include 'footer.php';
if(isset($_POST['go'])){
	$no=$_POST['cardno'];
	echo "<script>window.location='voucher.php'</script>";
}
?>