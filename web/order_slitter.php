<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Order Now</title>
	</head>
	<body>
		<?php include 'header_on_form_completion.php';
			session_start();

			function setStickyText($x){
				if (isset($_SESSION["cart"]["mach-slitter"][$x]))
					echo $_SESSION["cart"]["mach-slitter"][$x];
			}

			function setStickyRadio($x, $y){
				if (isset($_SESSION["cart"]["mach-slitter"][$x]) && $_SESSION["cart"]["mach-slitter"][$x] == $y)
					echo 'checked="checked"';
			}

			function setStickyChkbox($x){
				if (isset($_SESSION["cart"]["mach-slitter"][$x]) && $_SESSION["cart"]["mach-slitter"][$x] == "1")
					echo 'checked="checked"';
			}

			function setStickyCheckWithText($x){
				if (isset($_SESSION["cart"]["mach-slitter"][$x]) && $_SESSION["cart"]["mach-slitter"][$x] !== "0")
					echo 'checked="checked"';
			}

			function setStickyOption($x, $y){
				if (isset($_SESSION["cart"]["mach-slitter"][$x]) && $_SESSION["cart"]["mach-slitter"][$x] == $y)
					echo 'selected="selected"';
			}
			
		?>
		<div class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li><a href="slitter.php">Slitter</a></li>
				<li class="active">Machine Order Form</li>
			</ol>
			<!-- <form id="form-slitter" action="order_slitter.php" name="form" role="form" class="form-horizontal" method="post"> -->
			<form id="formslitter" role="form" class="form form-horizontal" method="post">
				<legend>
					<h1>Slitter Machine Requirements Form</h1>
				</legend>
				<div class="form-group">
					<div class="alert alert-info">
						
					  	<p>Please bear with us. This is going to take long.</p>
						<p>If you have any concerns, please feel free to contact any of these numbers: (02) 404 6676/(02) 355 4635</p>
					</div>
				</div>
				<p style="color:red;font-style:italic">* Required fields.</p>

				<fieldset> <!--General Section-->
					<legend>General Section</legend>

					<!-- Type -->
					<div class="form-group required">

						<label for="type" class="control-label col-sm-2">Type:</label>

						<div class="col-sm-10">
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" checked value="SL_Standard" <?php setStickyRadio("slitterType", "SL_Standard");?>/>
									MACH-MSR (Standard)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" value="SL_HeavyDuty" <?php setStickyRadio("slitterType", "SL_HeavyDuty");?>/>
									MACH-MSR (Heavy Duty)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" value="SL_CRS" <?php setStickyRadio("slitterType", "SL_CRS");?>/>
									MACH-CRS (Cash Register Slitter)</label>
							</div
							>
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" value="SL_Customized" <?php setStickyRadio("slitterType", "SL_Customized");?>/>
									Customized</label>
							</div>
						</div>
					</div>

					<!-- Production Vol. -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="production-vol">Production Volume:</label>

						<div class="col-sm-10">
							<div class="input-group">
								
								<input class="form-control" id="production-vol" min="0.001" name="productionVolume" step="0.001" type="number" required value='<?php setStickyText("productionVolume");?>'/>
								<span class="input-group-addon">Tons per day</span>
							</div>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<!-- Paper Type -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="paper-type">Paper Type:</label>

						<div class="col-sm-10">
							<input class="form-control" id="paper-type" name="paperType" placeholder="e.g. Ledger, Newsprint, Carbonless" type="text" required value='<?php setStickyText("paperType");?>'/>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<!-- GSM -->
					<div class="form-group required">

						<label  class="control-label col-sm-2" for="gsm">GSM:</label>

						<div class="col-sm-10">
							<div class="form-inline">
								<input class="form-control" min="0.001" name="gsmMin" placeholder="Min" size="5" step="0.001" type="number" required value='<?php setStickyText("gsm_min");?>'/>

								<span>to</span>

								<input class="form-control" min="0.001" name="gsmMax" placeholder="Max" size="5" step="0.001" type="number" required value='<?php setStickyText("gsm_max");?>'/>
								grams per square meter
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<!-- Roll Diameter -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="roll-diameter">Roll Diameter:</label>

						<div class="col-sm-10">
							<div class="form-inline">

									<input class="form-control" min="0.001" name="rollDiameterMin" placeholder="Min" size="5" step="0.001" type="number" required value='<?php setStickyText("rollDiameter_min");?>'/>

									<span>to</span>

									<input class="form-control" min="0.001" name="rollDiameterMax" placeholder="Max" size="5" step="0.001" type="number" required value='<?php setStickyText("rollDiameter_max");?>'/>

									<select id="rdUnit" class="form-control" name="rollDiameterUnit"> 
										<option value="&quot;" <?php setStickyOption("rollDiameter_unit", "\"");?>>inches</option>
										<option value="mm" <?php setStickyOption("rollDiameter_unit", "mm");?>>millimeters</option>
									</select>
									<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<!-- Slitting Width -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="slitting-width">Slitting Width:</label>

						<div class="col-sm-10">
							<div class="form-inline">
								<input class="form-control" min="0.001" name="slittingWidthMin" placeholder="Min" size="5" step="0.001" type="number" required value='<?php setStickyText("slittingWidth_min");?>'/>

								<span>to</span>

								<input class="form-control" min="0.001" name="slittingWidthMax" placeholder="Max" size="5" step="0.001" type="number" required value='<?php setStickyText("slittingWidth_max");?>'/>

								<select id="swUnit" class="form-control" name="slittingWidthUnit"> 
									<option value="&quot;" <?php setStickyOption("slittingWidth_unit", "\"");?>>inches</option>
									<option value="mm" <?php setStickyOption("slittingWidth_unit", "mm");?>>millimeters</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset> <!--Cutting Section-->

					<legend>Cutting Section</legend>

					<!-- Slitter -->
					<div class="form-group required">

						<label  class="control-label col-sm-2" for="slitter">Slitter:</label>

						<div class="col-sm-10">
							<div class="checkbox">
								
								<label> <!--required field-->
									<input id="standard-checkbox" name="standardCheckbox" type="checkbox" value="standard" disabled checked="checked">
									Standard [Five(5)] Set Male/Female Circular Blade with Trim Removal Blower
								</label>
							</div>

							<div class="checkbox">
								<label>
									<input id="slitter-additional-checkbox" name="addtlCheckbox" value="additional" type="checkbox" <?php setStickyCheckWithText("addtlBlade");?>/>
									<div class="form-inline">
										Additional
										<input class="form-control" disabled id="slitter-additional-text-field" min="1" name="addtlBlade" type="number" value='<?php setStickyText("addtlBlade");?>'/> set/s of one pair male/female
									</div>
								</label>
							</div>

							<div class="checkbox">
								
								<label>
									<input id="core-cutter-checkbox" name="coreCutterCheckbox" type="checkbox" value="Core Cutter Machine" <?php setStickyChkbox("coreCutterMachine");?>/>
									Core Cutter Machine
								</label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset> <!--Unwind Roll Stand Section-->

					<legend>Unwind Roll Stand Section</legend>

					<!-- Reel Stand -->
					<div class="form-group required">
						<label class="control-label col-sm-2">Reel Stand:</label>
						<div class="col-sm-10">

							<div class="checkbox">
								<label><input id="rs-HydraulicShaftless" type="checkbox" name="hydraulicShaftlessCheckbox" value="1" <?php setStickyChkbox("rs_HydraulicShaftless");?>/>
									Hydraulic Shaftless with Air Break</label>
							</div>

							<div class="checkbox">
								<label><input id="rs-Single"type="checkbox" name="singleCheckbox" value="2" <?php setStickyChkbox("rs_Single");?>>
									Single</label>
							</div>

							<div class="checkbox">
								<label><input id="rs-Customized" type="checkbox" name="customizedCheckbox" value="3" <?php setStickyChkbox("rs_Customized");?>>
									Customized</label>
							</div>

							<div class="checkbox">
								<label><input id="rs-ShaftStand" type="checkbox" name="stationaryShaftCheckbox" value="4" <?php setStickyChkbox("rs_ShaftStand");?>>
									Stationary Shaft Stand</label>
							</div>

							<div class="checkbox">
								<label>
									<input id="reel-stand-others-checkbox" name="otherReelCheckbox" type="checkbox" value="5" <?php setStickyCheckWithText("rs_Others");?>/>
									<div class="form-inline">
										Others
										<input class="form-control" disabled id="reel-stand-others-text-field" name="reelStandOthers"  type="text" required value='<?php setStickyText("rs_Others");?>'/>
									</div>
								</label>
							</div>
						</div>
					</div>

					<!-- Ton Capacity -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="ton-capacity">Ton Capacity:</label>

						<div class="col-sm-10">
							<div class="input-group">
								<input class="form-control" id="ton-capacity" min="0.001"  step="0.001" name="tonCapacity"  type="number" required value='<?php setStickyText("tonCapacity");?>'/>
								<span class="input-group-addon">Tons</span>
							</div>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</fieldset>

				<fieldset> <!--Systems Section-->

					<legend>Systems Section</legend>

					<!-- Systems -->
					<div class="form-group required">

						<label class="control-label col-sm-2">Systems:</label>

						<div class="col-sm-10">
							<div class="checkbox">
							  <label><input id="sys-WebGuideHydraulicEPC" name="webGuideHydraulicEPCCheckbox" type="checkbox" value="1" <?php setStickyChkbox("sys_WebGuideHydraulicEPC");?>>
							  	Heavy Duty Web Guide Hydraulic EPC Control System 
					with Automation – Centring Sensor and Control, 4 pieces Roller and Roll Steering Guiding with Base</label>
							</div>
							<div class="checkbox">
							  <label><input id="sys-Tension" name="tensionCheckbox" type="checkbox" value="2" <?php setStickyChkbox("sys_Tension");?>>
							  	Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing</label>
							</div>

							<div class="checkbox">
							  <label><input id="sys-BananaRoll-TensionRoller" name="bananaRollCheckbox" type="checkbox" value="3" <?php setStickyChkbox("sys_BananaRoll_TensionRoller");?>>
							  	Banana Roll and Tension Roller</label>
							</div>

							<div class="checkbox">
							  <label><input id="sys-BrakeSystem" name="breakSystemCheckbox" type="checkbox" value="4" <?php setStickyChkbox("sys_BrakeSystem");?>>
							  	Water Cooling Brake Systems</label>
							</div>

							<div class="checkbox">
							  <label><input id="sys-FullyComputerized" name="fullyComputerizedCheckbox" type="checkbox" value="5" <?php setStickyChkbox("sys_FullyComputerized");?>>
							  	Fully Computerized Control System</label>
							</div>
							
							<div class="checkbox">
								<label>
									<input id="systems-others-checkbox" name="systemOthersCheckbox" type="checkbox" value="6" <?php setStickyCheckWithText("sys_Others");?>/>
									<div class="form-inline">
										Others:
										<input disabled class="form-control" id="systems-others-text-field"  name="systemsOthers"  type="text" value='<?php setStickyText("sys_Others");?>'/>
									</div>
								</label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset> <!--Other Details Section-->
					<legend>Other Details</legend>

					<div class="form-group">
						<label for="comment" class="control-label col-sm-2">Details:</label>
						<div class="col-sm-10">
					  		<textarea placeholder="Place your additional requirements here if any." class="form-control" id="comment" rows="8" name="otherDetails"><?php setStickyText("sl_Details");?></textarea>
						</div>
					</div>
				</fieldset>

				<!-- Submit and Cancel Buttons -->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit">
						<a id="cancel-btn" onclick="window.history.back()">Cancel</a>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->
		
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="formlistener.js"></script>
		<script type="text/javascript" src="scripts/validator.min.js"></script>

		<script type="text/javascript">

			document.getElementById("slitter-additional-checkbox").onchange = function() {
				
				if(document.getElementById("slitter-additional-checkbox").checked) {
					document.getElementById("slitter-additional-text-field").removeAttribute("disabled");
					document.getElementById("slitter-additional-text-field").setAttribute("required", "required");
				}
				else {
					document.getElementById("slitter-additional-text-field").setAttribute("disabled", "disabled");
					document.getElementById("slitter-additional-text-field").removeAttribute("required");

					document.getElementById("slitter-additional-text-field").value = "";
				}
			};

			document.getElementById("reel-stand-others-checkbox").onchange = function() {
			
				if(document.getElementById("reel-stand-others-checkbox").checked) {
					document.getElementById("reel-stand-others-text-field").removeAttribute("disabled");
					document.getElementById("reel-stand-others-text-field").setAttribute("required", "required");
				}
				else {
					document.getElementById("reel-stand-others-text-field").setAttribute("disabled", "disabled");
					document.getElementById("reel-stand-others-text-field").removeAttribute("required");
					document.getElementById("reel-stand-others-text-field").value = "";
				}
			};

			document.getElementById("systems-others-checkbox").onchange = function() {
				
				if(document.getElementById("systems-others-checkbox").checked) {
					document.getElementById("systems-others-text-field").removeAttribute("disabled");
					document.getElementById("systems-others-text-field").setAttribute("required", "required");
				}
				else {
					document.getElementById("systems-others-text-field").setAttribute("disabled", "disabled");
					document.getElementById("systems-others-text-field").removeAttribute("required");
					document.getElementById("systems-others-text-field").value = "";
				}
			};
		</script>
	</body>
</html>
