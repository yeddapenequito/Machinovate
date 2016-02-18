<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<title>Machinovate | Machines</title>
	<style>
		#machines-content .mach-img {
			width: 225px;
			height: 150px;
			display: block;
			margin: 0 auto;
		}
		#machines-content header {
			background-color: transparent;
		}
		#machines-content #categories > div{
			border: 1px solid silver;
			border-radius: 5px;
			margin: 1em 0;
		}
		#machines-content #categories > div .bar {
			background-color: silver;
		}
		#machines-content #categories .div-hover {
			-webkit-transition: all .3s ease; /* Safari and Chrome */
		  	-moz-transition: all .3s ease; /* Firefox */
		  	-o-transition: all .3s ease; /* IE 9 */
		  	-ms-transition: all .3s ease; /* Opera */
		  	transition: all .3s ease;
		}
	</style>
</head>
<body>
	<?php include 'header_before_login.php';?>
	<div id="machines-content" class="container-fluid">
		<div class="row">
			<div id="categories" class="col-xs-12 col-sm-offset-2 col-sm-8">
				<!-- Slitter-->
				<div class="row div-hover">
					<div class="col-xs-12 col-sm-8">
						<header>
							<h1>Slitter</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo.</p>
					</div>
					<div class="col-xs-12 col-sm-4 bar">
						<img class="mach-img" alt="slitter" src="images/slitter-front.png">
					</div>
				</div>
				<!-- Sheeter -->
				<div class="row div-hover">
					<div class="col-xs-12 col-sm-8">
						<header>
							<h1>Sheeter</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo.</p>
					</div>
					<div class="col-xs-12 col-sm-4 bar">
						<img class="mach-img" alt="sheeter" src="images/sheeter-servo.png">
					</div>
				</div>
				<!-- Cutter -->
				<div class="row div-hover">
					<div class="col-xs-12 col-sm-8">
						<header>
							<h1>Cutter</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo.</p>
					</div>
					<div class="col-xs-12 col-sm-4 bar">
						<img class="mach-img" alt="cutter" src="images/cutter.png">
					</div>
				</div>
				<!-- Other Products -->
				<div class="row div-hover">
					<div class="col-xs-12 col-sm-8">
						<header>
							<h1>Other Products</h1>
						</header>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla. Nunc sit amet erat sit amet justo aliquet vulputate non eu leo.</p>
					</div>
					<div class="col-xs-12 col-sm-4 bar">
						<img class="mach-img" alt="other-products" src="images/other-products.png">
					</div>
				</div>
			</div>	
		</div> <!-- /.row -->
	</div> <!-- /.container-fluid -->
	
	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
	document.getElementById("machines").className = "active";
	function zoom(el) {
		
	}
	</script>
</body>
</html>