<?php
include '../dbconnect.php';
include '../link.php';

if(isset($_POST['insert'])){
	$ticname=$_POST['tname'];
	$ticdate=$_POST['tdate'];
	$oriprice=$_POST['oprice'];
	$ticprice=$_POST['tprice'];
	$ticdes=$_POST['tdes'];
	$aid=$_POST['menu'];
	
	$file=$_FILES['file']['name'];
	$file_loc=$_FILES['file']['tmp_name'];
	$folder="../image/";
	move_uploaded_file($file_loc, $folder.$file);
	
	$sql="INSERT INTO ticket (ticName,ticDate,ticPrice,oriPrice,ticImg,ticDes,airId) VALUES ('$ticname','$ticdate','$ticprice','$oriprice','$file','$ticdes','$aid')";
	$db->exec($sql);
	echo "<script>alert('Product is successfully inserted !'); window.location='insertticket.php'</script>";
}
?>
<html>
<head>
	<title>Inserting Ticket Information</title>
	<?php include 'nav.php';?>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" style="padding: 40px;">
	<div class="container">
		<div class="row" style="padding: 10px;">
			<div class="col-md-12">
				<h2 class="text-center">
					Insert Ticket Information
				</h2>
			</div>
		</div>
		<div class="row" style="padding: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<select name="menu" class="form-control">
					<option>----Please select airline----</option>
					<?php 
						$sql="SELECT * from airline";
						foreach ($db->query($sql) as $row){
							$airid=$row['airId'];
							$airname=$row['airName'];
							echo "<option value='$airid'>$airname</option>";
						}
					?>
				</select>
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row" style="padding: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<h5>
					Flying From-To
				</h5>
			</div>
			<div class="col-md-4">
				<input type="text" name="tname" placeholder="Ticket name (eg. Yangon to Bago)" class="form-control">
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row" style="padding: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<h5>
					Leave Date
				</h5>
			</div>
			<div class="col-md-4">
				<input type="text" name="tdate" placeholder="Ticket date (eg. mm-dd-yy)" class="form-control">
			</div>
			<div class="col-md-3"></div>
		</div><div class="row" style="padding: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<h5>
					Orginal Price
				</h5>
			</div>
			<div class="col-md-4">
				<input type="text" name="oprice" placeholder="Original price" class="form-control">
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row" style="padding: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<h5>
					Ticket Price
				</h5>
			</div>
			<div class="col-md-4">
				<input type="text" name="tprice" placeholder="Ticket price" class="form-control">
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row" style="padding: 10px;">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<h5>
					Image
				</h5>
			</div>
			<div class="col-md-4">
				<input type="file" name="file">
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row" style="padding: 12px;">
			<div class="col-md-3"></div>
			<div class="col-md-2">
				<h5>
					Description
				</h5>
			</div>
			<div class="col-md-4">
				<input type="text" name="tdes" placeholder="Description" class="form-control">
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row" style="padding: 10px;">
			<div class="col-md-5"></div>
			<div class="col-md-2">
				<input type="submit" name="insert" value="Insert" class="btn btn-danger" style="width: 100px;">
			</div>
			<div class="col-md-2">
				<input type="reset" name="cancel" value="Cancel" class="btn btn-danger" style="width: 100px;">
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</form>
</body></html>
<?php include 'footer.php';?>