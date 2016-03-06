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

		<div  id="order-slitter" class="container">
			<h1 class="page-header">Paper Slitter Form Requirements</h1>
			<p>Please bear with us. This is going to take long.</p>
			<form action="shipment.php" role="form" class="form-horizontal">
				<fieldset>
					<legend>General Section</legend>

					<!-- Type -->
					<div class="form-group">

						<label for="type" class="control-label col-sm-2">Type:</label>

						<div class="col-sm-10">
							<div class="radio">
								<label><input class="type" name="typeRadio" type="radio" value="mach-msr standard">
									MACH-MSR (Standard)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="typeRadio" type="radio" value="mach-msr heavy duty">
									MACH-MSR (Heavy Duty)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="typeRadio" type="radio" value="mach-crs">
									MACH-CRS (Cash Register Slitter)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="typeRadio" type="radio" value="customized">
									Customized</label>
							</div>
						</div>
					</div>

					<!-- Production Vol. -->
					<div class="form-group">

						<label class="control-label col-sm-2" for="production-vol">Production Vol:</label>

						<div class="col-sm-10">
							<div class="input-group">
								
								<input class="form-control" id="production-vol" min="0" name="productionVol" step=".01" type="number"/>
								<span class="input-group-addon">Tons per day</span>
							</div>
						</div>
					</div>

					<!-- Paper Type -->
					<div class="form-group">

						<label class="control-label col-sm-2" for="paper-type">Paper Type:</label>

						<div class="col-sm-10">
							<input class="form-control" id="paper-type" name="paperType" placeholder="e.g. Ledger, Newsprint, Carbonless" type="text"/>
						</div>
					</div>

					<!-- GSM -->
					<div class="form-group">

						<label  class="control-label col-sm-2" for="gsm">GSM:</label>

						<div class="col-sm-10">
							<div class="form-inline">
								<input class="form-control" min="0" name="gsmMin" placeholder="Min" size="5" step=".01" type="number">

								<span>to</span>

								<input class="form-control" min="0" name="gsmMax" placeholder="Max" size="5" step=".01" type="number">

								<select class="form-control" name="gsmUnit"> 
									<option value="inches">inches</option>
									<option value="millimeters">millimeters</option>
								</select>
							</div>
						</div>
					</div>

					<!-- Roll Diameter -->
					<div class="form-group">

						<label class="control-label col-sm-2" for="roll-diameter">Roll Diameter:</label>

						<div class="col-sm-10">
							<div class="form-inline">

									<input class="form-control" min="0" name="rollDiameterMin" placeholder="Min" size="5" step=".01" type="number">

									<span>to</span>

									<input class="form-control" min="0" name="rollDiameterMax" placeholder="Max" size="5" step=".01" type="number">

									<select class="form-control" name="rollDiameterUnit"> 
										<option value="inches">inches</option>
										<option value="millimeters">millimeters</option>
									</select>
							</div>
						</div>
					</div>

					<!-- Slitting Width -->
					<div class="form-group">

						<label class="control-label col-sm-2" for="slitting-width">Slitting Width:</label>

						<div class="col-sm-10">
							<div class="form-inline">
								<input class="form-control" min="0" name="slittingWidthMin" placeholder="Min" size="5" step=".01" type="number">

								<span>to</span>

								<input class="form-control" min="0" name="slittingWidthMax" placeholder="Max" size="5" step=".01" type="number">

								<select class="form-control" name="slittingWidthUnit"> 
									<option value="inches">inches</option>
									<option value="millimeters">millimeters</option>
								</select>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>

					<legend>Cutting Section</legend>

					<!-- Slitter -->
					<div class="form-group">

						<label  class="control-label col-sm-2" for="slitter">Slitter:</label>

						<div class="col-sm-10">
							<div class="checkbox">
								
								<label>
									<input id="standard-checkbox" name="slitterCheckbox" type="checkbox" value="standard">
									Standard[Five(5)] Set Male/Female Circular Blade with Trim Removal Blower
								</label>
							</div>

							<div class="checkbox">
								
								<label><input disabled id="slitter-additional-checkbox" name="slitterCheckbox" type="checkbox">
									<div class="form-inline">
										
										<div class="form-group">
											
											<label class="control-label" for"slitter-additional-text-field">Additional</label>
											<input class="form-control" disabled id="slitter-additional-text-field" min="0" name="slitterAdditional" step=".01" type="number"> set of one pair male/female
										</div>
									</div>
								</label>
							</div>

							<div class="checkbox">
								
								<label>
									<input id="core-cutter-checkbox" name="slitterCheckbox" type="checkbox" value="core cutter">
									Core Cutter Machine
								</label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>

					<legend>Unwind Roll Stand Section</legend>

					<!-- Reel Stand -->
					<div class="form-group">
						<label class="control-label col-sm-2">Reel Stand:</label>
						<div class="col-sm-10">

							<div class="checkbox">
								<label><input type="checkbox" name="unwindRollStandCheckbox" value="hydraulic">
									Hydraulic Shaftless with Air Break</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="unwindRollStandCheckbox" value="single">
									Single</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="unwindRollStandCheckbox" value="customized">
									Customized</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="unwindRollStandCheckbox" value="stationary">
									Stationary Shaft Stand</label>
							</div>

							<div class="checkbox">
								<label><input id="reel-stand-others-checkbox" name="unwindRollStandCheckbox" type="checkbox"> 
									<div class="form-inline">
										<div class="form-group">
											<label class="control-label" for="reel-stand-others-text-field">
												Others:</label>
											<input class="form-control" disabled id="reel-stand-others-text-field" name="reelStandOthers" type="text">
										</div>
									</div>
								</label>
							</div>
						</div>
					</div>

					<!-- Ton Capacity -->
					<div class="form-group">

						<label class="control-label col-sm-2" for="ton-capacity">Ton Capacity:</label>

						<div class="col-sm-10">
							<div class="input-group">
								<input class="form-control" id="ton-capacity"  name="tonCapacity"  type="text">
								<span class="input-group-addon">Tons</span>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>

					<legend>Systems Section</legend>

					<!-- Systems -->
					<div class="form-group">

						<label class="control-label col-sm-2">Systems:</label>

						<div class="col-sm-10">
							<div class="checkbox">
							  <label><input name="systemsCheckbox" type="checkbox" value="heavy duty web">
							  	Heavy Duty Web Guide Hydraulic EPC Control System 
					with Automation – Centring Sensor and Control, 4 pieces Roller and Roll Steering Guiding with Base</label>
							</div>
							<div class="checkbox">
							  <label><input name="systemsCheckbox" type="checkbox" value="heavy duty tension">
							  	Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing</label>
							</div>

							<div class="checkbox">
							  <label><input name="systemsCheckbox" type="checkbox" value="banana roll">
							  	Banana Roll and Tension Roller</label>
							</div>

							<div class="checkbox">
							  <label><input name="systemsCheckbox" type="checkbox" value="water cooling">
							  	Water Cooling Brake Systems</label>
							</div>

							<div class="checkbox">
							  <label><input name="systemsCheckbox" type="checkbox" value="fully computerized">
							  	Fully Computerized Control System</label>
							</div>
							
							<div class="checkbox">
								<label><input id="systems-others-checkbox" name="systemsCheckbox" type="checkbox"> 
									<div class="form-inline">
										<div class="form-group">
											<label class="control-label" for="systems-others-text-field">
												Others:</label>
											<input disabled class="form-control" id="systems-others-text-field"  name="systemsOthers" type="text">
										</div>
									</div>
								</label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<legend>Other Details</legend>

					<div class="form-group">

						<div class="col-sm-offset-2 col-sm-10">
					  		<textarea class="form-control" id="comment" rows="8" ></textarea>
						</div>
					</div>
				</fieldset>

				<div class="form-group">

					<div class="col-sm-offset-2 col-sm-10">

						<button class="btn btn-default" id="add-to-cart-btn" type="submit">
							Finish</button>
						<a class="btn btn-default" id="cancel-btn" href="order_now.php">
							Cancel</a>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">

			document.getElementById("standard-checkbox").onchange = function() {
				
				if(document.getElementById("standard-checkbox").checked) {
					document.getElementById("slitter-additional-checkbox").removeAttribute("disabled");
				}
				else {
					document.getElementById("slitter-additional-checkbox").setAttribute("disabled", "disabled");
					document.getElementById("slitter-additional-checkbox").setAttribute("checked", "unchecked");
					document.getElementById("slitter-additional-text-field").setAttribute("disabled", "disabled");
				}
			};

			document.getElementById("slitter-additional-checkbox").onchange = function() {
				
				if(document.getElementById("slitter-additional-checkbox").checked) {
					document.getElementById("slitter-additional-text-field").removeAttribute("disabled");
				}
				else {
					document.getElementById("slitter-additional-text-field").setAttribute("disabled", "disabled");
					document.getElementById("slitter-additional-text-field").value = "";
				}
			};

			document.getElementById("reel-stand-others-checkbox").onchange = function() {
			
				if(document.getElementById("reel-stand-others-checkbox").checked) {
					document.getElementById("reel-stand-others-text-field").removeAttribute("disabled");
				}
				else {
					document.getElementById("reel-stand-others-text-field").setAttribute("disabled", "disabled");
					document.getElementById("reel-stand-others-text-field").value = "";
				}
			};

			document.getElementById("systems-others-checkbox").onchange = function() {
				
				if(document.getElementById("systems-others-checkbox").checked) {
					document.getElementById("systems-others-text-field").removeAttribute("disabled");
				}
				else {
					document.getElementById("systems-others-text-field").setAttribute("disabled", "disabled");
					document.getElementById("systems-others-text-field").value = "";
				}
			};

		</script>
	</body>
</html>