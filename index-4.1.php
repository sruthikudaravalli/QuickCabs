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

		<title>Contacts</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
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
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li><a href="member.php">Home</a></li>
									<li><a href="index-1.1.php">About Us</a></li>
									<li><a href="index-3.1.php">Services</a></li>
									<li class="current"><a href="index-4.1.php">Contact Us</a></li>
									
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
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_12">
						<h3>Find Us</h3>
						<div class="map">
							<figure>
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d24214.807650104907!2d-73.94846048422478!3d40.65521573400813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1395650655094" style="border:0"></iframe>
							</figure>
						</div>
					</div>
					<br>
					<div class="grid_5"><br>
						<h3>Contact Info</h3><br>
						<div class="map">
							
							<p>Don’t forget, 24/7 support is available </p>
							
							<address>
								<dl>
									<dt>QuickCabs <br>
										1701 West OAk Street<br>
										Denton, Texas 76201.
									</dt>
									<dd><span>Telephone:</span> +1 913-313-9656</dd>
									<dd><span>FAX:</span> +1 913 313 9656</dd>
									
								</dl>
							</address>
						</div>
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
					
					<div class="copy">
						<div class="st1">
						<div class="brand">Quick<span class="color1">C</span>abs </div><b>A Cab For The Old</b>
						
					</div>
				</div>
				<div class="clear"></div>
			</div>
			</div>
		</footer>
	</body>
</html>