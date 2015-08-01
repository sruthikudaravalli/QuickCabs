<!DOCTYPE html>
<html lang="en">
	<head>
<style>
x{
    color: gold;
    text-align: right;
}
y
{
font-size:160%;
}
</style>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="booking/css/booking.css">
		<link rel="stylesheet" href="css/camera.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.2.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="js/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script src="booking/js/booking.js"></script>
		<script>
			$(document).ready(function(){
				jQuery('#camera_wrap').camera({
					loader: false,
					pagination: false ,
					minHeight: '444',
					thumbnails: false,
					height: '28.28125%',
					caption: true,
					navigation: true,
					fx: 'mosaic'
				});
				$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		
	</head>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			<header>
				<div class="menu_block ">
					<div class="container_12">
						<div class="grid_12">
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="member.php">Home</a></li>
									<li><a href="index-1.1.php">About Us</a></li>
									<li><a href="index-3.1.php">Services</a></li>
									<li><a href="index-4.1.php">Contacts</a></li>
									
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
<center>
						<h3>
							<a href="home.html">
								<img src="images/logo.jpg" alt="Your Happy Family">
								
								<h2><center><i><b>A Cab For the Old</b></i></center></h2>
							</a>
						</h3>
						</center>
					</div>
				</div>
				<div class="clear"></div>
			</header>
			
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_12">
					<div class="grid_5">
						<h2>you are done!!</h2><br>
						<p><x><a href="member.php">go back to form</a></x></p>
					</div> 
					<br>
					<br>
					<br>
					<div class="grid_6 prefix_1">
						<img src="images/b1.jpeg" alt="">
						
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
		<script>
			$(function (){
				$('#bookingForm').bookingForm({
					ownerEmail: '#'
				});
			});
			$(function() {
				$('#bookingForm input, #bookingForm textarea').placeholder();
			});


    $("#options").change(function()
    {
        //Find if there is already a input box
        //if yes then remove it
        $("#text").find("input").remove();
        var count = $(this).val();

        for (var i = 1; i <= count; i++) {
            var ipBoxName ="myInput"+i;
            var ipBox = '&nbsp;&nbsp;<input type="textbox" name="'+ipBoxName+'" placeHolder="passenger name"/><input type="textbox" name="'+ipBoxName+'" placeHolder="passenger age"/>';
            $('div#text').append(ipBox);

        }  
    });
		</script>
	</body>
</html>