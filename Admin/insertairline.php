<?php
include '../dbconnect.php';
include '../link.php';

if(isset($_POST['insert'])){
	$aname=$_POST['aname'];
	
	$sql="INSERT INTO airline (airName) VALUES ('$aname')";
	$db->exec($sql);
	echo "<script>alert('Airline is successfully inserted !'); window.location='insertairline.php'</script>";
}
?>
<html>
<head>
	<title>Inserting Airline Information</title>
	<?php include 'nav.php';?>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" style="padding: 30px; padding-bottom: 275px;">
	<center>
		<h3 style="padding: 10px;">
			Insert Airline Information
		</h3>
		<input type="text" name="aname" placeholder="Airline name" class="form-control" style="width: 250px;">
		<br>
		<input type="submit" name="insert" value="Insert" class="btn btn-danger" style="width: 100px;">
		<input type="reset" name="cancel" value="Cancel" class="btn btn-danger" style="width: 100px;">
	</center>
</form>
</body></html>
<?php include 'footer.php';?>