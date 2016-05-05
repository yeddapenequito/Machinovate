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
			if (!isset($_SESSION["cart"])) {
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
						<ul>"
						. "<li>Slitter Type:" . $_SESSION['cart']['mach-slitter']['slitterType'] . "</li>"
						. "<li>Production Volume:" . $_SESSION['cart']['mach-slitter']['productionVolume'] . "</li>"
						. "<li>Paper_Type:" . $_SESSION['cart']['mach-slitter']['paperType'] . "</li>"
						. "<li>GSM:" . $_SESSION['cart']['mach-slitter']['gsm'] . "</li>"
						. "<li>Roll_Diameter:" . $_SESSION['cart']['mach-slitter']['rollDiameter'] . "</li>"
						. "<li>Slitting_Width:" . $_SESSION['cart']['mach-slitter']['slittingWidth'] . "</li>"

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
					echo "<a href='javascript:deleteSlitter()' id='deleteSlitter'>Delete Item</a>";
					echo "<a href='order_slitter.php' target='_blank'>Edit Item</a>";
				}


//				<a id="cancel-btn" href="machines.php" class="btn btn-default">Cancel Order</a>
//				<a id="add-to-cart-btn" href="shipment.php"type="submit" class="btn btn-default">Proceed to Checkout</a>
			}
			?>
			<br>
			<br>

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