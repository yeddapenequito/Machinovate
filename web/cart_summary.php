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
	<?php include 'header_before_login.php'; ?>

	<div id="faq" class="container">
		<h1>Your Shopping Cart</h1>
		
		<?php
			////sheeter
		echo "<p class='text-info'>Your cart contains <strong>" . count($_SESSION["cart"]) . "</strong> item/s</p>";
			if (count($_SESSION["cart"])==0) {
				echo "<h3 class='text-primary'>Your cart is empty :(</h3>
					  <p>
						Go to the <a href='machines.php'>Machines</a> page and add some now. 
					  </p>";
			} else {
				if (isset($_SESSION["cart"]["mach-slitter"])) {
					echo "
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseSlitter'>Slitter: " . $_SESSION['cart']['mach-slitter']['slitterType'] . "
								<a href='javascript:deleteSlitter()' id='deleteSlitter' style='float:right'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Delete This Item</a>
								<a href='order_slitter.php' target='_blank' style='float:right;margin-right:1em'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Edit This Item</a>
							</a>
						</h4>
					</div>
				<div id='collapseSlitter' class='panel-collapse collapse'>
					<div class='panel-body'>
						<strong>Slitter Machine Specifications</strong>
						<table style='width:auto' class='table table-borderless'>
							<caption>GENERAL SECTION</caption>
							<tbody>
								<tr>
									<td>Slitter Type</td>
									<td>: ". $_SESSION['cart']['mach-slitter']['slitterType'] ."</td>
								</tr>
								<tr>
									<td>Production Volume</td>
									<td>: " . $_SESSION['cart']['mach-slitter']['productionVolume'] . " tons</td>
								</tr>
								<tr>
									<td>Paper Type</td>
									<td>: " . $_SESSION['cart']['mach-slitter']['paperType'] . "</td>
								</tr>
								<tr>
									<td>GSM</td>
									<td>: " . $_SESSION['cart']['mach-slitter']['gsm_min'] . " - " . $_SESSION['cart']['mach-slitter']['gsm_max'] . " grams per square meter</td>
								</tr>
								<tr>
									<td>Roll Diameter</td>
									<td>: " . $_SESSION['cart']['mach-slitter']['rollDiameter_min'] . " - " . $_SESSION['cart']['mach-slitter']['rollDiameter_max'] . $_SESSION['cart']['mach-slitter']['rollDiameter_unit'] . "</td>
								</tr>
								<tr>
									<td>Slitting Width</td>
									<td>: " . $_SESSION['cart']['mach-slitter']['slittingWidth_min'] . " - " . $_SESSION['cart']['mach-slitter']['slittingWidth_max'] . $_SESSION['cart']['mach-slitter']['slittingWidth_unit'] . "</td>
								</tr>
							</tbody>
						</table>

						<caption>CUTTING SECTION</caption>
						<ul>
						    <li>Standard [Five(5)] Set Male/Female Circular Blade with Trim Removal Blower</li>";
							if($_SESSION['cart']['mach-slitter']['addtlBlade']) {
								echo "<li>Additional " . $_SESSION['cart']['mach-slitter']['addtlBlade'] . " set/s of one pair male/female</li>";
							}
							if($_SESSION['cart']['mach-slitter']['coreCutterMachine']) {
								echo "<li>Core Cutter Machine</li>";
							}
						echo "</ul>

						<caption>UNWIND ROLL STAND SECTION</caption>
						<ul>";
							if($_SESSION['cart']['mach-slitter']['rs_HydraulicShaftless']) {
								echo "<li>Hydraulic Shaftless with Air Break";
							}
							if($_SESSION['cart']['mach-slitter']['rs_Single'] ) {
								echo "<li>Single</li>";
							}
							if($_SESSION['cart']['mach-slitter']['rs_Customized']) {
								echo "<li>Customized</li>";
							}
							if($_SESSION['cart']['mach-slitter']['rs_ShaftStand']) {
								echo "<li>Stationary Shaft Stand</li>";
							}
							if($_SESSION['cart']['mach-slitter']['rs_Others']) {
								echo "<li>Others :" . $_SESSION['cart']['mach-slitter']['rs_Others'] . "</li>";
							}
							echo"<li>Ton Capacity : <strong>". $_SESSION['cart']['mach-slitter']['tonCapacity'] . "</strong> tons"
						."</ul>

						<caption>SYSTEMS SECTION</caption>
						<ul>";
							if($_SESSION['cart']['mach-slitter']['sys_WebGuideHydraulicEPC']) {
								echo "<li>Heavy Duty Web Guide Hydraulic EPC Control System with Automation – Centring Sensor and Control, 4 pieces Roller and Roll Steering Guiding with Base</li>";
							}
							if($_SESSION['cart']['mach-slitter']['sys_Tension']) {
								echo "<li>Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing</li>";
							}
							if($_SESSION['cart']['mach-slitter']['sys_BananaRoll_TensionRoller']) {
								echo "<li>Banana Roll and Tension Roller</li>";
							}
							if($_SESSION['cart']['mach-slitter']['sys_BrakeSystem']) {
								echo "<li>Water Cooling Brake Systems</li>";
							}
							if($_SESSION['cart']['mach-slitter']['sys_FullyComputerized']) {
								echo "<li>Fully Computerized Control System</li>";
							}
							if($_SESSION['cart']['mach-slitter']['sys_Others']) {
								echo "<li>Others : " . $_SESSION['cart']['mach-slitter']['sys_Others'] . "</li>";
							}
						echo "</ul>";
						
						if($_SESSION['cart']['mach-slitter']['sl_Details']) {
							echo "<caption>OTHER DETAILS</caption>
							      <p>" . $_SESSION['cart']['mach-slitter']['sl_Details'] . "</p>";
						}

						echo
						"</div>
					</div>
				</div>";
				}

				if (isset($_SESSION["cart"]["mach-sheeter"])) {
					echo "
				<div class='panel panel-default'>
					<div class='panel-heading'>
						<h4 class='panel-title'>
							<a class='accordion-toggle collapsed' data-toggle='collapse' data-parent='#accordion' href='#collapseSheeter'>Sheeter: " . $_SESSION['cart']['mach-sheeter']['sheeterType'] . "
								<a href='javascript:deleteSlitter()' id='deleteSlitter' style='float:right'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span> Delete This Item</a>
								<a href='order_slitter.php' target='_blank' style='float:right;margin-right:1em'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Edit This Item</a>
							</a>
						</h4>
					</div>
				<div id='collapseSheeter' class='panel-collapse collapse'>
					<div class='panel-body'>
						<p>  Sheeter Specifications 
						<a href='javascript:deleteSheeter()' id='deleteSheeter'>Delete Item</a>
						<a href='order_sheeter.php' target='_blank'>Edit Item</a>
						<ul>"
						. "<li>Sheeter Type: " . $_SESSION['cart']['mach-sheeter']['sheeterType'] . "</li>"
						. "<li>Production Volume: " . $_SESSION['cart']['mach-sheeter']['productionVolume'] . "</li>"
						. "<li>Paper_Type: " . $_SESSION['cart']['mach-sheeter']['paperType'] . "</li>"
						. "<li>GSM: " . $_SESSION['cart']['mach-sheeter']['gsm_min'] . " - " . $_SESSION['cart']['mach-sheeter']['gsm_max'] . "</li>"
						. "<li>Roll_Diameter: " . $_SESSION['cart']['mach-sheeter']['rollDiameter_min'] . " - " . $_SESSION['cart']['mach-sheeter']['rollDiameter_max'] . $_SESSION['cart']['mach-sheeter']['rollDiameter_unit'] . "</li>"
						. "<li>Slitting_Width: " . $_SESSION['cart']['mach-sheeter']['slittingWidth_min'] . " - " . $_SESSION['cart']['mach-sheeter']['slittingWidth_max'] . $_SESSION['cart']['mach-sheeter']['slittingWidth_unit'] . "</li>"
						. "<li>Cut-off Length: " . $_SESSION['cart']['mach-sheeter']['cutOffLength_min'] . " - " . $_SESSION['cart']['mach-sheeter']['cutOffLength_max'] . $_SESSION['cart']['mach-sheeter']['cutOffLength_unit'] . "</li>"

						. "<li>Cutting_MainDrive: " . $_SESSION['cart']['mach-sheeter']['cutting_mainDrive'] . "</li>"
						. "<li>Cutting_Knife: " . $_SESSION['cart']['mach-sheeter']['cutting_knife'] . "</li>"
						. "<li>Cutting_SL_Attach: " . $_SESSION['cart']['mach-sheeter']['cutting_sl_attach'] . "</li>"

						. "<li>URS_HydraulicShaftless: " . $_SESSION['cart']['mach-sheeter']['urs_hydraulicShaftless'] . "</li>"
						. "<li>URS_HTypeStand: " . $_SESSION['cart']['mach-sheeter']['urs_hTypeStand'] . "</li>"
						. "<li>URS_TensionDecurler: " . $_SESSION['cart']['mach-sheeter']['urs_tensionDecurler'] . "</li>"
						. "<li>URS_IndividualTension: " . $_SESSION['cart']['mach-sheeter']['urs_individualTension'] . "</li>"
						. "<li>URS_Mechanical: " . $_SESSION['cart']['mach-sheeter']['urs_mechanical'] . "</li>"
						. "<li>URS_AirHD: " . $_SESSION['cart']['mach-sheeter']['urs_airHD'] . "</li>"
						. "<li>URS_Others: " . $_SESSION['cart']['mach-sheeter']['urs_others'] . "</li>"
						. "<li>URS_RollWeight: " . $_SESSION['cart']['mach-sheeter']['urs_rollWeight'] . "</li>"

						. "<li>SYS_ComputerControl: " . $_SESSION['cart']['mach-sheeter']['sys_computerControl'] . "</li>"
						. "<li>SYS_WebGuideHydraulicEPC: " . $_SESSION['cart']['mach-sheeter']['sys_webGuideHydraulicEPC'] . "</li>"
						. "<li>SYS_Others: " . $_SESSION['cart']['mach-sheeter']['sys_others'] . "</li>"
						. "<li>SH_Details: " . $_SESSION['cart']['mach-sheeter']['sh_Details'] . "</li>"

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
						. "<li>Cutter Type: " . $_SESSION['cart']['mach-cutter']['cutterType'] . "</li>"
						. "<li>CT_Details: " . $_SESSION['cart']['mach-cutter']['ct_Details'] . "</li>"

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
						. "<li>BM_Quantity: " . $_SESSION['cart']['mach-bailing']['bm_quantity'] . "</li>"
						. "<li>BM_Details: " . $_SESSION['cart']['mach-bailing']['bm_Details'] . "</li>"

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
						. "<li>PRT_Quantity: " . $_SESSION['cart']['mach-rolltruck']['prt_quantity'] . "</li>"
						. "<li>PRT_Details: " . $_SESSION['cart']['mach-rolltruck']['prt_Details'] . "</li>"

						. "</ul></p>
						</div>
					</div>
				</div>";
				}

				echo "<a id='add-to-cart-btn' href='shipment.php'type='submit' class='btn btn-default'>Proceed to Checkout</a>";
			}
			?>
			<br>
			<br>
				<script type="text/javascript" src="scripts/jquery.min.js"></script>
				<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
				<script type="text/javascript" src="formlistener.js"></script>
			</body>
			</html>