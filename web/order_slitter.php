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
			<form action="order_email.php" role="form" class="form-horizontal">
				<fieldset>
					<legend>General Section</legend>

					<!-- Type -->
					<div class="form-group">

						<label for="type" class="control-label col-sm-2">Type:</label>

						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" id="type" name="type">MACH-MSR (Standard)</label>
							</div>
							<div class="radio">
								<label><input type="radio" id="type" name="type">MACH-MSR (Heavy Duty)</label>
							</div>
							<div class="radio">
								<label><input type="radio" id="type" name="type">MACH-CRS (Cash Register Slitter)</label>
							</div>
							<div class="radio">
								<label><input type="radio" id="type" name="type">Customized</label>
							</div>
						</div>
					</div>

					<!-- Production Vol. -->
					<div class="form-group">

						<label for="production-vol" class="control-label col-sm-2">Production Vol:</label>

						<div class="col-sm-10">
							<input id="production-vol" type="number" class="form-control"/>Tons per day
						</div>
					</div>

					<!-- Paper Type -->
					<div class="form-group">

						<label for="paper-type" class="control-label col-sm-2">Paper Type:</label>

						<div class="col-sm-10">
							<input placeholder="e.g. Ledger, Newsprint, Carbonless" id="paper-type" type="text" class="form-control"/>
						</div>
					</div>

					<!-- GSM -->
					<div class="form-group">

						<label for="gsm" class="control-label col-sm-2">GSM:</label>

						<div data-role="rangeslider" class="col-sm-10	">
							<!-- <input type="range" name="gsm-min" id="gsm-min" value="200" min="0" max="1000" class="form-control">
							<input type="range" name="gsm-max" id="gsm-max" value="800" min="0" max="1000" class="form-control"> -->
						</div>
					</div>

					<!-- Roll Diameter -->
					<div class="form-group">

						<label for="roll-diameter" class="control-label col-sm-2">Roll Diameter:</label>

						<div data-role="rangeslider" class="col-sm-10	">
							<!-- <input type="range" name="roll-diameter-min" id="roll-diameter-min" value="200" min="0" max="1000" class="form-control">
							<input type="range" name="roll-diameter-max" id="roll-diameter-max" value="800" min="0" max="1000" class="form-control"> -->
						</div>
					</div>

					<!-- Slitting Width -->
					<div class="form-group">

						<label for="slitting-width" class="control-label col-sm-2">Slitting Width:</label>

						<div class="col-sm-10">
							<input id="slitting-width" type="number" class="form-control"/>
						</div>
					</div>
				</fieldset>

				<fieldset>

					<legend>Cutting Section</legend>

					<!-- Slitter -->
					<div class="form-group">

						<label for="slitter" class="control-label col-sm-2">Slitter:</label>

						<div class="col-sm-10">
							
							<div class="checkbox">

								<label>
									<input id="standard-checkbox" type="checkbox" value="standard" name="slitter">Standard[Five(5)] Set Male/Female Circular Blade with Trim Removal Blower
								</label>
							</div>

							<div class="checkbox">

								<label><input id="slitter-additional-checkbox" type="checkbox" name="slitter" disabled>
									<div class="form-inline">
										
										<div class="form-group">
											
											<label for"slitter-additional-text-field" class="control-label">Additional</label>
											<input id="slitter-additional-text-field" class="form-control" type="number" name="slitterAdditional" disabled> set of one pair male/female
										</div>
									</div>
								</label>
							</div>

							<div class="checkbox">

								<label><input id="core-cutter-checkbox" type="checkbox" value="core cutter" name="slitter">Core Cutter Machine</label>
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
								<label><input type="checkbox" value="hydraulic">Hydraulic Shaftless with Air Break</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" value="single">Single</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" value="customized">Customized</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" value="stationary">Stationary Shaft Stand</label>
							</div>

							<div class="checkbox">
								<label><input id="reel-stand-others-checkbox" type="checkbox"> 
									<div class="form-inline">
										<div class="form-group">
											<label for="reel-stand-others-text-field" class="control-label">Others:</label>
											<input name="reelStandOthers" class="form-control" id="reel-stand-others-text-field" type="text" disabled>
										</div>
									</div>
								</label>
							</div>
						</div>
					</div>

					<!-- Ton Capacity -->
					<div class="form-group">

						<label for="ton-capacity" class="control-label col-sm-2">Ton Capacity:</label>

						<div class="col-sm-10">
							<input name="tonCapacity" id="ton-capacity" type="text" class="form-control">
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
							  <label><input type="checkbox" value="heavy duty web">Heavy Duty Web Guide Hydraulic EPC Control System 
					with Automation – Centring Sensor and Control, 4 pieces Roller and Roll Steering Guiding with Base</label>
							</div>
							<div class="checkbox">
							  <label><input type="checkbox" value="heavy duty tension">Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing</label>
							</div>

							<div class="checkbox">
							  <label><input type="checkbox" value="banana roll">Banana Roll and Tension Roller</label>
							</div>

							<div class="checkbox">
							  <label><input type="checkbox" value="water cooling">Water Cooling Brake Systems</label>
							</div>

							<div class="checkbox">
							  <label><input type="checkbox" value="fully computerized">Fully Computerized Control System</label>
							</div>
							
							<div class="checkbox">
								<label><input id="systems-others-checkbox" type="checkbox" name="reel stand"> 
									<div class="form-inline">
										<div class="form-group">
											<label for="systems-others-text-field" class="control-label">Others:</label>
											<input name="systemsOthers" class="form-control" id="systems-others-text-field" type="text" disabled>
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
					  		<textarea class="form-control" rows="8" id="comment"></textarea>
						</div>
					</div>
				</fieldset>

				<div class="form-group">

					<div class="col-sm-offset-2 col-sm-10">

						<a id="cancel-btn" href="order_now.php" class="btn btn-default">Cancel</a>
						<button id="add-to-cart-btn" type="submit" class="btn btn-default">Finish</button>
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