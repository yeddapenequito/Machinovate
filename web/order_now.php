<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Order Now</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		
		<div id="order-now-content" class="container">
			<ol class="breadcrumb">
				<li class="active">
					Step 1: Choose your machine
				</li>
				<li>
					Step 2: Specify your machine's specs
				</li>
				<li>
					Step 3: Enter e-mail
				</li>
				<li>
					Step 4: Shipping details
				</li>
			</ol>
			<div class="row">
				<div class="col-md-6 visible-md-block visible-lg-block">
					<img id="mach-img" alt="slitter" src="images/slitter-front.png">
				</div>

				<div class="col-xs-12 col-md-6">
					<header class="page-header">
						<h1>Choose your machine</h1>
					</header>
					<form>
						<div class="btn-group btn-group-vertical">
						  <a id="slitter" href="#" onclick="changeImage(0)" class="btn btn-primary">Slitter<small>Short description.</small></a>
						  <a id="sheeter" href="#" onclick="changeImage(1)" class="btn btn-primary">Sheeter<small>Short description.</small></a>
						  <a id="cutter" href="#" onclick="changeImage(2)" class="btn btn-primary">Cutter<small>Short description.</small></a>
						  <a id="other-products" href="#" onclick="changeImage(3)" class="btn btn-primary">Other Products<small>Short description.</small></a>
						</div>
						<a id="continue-btn" class='btn btn-primary'>Continue</a>
					</form>
				</div>
			</div> <!-- ./row -->
		</div> <!-- ./container -->

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			document.getElementById("order-now").className = "active";
			document.getElementById("slitter").style.backgroundColor = "#eee";
			document.getElementById("continue-btn").href = "order_slitter.php";

			var image;

			function changeImage(machine) {
			    image = document.getElementById('mach-img');
			    switch(machine) {
			    	case 0:
			    		image.src = "images/slitter-front.png";
			    		image.alt = "slitter";
			    		document.getElementById("slitter").style.backgroundColor = "#eee";
			    		document.getElementById("sheeter").style.backgroundColor = "transparent";
			    		document.getElementById("cutter").style.backgroundColor = "transparent";
			    		document.getElementById("other-products").style.backgroundColor = "transparent";
			    		document.getElementById("continue-btn").href = "order_slitter.php";
			    		break;
			    	case 1: 
			    		image.src = "images/sheeter-servo.png";
			    		image.alt = "sheeter";
			    		document.getElementById("slitter").style.backgroundColor = "transparent";
			    		document.getElementById("sheeter").style.backgroundColor = "#eee";
			    		document.getElementById("cutter").style.backgroundColor = "transparent";
			    		document.getElementById("other-products").style.backgroundColor = "transparent";
			    		document.getElementById("continue-btn").href = "order_sheeter.php";
			    		break;
			    	case 2:
			    		image.src = "images/cutter.png";
			    		image.alt = "cutter";
			    		document.getElementById("slitter").style.backgroundColor = "transparent";
			    		document.getElementById("sheeter").style.backgroundColor = "transparent";
			    		document.getElementById("cutter").style.backgroundColor = "#eee";
			    		document.getElementById("other-products").style.backgroundColor = "transparent";
			    		document.getElementById("continue-btn").href = "order_cutter.php";
			    		break;
			    	case 3:
			    		image.src = "images/other-products.png";
			    		image.alt = "other products";
			    		document.getElementById("slitter").style.backgroundColor = "transparent";
			    		document.getElementById("sheeter").style.backgroundColor = "transparent";
			    		document.getElementById("cutter").style.backgroundColor = "transparent";
			    		document.getElementById("other-products").style.backgroundColor = "#eee";
			    		document.getElementById("continue-btn").href = "order_other_products.php";
			    }
			}	
		</script>
	</body>
</html>