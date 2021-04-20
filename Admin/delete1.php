<?php
include '../dbconnect.php';
include '../link.php';

$tid=$_GET['tickid'];
$tname=$_GET['tickna'];

if(isset($_POST['yes'])){
	$sql="Delete from ticket where ticId='$tid'";
	$db->exec($sql);
	echo "<script>alert('Ticket information is deleted successfully !'); window.location='deleteticket.php'</script>";
}
if(isset($_POST['no'])){
	echo "<script>alert('Delete action is canceled !'); window.location='deleteticket.php'</script>";
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
					Do you sure to delete " <?php echo $tname ?> " information?
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