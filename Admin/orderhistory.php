<html>
<head>
<title>Order History</title>
<?php include 'nav.php';?>
</head>
<body>
<div class="container" style="padding-bottom: 302px;">
	<div class="row">
		<div class="col-md-12">
			<center>
			<form method="post">
			<br>
				<input type="date" name="date" class="form-control" style="width: 300px;">
				<br><br>
				<input type="submit" name="view" value="View" class="btn btn-danger form-control">
				<br><br>
			</form>
			</center>
		</div>
	</div>
	<?php
	echo "<div class='row'>";
	echo "<div class='col-md-1'></div>";
	echo "<div class='col-md-10'>";
	if(isset($_POST['view'])){
		$date=$_POST['date'];
		$sql3="SELECT * FROM orders where orderDate='$date'";
		$p=0;
		$l=0;
		$totalP=0;
		$totalL=0;
		echo "<table class='table'>";
		echo "<tr>";
		echo "<th>Customer ID</th>";
		echo "<th>Customer Name</th>";
		echo "<th>Ticket ID</th>";
		echo "<th>Ticket Price</th>";
		echo "<th>Quantity</th>";
		echo "<th>Total</th>";
		echo "</tr>";
		foreach ($db->query($sql3) as $row){
		$id=$row['cusId'];
		$sql2="SELECT * FROM orderdetail where cusId='$id'";
		foreach ($db->query($sql2) as $row){
			$tid=$row['ticId'];
			$quan=$row['qty'];
			$sql1="SELECT * FROM ticket where ticId='$tid'";
		foreach ($db->query($sql1) as $row){
			$tid=$row['ticId'];
			$tname=$row['ticName'];
			$tprice=$row['ticPrice'];
			$sql4="SELECT cusName FROM customer where cusId='$id'";
		foreach ($db->query($sql4) as $row){
			$cname=$row['cusName'];
			
			echo "<tr>";
			echo "<td>$id</td>";
			echo "<td>$cname</td>";
			echo "<td>$tid</td>";
			echo "<td>$tprice</td>";
			echo "<td>$quan</td>";
			$total=$tprice*$quan;
			echo "<td>$total</td>";
			echo "</tr>";		
		}
		}
		$id=null;
		}
		}
	}
	echo "</table>";
	echo "</div>";
	echo "<div class='col-md-1'></div>";
	echo "</div>";
	?>
</div>
</body>
</html>
<?php include 'footer.php'?>