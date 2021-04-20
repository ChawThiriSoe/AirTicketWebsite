<?php
include '../dbconnect.php';
include '../link.php';
?>
<html>
<head>
	<title>View Airline Information</title>
	<?php include 'nav.php';?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<h2 class="text-center"  style="padding: 20px;">
				All Airline Information
			</h2>
			<table class="table">
				<tr>
					<th>No</th>
					<th>Ariline Name</th>
				</tr>
				<?php 
				$sql="SELECT * from airline";
				foreach ($db->query($sql) as $row){
					$aid=$row['airId'];
					$aname=$row['airName'];
					echo "<tr>";
					echo "<td>$aid</td>";
					echo "<td>$aname</td>";
					echo "</tr>";
				}
				?>
			</table>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
</body></html>
<?php include 'footer.php';?>