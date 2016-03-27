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
			<div class="col-sm-offset-2 col-sm-10">
				<form action="cart_summary.php?unitName=MACH_SV" role="form" class="form-horizontal"method='post'>
					<legend>Your Order has been added to your Cart!</legend>
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

		$modelName = $_POST['sheeterType'];	//can be $_GET
		$_SESSION['cart'][$modelName] = array(
			////general section
			'sheeterType' => $_POST['sheeterType'],
			'productionVolume' => $_POST['productionVolume'],
			'paperType' => $_POST['paperType'],
			'gsm' => $_POST['gsmMin']." - ".$_POST['gsmMax'],
			//'gsmUnit' => $_POST['gsmUnit'], tanggalin to
			'rollDiameter' => convertInchToMillimeter($_POST['rollDiameterMin'],$_POST['rollDiameterUnit'])." - ".convertInchToMillimeter($_POST['rollDiameterMax'],$_POST['rollDiameterUnit']),
			'cuttOffLength' => convertInchToMillimeter($_POST['cutOffLengthMin'],$_POST['cutOffLengthUnit'])." - ".convertInchToMillimeter($_POST['cutOffLengthMax'],$_POST['cutOffLengthUnit']),
			'slittingWidth' => convertInchToMillimeter($_POST['slittingWidthMin'],$_POST['slittingWidthUnit'])." - ".convertInchToMillimeter($_POST['slittingWidthMax'],$_POST['slittingWidthUnit']),
			
			////CUTTING SECTION
			//main drive
			'cs_mainDrive' => $_POST['mainDriveRadio'],
			
			//knife
			'cs_knife' => $_POST['knifeRadio'],

			//slitter
			'cs_slitter' => isChecked($_POST['slitterCheckbox'], 1),
			'cs_slitterMax' => $_POST['slitterMax'],

			////URS
			//Reel Stand
			'rs_hydraulicShaftless' => isChecked($_POST['reelStand'], 1),
			'rs_hs' => $_POST['reelHydraulicRadio'],

			'rs_standard' =>isChecked($_POST['reelStand'], 2),
			'rs_s' => $_POST['reelStandardRadio'],
			'rs_s_addRolls' => $_POST['noOfAdditionalRolls'],

			'rs_autoTension' => isChecked($_POST['reelStand'], 3),
			'rs_indivAutoTension' => isChecked($_POST['reelStand'], 4),

			//Shaft
			'sh_mechanical' =>isChecked($_POST['shaft'], 1),
			'sh_airShaft' =>isChecked($_POST['shaft'], 2),
			'sh_others' =>isChecked($_POST['shaft'], 3),

			//Roll Weight
			'rollWeight' => $_POST['rollWeight'],

			////SYSTEMS
			'sys_ComputerControl' => isChecked($_POST['systems'], 1),
			'sys_WebGuideHydraulicEPC' => isChecked($_POST['systems'], 2),
			'sys_Others' => isChecked($_POST['systems'], 3),

			////other details
			'otherDetails' => $_POST['otherDetails']
			);
	?>

			<a id="cancel-btn" href="machines.php" class="btn btn-default">Continue Browsing</a>
			<button id="add-to-cart-btn" type="submit" class="btn btn-default">Proceed to Checkout</button>
		</div>
	</div>
</div> <!-- /.container -->

<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
</body>
</html>