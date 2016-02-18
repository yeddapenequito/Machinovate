<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Order Now</title>
		<style type="text/css">
		.mach-img {
			height: 300px;
			width: 300px;
		}
		</style>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		
		<div class="container">
			<img class="mach-img" alt="slitter" src="images/slitter-front.png">
			<img class="mach-img" alt="sheeter" src="images/sheeter-servo.png">
			<img class="mach-img" alt="cutter" src="images/cutter.png">
			<img class="mach-img" alt="other-products" src="images/other-products.png">
		</div> <!-- ./container -->

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			document.getElementById("order-now").className = "active";
		</script>
	</body>
</html>