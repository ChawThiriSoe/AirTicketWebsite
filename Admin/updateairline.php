<?php
include '../dbconnect.php';
include '../link.php';
?>
<html>
<head>
	<title>Update Airline Informaiton</title>
	<?php include 'nav.php';?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2 class="text-center"  style="padding: 20px;">
				Update Airline Name
			</h2>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Airline Name</th>
					<th>Action</th>
				</tr>
				<?php 
				$sql="SELECT * from airline";
				foreach ($db->query($sql) as $row){
					$aid=$row['airId'];
					$aname=$row['airName'];
					echo "<tr>";
					echo "<td>$aid</td>";
					echo "<td>$aname</td>";
					echo "<td><a href='update.php?airid=$aid&airna=$aname' class='btn btn-danger'>Update</a></td>";
					echo "</tr>";
				}
				?>
			</table>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>
</body></html>
<?php include 'footer.php';?>