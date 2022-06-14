<?php

session_start();
if (!isset($_SESSION['reg_name'])) {
	header('location: ../login_before/login.html');
}

?>


<html>
	<head>
		<title>Resource Management</title>
		<link rel="stylesheet" type="text/css" href="t1.css">
	</head>
	
	
	<body>

		<div style="widows: 100%;height: 100%;">

		<div id="nav_bar">
		<h1 id="heading">RESOURCE MANAGEMENT</h1>
		<center>
		<div id="menu-bar-2">
			<div style="width: auto;height: auto;padding: 4px 0px;">
			<a href="home.php">Home</a>	
			<a href="contact.php">Contact Us.</a>
			<a href="logout.php">logout</a>
			</div>
		</div>
		</center>
		</div>

		<div style="width: 35%; height: 20%; background: white; margin: 15.5% auto; border-radius: 40px; box-shadow: 0px 0px 10px 10px white;">
			<h1 style="color: black; text-align: center; padding-top: 7%;">Your Query has been noted.<br>We will get back to you shortly.</h1>
		</div>

		<div id="end_bar_login">
			<p class="top"> Donate or Visit the prodegies | Charitable Number - +(91)9346743312 | resourcesmanagement2022@gmail.com </p>
		</div>


	</div>		
	</body>
</html>