<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<title>Machinovate | Form Successful!</title>
</head>
<body>
	<?php include 'header_before_login.php';?>

	<div class="container">
		<div class="form-group">
			<div class="col-sm-12">
				<form action="cart_summary.php?unitName=SL_Customized" role="form" class="form-horizontal"method='post'>
				<div class="jumbotron">
				<center><legend>Your Order has been added to your Cart!</legend>
	<?php 
		echo 'NO ERROR TRAPPING YET';
		session_start();
		///functions
		function convertInchToMillimeter($value, $unit){
			if ($unit == "inches") {
				return round($value / 25.4, 2);
			}
			else return round($value, 2);
		}
		function isChecked($checkboxName,$checkboxValue){
			if (!empty($checkboxName)){
				foreach($checkboxName as $value){
					if($value == $checkboxValue){
						return 1;
					}
				}
			}
			return 0;
		}
		///end of functions

		$modelName = $_POST['slitterType'];	//can be $_GET
		$_SESSION['cart'][$modelName] = array(
			////general section
			'slitterType' => $_POST['slitterType'],
			'productionVolume' => $_POST['productionVolume'],
			'paperType' => $_POST['paperType'],
			'gsm' => $_POST['gsmMin']." - ".$_POST['gsmMax'],
			//'gsmUnit' => $_POST['gsmUnit'], tanggalin to
			'rollDiameter' => convertInchToMillimeter($_POST['rollDiameterMin'],$_POST['rollDiameterUnit'])." - ".convertInchToMillimeter($_POST['rollDiameterMax'],$_POST['rollDiameterUnit']),
			'slittingWidth' => convertInchToMillimeter($_POST['slittingWidthMin'],$_POST['slittingWidthUnit'])." - ".convertInchToMillimeter($_POST['slittingWidthMax'],$_POST['slittingWidthUnit']),
			
			////cutting
			//'addtlBlade' => $_POST['addtlBlade'],
			'coreCutterMachine' => isChecked($_POST['coreCutterMachine'], 1),
			
			////URS
			'rs_HydraulicShaftless' => isChecked($_POST['reelStand'], 1),
			'rs_Single' => isChecked($_POST['reelStand'], 2),
			'rs_Customized' => isChecked($_POST['reelStand'], 3),
			'rs_ShaftStand' => isChecked($_POST['reelStand'], 4),
			//'rs_Others' => isChecked($_POST['reelStand'], 5),
			'tonCapacity' => $_POST['tonCapacity'],

			////systems
			'sys_WebGuideHydraulicEPC' => isChecked($_POST['systems'], 1),
			'sys_Tension' => isChecked($_POST['systems'], 2),
			'sys_BananaRoll_TensionRoller' => isChecked($_POST['systems'], 3),
			'sys_BrakeSystem' => isChecked($_POST['systems'], 4),
			'sys_FullyComputerized' => isChecked($_POST['systems'], 5),
			//'sys_Others' => isChecked($_POST['systems'], 12),

			////other details
			'otherDetails' => $_POST['otherDetails']
			);
	?>

			<a id="cancel-btn" href="machines.php" class="btn btn-default">Continue Browsing</a>
			<button id="add-to-cart-btn" type="submit" class="btn btn-default">View Your Cart</button>
		</div>
		</center>
		</form>
		</div>
	</div>
</div> <!-- /.container -->

<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
</body>
</html>