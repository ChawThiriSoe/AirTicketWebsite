<?php

?>
<html>
<head>
<title>What do you want to know?</title>
<?php include 'header.php';?>
</head>
<script type="text/javascript">
$(document).ready(function () {
	$(".content-box").hide();
	$(".contorol").click(function () {
		$(this).next(".content-box").slideToggle().siblings(".content-box").slideUp();
		if ($("i").hasClass("fa-plus")) {
			$(this).find("i").toggleClass("fa-minus");
		
		}
 	});
});
</script>
<style type="text/css">
.box-toggle {
	padding: 10px 0 39px;	
}
.box-toggle .contorol {
	background: #aed6f1;
    color: black;
    overflow: hidden;
    margin-top: 22px;
    border-radius: 20px;
}
.contorol{
	height: 60px;
}
.box-toggle .contorol h5 {
	float: left;
	padding-left: 29px;
	padding-top: 20px;
	text-align: center;
}
.box-toggle .contorol span{
	float: right !important;
    padding-right: 29px;
    line-height: 65px;
}
.box-toggle .content-box {
    background: #2980b9;
    padding: 20px 30px 10px 30px;
    text-align: justify;
    border-radius: 20px;
    font-size: 14px;
    color: white;
    font-family: Time New Romen;
}
.toggle-info{
	padding-top: 25px;
}
</style>
<body>
<div class="container-fluid" style="background-color: #ebf5fb;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 box-toggle">
				<div class="contorol">
					<h5>How to become travel_city club member?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						You can enroll for membership online at www.travelcityagency.com or Myanmar National Airlines mobile application or in person at Travel_Agency offices.
					</p>
				</div>
				<div class="contorol">
					<h5>Who can apply travel_city club?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Travel_City Agency is open to Myanmar citizens and/or foreign nationalities, living in Myanmar, or outside Myanmar, who are 2 years of age or older.
					</p>
				</div>
				<div class="contorol">
					<h5>Can I have more than one travel_city club membership number?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Each member can have only one travel_city club membership number.
					</p>
				</div>
				<div class="contorol">
					<h5>What are the benefits of being member at travel_city club?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						The member is enabled to the benefits of travel_city club frequent flyer program based on 
						earning miles that can be calculated on flights of both international and selected 
						domestic flights. It has three tier levels: Silver, Gold and Diamond. After registration, 
						the member is automatically rewarded Silver status. The more you fly with Myanmar 
						National Airlines the higher your membership tier becomes. Each level of tier consists 
						of benefits and privileges. The more details are mentioned Terms & Conditions of travel_city 
						club.
					</p>
				</div>
				<div class="contorol">
					<h5>How to update travel_city club account information?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						You can login the travel_city club account at www.travelcityagency.com or 
						Myanmar National Airlines mobile application or contact travel_city Club FFP Team 
						to update your profile information. Members are responsible for keeping their 
						name, e-mail and mailing addresses up to date on-line.
					</p>
				</div>
				<div class="contorol">
					<h5>Why do I need to provide my email in the enrollment form?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						You need to provide your email address to receive your travel_city club account 
						number and password once you are successfully enrolled in the program. You will 
						receive the confirmation, notification or responding email from the program. 
						Also receive the updated latest terms and conditions and other promotion of 
						the program.
					</p>
				</div>
				<div class="contorol">
					<h5>What should I do if I lose my travel_city club FFP Card?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						If you lose your travel_city club card, you have to contact to the travel_city club head office at the earliest.
					</p>
				</div>
				<div class="contorol">
					<h5>How can I earn miles?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Every time you fly, you can earn miles based on flights travelled. You must 
						entitle your travel_city club number at the time you make your reservation or 
						inform at check-in counter to insert your number. Miles will automatically be 
						rewarded to the member’s account within 14 days after completed travel on 
						qualifying travel_city flights.
					</p>
				</div>
				<div class="contorol">
					<h5>Which sectors can the member accrue the miles?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Members can accrue the actual miles for all international sectors and selected 
						domestic sectors currently including Yangon, Mandalay, Nay Pyi Taw, Nyaung U, 
						Heho, Myitkyina, Putao, Sittwe, Myeik, Dawei, Kawthaung, Kyaing Tong, and Tachileik.
					</p>
				</div>
				<div class="contorol">
					<h5>What are the benefits for children?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Child travel_city club members will be rewarded miles at 75% of the adult ticket miles.
					</p>
				</div>
				<div class="contorol">
					<h5>How do I become to become a Gold or Diamond member?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						To become a Gold member, it requires 25,000 miles and above. 
						And to become a Diamond member, it requires 50,000 miles and above.
					</p>
				</div>
				<div class="contorol">
					<h5>How do I redeem the reward ticket according to my earned miles?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						You can redeem either a one-way trip or round trip according to the miles you 
						earn.. The base fare is free and you have to pay only Taxes and Surcharges to 
						issue the ticket.
					</p>
				</div>
				<div class="contorol">
					<h5>Can you change the date on an issued award ticket?</h5>
					<span class="toggle-info pull-left">
						<i class="fa fa-plus"></i>
					</span>
				</div>
				<div class="content-box">
					<p>
						Ticket is applicable for date change with change fees but non-refundable, 
						non-rerouteable, non-transferable, non-endorsable.
					</p>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>
<?php include 'footer.php';?>