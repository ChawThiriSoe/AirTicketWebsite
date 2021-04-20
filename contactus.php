<?php
include 'link.php';
include 'dbconnect.php';

?>
<html>
<head>
<title>Contact Us</title>
<?php include 'header.php';?>
<script type="text/javascript">

		function validate(){
		var x=document.myform.email.value;
		var ph=document.myform.phone.value;
		var name=document.myform.name.value;
		var status=false;  
		var atposition=x.indexOf("@");  
		var dotposition=x.lastIndexOf(".");


		if(name.length<1){  
		document.getElementById("nameerr").innerHTML="Please enter your name!!";  
		status=false;  
		}
		else if(!isNaN(name))
		{
		document.getElementById("nameerr").innerHTML="Name must be character!!";  
		status=false;  			
		}
		else{
			status=true;
		}


		if(x.length==0)
		{
			 document.getElementById("emailerr").innerHTML="Email must be required!!";
		  status=false;
		}
		else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
		  document.getElementById("emailerr").innerHTML="Email format is invalid!!";
		  status=false;
		}else{
		status=true;  
		  }


		if(ph.length==0)
		{
			 document.getElementById("phoneerr").innerHTML="Phone number must be required!!";
		  status=false;
		}

		else if(ph.length<6 || ph.length>11)
		{
			 document.getElementById("phoneerr").innerHTML="Password must be at least 11 number long!!";
		  status=false;
		}

		else{
		  status=true; 
		  }
		  return status;  
		}
	</script>
</head>
<body>
<div class="container-fluid" style="padding-bottom: 20px; background-color: #ebf5fb;">
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-1"></div>
			<div class="col-md-4">
				<div class="row" style="padding-top: 50px;">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<h3>
							Our Main Office
						</h3>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text">
							&#149; No(33),Kyaik Wine Pagoda Road, Yangon
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text">
							&#149; No(71/A),Corner of Thit Taw street and Min Ye' Kyaw Swar street, Alone Township, Yangon
						</p>
					</div>
				</div>
				<div class="row" style="padding-top: 50px;">
					<div class="col-md-12">
						<h3>
							Main Office's Open Time
						</h3>
						<br>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="text">
							&#164; MONDAY&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;~~~~~~&#160;&#160;&#160;9 AM -  6 PM<br><br>
							&#164; TUESDAY&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;~~~~~~&#160;10 AM -  8 PM<br><br>
							&#164; WEDNESDAY&#160;&#160;~~~~~~&#160;10 AM -  6 PM<br><br>
							&#164; THURSDAY&#160;&#160;&#160;&#160;&#160;~~~~~~&#160;&#160;&#160;9 AM -  7 PM<br><br>
							&#164; FRIDAY&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;~~~~~~&#160;10 AM -  9 PM<br><br>
							&#164; SATURDAY&#160;&#160;&#160;&#160;&#160;~~~~~~	&#160;&#160;9 AM - 8 PM<br><br>
							&#164; SUNDAY	&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;~~~~~~&#160;&#160;&#160;9 AM - 6 PM
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=No(71%2FA)%2CCorner%20of%20Thit%20Taw%20street%20and%20Min%20Ye'%20Kyaw%20Swar%20street%2C%20Alone%20Township%2C%20Yangon+(Hot%20Pot%20City)&amp;ie=UTF8&amp;t=h&amp;z=20&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google map generator</a></iframe></div><br />
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6" style="border: 1px solid gray;">
				<div class="row">
					<div class="col-md-12">
						<center>
							<h3>
								Please Feedback Us
							</h3>
						</center>
					</div>
				</div>
				<form name="myform" action="" onsubmit="return validate()" method="post">
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Name:
						</font>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control text" id="name">
									</div>
								</div>
							</div>
							<div class="row">
								<span id="nameerr" style="color:red;"></span>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Email:
						</font>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="type" class="form-control text" id="email">
									</div>
								</div>
							</div>
							<div class="row">
								<span id="emailerr" style="color:red;"></span>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Phone:
						</font>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control text" id="phone">
									</div>
								</div>
							</div>
							<div class="row">
								<span id="phoneerr" style="color:red;"></span>
							</div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="padding-top: 20px;">
					<div class="col-md-2"></div>
					<div class="col-md-3">
						<font class="text">
							Comments:
						</font>
					</div>
					<div class="col-md-5">
						<textarea class="form-control text" rows="5" id="comment" placeholder="Please give your feedback"></textarea>
					</div>
					<div class="col-md-2"></div>
				</div>
				<div class="row" style="padding-bottom: 20px;">
					<div class="col-md-8"></div>
					<div class="col-md-2" style="padding-top: 20px;">
						<button class="btn btn-primary text">Send</button>
					</div>
					<div class="col-md-2" style="padding-top: 20px;">
						<button class="btn btn-primary text" type="reset" value="reset">Cancel</button>
					</div>
				</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>
<?php include 'footer.php';?>