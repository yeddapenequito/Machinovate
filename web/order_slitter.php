<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('../mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// 1
	if (empty($_POST['slitterType'])) {
		$errors[] = 'You forgot to choose a cutter machine.';
	} else {
		$slitterType = mysqli_real_escape_string($dbc, trim($_POST['slitterType']));
	}
	
	// 2
	if (empty($_POST['productionVolume'])) {
		$errors[] = 'You forgot to enter comments.';
	} else {
		$productionVolume = mysqli_real_escape_string($dbc, trim($_POST['productionVolume']));
	}

	// 3
	if (empty($_POST['paperType'])) {
		$errors[] = 'You forgot to choose a cutter machine.';
	} else {
		$paperType = mysqli_real_escape_string($dbc, trim($_POST['paperType']));
	}
	
	//4
	if (empty($_POST['gsmMin'])) {
		$errors[] = 'You forgot to enter comments.';
	} else {
		$gsmMin = mysqli_real_escape_string($dbc, trim($_POST['gsmMin']));
	}

	// 5
	if (empty($_POST['gsmMax'])) {
		$errors[] = 'You forgot to choose a cutter machine.';
	} else {
		$gsmMax = mysqli_real_escape_string($dbc, trim($_POST['gsmMax']));
	}
	
	// 6
	if (empty($_POST['gsmUnit'])) {
		$errors[] = 'You forgot to enter comments.';
	} else {
		$gsmUnit = mysqli_real_escape_string($dbc, trim($_POST['gsmUnit']));
	}

	// 7
	if (empty($_POST['rollDiameterMin'])) {
		$errors[] = 'You forgot to choose a cutter machine.';
	} else {
		$rollDiameterMin = mysqli_real_escape_string($dbc, trim($_POST['rollDiameterMin']));
	}
	
	// 8
	if (empty($_POST['rollDiameterMax'])) {
		$errors[] = 'You forgot to enter comments.';
	} else {
		$rollDiameterMax = mysqli_real_escape_string($dbc, trim($_POST['rollDiameterMax']));
	}

	// 9
	if (empty($_POST['rollDiameterUnit'])) {
		$errors[] = 'You forgot to choose a cutter machine.';
	} else {
		$rollDiameterUnit = mysqli_real_escape_string($dbc, trim($_POST['rollDiameterUnit']));
	}
	
	// 11
	if (empty($_POST['slittingWidthMin'])) {
		$errors[] = 'You forgot to enter comments.';
	} else {
		$slittingWidthMin = mysqli_real_escape_string($dbc, trim($_POST['slittingWidthMin']));
	}

	
	if (empty($_POST['slittingWidthMax'])) {
		$errors[] = 'You forgot to choose a cutter machine.';
	} else {
		$slittingWidthMax = mysqli_real_escape_string($dbc, trim($_POST['slittingWidthMax']));
	}
	
	// 1
	if (empty($_POST['slittingWidthUnit'])) {
		$errors[] = 'You forgot to enter comments.';
	} else {
		$slittingWidthUnit = mysqli_real_escape_string($dbc, trim($_POST['slittingWidthUnit']));
	}

	//4
	$standardCheckbox = mysqli_real_escape_string($dbc, trim($_POST['standardCheckbox']));
	$addtlCheckbox = mysqli_real_escape_string($dbc, trim($_POST['addtlCheckbox']));
	$addtlBlade = mysqli_real_escape_string($dbc, trim($_POST['addtlBlade']));
	$coreCutterCheckbox = mysqli_real_escape_string($dbc, trim($_POST['coreCutterCheckbox']));
	
	
	//6
	$hydraulicShaftlessCheckbox = mysqli_real_escape_string($dbc, trim($_POST['hydraulicShaftlessCheckbox']));
	$singleCheckbox= mysqli_real_escape_string($dbc, trim($_POST['singleCheckbox']));
	$customizedCheckbox = mysqli_real_escape_string($dbc, trim($_POST['customizedCheckbox']));
	$stationaryShaftCheckbox = mysqli_real_escape_string($dbc, trim($_POST['stationaryShaftCheckbox']));
	$otherReelCheckbox = mysqli_real_escape_string($dbc, trim($_POST['otherReelCheckbox']));
	$reelStandOthers = mysqli_real_escape_string($dbc, trim($_POST['reelStandOthers']));
	
	// 1
	if (empty($_POST['tonCapacity'])) {
		$errors[] = 'You forgot to choose a cutter machine.';
	} else {
		$tonCapacity = mysqli_real_escape_string($dbc, trim($_POST['tonCapacity']));
	}
	
	//7
	$webGuideHydraulicEPCCheckbox = mysqli_real_escape_string($dbc, trim($_POST['webGuideHydraulicEPCCheckbox']));
	$tensionCheckbox = mysqli_real_escape_string($dbc, trim($_POST['tensionCheckbox']));
	$bananaRollCheckbox = mysqli_real_escape_string($dbc, trim($_POST['bananaRollCheckbox']));
	$breakSystemCheckbox = mysqli_real_escape_string($dbc, trim($_POST['breakSystemCheckbox']));
	$fullyComputerizedCheckbox = mysqli_real_escape_string($dbc, trim($_POST['fullyComputerizedCheckbox']));
	$systemOthersCheckbox= mysqli_real_escape_string($dbc, trim($_POST['systemOthersCheckbox']));
	$systemsOthers= mysqli_real_escape_string($dbc, trim($_POST['systemsOthers']));
	
	//1
	$otherDetails = mysqli_real_escape_string($dbc, trim($_POST['otherDetails']));
	

	



	if (empty($errors)) { // If everything's OK.
	
		// Register the agent in the database...
		
		// Make the query:
		$q = "INSERT INTO slitter(Slitter_Type, Production_Volume, Paper_Type, GSM_Min, GSM_Max, GSM_Unit, Roll_Diameter_Min, Roll_Diameter_Max, Roll_Diameter_Unit, Slitting_Width_Min, Slitting_Width_Max, Slitting_Width_Unit, Cutting_Standard, Cutting_Additional_CB, Cutting_AddtlBlade, Cutting_CoreCutterMachine, URS_HydraulicShaftless, URS_Single, URS_Customized, URS_ShaftStand, URS_OtherReel, URS_Others, URS_TonCapacity, Sys_WebGuideHydraulicEPC, Sys_Tension, Sys_BananaRoll_TensionRoller, Sys_BrakeSystem, Sys_FullyComputerized, Sys_OthersCheckbox, Sys_Others, Other_Details) VALUES('$slitterType', '$productionVolume', '$paperType','$gsmMin','$gsmMax','$gsmUnit', '$rollDiameterMin','$rollDiameterMax','$rollDiameterUnit','$slittingWidthMin','$slittingWidthMax','$slittingWidthUnit','$standardCheckbox ','$addtlCheckbox','$addtlBlade ','$coreCutterCheckbox ','$hydraulicShaftlessCheckbox ','$singleCheckbox','$customizedCheckbox','$stationaryShaftCheckbox','$otherReelCheckbox ','$reelStandOthers ','$tonCapacity','$webGuideHydraulicEPCCheckbox  ','$tensionCheckbox','$bananaRollCheckbox','$breakSystemCheckbox','$fullyComputerizedCheckbox','$systemOthersCheckbox','$systemsOthers','$otherDetails');";

		$r = @mysqli_query ($dbc, $q); // Run the query.

		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>An order has been added!</p><p><br /></p>';	
		
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The order could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		exit();
		
	} else { // Report the errors.
	
		echo '<div class="container"><h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		 // Print each error.
			echo " <div class='form-group'>
                                    <div class='alert alert-danger'>
                                        
                                        <strong>";
                                        foreach ($errors as $msg) {
                                        
                                        echo " $msg<br />\n";
                                     }
                                       echo "<p>Please try again.</p>
                                        
                                        </strong> 
                                    </div>
                                </div>";
		
		
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

	
		
		

} // End of the main Submit conditional.


?>

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
		<?php include 'header_on_form_completion.php';?>

		<div class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li><a href="slitter.php">Slitter</a></li>
				<li class="active">Slitter Machine Requirements Form</li>
			</ol>
			<form id="form" action="order_slitter.php" name="form" role="form" class="form-horizontal" method="post">
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
								<label><input class="type" name="slitterType" type="radio" value="SL_Standard" checked="checked">
									MACH-MSR (Standard)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" value="SL_HeavyDuty">
									MACH-MSR (Heavy Duty)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" value="SL_CRS">
									MACH-CRS (Cash Register Slitter)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" value="SL_Customized">
									Customized</label>
							</div>
						</div>
					</div>

					<!-- Production Vol. -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="production-vol">Production Volume:</label>

						<div class="col-sm-10">
							<div class="input-group">
								
								<input class="form-control" id="production-vol" min="0.001" name="productionVolume" step="0.001" type="number" required/>
								<span class="input-group-addon">Tons per day</span>
							</div>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<!-- Paper Type -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="paper-type">Paper Type:</label>

						<div class="col-sm-10">
							<input class="form-control" id="paper-type" name="paperType" placeholder="e.g. Ledger, Newsprint, Carbonless" type="text" required/>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<!-- GSM -->
					<div class="form-group required">

						<label  class="control-label col-sm-2" for="gsm">GSM:</label>

						<div class="col-sm-10">
							<div class="form-inline">
								<input class="form-control" min="0.001" name="gsmMin" placeholder="Min" size="5" step="0.001" type="number" required>

								<span>to</span>

								<input class="form-control" min="0.001" name="gsmMax" placeholder="Max" size="5" step="0.001" type="number" required>

								<select class="form-control" name="gsmUnit"> 
									<option value="inches">inches</option>
									<option value="millimeters">millimeters</option>
								</select>
								<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<!-- Roll Diameter -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="roll-diameter">Roll Diameter:</label>

						<div class="col-sm-10">
							<div class="form-inline">

									<input class="form-control" min="0.001" name="rollDiameterMin" placeholder="Min" size="5" step="0.001" type="number" required>

									<span>to</span>

									<input class="form-control" min="0.001" name="rollDiameterMax" placeholder="Max" size="5" step="0.001" type="number" required>

									<select class="form-control" name="rollDiameterUnit"> 
										<option value="inches">inches</option>
										<option value="millimeters">millimeters</option>
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
								<input class="form-control" min="0.001" name="slittingWidthMin" placeholder="Min" size="5" step="0.001" type="number" required>

								<span>to</span>

								<input class="form-control" min="0.001" name="slittingWidthMax" placeholder="Max" size="5" step="0.001" type="number" required>

								<select class="form-control" name="slittingWidthUnit"> 
									<option value="inches">inches</option>
									<option value="millimeters">millimeters</option>
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
									<input id="standard-checkbox" name="standardCheckbox" type="checkbox" value="Standard" disabled checked="true">
									Standard [Five(5)] Set Male/Female Circular Blade with Trim Removal Blower

									<input id="standard-checkbox" name="standardCheckbox" type="hidden" value="Standard">
								</label>
							</div>

							<div class="checkbox">
								
								<label><input id="slitter-additional-checkbox" name="addtlCheckbox" value="additional" type="checkbox">
									<input id="slitter-additional-checkbox" name="addtlCheckbox" value="NO" type="hidden">
									<div class="form-inline">
										
										<div class="form-group">
											
											<label class="control-label" for"slitter-additional-text-field">Additional</label>
											<input class="form-control" disabled id="slitter-additional-text-field" min="1" name="addtlBlade" type="number"> set/s of one pair male/female

											<input class="form-control" name="addtlBlade" type="hidden" value="NO">
										</div>
									</div>
								</label>
							</div>

							<div class="checkbox">
								
								<label>
									<input id="core-cutter-checkbox" name="coreCutterCheckbox" type="checkbox" value="Core Cutter Machine">
									Core Cutter Machine
								</label>

								<input id="core-cutter-checkbox" name="coreCutterCheckbox" type="hidden" value="NO">

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
								<label><input type="checkbox" name="hydraulicShaftlessCheckbox" value="Hydraulic Shaftless with Air Brake">
									Hydraulic Shaftless with Air Break</label>
							</div>

							<input type="hidden" name="hydraulicShaftlessCheckbox" value="NO">

							<div class="checkbox">
								<label><input type="checkbox" name="singleCheckbox" value="Single">
									Single</label>
							</div>

							<input type="hidden" name="singleCheckbox" value="NO">

							<div class="checkbox">
								<label><input type="checkbox" name="customizedCheckbox" value="Customized">
									Customized</label>
							</div>

							<input type="hidden" name="customizedCheckbox" value="NO">

							<div class="checkbox">
								<label><input type="checkbox" name="stationaryShaftCheckbox" value="Stationary Shaft Stand">
									Stationary Shaft Stand</label>
							</div>

							<input type="hidden" name="stationaryShaftCheckbox" value="NO">

							<div class="checkbox">
								<label><input id="reel-stand-others-checkbox" name="otherReelCheckbox" type="checkbox" value="Others"> 

									<input id="reel-stand-others-checkbox" name="otherReelCheckbox" type="hidden" value="NO"> 

									<div class="form-inline">
										<div class="form-group">
											<label class="control-label" for="reel-stand-others-text-field">
												Others:</label>
											<input class="form-control" disabled id="reel-stand-others-text-field" name="reelStandOthers"  type="text" required>

											<input class="form-control" name="reelStandOthers"  type="hidden" value="NO">
										</div>
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

								<input class="form-control" id="ton-capacity"  min="0.001"  step="0.01" name="tonCapacity"  type="number" required>
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
							  <label><input name="webGuideHydraulicEPCCheckbox" type="checkbox" value="Heavy Duty Web Guide EPC System">
							  	Heavy Duty Web Guide Hydraulic EPC Control System 
					with Automation – Centring Sensor and Control, 4 pieces Roller and Roll Steering Guiding with Base</label>

								<input name="webGuideHydraulicEPCCheckbox" type="hidden" value="NO">

							</div>
							<div class="checkbox">
							  <label><input name="tensionCheckbox" type="checkbox" value="Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing">
							  	Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing</label>

							  	<input name="tensionCheckbox" type="hidden" value="NO">
							</div>

							<div class="checkbox">
							  <label><input name="bananaRollCheckbox" type="checkbox" value="Banana Roll and Tension Roller">
							  	Banana Roll and Tension Roller</label>

							  	<input name="bananaRollCheckbox" type="hidden" value="NO">

							</div>

							<div class="checkbox">
							  <label><input name="breakSystemCheckbox" type="checkbox" value="Water Cooling Brake Systems">
							  	Water Cooling Brake Systems</label>

							  	<input name="breakSystemCheckbox" type="hidden" value="NO">

							</div>

							<div class="checkbox">
							  <label><input name="fullyComputerizedCheckbox" type="checkbox" value="Fully Computerized Control System">
							  	Fully Computerized Control System</label>

							  	<input name="fullyComputerizedCheckbox" type="hidden" value="NO">

							</div>
							
							<div class="checkbox">
								<label><input id="systems-others-checkbox" name="systemOthersCheckbox" type="checkbox" value="System Others">

								<input id="systems-others-checkbox" name="systemOthersCheckbox" type="hidden" value="NO">

									<div class="form-inline">
										<div class="form-group">
											<label class="control-label" for="systems-others-text-field">
												Others:</label>
											<input disabled class="form-control" id="systems-others-text-field"  name="systemsOthers"  type="text">

											<input id="systems-others-text-field"  name="systemsOthers"  type="hidden" value="NO">

										</div>
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
					  		<textarea placeholder="Place your additional requirements here if any." class="form-control" id="comment" rows="8" name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
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
