<?php
include 'link.php';
include 'dbconnect.php';
session_start();
$cus=$_SESSION['cusId'];
$uname=$_SESSION['cusName'];
$phone=$_SESSION['cusPhone'];
$email=$_SESSION['cusEmail'];

if(!is_null($db))
{
	$sql="select * from ticket";
	$stmt=$db->query($sql);
	$resultSet=$stmt->fetchAll();
}

if ($_SERVER['REQUEST_METHOD']=="POST")
{
	$_SESSION['cart']=null;
	$tid=$_POST['tid'];
	$qty=$_POST['quantity'];
	$flag=false;
	foreach ($_SESSION['cart']as $k=>$v)
	{
		if($k==$tid)
		{
			$flag=true;
			$v+=$qty; 
			$_SESSION['cart'][$k]=$v;
			break;
		}
	}
	
	if($flag==false)
	{
		$_SESSION['cart'][$tid]=$qty;
	}
	
}
?>
<html>
<head>
<title>Flight Ticket List</title>
<?php include 'header.php';?>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
.container {
  padding: 16px;
}
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
  padding-top: 60px;
}
.modalcontent {
  background-color: #fefefe;
  margin: 5% auto 20% auto;
  border: 1px solid #888;
  width: 700px;
  border-radius: 20px;
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  float: right;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.imgcontainer{
  width: 100px;
  height: 100px;
}
.fds-c-button{
  background-color: hsl(0, 0%, 90%);
  border: 1px solid hsl(0, 0%, 87%);
  color: hsl(0, 0%, 40%);
  font-size: 12px;
  padding: 5px 10px;
  cursor: pointer;
  width: 130px;
}
.fds-c-button-3d{
  background-color: skyblue;
  border: 1px solid hsl(0, 0%, 87%);
  color: black;
  font-size: 12px;
  padding: 5px 10px;
  cursor: pointer;
  width: 130px;
}

.cartbtn{
width:80px;
height:40px;
border-radius: 50px;
background-color: #3498db;
}
.cartbtn:hover{
background-color: black;
color: #3498db;
}
</style>
<body>
<div class="container-fluid" style="background-color: #ebf5fb;">
	<div class="row" style="padding: 15px;">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<?php 
				$i=0;
				foreach($resultSet as $r){
					$id=$r[7];
					$sql="select airName from airline where airId='$id'";
					foreach ($db->query($sql) as $row){
					$name=$row['airName'];
					$i++;
			?>
			<div class="row" style="background-color: #d5dbdb; border-radius: 10px; padding: 10px;">
				<div class="col-md-1"></div>
				<div class="col-md-3">
					<img src="image/<?php echo $r[5];?>" width="200px" height="200px">
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4">
					<h3><?php echo $r[1]?></h3><br>
					<h5>Leave Date <b>----></b> <?php echo $r[2];?></h5><br>
					<h5>Airline <b>----></b> <?php echo $name;?></h5><br>
					<h4>MMK <b><?php echo $r[3];?></b> for 1 Seat</h4>
				</div>
				<div class="col-md-3" style="padding-top: 160px;">
					<button onclick="document.getElementById('<?php echo $i;?>').style.display='block'" class="fa fa-shopping-cart cartbtn" style="font-size: 20px;"></button>
				</div>
				
				<!-- shopping btn -->
				<div id="<?php echo $i;?>" class="modal">
				<form class="modalcontent" action="" method="post" enctype="multipart/form-data">
				<div class="container">
				<div class="row">
				<div class="col-md-12" style="padding: 20px;">
				<center>
				<i class="fa fa-check" style="font-size: 24px;"></i><br>
				<h2>Please Choose Number of Seat!</h2>
				</center>
				</div>
				</div>
				<div class="row" style="background-color: #e5e7e9; padding: 15px;">
				<div class="col-md-3">
				<img src="image/<?php echo $r[5];?>" class="imgcontainer">
				</div>
				<div class="col-md-6">
				<h3><?php echo $r[1];?></h3>
				<h5>Service:</h5>
				<p>
				<?php echo $r[6];?>
				</p>
				</div>
				<div class="col-md-3">
				<h4>MMK <?php echo $r[3];?> for 1 Seat</h4>
				<font>
				Leave date: <?php echo $r[2];?>
				</font>
				</div>
				</div>
				<div class="row" style="background-color: #e5e7e9; padding-bottom: 10px;">
				<div class="col-md-7"></div>
				<div class="col-md-5">
				<h3>Click as you want!!</h3>
				<input type="hidden" name="tid" value=" <?php echo $r[0];?>">
				<input type="number" name="quantity" class="form-control" style="background-color: skyblue; width: 200px;">
				</div>
				</div>
				<div class="row" style="padding-top: 20px;">
				<div class="col-md-9"></div>
				<div class="col-md-2">
				<input type="submit" class="fds-c-button-3d" name="cart" value="Go To Checkout">
				</div>
				</div>
				</div>
				</form>
				</div>
				<script>
				var modal = document.getElementById('<?php echo $i;?>');
				window.onclick = function(event) {
				    if (event.target == modal) {
				        modal.style.display = "none";
				    }
				}
				</script>
				<!-- shopping btn -->
			</div>
			<div class="row" style="padding-top: 20px;"></div>
			<?php 
					}
				}
			?>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
</body>
</head>
</html>
<?php 
include 'footer.php';
if(isset($_POST['cart'])){
	echo "<script>window.location='collection.php'</script>";
}
?>