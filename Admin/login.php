<?php
include '../link.php';
include '../dbconnect.php';

if(isset($_POST['btnlogin'])){
	$username=trim($_POST['uname']);
	$userpwd=trim($_POST['pwd']);
	$pwdcode=md5($userpwd);
	
	$sql="SELECT * FROM admin WHERE adminName='$username' && adminPwd='$pwdcode'";
	
	foreach ($db->query($sql) as $row){
		$id=$row['adminId'];
		$uname=$row['adminName'];
	}
	
	if($id!=0){
		$_SESSION['adminId']=$id;
		$_SESSION['adminName']=$uname;
		echo "<script>alert ('login success!!!'); window.location='secindex.php'</script>";
	}
	else
		echo "<script>alert ('login fail!!!'); window.location='firstindex.php'</script>";
}

?>
<html>
<head>
<title>Login Form</title>
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
<div class="container-fluid" style="padding-bottom: 135px;">
	<div class="row" style="padding: 20px;">
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
</div>
</form>
</body>
</html>
<?php include 'footer.php';?>