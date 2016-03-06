<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Home</title>
			<style type="text/css">
			.container{
				background-image:url(images/homepage.png);
				background-repeat: no-repeat;
				background-position: center;
				position:fixed;
				margin-top:-15px;
				height:580px;
				width: 100%;
				background-color: #132c55;
			}
			#image-home{
				

			}
			</style>
	</head>
	<body>
		<?php include 'header_before_login_home_only.php';?>
		
		<!--insert slideshow or carousel code here -->
		<!-- Tentative Image for homepage -->
		<div class="container">
		<!-- <img src="images/homepage.png"> -->
		</div>
		
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			document.getElementById("home").className = "active";
		</script>
	</body>
</html>