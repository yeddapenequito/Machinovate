<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Sheeter</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>

		<div id="machine-category" class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li class="active">Sheeter</li>
			</ol>
			<div class="row">
				<div>
					<a href="compact_machine.php" class="col-xs-12 col-sm-3">
						<img src="images/compact-machine.png" alt="Compact Machine">
						<h1>Compact Machine</h1>
					</a>
				</div>
				<div>
					<a href="servo_drive_sheeter_machine.php" class="col-xs-12 col-sm-3">
						<img src="images/servo-drive-sheeter.jpg" alt="Servo Drive Sheeter Machine">
						<h1>Servo Drive Sheeter Machine</h1>
					</a>
				</div>
				<div>
					<a href="sheeter_machine_combi.php" class="col-xs-12 col-sm-3">
						<img src="images/machine-combi.jpg" alt="Sheeter Machine Combi">
						<h1>Sheeter Machine Combi</h1>
					</a>
				</div>
				<div>
					<a href="sheeter_machine_with_h-type_reel_stand.php" class="col-xs-12 col-sm-3">
						<img src="images/sheeter-machine-with-h-type-reel-stand.png" alt="Sheeter Machine with H-Type Reel Stand">
						<h1>Sheeter Machine with H-Type Reel Stand</h1>
					</a>
				</div>
				<div>
					<a href="twin_knife_synchro_fly_sheeting_machine.php"  class="col-xs-12 col-sm-3">
						<img src="images/twin-knife-synchro-fly-sheeting-machine.png" alt="Twin Knife Synchro-Fly Sheeting Machine">
						<h1>Twin Knife Synchro-Fly Sheeting Machine</h1>
					</a>
				</div>
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<?php include 'footer.php';?>
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	</body>
</html>