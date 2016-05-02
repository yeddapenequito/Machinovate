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
			<div class="faqHeader"><h2>Machines Ordered</h2></div>
			
			<?php

			////sheeter
			//SL_Standard
			if (isset($_SESSION['cart']['SL_Standard']))
			{
				$modelName = "SL_Standard";
				$sheeterType = isset($_SESSION['cart'][$modelName]['slitterType']) ? $_SESSION['cart'][$modelName]['slitterType'] : "";
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
									<li>Sheeter_Type: {$sheeterType}</li>
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

									<!-- 	<li>Systems: {</li> -->
									<li>Sys_WebGuideHydraulicEPC: {$_SESSION['cart'][$modelName]['sys_WebGuideHydraulicEPC']}</li>
									<li>Sys_Tension: {$_SESSION['cart'][$modelName]['sys_Tension']}</li>
									<li>Sys_BananaRoll_TensionRoller: {$_SESSION['cart'][$modelName]['sys_BananaRoll_TensionRoller']}</li>
									<li>Sys_BrakeSystem: {$_SESSION['cart'][$modelName]['sys_BrakeSystem']}</li>
									<li>Sys_FullyComputerized: {$_SESSION['cart'][$modelName]['sys_FullyComputerized']}</li>
									<li>Sys_Others: {$_SESSION['cart'][$modelName]['sys_Others']}</li>

									<li>Other_Details: {$_SESSION['cart'][$modelName]['otherDetails']}</li>

									</ul>
								</p>
							</div>
						</div>
					</div>
				";
			}

			//SL_HeavyDuty
			if (isset($_SESSION['cart']['SL_HeavyDuty']))
			{
				$modelName = "SL_HeavyDuty";
				$sheeterType = isset($_SESSION['cart'][$modelName]['slitterType']) ? $_SESSION['cart'][$modelName]['slitterType'] : "";
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
									<li>Sheeter_Type: {$sheeterType}</li>
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

									<!-- 	<li>Systems: {</li> -->
									<li>Sys_WebGuideHydraulicEPC: {$_SESSION['cart'][$modelName]['sys_WebGuideHydraulicEPC']}</li>
									<li>Sys_Tension: {$_SESSION['cart'][$modelName]['sys_Tension']}</li>
									<li>Sys_BananaRoll_TensionRoller: {$_SESSION['cart'][$modelName]['sys_BananaRoll_TensionRoller']}</li>
									<li>Sys_BrakeSystem: {$_SESSION['cart'][$modelName]['sys_BrakeSystem']}</li>
									<li>Sys_FullyComputerized: {$_SESSION['cart'][$modelName]['sys_FullyComputerized']}</li>
									<li>Sys_Others: {$_SESSION['cart'][$modelName]['sys_Others']}</li>

									<li>Other_Details: {$_SESSION['cart'][$modelName]['otherDetails']}</li>

									</ul>
								</p>
							</div>
						</div>
					</div>
				";
			}

			//SL_Standard
			if (isset($_SESSION['cart']['SL_CRS']))
			{
				$modelName = "SL_CRS";
				$sheeterType = isset($_SESSION['cart'][$modelName]['slitterType']) ? $_SESSION['cart'][$modelName]['slitterType'] : "";
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
									<li>Sheeter_Type: {$sheeterType}</li>
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

									<!-- 	<li>Systems: {</li> -->
									<li>Sys_WebGuideHydraulicEPC: {$_SESSION['cart'][$modelName]['sys_WebGuideHydraulicEPC']}</li>
									<li>Sys_Tension: {$_SESSION['cart'][$modelName]['sys_Tension']}</li>
									<li>Sys_BananaRoll_TensionRoller: {$_SESSION['cart'][$modelName]['sys_BananaRoll_TensionRoller']}</li>
									<li>Sys_BrakeSystem: {$_SESSION['cart'][$modelName]['sys_BrakeSystem']}</li>
									<li>Sys_FullyComputerized: {$_SESSION['cart'][$modelName]['sys_FullyComputerized']}</li>
									<li>Sys_Others: {$_SESSION['cart'][$modelName]['sys_Others']}</li>

									<li>Other_Details: {$_SESSION['cart'][$modelName]['otherDetails']}</li>

									</ul>
								</p>
							</div>
						</div>
					</div>
				";
			}
			//SL_Customized
			if (isset($_SESSION['cart']['SL_Customized']))
			{
				$modelName = "SL_Customized";
				$sheeterType = isset($_SESSION['cart'][$modelName]['slitterType']) ? $_SESSION['cart'][$modelName]['slitterType'] : "";
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
									<li>Sheeter_Type: {$sheeterType}</li>
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
										<li>Sys_Others: {$_SESSION['cart'][$modelName]['sys_Others']}</li>

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
				$cutOffLen = isset($_SESSION['cart'][$modelName]['cutOffLength']) ? $_SESSION['cart'][$modelName]['cutOffLength'] : "";
				$addRolls = isset($_SESSION['cart'][$modelName]['rs_addRolls']) ? $_SESSION['cart'][$modelName]['rs_addRolls'] : "";
				
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
									<li>Cut_Off_Length: {$cutOffLen}</li>
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
									<li>URS_AddRolls: {$_SESSION['cart'][$modelName]['rs_s_addRolls']}</li>
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

			//SH_PIV
			if (isset($_SESSION['cart']['SH_SRV']))
			{
				$modelName = "SH_SRV";
				$cutOffLen = isset($_SESSION['cart'][$modelName]['cutOffLength']) ? $_SESSION['cart'][$modelName]['cutOffLength'] : "";
				$addRolls = isset($_SESSION['cart'][$modelName]['rs_addRolls']) ? $_SESSION['cart'][$modelName]['rs_addRolls'] : "";
				
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
									<li>Cut_Off_Length: {$cutOffLen}</li>
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
									<li>URS_AddRolls: {$_SESSION['cart'][$modelName]['rs_s_addRolls']}</li>
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

			//SH_PIV
			if (isset($_SESSION['cart']['SH_Compact']))
			{
				$modelName = "SH_Compact";
				$cutOffLen = isset($_SESSION['cart'][$modelName]['cutOffLength']) ? $_SESSION['cart'][$modelName]['cutOffLength'] : "";
				$addRolls = isset($_SESSION['cart'][$modelName]['rs_addRolls']) ? $_SESSION['cart'][$modelName]['rs_addRolls'] : "";
				
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
									<li>Cut_Off_Length: {$cutOffLen}</li>
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
									<li>URS_AddRolls: {$_SESSION['cart'][$modelName]['rs_s_addRolls']}</li>
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

			//SH_PIV
			if (isset($_SESSION['cart']['SH_Sync']))
			{
				$modelName = "SH_Sync";
				$cutOffLen = isset($_SESSION['cart'][$modelName]['cutOffLength']) ? $_SESSION['cart'][$modelName]['cutOffLength'] : "";
				$addRolls = isset($_SESSION['cart'][$modelName]['rs_addRolls']) ? $_SESSION['cart'][$modelName]['rs_addRolls'] : "";
				
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
									<li>Cut_Off_Length: {$cutOffLen}</li>
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
									<li>URS_AddRolls: {$_SESSION['cart'][$modelName]['rs_s_addRolls']}</li>
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

			//CT_137E
			if (isset($_SESSION['cart']['CT_137E']))
			{
				$modelName = "CT_137E";
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


			//CT_155E
			if (isset($_SESSION['cart']['CT_155E']))
			{
				$modelName = "CT_155E";
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

			//CT_185E
			if (isset($_SESSION['cart']['CT_185E']))
			{
				$modelName = "CT_185E";
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

			//CT_220E
			if (isset($_SESSION['cart']['CT_220E']))
			{
				$modelName = "CT_220E";
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

			//CT_260E
			if (isset($_SESSION['cart']['CT_260E']))
			{
				$modelName = "CT_260E";
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

			//CT_300E
			if (isset($_SESSION['cart']['CT_300E']))
			{
				$modelName = "CT_300E";
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
			<br>
			<br>

			<!--   <a id="cancel-btn" href="machines.php" class="btn btn-default">Cancel Order</a> -->
			<a id="add-to-cart-btn" href="shipment.php"type="submit" class="btn btn-default">Proceed to Checkout</a>
					</div>
				</div>
				<script type="text/javascript" src="scripts/jquery.min.js"></script>
				<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
				<script>	
					document.getElementById("your-shopping-cart-btn").remove();
				</script>
			</body>
			</html>