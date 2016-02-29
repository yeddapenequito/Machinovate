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
								<label><input type="radio" id="type" name="type">MACH-MSR(Standard)</label>
							</div>
							<div class="radio">
								<label><input type="radio" id="type" name="type">MACH-MSR(Heavy Duty)</label>
							</div>
							<div class="radio">
								<label><input type="radio" id="type" name="type">MACH-CRS(Cash Register Slitter)</label>
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
									<input id="checkbox1" onchange="enableCheckbox(2)" type="checkbox" value="standard" name="slitter">Standard[Five(5)] Set Male/Female Circular Blade with Trim Removal Blower
								</label>
							</div>

							<div class="checkbox">

								<label><input id="checkbox2" onchange="enableCheckbox(3)" type="checkbox" name="slitter" disabled>
									<div class="form-inline">
										
										<div class="form-group">
											
											<label for"slitter-additional" class="control-label">Additional</label>
											<input id="slitter-additional" class="form-control" type="number" disabled> set of one pair male/female
										</div>
									</div>
								</label>
							</div>

							<div class="checkbox">

								<label><input id="checkbox3" type="checkbox" value="core cutter" name="slitter" disabled>Core Cutter Machine</label>
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

							<div class="radio">
							  <label><input type="radio" value="hydraulic">Hydraulic Shaftless with Air Break</label>
							</div>

							<div class="radio">
							  <label><input type="radio" value="single">Single</label>
							</div>

							<div class="radio">
							  <label><input type="radio" value="customized">Customized</label>
							</div>

							<div class="radio">
							  <label><input type="radio" value="stationary">Stationary Shaft Sand</label>
							</div>

							<div class="radio">
							  <label><input type="radio">Others: <input type="text" name="others"></label>
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
							<div class="radio">
							  <label><input type="radio" value="hydraulic">Heavy Duty Web Guide Hydraulic EPC Control System 
					with Automation – Centring Sensor and Control, 4 pieces Roller and Roll Steering Guiding with Base</label>
							</div>
							<div class="radio">
							  <label><input type="radio" value="single">Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing</label>
							</div>

							<div class="radio">
							  <label><input type="radio" value="customized">Banana Roll and Tension Roller</label>
							</div>

							<div class="radio">
							  <label><input type="radio" value="stationary">Water Cooling Brake Systems</label>
							</div>

							<div class="radio">
							  <label><input type="radio" value="stationary">Fully Computerized Control System</label>
							</div>

							<div class="radio">
							  <label><input type="radio">Others: <input type="text" name="others"></label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<legend>Other Details</legend>

					<div class="form-group">

						<label for="comment" class="control-label col-sm-2">Details:</label>

						<div class="col-sm-10">
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
		<script>
			function enableCheckbox(checkboxNum) {
				if (checkboxNum == 2) {
					document.getElementById("checkbox2").removeAttribute("disabled");
					document.getElementById("slitter-additional").removeAttribute("disabled");
				}
				else {

				}
			}
		</script>
	</body>
</html>