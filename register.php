
<!DOCTYPE html>
<html lang="en">
	<head>
<style>
x{
    color: gold;
  
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
			<div class="container_12">
					<div class="grid_12">
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
<?php     
Include('connect.php');
if (isset($_POST['submit']) ){

        $username = $_POST['username'];
        $password = $_POST['password'];
		   $first_name = $_POST['first_name'];
		    $last_name = $_POST['last_name'];
		   $email = $_POST['email'];
		   If($_POST['username']=='' || $_POST['email']=='' || $_POST['password']==''|| $_POST['first_name']=='' || $_POST['last_name']=='')
{
Echo "please fill the empty field.";
}
	else 
	{
		$query=mysql_query("SELECT * FROM users WHERE username='".$username."'");
		$numrows=mysql_num_rows($query);
	 if($numrows==0)
	{
        $sql= "INSERT INTO users (username, password, first_name, last_name, email) VALUES ('$username', '$password', '$first_name','$last_name', '$email')";
        $result = mysql_query($sql);
       if($result){

            echo "User Created Successfully.";
		header('Location:login1.html');

        }
		else{
			echo "failure!";
		}
    }
	else
	{
		echo "<b>user already exists <a href=register1.html><x>click here to register</x></a></b>";
	}

}
}
?>
<br>
<br>

			<div class="slider_wrapper ">
				<div id="camera_wrap" class="">
					<div data-src="images/slide.jpg" ></div>
					<div data-src="images/slide1.jpg" ></div>
					<div data-src="images/slide2.jpg"></div>
				</div>
			</div>

</div>
</body>
</html>


