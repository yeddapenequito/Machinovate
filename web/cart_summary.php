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
			<div class="faqHeader">Machines Ordered</div>
			
			<?php

			////sheeter
			//SL_Customized
			if (isset($_SESSION['cart']['SL_Customized']))
			{
				$modelName = "SL_Customized";
				echo "
				<div class=\"panel panel-default\">
					<div class=\"panel-heading\">
						<h4 class=\"panel-title\">
							<a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseSlitter\">$modelName</a>
						</h4>
					</div>
					<div id=\"collapseSlitter\" class=\"panel-collapse collapse\">
						<div class=\"panel-body\">
							<p>  sheeter Specs
								<ul>
									<li>sheeter_Type: {$_SESSION['cart'][$modelName]['sheeterType']}</li>
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


			////SHEETER
			//SH_PIV
			if (isset($_SESSION['cart']['SH_PIV']))
			{
				$modelName = "SH_PIV";
				echo "
				<div class=\"panel panel-default\">
					<div class=\"panel-heading\">
						<h4 class=\"panel-title\">
							<a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseSheeter\">$modelName</a>
						</h4>
					</div>
					<div id=\"collapseSheeter\" class=\"panel-collapse collapse\">
						<div class=\"panel-body\">
							<p>  Sheeter Specs
								<ul>
									<!--general section -->
									<li>Sheeter_Type: {$_SESSION['cart'][$modelName]['sheeterType']}</li>
									<li>Production_Volume: {$_SESSION['cart'][$modelName]['productionVolume']}</li>
									<li>Paper_Type: {$_SESSION['cart'][$modelName]['paperType']}</li>
									<li>GSM: {$_SESSION['cart'][$modelName]['gsm']}</li>
									<li>Roll_Diameter: {$_SESSION['cart'][$modelName]['rollDiameter']}</li>
									<li>Cut_Off_Length: {$_SESSION['cart'][$modelName]['cutOffLength']}</li>
									<li>Slitting_Width: {$_SESSION['cart'][$modelName]['slittingWidth']}</li>

									<!--cutting section-->
									<li>Cutting_Main_Drive: {$_SESSION['cart'][$modelName]['cs_mainDrive']}</li>
									<li>Cutting_Knife: {$_SESSION['cart'][$modelName]['cs_knife']}</li>
									<li>Cutting_Slitter: {$_SESSION['cart'][$modelName]['cs_slitter']}</li>
									<li>Cutting_Slitter_Max: {$_SESSION['cart'][$modelName]['cs_slitterMax']}</li>

									<!--URS-Reel Stand-->
									<li>URS_HydraulicShaftless: {$_SESSION['cart'][$modelName]['rs_hydraulicShaftless']}</li>
									<li>URS_HydraulicShaftless_Type: {$_SESSION['cart'][$modelName]['rs_hs']}</li>
									<li>URS_Standard: {$_SESSION['cart'][$modelName]['rs_standard']}</li>
									<li>URS_Standard_Type: {$_SESSION['cart'][$modelName]['rs_s']}</li>
									<li>URS_AddRolls: {$_SESSION['cart'][$modelName]['rs_addRolls']}</li>
									<li>URS_AutoTension: {$_SESSION['cart'][$modelName]['rs_autoTension']}</li>
									<li>URS_Indiv_AutoTension: {$_SESSION['cart'][$modelName]['rs_indivAutoTension']}</li>


									<!--Shaft -->
									<li>SHAFT_Mechanical: {$_SESSION['cart'][$modelName]['sh_mechanical']}</li>
									<li>SHAFT_AirShaft: {$_SESSION['cart'][$modelName]['sh_airShaft']}</li>
									<li>SHAFT_Others: {$_SESSION['cart'][$modelName]['sh_others']}</li>

									<!--Roll Weight -->
									<li>Roll_Weight: {$_SESSION['cart'][$modelName]['rollWeight']}</li>

									<!--Systems-->
									<li>Sys_Computer_Control: {$_SESSION['cart'][$modelName]['sys_ComputerControl']}</li>
									<li>Sys_WebGuide_Hydraulic_EPC: {$_SESSION['cart'][$modelName]['sys_WebGuideHydraulicEPC']}</li>
									<li>Sys_Others: {$_SESSION['cart'][$modelName]['sys_Others']}</li>

									<!--Sys_Others:-->
									<li>Other_Details: {$_SESSION['cart'][$modelName]['otherDetails']}</li>

										</ul></p>


									</div>
								</div>
							</div>
							";
			}

			////cutter
			//CT_115E
			if (isset($_SESSION['cart']['CT_115E']))
			{
				$modelName = "CT_115E";
				echo "
				<div class=\"panel panel-default\">
					<div class=\"panel-heading\">
						<h4 class=\"panel-title\">
							<a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseCutter\">$modelName</a>
						</h4>
					</div>
					<div id=\"collapseCutter\" class=\"panel-collapse collapse\">
						<div class=\"panel-body\">
							<p>  sheeter Specs
								<ul>
									<li>cutter_Type: {$_SESSION['cart'][$modelName]['cutter_Type']}</li>
									
											<li>Other_Details: {$_SESSION['cart'][$modelName]['otherDetails']}</li>

										</ul></p>


									</div>
								</div>
							</div>
							";
			}

			////bailing
			//OT_Bailing
			if (isset($_SESSION['cart']['OT_Bailing']))
			{
				$modelName = "OT_Bailing";
				echo "
				<div class=\"panel panel-default\">
					<div class=\"panel-heading\">
						<h4 class=\"panel-title\">
							<a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseBailing\">$modelName</a>
						</h4>
					</div>
					<div id=\"collapseBailing\" class=\"panel-collapse collapse\">
						<div class=\"panel-body\">
							<p>  sheeter Specs
								<ul>
									<li>Bailing_Quantity: {$_SESSION['cart'][$modelName]['bailing_Quantity']}</li>
									
											<li>Other_Details: {$_SESSION['cart'][$modelName]['otherDetails']}</li>

										</ul></p>


									</div>
								</div>
							</div>
							";
			}

			////Paper Roll
			//OT_Pushcart
			if (isset($_SESSION['cart']['OT_Pushcart']))
			{
				$modelName = "OT_Pushcart";
				echo "
				<div class=\"panel panel-default\">
					<div class=\"panel-heading\">
						<h4 class=\"panel-title\">
							<a class=\"accordion-toggle collapsed\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapsePushcart\">$modelName</a>
						</h4>
					</div>
					<div id=\"collapsePushcart\" class=\"panel-collapse collapse\">
						<div class=\"panel-body\">
							<p>  sheeter Specs
								<ul>
									<li>Bailing_Quantity: {$_SESSION['cart'][$modelName]['Paper_Roll_Quantity']}</li>
									
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