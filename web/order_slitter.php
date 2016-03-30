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
			<div class="text-info">
				<p>Please bear with us. This is going to take long.</p>
				<p>If you need any help, please feel free to contact these numbers: +404 6676/+355 4635</p>
			</div>
			
			<form action="slitter_form_success.php" role="form" class="form-horizontal" method="post">
				<fieldset> <!--General Section-->
					<legend>General Section</legend>

					<!-- Type -->
					<div class="form-group">

						<label for="type" class="control-label col-sm-2">Type:</label>

						<div class="col-sm-10">
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" value="SL_Standard">
									MACH-MSR (Standard)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="slitterType" type="radio" value="SL_Heavy Duty">
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
					<div class="form-group">

						<label class="control-label col-sm-2" for="production-vol">Production Volume:</label>

						<div class="col-sm-10">
							<div class="input-group">
								
								<input class="form-control" id="production-vol" min="0" name="productionVolume" step=".01" type="number"/>
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

				<fieldset> <!--Cutting Section-->

					<legend>Cutting Section</legend>

					<!-- Slitter -->
					<div class="form-group">

						<label  class="control-label col-sm-2" for="slitter">Slitter:</label>

						<div class="col-sm-10">
							<div class="checkbox">
								
								<label> <!--required field-->
									<input id="standard-checkbox" name="slitterCheckbox" type="checkbox" value="standard" disabled checked="true">
									Standard [Five(5)] Set Male/Female Circular Blade with Trim Removal Blower
								</label>
							</div>

							<div class="checkbox">
								
								<label><input id="slitter-additional-checkbox" name="slitterCheckbox" type="checkbox">
									<div class="form-inline">
										
										<div class="form-group">
											
											<label class="control-label" for"slitter-additional-text-field">Additional</label>
											<input class="form-control" disabled id="slitter-additional-text-field" min="1" name="addtlBlade" type="number"> set/s of one pair male/female
										</div>
									</div>
								</label>
							</div>

							<div class="checkbox">
								
								<label>
									<input id="core-cutter-checkbox" name="coreCutterMachine[]" type="checkbox" value="1">
									Core Cutter Machine
								</label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset> <!--Unwind Roll Stand Section-->

					<legend>Unwind Roll Stand Section</legend>

					<!-- Reel Stand -->
					<div class="form-group">
						<label class="control-label col-sm-2">Reel Stand:</label>
						<div class="col-sm-10">

							<div class="checkbox">
								<label><input type="checkbox" name="reelStand[]" value="1">
									Hydraulic Shaftless with Air Break</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="reelStand[]" value="2">
									Single</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="reelStand[]" value="3">
									Customized</label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="reelStand[]" value="4">
									Stationary Shaft Stand</label>
							</div>

							<div class="checkbox">
								<label><input id="reel-stand-others-checkbox" name="reelStand[]" type="checkbox" value="5"> 
									<div class="form-inline">
										<div class="form-group">
											<label class="control-label" for="reel-stand-others-text-field">
												Others:</label>
											<input class="form-control" disabled id="reel-stand-others-text-field" name="reelStandOthers" value="<?php if (isset($_POST['reelStandOthers'])) echo $_POST['reelStandOthers']; ?>" type="text">
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
								<input class="form-control" id="ton-capacity"  name="tonCapacity" value="<?php if (isset($_POST['tonCapacity'])) echo $_POST['tonCapacity']; ?>" type="number">
								<span class="input-group-addon">Tons</span>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset> <!--Systems Section-->

					<legend>Systems Section</legend>

					<!-- Systems -->
					<div class="form-group">

						<label class="control-label col-sm-2">Systems:</label>

						<div class="col-sm-10">
							<div class="checkbox">
							  <label><input name="systems[]" type="checkbox" value="1">
							  	Heavy Duty Web Guide Hydraulic EPC Control System 
					with Automation – Centring Sensor and Control, 4 pieces Roller and Roll Steering Guiding with Base</label>
							</div>
							<div class="checkbox">
							  <label><input name="systems[]" type="checkbox" value="2">
							  	Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing</label>
							</div>

							<div class="checkbox">
							  <label><input name="systems[]" type="checkbox" value="3">
							  	Banana Roll and Tension Roller</label>
							</div>

							<div class="checkbox">
							  <label><input name="systems[]" type="checkbox" value="4">
							  	Water Cooling Brake Systems</label>
							</div>

							<div class="checkbox">
							  <label><input name="systems[]" type="checkbox" value="5">
							  	Fully Computerized Control System</label>
							</div>
							
							<div class="checkbox">
								<label><input id="systems-others-checkbox" name="systems[]" type="checkbox" value="6"> 
									<div class="form-inline">
										<div class="form-group">
											<label class="control-label" for="systems-others-text-field">
												Others:</label>
											<input disabled class="form-control" id="systems-others-text-field"  name="systemsOthers" value="<?php if (isset($_POST['systemsOthers'])) echo $_POST['systemsOthers']; ?>" type="text">
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
						<div class="col-sm-offset-2 col-sm-10">
					  		<textarea placeholder="Place your additional requirements here if any." class="form-control" id="comment" rows="8" name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
						</div>
					</div>
				</fieldset>

				<div class="form-group">

					<div class="col-sm-offset-2 col-sm-10">

						<button class="btn btn-default" id="add-to-cart-btn" type="submit">
							Finish</button>
						<a class="btn btn-default" id="cancel-btn" href="slitter.php">
							Cancel</a>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->
		
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
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
