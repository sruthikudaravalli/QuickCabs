<!DOCTYPE html>
<html lang="en">
	<head>
<style>
x{
    color: gold;
}
y
{
font-size:180%;
}
</style>

		<title>About</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		
	</head>
	<body class="" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="member.php">Home</a></li>
									<li class="current"><a href="index-1.1.php">About Us</a></li>
									<li><a href="index-3.1.php">Services</a></li>
									<li><a href="index-4.1.php">Contact Us</a></li>
									
									
								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>


				<div class="container_12">

					<div class="grid_12"><br>
<?php
session_start();
if($_SESSION['username'])
echo "<b><y><div style='text-align: right'>Hi,".$_SESSION['username']."    <x><a href='logout.php'>Sign out</a></x></div></y></b>";
else
die("<b><y>you must login in <x><a href='login1.html'>click here to login in</a></x></y></b>");
 ?>
						<h3>
						<center>
								<img src="images/logo.jpg" alt="Your Happy Family">
								
								<h2><center><i><b>A Cab For the Old</b></i></center></h2>
								
							
						</center>	
						</h3>
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			<br>
			<br>
			
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_7">
						<img src="images/image1.jpg" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<div class="text1 color2"><br>
								A Few Words About Us
							</div><div class="text2">
							QucikCabs is the one-stop transportation service and makes transportation easy for the old and disabled people.<br><br>
							We offer convenient car sharing service for the senior citizens and disabled people.We provide instant online booking, affordable taxicab rates, and friendly service. 
						</div></div>
						<div class="clear cl1"></div><div class="text2">
						<u>Our Commitment to Customers</u><br>
						
QucikCabs promises to offer our customers superior quality and service. That means:<br>
<ul style="list-style-type:disc">
<li> The fare will be correct and fair</li>
<li> The vehicle will be clean, inside and out</li>
<li> The response to all calls will be prompt</li>
<li> The driver will be polite, helpful, and offer assistance if requested</li>
<ul><br>
This commitment to safe service also means that:
<br>
<ul style="list-style-type:disc">
<li>The vehicle will have passed all safety inspections prior to accepting passengers</li>
<li>The vehicles will be properly licensed and insured</li>
<li>The driver will have attended all prerequisite and periodic training as well as be properly licensed and insured</li>
</ul>
					</div></div>
					<div class="grid_4 prefix_1">
						<h3>Why Choose Us</h3>
<br>
						
						<ul class="list li">
							<li class="list_count">1</li>
							<li class="extra_wrapper">
								<div class="text1 color2">Fast and Safe</div><div class="text2">
								QucikCabs makes ride sharing easy, safe, and convenient for both drivers and passengers.</div>
							
							</li>
						</ul>
						<ul class="list li">
							<li class="list_count">2</li>
							<li class="extra_wrapper">
								<div class="text1 color2">Best Prices</div><div class="text2">
								We offer best fares for transportation. The charges for transportation must be computed by the taximeter and they are fairly low.
							</div>
							</li>
						</ul>
						<ul class="list li">
							<li class="list_count">3</li>
							<li class="extra_wrapper">
								<div class="text1 color2">VIP Treatment for Everyone</div><div class="text2">
At QucikCabs, every one of our clients gets the VIP treatment, regardless if you're a one-time traveller or a regular client.</div>
								
							</li>
						</ul>
						<ul class="list li">
							<li class="list_count">4</li>
							<li class="extra_wrapper">
								<div class="text1 color2">Best Service</div><div class="text2">
								Our drivers display a positive attitude, handle baggage carefully,and our standards for clean, well-maintained vehicles.We also provide special attention for the disabled people.
							</div>
							</li>
							
						</ul>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<h3 class="h3__ind1">Testimonials</h3>
					</div>
					<div class="grid_4">
						<blockquote class="bq1">
							<p><i>Amazing taxi service for the senior citizens. The driver was very prompt and very friendly. I cannot believe the service I've gotten with this company. If you are near Stony Brooks area, this is the taxi service to call! 
</i></p>
							<div class="color2">Tim Barkley</div>
						</blockquote>
					</div>
					<div class="grid_4">
					<blockquote class="bq1">
							<p><i>It's really good for old people. The driver was very kind and he displayed courtesy to disabled people. The car also contains certain equipments like wheel chairs etc to help physically handicapped people.</i></p>
							<div class="color2">Linda Grey</div>
						</blockquote>
					</div>
					<div class="grid_4">
						<blockquote class="bq1">
							<p><i>I often ride with QuickCabs and they are always extremely professional and on time. There is no comparison to the high level of prompt service that I get every time I book QucikCabs Cab. I strongly recommend!</i></p>
							<div class="color2">Ann Pool</div>
						</blockquote>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="f_phone"><span class="color1">Call Us:</span> +1 913-313-9656</div>
					<!--<div class="socials">
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-google-plus"></a>
					</div>-->
					<div class="copy">
						<div class="st1">
						<div class="brand">Quick<span class="color1">C</span>abs </div><b>A Cab For The Old</b>
						<!--<a href="#">Privacy Policy</a>--> 
					</div>
				</div>
				<div class="clear"></div>
			</div>
			</div>
		</footer>
	</body>
</html>