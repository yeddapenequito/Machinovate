<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="http://localhost/pop-up/jquery/jquery.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<title>Machinovate | Cart-Summary</title>
</head>
<body>
	<?php include 'header_before_login.php';?>

	<!-- <div class="container">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<legend>Hello from the Other Side</legend>
				<?php
				session_start();
					//cart table design
				echo 'cart table design not yet done. still undecided.. go to <a href="shipment.php">shipment.php</a> in the meantime';
				?>
			</div>
		</div>
	</div>  --><!-- /.container -->
	<div id="faq" class="container">
		<div class="panel-group" id="accordion">
			<div class="faqHeader">Cart Accordion</div>
			<?php

			if (isset($_SESSION['cart']['SL_Customized']))
			{
				$modelName = "SL_Customized";
				echo "
				<div class=\"panel panel-default\">
					<div class=\"panel-heading\">
						<h4 class=\"panel-title\">
							<a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">$modelName</a>
						</h4>
					</div>
					<div id=\"collapseThree\" class=\"panel-collapse collapse\">
						<div class=\"panel-body\">
							<p>  Slitter Specs
								<ul>
									<li>Slitter_Type: {$_SESSION['cart'][$modelName]['slitterType']}</li>
									<li>Production_Volume: {$_SESSION['cart'][$modelName]['productionVolume']}</li>
									<li>Paper_Type: {$_SESSION['cart'][$modelName]['paperType']}</li>
									<li>GSM: {$_SESSION['cart'][$modelName]['gsm']}</li>
									<li>Roll_Diameter: {$_SESSION['cart'][$modelName]['rollDiameter']}</li>
									<li>Slitting_Width: {$_SESSION['cart'][$modelName]['slittingWidth']}</li>

									<!-- 	<li>Cutting_AddtlBlade</li> -->
									<li>Cutting_CoreCutterMachine: {$_SESSION['cart'][$modelName]['coreCutterMachine']}</li>

									<li>URS_HydraulicShaftless: {$_SESSION['cart'][$modelName]['rs_HydraulicShaftless']}</li>
									<li>URS_Single: {$_SESSION['cart'][$modelName]['rs_Single']}</li>
									<li>URS_Customized: {$_SESSION['cart'][$modelName]['rs_Customized']}</li>
									<li>URS_ShaftStand: {$_SESSION['cart'][$modelName]['rs_ShaftStand']}</li>
									<!-- 	<li>URS_Others: {</li> -->
										<li>URS_TonCapacity: {$_SESSION['cart'][$modelName]['tonCapacity']}</li>

										<li>Sys_WebGuideHydraulicEPC: {$_SESSION['cart'][$modelName]['sys_WebGuideHydraulicEPC']}</li>
										<li>Sys_Tension: {$_SESSION['cart'][$modelName]['sys_Tension']}</li>
										<li>Sys_BananaRoll_TensionRoller: {$_SESSION['cart'][$modelName]['sys_BananaRoll_TensionRoller']}</li>
										<li>Sys_BrakeSystem: {$_SESSION['cart'][$modelName]['sys_BrakeSystem']}</li>
										<li>Sys_FullyComputerized: {$_SESSION['cart'][$modelName]['sys_FullyComputerized']}</li>
										<!-- 	<li>Sys_Others: {</li> -->

											<li>Other_Details: {$_SESSION['cart'][$modelName]['otherDetails']}</li>

										</ul></p>


									</div>
								</div>
							</div>
							";
			}
			?>
					</div>
				</div>
				<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
				<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
			</body>
			</html>