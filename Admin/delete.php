<?php
include '../dbconnect.php';
include '../link.php';

$aid=$_GET['airid'];
$aname=$_GET['airna'];

if(isset($_POST['yes'])){
	$sql="Delete from airline where airId='$aid' and airName='$aname'";
	$db->exec($sql);
	echo "<script>alert('Airline is deleted successfully !'); window.location='deleteairline.php'</script>";
}
if(isset($_POST['no'])){
	echo "<script>alert('Delete action is canceled !'); window.location='deleteairline.php'</script>";
}
?>
<html>
<head>
	<title>Confirmation</title>
	<?php include 'nav.php';?>
</head>
<body>
<form method="post" action="">
	<div class="container" style="padding-bottom: 285px;">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-12">
				<h2 class="text-center">
					Confirmation for Delete
				</h2>
			</div>
		</div>
		<div class="row" style="padding: 20px;">
			<div class="col-md-12">
				<h5 class="text-center">
					Do you sure to delete " <?php echo $aname ?> " information of airline?
				</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-3">
				<input type="submit" name="yes" value="Yes" class="btn btn-danger" style="width: 100px;">
			</div>
			<div class="col-md-3">
				<input type="submit" name="no" value="No" class="btn btn-danger" style="width: 100px;">
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</form>
</body></html>
<?php include 'footer.php';?>