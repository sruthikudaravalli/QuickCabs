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
		
	</head><header>
	<body class="page1" id="top">
		<div class="main">
<!--==============================header=================================-->
			
				<div class="menu_block ">
					
							<nav class="horizontal-nav full-width horizontalNav-notprocessed">
								<ul class="sf-menu">
									<li class="current"><a href="index.html">Home</a></li>
									<li><a href="index-1.html">About Us</a></li>
									<li><a href="index-3.html">Services</a></li>
									<li><a href="index-4.html">Contact Us</a></li>
								

								</ul>
							</nav>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
<br>
				
<div class="container_12">
						<div class="grid_12">
		

<?php
session_start();

$username=$_POST ['username'];
$password=$_POST ['password'];

if($username&&password)
{
	$conenct=mysql_connect("student-db.cse.unt.edu","sk0732","sk0732") or die("couldn't connect");
	mysql_select_db("sk0732") or die("couldn't finddb");
	$query=mysql_query("SELECT * FROM users WHERE username='$username'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
		while($row=mysql_fetch_assoc($query))
		{
			$dbusername=$row['username'];
			$dbpassword=$row['password'];
		}
		if($username==$dbusername&&$password==$dbpassword)
		{
			
			$_SESSION['username']=$username;
			header('Location:member.php');
			
		}
		else
			echo "<y><b>Incorrect Password <x><a href='login1.html'>Click here to login again</a></x></b></y> ";
	}
	else
		echo "<y><b>User doesn't exist.Please <x> <a href=login1.html> click here to login again</x></a></b></y>";

}
else
	die("Please enter values");
?>

				
				
				<div class="clear"></div>
			</header>

					<div class="clear"></div>
			
		</div>

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


