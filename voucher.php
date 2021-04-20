<?php
include 'link.php';
include 'dbconnect.php';
session_start();

$id = $_SESSION['cusId'];
$uname=$_SESSION['cusName'];
$phone=$_SESSION['cusPhone'];
$email=$_SESSION['cusEmail'];
?>
<html>
<head>
<title>Your voucher</title>
<style type="text/css">
.text{
font-size: 14px;
color: black;
}
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
</head>
<body>
<div id="html-content-holder">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<center><img src="image/air ticket.png" width="150px" height="150px" style="border-radius: 40px; padding-top: 10px;"></center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<center><p class="text">Phone : +09450160660, +09799556253</p></center>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-2"></div>
				<div class="col-md-4 text">Customer Name</div>
				<div class="col-md-1"></div>
				<div class="col-md-3 text">
					<?php echo $uname;?>
				</div>
				<div class="col-md-2"></div>
			</div>

			<div class="row" style="margin-top: 20px;">
				<div class="col-md-2"></div>
				<div class="col-md-4 text">Order Date</div>
				<div class="col-md-1"></div>
				<div class="col-md-3 text">
					<script>
	  					var currentDate = new Date(),
		     				day = currentDate.getDate(),
		     				month = currentDate.getMonth() + 1,
		     		    	year = currentDate.getFullYear();
		     		    var currentTime = new Date(),
	     					hours = currentTime.getHours(),
	      					minutes = currentTime.getMinutes();

						if (minutes < 10) {
							minutes = "0" + minutes;
						}

						var suffix = "AM";
						if (hours >= 12) {
					    suffix = "PM";
					    hours = hours - 12;
						}
						if (hours == 0) {
						 hours = 12;
						}
						document.write(day + "/" + month + "/" + year);
						document.write("&nbsp;&nbsp;")
						document.write(hours + ":" + minutes + " " + suffix);
		  				
					</script>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-2"></div>
				<div class="col-md-4 text">Customer Email</div>
				<div class="col-md-1"></div>
				<div class="col-md-3 text">
					<?php echo $email;?>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-2"></div>
				<div class="col-md-4 text">Customer Phone</div>
				<div class="col-md-1"></div>
				<div class="col-md-3 text">
					<?php echo $phone;?>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row" style="margin-top: 20px;">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<table class="table table-striped">
						<tr>
							<th class="text">Name</th>
							<th class="text">Leave Date</th>
							<th class="text">Airline Name</th>
							<th class="text">Qty</th>
							<th class="text">Price</th>
							<th class="text">Sub Total</th>
						</tr>
						<?php 
							$stotal=0;
							$total=0;
							$sql1="SELECT * FROM orderdetail where cusId='$id'";
							foreach ($db->query($sql1) as $row){
								$tid=$row['ticId'];
								$qty=$row['qty'];
							$sql2="SELECT * FROM ticket where ticId='$tid'";
							foreach ($db->query($sql2) as $row){
								$tname=$row['ticName'];
								$price=$row['ticPrice'];
								$date=$row['ticDate'];
								$aid=$row['airId'];
								$stotal=$price*$qty;
							$sql3="SELECT * FROM airline where airId='$aid'";
							foreach ($db->query($sql3) as $row){
								$aname=$row['airName'];
								
							echo "<tr>";
							echo "<td class='text'>$tname</td>";
							echo "<td class='text'>$date</td>";
							echo "<td class='text'>$aname</td>";
							echo "<td class='text'>$qty</td>";
							echo "<td class='text'>$price</td>";
							echo "<td class='text'>$stotal</td>";
							echo "</tr>";
							$total+=$stotal;
							}}}
						?>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="text">Total</td>
							<td class="text"><?php echo $total;?></td>
						</tr>
					</table>
				</div>
				<div class="col-md-2"></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p align="center">Thank You Very Much!!</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p align="center" class="text">You can give feedback to us in "www.facebook.com/Travelcitytours.tc"</p>
					<br>
					<p align="center" class="text" style="color: red;">!!!!! You have to take a photo or take screenshot this voucher !!!!!</p>
				</div>
			</div>
			<div class="row" style="margin-top: 20px;">
					<div class="col-md-6"></div>
					<div class="col-md-4">
					<form action="" method="post">
						<input type="submit" class="bbn" name="back" value="Back to Website">
					</form>
					</div>
					<div class="col-md-2"></div>
				</div>
		</div>
	</div>
</body>
</html>
<?php 
if(isset($_POST['back'])){
	echo "<script>window.location='home.php'</script>";
}
?>