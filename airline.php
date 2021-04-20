<?php
include 'link.php';
include 'dbconnect.php';
?>
<html>
<head>
<title>List of Airline Name</title>
<?php include 'header.php';?>
<style type="text/css">
.para{
font: 17px 'Palatino';
text-align: justify;
}
</style>
</head>
<body>
<div class="container">
	<div class="row" style="padding: 20px;">
		<div class=col-md-2"></div>
		<div class=col-md-8">
			<h1 style="font-family: Palatino;">List of Airline Name</h1><br>
			<p class="para">
				Below you can see an extensive list of airlines that allow name changes. If you don't find 
				your airline here, it doesn't mean that it will not allow you to sell your flight to 
				somebody else. Even the strictest airlines may make exceptions to their general rules 
				for special circumstances that prevent you from flying. Please note the information 
				below may not be up to date as it could change overnight. 
			</p>
		</div>
		<div class=col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
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
		<div class="col-md-3"></div>
	</div>
</div>
</body>
</html>
<?php include 'footer.php';?>