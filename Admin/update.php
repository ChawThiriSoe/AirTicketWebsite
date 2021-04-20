<?php
include '../dbconnect.php';
include '../link.php';

$airlineid=$_GET['airid'];
$airlinename=$_GET['airna'];

if(isset($_POST['update'])){
	$newname=$_POST['newairname'];
	$sql="UPDATE airline SET airName='$newname' where airId='$airlineid'";
	$db->exec($sql);
	echo "<script>alert('Airline name is successfully inserted !'); window.location='updateairline.php'</script>";
}
?>
<html>
<head>
	<title>Update Airline Information</title>
	<?php include 'nav.php';?>
</head>
<body>
<div class="container" style="padding-bottom: 287px;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2 class="text-center">
				Update Airline Name
			</h2>
			<form action="" method="post">
				<div class="form-group">
					<input type="text" name="catname" value="<?php echo $airlinename;?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="newairname" class="form-control" placeholder="Enter new airline name" required>
				</div>
				<div class="form-group">
					<input type="submit" name="update" value="Update" class="btn btn-danger">
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</body></html>
<?php include 'footer.php';?>