<?php
include 'link.php';
include 'dbconnect.php';
session_start();
if(isset($_POST['btnlogin'])){
	$username=trim($_POST['uname']);
	$userpwd=trim($_POST['pwd']);
	$pwdcode=md5($userpwd);
	
	$sql="SELECT * FROM customer WHERE cusName='$username' && cusPwd='$pwdcode'";
	
	foreach ($db->query($sql) as $row){
		$id=$row['cusId'];
		$uname=$row['cusName'];
		$phone=$row['cusPhone'];
		$email=$row['cusEmail'];
	}
	
	if($id!=0){
		$_SESSION['cusId']=$id;
		$_SESSION['cusName']=$uname;
		$_SESSION['cusPhone']=$phone;
		$_SESSION['cusEmail']=$email;
		echo "<script>alert ('login success!!!'); window.location='home.php'</script>";
	}
	else
		echo "<script>alert ('login fail!!!')</script>";
}

?>
<html>
<head>
<title>Login Form</title>
<?php include 'header.php';?>
<style>
.log{
background-color: #ebf5fb;
}
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
<div class="container-fluid log">
	<div class="row" style="padding: 20px">
		<div class="col-md-12" style="padding-top: 15px;">
			<center>
				<h2>
					Login to Your Account
				</h2>
			</center>
		</div>
	</div>
	<div class="row" style="padding: 20px">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<center>
				<h4>
					Username:
				</h4>
			</center>
		</div>
		<div class="col-md-3">
			<center>
				<input type="text" name="uname" class="form-control" required>
			</center>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row" style="padding: 20px">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<center>
				<h4>
					Password:
				</h4>
			</center>
		</div>
		<div class="col-md-3">
			<center>
				<input type="password" name="pwd" class="form-control" required>
			</center>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row" style="padding: 20px">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			<center>
				<input type="submit" name="btnlogin" value="Login" class="btn btn-primary" style="width: 100px;">
			</center>
		</div>
		<div class="col-md-3">
			<center>
				<input type="reset" name="btncancel" value="Cancel" class="btn btn-primary" style="width: 100px;">
			</center>
		</div>
		<div class="col-md-3"></div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<center>
				<a href="register.php" class="form-create-an-account" style="text-decoration: none;">Create an account 🡢</a>
			</center>
		</div>
	</div>
</div>
</form>
</body>
</html>
<?php include 'footer.php';?>