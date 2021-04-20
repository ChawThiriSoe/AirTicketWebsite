<?php
include '../link.php';
include '../dbconnect.php';

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
		$sql="INSERT INTO admin (adminName,adminPhone,adminEmail,adminPwd) VALUES ('$un','$ph','$em','$encodepw')";
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
<!-- nav -->
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
</form>
<!-- nav -->
	<form action="" method="post">
		<div class="container-fluid">
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
		</div>
	</form>
</body></html>
<?php
include 'footer.php';
?>