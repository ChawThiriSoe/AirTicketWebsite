<?php
include '../dbconnect.php';
include '../link.php';

$tid=$_GET['tickid'];
$tname=$_GET['tickna'];
$tdate=$_GET['tickdate'];
$tdes=$_GET['tickdes'];
$timg=$_GET['tickimg'];
$tprice=$_GET['tickp'];
$oprice=$_GET['orip'];
$img="../image/".$timg;

if(isset($_POST['update'])){
	$newname=$_POST['newtname'];
	$newdate=$_POST['newtdate'];
	$newdes=$_POST['newtdes'];
	$newprice=$_POST['newtprice'];
	$newoprice=$_POST['newoprice'];
	
	$file=$_FILES['newfile']['name'];
	$file_loc=$_FILES['newfile']['tmp_name'];
	$folder="../image/";
	move_uploaded_file($file_loc, $folder.$file);
	
	$sql1="UPDATE ticket SET ticName='$newname' , ticDate='$newdate' , ticDes='$newdes' , oriPrice='$newoprice' , ticPrice='$newprice' , ticImg='$file' where ticId='$tid'";
	$db->exec($sql1);
	echo "<script>alert('Ticket infomation is successfully updated !'); window.location='updateticket.php'</script>";
}
?>
<html>
<head>
	<title>Update Flight Ticket Information</title>
	<?php include 'nav.php';?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2 class="text-center">
				Update Flight Ticket Information
			</h2>
			<form action="" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="tname" value="<?php echo $tname;?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="newtname" value="" required class="form-control" placeholder="Enter new ticket name">
				</div><br>
				
				<div class="form-group">
					<input type="text" name="tdate" value="<?php echo $tdate;?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="newtdate" value="" required class="form-control" placeholder="Enter new leave date (mm-dd-yy)">
				</div><br>
				
				<div class="form-group">
					<input type="text" name="tdes" value="<?php echo $tdes;?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="newtdes" value="" required class="form-control" placeholder="Enter new description">
				</div><br>
				
				<div class="form-group">
					<input type="text" name="oprice" value="<?php echo $oprice;?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="newoprice" value="" required class="form-control" placeholder="Enter new orginal price">
				</div><br>
				
				<div class="form-group">
					<input type="text" name="tprice" value="<?php echo $tprice;?>" readonly class="form-control">
				</div>
				<div class="form-group">
					<input type="text" name="newtprice" value="" required class="form-control" placeholder="Enter new ticket price">
				</div><br>
				
				<div class="form-group">
					<img src='<?php echo $img?>' width='100px' height='100px'>
				</div>
				<div class="form-group">
					<input type="file" name="newfile">
				</div><br>
				
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