<html>
<head>
<title>Profit & Expense</title>
<style>
.total:hover{
color: black;
font-weight: bold;
}
</style>
<?php include 'nav.php';?>
</head>
<body>
<div class="container" style="padding-bottom: 238px;">
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
		echo "<th>Ticket ID</th>";
		echo "<th>Ticket Name</th>";
		echo "<th>Ticket Price</th>";
		echo "<th>Original Price</th>";
		echo "<th>Profit</th>";
		echo "<th>Loss</th>";
		echo "</tr>";
		foreach ($db->query($sql3) as $row){
		$id=$row['cusId'];
		$sql2="SELECT ticId FROM orderdetail where cusId='$id'";
		foreach ($db->query($sql2) as $row){
			$tid=$row['ticId'];
			$sql1="SELECT * FROM ticket where ticId='$tid'";
		foreach ($db->query($sql1) as $row){
			$tid=$row['ticId'];
			$tname=$row['ticName'];
			$tprice=$row['ticPrice'];
			$orprice=$row['oriPrice'];
			echo "<tr>";
			echo "<td>$tid</td>";
			echo "<td>$tname</td>";
			echo "<td>$tprice</td>";
			echo "<td>$orprice</td>";
			if($tprice>$orprice){
				$p=$tprice-$orprice;
				echo "<td>$p</td>";
				echo "<td>0</td>";
				$totalP+=$p;
			}
			if($tprice<$orprice){
				$l=$orprice-$tprice;
				echo "<td>0</td>";
				echo "<td>$l</td>";
				$totalL+=$l;	
			}
			echo "</tr>";		
		}
		}
		}
			echo "<tr>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td></td>";
			echo "<td>$totalP</td>";
			echo "<td>$totalL</td>";
	}
	echo "</table>";
	echo "</div>";
	echo "<div class='col-md-1'></div>";
	echo "</div>";
	
	$sql3="SELECT * FROM orders";
		$p1=0;
		$l1=0;
		$totalP1=0;
		$totalL1=0;
		foreach ($db->query($sql3) as $row){
		$id1=$row['cusId'];
		$sql2="SELECT ticId FROM orderdetail where cusId='$id1'";
		foreach ($db->query($sql2) as $row){
			$tid1=$row['ticId'];
			$sql1="SELECT * FROM ticket where ticId='$tid1'";
		foreach ($db->query($sql1) as $row){
			$tprice1=$row['ticPrice'];
			$orprice1=$row['oriPrice'];
			if($tprice1>$orprice1){
				$p1=$tprice1-$orprice1;
				$totalP1+=$p1;
			}
			if($tprice1<$orprice1){
				$l1=$orprice1-$tprice1;
				$totalL1+=$l1;	
			}
		}
		}
		}
	$total=$totalP1-$totalL1;
	echo "<div class='row' style='padding: 20px;'>";
	echo "<div class='col-md-8'>";
	echo "<h1 class='total'>Total Profit is $total.</h1>";
	echo "</div>";
	echo "<div class='col-md-4'></div>";
	echo "</div>";
	?>
</div>
</body>
</html>
<?php include 'footer.php'?>