<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<title>Machinovate | Cart-Summary</title>
</head>
<body>
	<?php include 'header_before_login.php';
		session_start(); ?>

	<div id="faq" class="container">
		<div class="panel-group" id="accordion">
			<div class="faqHeader"><h2>Machines Ordered</h2></div>
		
		<?php
			////sheeter
		echo count($_SESSION["cart"]);
			if (count($_SESSION["cart"])==0) {
				echo "Your cart is empty.";
			}
			else {
				if (isset($_SESSION["cart"]["mach-slitter"])) {
					echo "
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseSlitter'>Slitter: " . $_SESSION['cart']['mach-slitter']['slitterType'] . "</a>
						</h4>
					</div>
				<div id='collapseSlitter' class='panel-collapse collapse'>
					<div class='panel-body'>
						<p>  Slitter Specifications 
						<a href='javascript:deleteSlitter()' id='deleteSlitter'>Delete Item</a>
						<a href='order_slitter.php' target='_blank'>Edit Item</a>
						<ul>"
						. "<li>Slitter Type:" . $_SESSION['cart']['mach-slitter']['slitterType'] . "</li>"
						. "<li>Production Volume:" . $_SESSION['cart']['mach-slitter']['productionVolume'] . "</li>"
						. "<li>Paper_Type:" . $_SESSION['cart']['mach-slitter']['paperType'] . "</li>"
						. "<li>GSM:" . $_SESSION['cart']['mach-slitter']['gsm_min'] . " - " . $_SESSION['cart']['mach-slitter']['gsm_max'] . "</li>"
						. "<li>Roll_Diameter:" . $_SESSION['cart']['mach-slitter']['rollDiameter_min'] . " - " . $_SESSION['cart']['mach-slitter']['rollDiameter_max'] . $_SESSION['cart']['mach-slitter']['rollDiameter_unit'] . "</li>"
						. "<li>Slitting_Width:" . $_SESSION['cart']['mach-slitter']['slittingWidth_min'] . " - " . $_SESSION['cart']['mach-slitter']['slittingWidth_max'] . $_SESSION['cart']['mach-slitter']['slittingWidth_unit'] . "</li>"

						. "<li>Cutting_AddtlBlade:" . $_SESSION['cart']['mach-slitter']['addtlBlade'] . "</li>"
						. "<li>Cutting_CoreCutterMachine:" . $_SESSION['cart']['mach-slitter']['coreCutterMachine'] . "</li>"

						. "<li>URS_HydraulicShaftless:" . $_SESSION['cart']['mach-slitter']['rs_HydraulicShaftless'] . "</li>"
						. "<li>URS_Single:" . $_SESSION['cart']['mach-slitter']['rs_Single'] . "</li>"
						. "<li>URS_Customized:" . $_SESSION['cart']['mach-slitter']['rs_Customized'] . "</li>"
						. "<li>URS_ShaftStand:" . $_SESSION['cart']['mach-slitter']['rs_ShaftStand'] . "</li>"
						. "<li>URS_Others:" . $_SESSION['cart']['mach-slitter']['rs_Others'] . "</li>"
						. "<li>URS_TonCapacity:" . $_SESSION['cart']['mach-slitter']['tonCapacity'] . "</li>"

						. "<li>Sys_WebGuideHydraulicEPC:" . $_SESSION['cart']['mach-slitter']['sys_WebGuideHydraulicEPC'] . "</li>"
						. "<li>Sys_Tension:" . $_SESSION['cart']['mach-slitter']['sys_Tension'] . "</li>"
						. "<li>Sys_BananaRoll_TensionRoller:" . $_SESSION['cart']['mach-slitter']['sys_BananaRoll_TensionRoller'] . "</li>"
						. "<li>Sys_BrakeSystem:" . $_SESSION['cart']['mach-slitter']['sys_BrakeSystem'] . "</li>"
						. "<li>Sys_FullyComputerized:" . $_SESSION['cart']['mach-slitter']['sys_FullyComputerized'] . "</li>"
						. "<li>Sys_Others:" . $_SESSION['cart']['mach-slitter']['sys_Others'] . "</li>"

						. "<li>Other_Details:" . $_SESSION['cart']['mach-slitter']['sl_Details'] . "</li>"
						. "</ul></p>
						</div>
					</div>
				</div>";
				}

				if (isset($_SESSION["cart"]["mach-sheeter"])) {
					echo "
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseSlitter'>Sheeter: " . $_SESSION['cart']['mach-sheeter']['sheeterType'] . "</a>
						</h4>
					</div>
				<div id='collapsesheeter' class='panel-collapse collapse'>
					<div class='panel-body'>
						<p>  Sheeter Specifications 
						<a href='javascript:deleteSheeter()' id='deleteSheeter'>Delete Item</a>
						<a href='order_sheeter.php' target='_blank'>Edit Item</a>
						<ul>"
						. "<li>Sheeter Type:" . $_SESSION['cart']['mach-sheeter']['sheeterType'] . "</li>"
						. "<li>Production Volume:" . $_SESSION['cart']['mach-sheeter']['productionVolume'] . "</li>"
						. "<li>Paper_Type:" . $_SESSION['cart']['mach-sheeter']['paperType'] . "</li>"
						. "<li>GSM:" . $_SESSION['cart']['mach-sheeter']['gsm_min'] . " - " . $_SESSION['cart']['mach-sheeter']['gsm_max'] . "</li>"
						. "<li>Roll_Diameter:" . $_SESSION['cart']['mach-sheeter']['rollDiameter_min'] . " - " . $_SESSION['cart']['mach-sheeter']['rollDiameter_max'] . $_SESSION['cart']['mach-sheeter']['rollDiameter_unit'] . "</li>"
						. "<li>Slitting_Width:" . $_SESSION['cart']['mach-sheeter']['slittingWidth_min'] . " - " . $_SESSION['cart']['mach-sheeter']['slittingWidth_max'] . $_SESSION['cart']['mach-sheeter']['slittingWidth_unit'] . "</li>"
						. "<li>Cut-off Length:" . $_SESSION['cart']['mach-sheeter']['cutOffLength_min'] . " - " . $_SESSION['cart']['mach-sheeter']['cutOffLength_max'] . $_SESSION['cart']['mach-sheeter']['cutOffLength_unit'] . "</li>"

						. "<li>Cutting_MainDrive:" . $_SESSION['cart']['mach-sheeter']['cutting_mainDrive'] . "</li>"
						. "<li>Cutting_Knife:" . $_SESSION['cart']['mach-sheeter']['cutting_knife'] . "</li>"
						. "<li>Cutting_SL_Attach:" . $_SESSION['cart']['mach-sheeter']['cutting_sl_attach'] . "</li>"

						. "<li>URS_HydraulicShaftless:" . $_SESSION['cart']['mach-sheeter']['urs_hydraulicShaftless'] . "</li>"
						. "<li>URS_HTypeStand:" . $_SESSION['cart']['mach-sheeter']['urs_hTypeStand'] . "</li>"
						. "<li>URS_TensionDecurler:" . $_SESSION['cart']['mach-sheeter']['urs_tensionDecurler'] . "</li>"
						. "<li>URS_IndividualTension:" . $_SESSION['cart']['mach-sheeter']['urs_individualTension'] . "</li>"
						. "<li>URS_Mechanical:" . $_SESSION['cart']['mach-sheeter']['urs_mechanical'] . "</li>"
						. "<li>URS_AirHD:" . $_SESSION['cart']['mach-sheeter']['urs_airHD'] . "</li>"
						. "<li>URS_Others:" . $_SESSION['cart']['mach-sheeter']['urs_others'] . "</li>"
						. "<li>URS_RollWeight:" . $_SESSION['cart']['mach-sheeter']['urs_rollWeight'] . "</li>"

						. "<li>SYS_ComputerControl:" . $_SESSION['cart']['mach-sheeter']['sys_computerControl'] . "</li>"
						. "<li>SYS_WebGuideHydraulicEPC:" . $_SESSION['cart']['mach-sheeter']['sys_webGuideHydraulicEPC'] . "</li>"
						. "<li>SYS_Others:" . $_SESSION['cart']['mach-sheeter']['sys_others'] . "</li>"
						. "<li>SH_Details:" . $_SESSION['cart']['mach-sheeter']['sh_Details'] . "</li>"

						. "</ul></p>
						</div>
					</div>
				</div>";
				}

				if (isset($_SESSION["cart"]["mach-cutter"])) {
					echo "
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseSlitter'>Cutter: " . $_SESSION['cart']['mach-cutter']['cutterType'] . "</a>
						</h4>
					</div>
				<div id='collapseSlitter' class='panel-collapse collapse'>
					<div class='panel-body'>
						<p>  Cutter Specifications 
						<a href='javascript:deleteCutter()' id='deleteCutter'>Delete Item</a>
						<a href='order_cutter.php' target='_blank'>Edit Item</a>
						<ul>"
						. "<li>Cutter Type:" . $_SESSION['cart']['mach-cutter']['cutterType'] . "</li>"
						. "<li>CT_Details:" . $_SESSION['cart']['mach-cutter']['ct_Details'] . "</li>"

						. "</ul></p>
						</div>
					</div>
				</div>";
				}

				if (isset($_SESSION["cart"]["mach-bailing"])) {
					echo "
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseSlitter'>Bailing Machine</a>
						</h4>
					</div>
				<div id='collapseSlitter' class='panel-collapse collapse'>
					<div class='panel-body'>
						<p>  Bailing Machine Specifications 
						<a href='javascript:deleteBailing()' id='deleteBailing'>Delete Item</a>
						<a href='order_bailing.php' target='_blank'>Edit Item</a>
						<ul>"
						. "<li>BM_Quantity:" . $_SESSION['cart']['mach-bailing']['bm_quantity'] . "</li>"
						. "<li>BM_Details:" . $_SESSION['cart']['mach-bailing']['bm_Details'] . "</li>"

						. "</ul></p>
						</div>
					</div>
				</div>";
				}

				if (isset($_SESSION["cart"]["mach-rolltruck"])) {
					echo "
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseSlitter'>Paper Roll Truck</a>
						</h4>
					</div>
				<div id='collapseSlitter' class='panel-collapse collapse'>
					<div class='panel-body'>
						<p>  Paper Roll Truck Specifications 
						<a href='javascript:deleteRollTruck()' id='deleteRollTruck'>Delete Item</a>
						<a href='order_bailing.php' target='_blank'>Edit Item</a>
						<ul>"
						. "<li>PRT_Quantity:" . $_SESSION['cart']['mach-rolltruck']['prt_quantity'] . "</li>"
						. "<li>PRT_Details:" . $_SESSION['cart']['mach-rolltruck']['prt_Details'] . "</li>"

						. "</ul></p>
						</div>
					</div>
				</div>";
				}


//				<a id="cancel-btn" href="machines.php" class="btn btn-default">Cancel Order</a>
//				<a id="add-to-cart-btn" href="shipment.php"type="submit" class="btn btn-default">Proceed to Checkout</a>
			}
			?>
			<br>
			<br>

				<a id="cancel-btn" href="machines.php" class="btn btn-default">Cancel Order</a>
				<a id="add-to-cart-btn" href="shipment.php"type="submit" class="btn btn-default">Proceed to Checkout</a>
					</div>
				</div>
				<script type="text/javascript" src="scripts/jquery.min.js"></script>
				<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
				<script type="text/javascript" src="formlistener.js"></script>
				<script>	
					// document.getElementById("your-shopping-cart-btn").remove();
				</script>
			</body>
			</html>