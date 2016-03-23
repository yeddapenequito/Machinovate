<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Machines</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		
		<div id="machines-content" class="container">
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
						  <a id="slitter" href="#" onclick="changeImage(0)" class="btn btn-primary">Slitter
						  	<small>Slit down and wound up large rolls into several smaller rolls</small>
						  </a>
						  <a id="sheeter" href="#" onclick="changeImage(1)" class="btn btn-primary">Sheeter
						  	<small>Sheet down long layers of paper into thin sheets</small>
						  </a>
						  <a id="cutter" href="#" onclick="changeImage(2)" class="btn btn-primary">Cutter
						  	<small>Cut large sets of paper at once</small>
						  </a>
						  <a id="other-products" href="#" onclick="changeImage(3)" class="btn btn-primary">Other Products
						  	<small>Assorted products ranging from sizes</small>
						  </a>
						</div>
						<a href="slitter.php" id="continue-btn" class="btn btn-primary">Continue</a>
					</form>
				</div>
			</div> <!-- ./row -->
		</div> <!-- ./container -->

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			document.getElementById("machines").className = "active";
			document.getElementById("slitter").style.border = "2px solid #153a7e";

			var image;

			function changeImage(machine) {
			    image = document.getElementById('mach-img');
			    switch(machine) {
			    	case 0:
			    		image.src = "images/slitter-front.png";
			    		image.alt = "slitter";
			    		document.getElementById("slitter").style.border = "2px solid #153a7e";
			    		document.getElementById("sheeter").style.border = "1px solid silver";
			    		document.getElementById("cutter").style.border = "1px solid silver";
			    		document.getElementById("other-products").style.border = "1px solid silver";
			    		document.getElementById("continue-btn").href = "slitter.php";
			    		break;
			    	case 1: 
			    		image.src = "images/sheeter-servo.png";
			    		image.alt = "sheeter";
			    		document.getElementById("slitter").style.border = "1px solid silver";
			    		document.getElementById("sheeter").style.border = "2px solid #153a7e";
			    		document.getElementById("cutter").style.border = "1px solid silver";
			    		document.getElementById("other-products").style.border = "1px solid silver";
			    		document.getElementById("continue-btn").href = "sheeter.php";
			    		break;
			    	case 2:
			    		image.src = "images/cutter.png";
			    		image.alt = "cutter";
			    		document.getElementById("slitter").style.border = "1px solid silver";
			    		document.getElementById("sheeter").style.border = "1px solid silver";
			    		document.getElementById("cutter").style.border = "2px solid #153a7e";
			    		document.getElementById("other-products").style.border = "1px solid silver";
			    		document.getElementById("continue-btn").href = "cutter.php";
			    		break;
			    	case 3:
			    		image.src = "images/other-products.png";
			    		image.alt = "other products";
			    		document.getElementById("slitter").style.border = "1px solid silver";
			    		document.getElementById("sheeter").style.border = "1px solid silver";
			    		document.getElementById("cutter").style.border = "1px solid silver";
			    		document.getElementById("other-products").style.border = "2px solid #153a7e";
			    		document.getElementById("continue-btn").href = "other_products.php";
			    }
			}	
		</script>
		<script>
		$("a").hover(function(){
		    $(this).css("border-color", "black");
		    } 
		});
		</script>
	</body>
</html>
