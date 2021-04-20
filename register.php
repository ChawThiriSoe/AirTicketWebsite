<?php
include 'link.php';
include 'dbconnect.php';
session_start();
if (isset($_POST['register']))
{
	$un=$_POST['uname'];
	$em=$_POST['email'];
	$ph=$_POST['phone'];
	$pw=$_POST['pwd'];
	$encodepw=md5($pw);
	$cpw=$_POST['cpwd'];
	$encodecpw=md5($cpw);
	
	if($pw==$cpw){
		$sql="INSERT INTO customer (cusName,cusPhone,cusEmail,cusPwd) VALUES ('$un','$ph','$em','$encodepw')";
		$db->exec($sql);
		echo "<script>alert('Account successfully added !'); window.location='login.php'</script>";
	}
	else
		echo "<script>alert('Password did not match!! Please try again!'); window.location='register.php'</script>";
}

?>
<html>
<head>
<title>Registration Form</title>
<?php include 'header.php';?>
<style type="text/css">
.form-create-an-account{
    text-decoration: none;
    padding: 4px 8px;
    font-weight: normal;
    color:  blue;
    font: 18px 'Times';
}
.form-create-an-account:hover{
    color: #1b2932;
    font: bold 18px 'Times';
}
</style>
</head>
<body>
	<form action="" method="post">
		<div class="container-fluid" style="background-color: #ebf5fb;">
			<div class="row" style="padding: 20px">
				<div class="col-md-12">
				<center>
					<h2>
						Make Registration to Get your Owned Account
					</h2>
				</center>
				</div>
			</div>
			<div class="row" style="padding: 20px">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<h4>
						UserName:
					</h4>
				</div>
				<div class="col-md-3">
					<input type="text" name="uname" value="" class="form-control" required>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row" style="padding: 20px">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<h4>
						Email:
					</h4>
				</div>
				<div class="col-md-3">
					<input type="email" name="email" value="" class="form-control" required>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row" style="padding: 20px">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<h4>
						Phone:
					</h4>
				</div>
				<div class="col-md-3">
					<input type="text" name="phone" value="" class="form-control" required>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row" style="padding: 20px">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<h4>
						Password:
					</h4>
				</div>
				<div class="col-md-3">
					<input type="password" name="pwd" value="" required class="form-control" required>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row" style="padding: 20px">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<h4>
						Confirmation Password:
					</h4>
				</div>
				<div class="col-md-3">
					<input type="password" name="cpwd" value="" required class="form-control" required>
				</div>
				<div class="col-md-3"></div>
			</div>
			<div class="row" style="padding: 20px">
				<div class="col-md-4"></div>
				<div class="col-md-2">
					<input type="submit" name="register" value="Register" class="btn btn-primary form-control">
				</div>
				<div class="col-md-2">
					<input type="reset" name="cancel" value="Cancel" class="btn btn-primary form-control">
				</div>
				<div class="col-md-4"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<center>
						<a href="login.php" class="form-create-an-account" style="text-decoration: none;">Already have an account! 🡢</a>
					</center>
				</div>
			</div>
		</div>
	</form>
</body></html>
<?php
include 'footer.php';
?>