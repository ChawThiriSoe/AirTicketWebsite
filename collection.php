<?php
include 'link.php';
include 'dbconnect.php';
session_start();

$uname=$_SESSION['cusName'];
$phone=$_SESSION['cusPhone'];
$email=$_SESSION['cusEmail'];

class Ticket
{
	public $tid;
	public $tname;
	public $tdate;
	public $tprice;
	public $timg;
	public $tdes;
	function _construct($tid,$tname,$tdate,$tprice,$timg,$tdes)
	{
		$this->tid=$tid;
		$this->tname=$tname;
		$this->tdate=$tdate;
		$this->tprice=$tprice;
		$this->timg=$timg;
		$this->tdes=$tdes;
	}
}

$cus = $_SESSION['cusId'];
$cart = $_SESSION['cart'];

?>
<html>
<head>
<title>Flight Ticket List</title>
<?php include 'header.php';?>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.bbn{
 width: 200px;
 height: 50px;
 font-size: 14px;
 background-color: black;
 color: white;
 border-radius: 10px;
 font-weight: bold;
 }
 .bbn:hover{
 background: skyblue;
 color: black;
 }
</style>
<body>
<div class="container-fluid" style="background-color: #ebf5fb;">
	<div class="row" style="padding: 15px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php 
				$total = 0;
				$tot = 0;
				foreach ($cart as $tid => $qty)
					{
						$sql = "select * from ticket where ticId='$tid'";
						$r = $db->query($sql);
						$res = $r->fetch();
						$t = new Ticket($res[0],$res[1],$res[2],$res[3],$res[4],$res[5],$res[6],$res[7]);
						$pr=$res[3];
						$tot=$qty*$pr;
						$id=$res[7];
						$sql1="select airName from airline where airId='$id'";
						foreach ($db->query($sql1) as $row){
						$name=$row['airName'];
			?>
			<div class="row" style="background-color: #d5dbdb; border-radius: 10px; padding: 10px;">
				<div class="col-md-1"></div>
				<div class="col-md-3">
					<img src="image/<?php echo $res[5];?>" width="200px" height="200px">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-7">
					<h3><?php echo $res[1]?></h3><br>
					<h5>Leave Date <b>----></b> <?php echo $res[2];?></h5><br>
					<h5>Airline <b>----></b> <?php echo $name;?></h5><br>
					<h4>MMK <b><?php echo $res[3];?></b> for 1 Seat</h4><br>
					<h5>Service: <?php echo $res[6];?></h5><br>
					<h4>You Add: <?php echo $qty;?> Seats</h4>
				</div>
			</div>
			<div class="row" style="padding-top: 20px;"></div>
<?php 
$total=$total+$tot;
}
}
?>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row" style="padding-bottom: 20px;">
		<div class="col-md-4"></div>
		<div class="col-md-2"></div>
		<div class="col-md-3">
			<h3 stlye='padding-right:200px;'>Total Amount is <i><?php echo $total;?></i></h3>
		</div>
		<div class="col-md-3">
			<form action="" method="post">
				<input type="submit" class="bbn" name="go" value="Go To Checkout">
			</form>
		</div>
	</div>
</div>
</body>
</head>
</html>
<?php 
include 'footer.php';
if(isset($_POST['go'])){
	$sql2="INSERT INTO orders (cusId,orderDate) VALUES ('$cus',now())";
	$db->exec($sql2);
	
	$sql3="INSERT INTO orderdetail (cusId,ticId,qty) VALUES (?,?,?)";
	$stmt=$db->prepare($sql3);
	foreach ($cart as $tid => $qty)
	{
		$stmt->bindValue(1, $cus);
		$stmt->bindValue(2, $tid);
		$stmt->bindValue(3, $qty);
		$stmt->execute();
	}
	
	echo "<script>window.location='checkout.php'</script>";
}
?>