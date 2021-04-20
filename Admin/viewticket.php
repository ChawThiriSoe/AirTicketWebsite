<?php
include '../dbconnect.php';
include '../link.php';

?>
<html>
<head>
	<title>View Flight Ticket Information</title>
	<?php include 'nav.php';?>
</head>
<body>
<div class="container" style="padding-bottom: 268px;">
	<form action="" method="post">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 class="text-center"  style="padding: 20px;">
				All Flight Ticket Information
			</h2>
			</div>
		<div class="col-md-4"></div>
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
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 form-group">
			<input type="submit" name="view" value="View" class="btn btn-danger form-control">
		</div>
		<div class="col-md-3"></div>
	</div>
	</form>
	<?php
	echo "<div class='row'>";
	echo "<div class='col-md-12'>";
	if(isset($_POST['view'])){
		$airid=$_POST['menu'];
		$sql2="SELECT * FROM ticket where airId='$airid'";
		echo "<table class='table'>";
		echo "<tr>";
		echo "<th>No</th>";
		echo "<th>Image</th>";
		echo "<th style='width:150px;'>Flying From-To</th>";
		echo "<th>Leave Date</th>";
		echo "<th style='width:380px;'>Description</th>";
		echo "<th>Ticket Price</th>";
		echo "<th>Original Price</th>";
		echo "</tr>";
		foreach ($db->query($sql2) as $rows){
			$submenuID=$rows['ticId'];
			$submenuName=$rows['ticName'];
			$submenuDate=$rows['ticDate'];
			$submenuDes=$rows['ticDes'];
			$submenuImg=$rows['ticImg'];
			$submenuPrice=$rows['ticPrice'];
			$suboriPrice=$rows['oriPrice'];
			$image="../image/".$submenuImg;
			echo "<tr>";
			echo "<td>$submenuID</td>";
			echo "<td><img src='$image' width='100px' height='100px'></td>";
			echo "<td>$submenuName</td>";
			echo "<td>$submenuDate</td>";
			echo "<td>$submenuDes</td>";
			echo "<td>$submenuPrice</td>";
			echo "<td>$suboriPrice</td>";
			echo "</tr>";
		}
	}
	echo "</table>";
	echo "</div>";
	echo "</div>";
	?>
</div>
</body></html>
<?php include 'footer.php';?>