<html lang="en">
	<head>
<style type="text/css">
x{
    color: gold;
}
y
{
font-size:180%;
}
 
.styled-button-3 {
	-webkit-box-shadow:rgba(0,0,0,0.0.1) 0 1px 0 0;
	-moz-box-shadow:rgba(0,0,0,0.0.1) 0 1px 0 0;
	box-shadow:rgba(0,0,0,0.0.1) 0 1px 0 0;
	background-color:#5B74A8;
	border:1px solid #29447E;
	font-family:'Lucida Grande',Tahoma,Verdana,Arial,sans-serif;
	font-size:12px;
	font-weight:700;
	padding:2px 6px;
	height:28px;
	color:#fff;
	border-radius:5px;
	-moz-border-radius:5px;
	-webkit-border-radius:5px
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
				
					</div>
				</div>
				<div class="clear"></div>
			</header>
<!--==============================Content=================================-->
			<div class="content"><div class="ic"></div>
				<div class="container_1">
					<div class="grid_5">
						<h2><center>Book Your Cab</center></h2><br>
						<form id="bookingForm" action="success.php">
						<br>
							<div class="fl1">
								<div class="tmInput">
									<input name="Name" placeHolder="Name:" type="text" required >
								</div>
								<br>
								<div class="clear"></div>
								<div class="tmInput">
									<input name="From" placeHolder="From:" type="text" required >
								</div>
							</div>
							<div class="fl1">
								<div class="tmInput">
									<input name="Email" placeHolder="Email:" type="email" required>
								</div>
								<br>
								<div class="tmInput mr0">
									<input name="To" placeHolder="To:" type="text" required>
								</div>
							</div>
							<div class="clear"></div>
							<strong><b>Phone Number</b></strong>
							<div class="tmInput1">
								<input name="Phone" placeHolder="" type="alphanumeric" required>
							</div>
							<div class="clear"></div>
							
							<br>
							<div class="tmRadio">
								<p><strong>Trip</strong></p>
								<input name="Trip" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="Trip", groups=[RadioGroup])' />
								<p><strong>one-Way</strong></p>
								<input name="Trip" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="Trip", groups=[RadioGroup])' />
								<p><strong>Round-Trip</strong></p>
								
							</div>
							<br>
							
							<strong><b>Time</b></strong>
							<div class="tmInput1">
								<input name="Time" placeHolder="" type="text" required>
								
							</div>
							<br>
							<div class="clear"></div>
							
							
								<br>
							<strong><b>Date</b></strong>
							<label class="tmDatepicker">
							<input type="text" name="Date" placeholder="20/05/2014" required>
							</label>
							<div class="clear"></div>
							<br>
							
							<div class="fl1 fl2">
							<div id="text">
							<strong>Number of Passengers</strong>
							<br>
							<select id ="options" name="Passengers" class="tmSelect auto" data-class="tmSelect tmSelect2" required>
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
						</div>
						</div>
							<div class="fl1 fl2">
								
								<div class="clear height1"></div>
								
							</div>
							
							<div class="clear"></div>
							<div class="tmTextarea">
								<textarea name="Message" placeHolder="Message"></textarea>
							</div>
							<button style="background-color:gold; width:80px; height:30px">Submit</button>
						<!--<input type="submit" class="styled-button-3" value="submit">-->
						</form>
					</div> 
					<br>
					<br>
					<br>
					<!--<div class="grid_6 prefix_1">
						<img src="images/b1.jpeg" alt="">
					</div>-->
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


