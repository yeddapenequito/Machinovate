<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"> -->
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Order Now</title>
	</head>
	<body><!--name in every checkbox are not yed properly named-->
		<?php include 'header_before_login.php';?>

		<div class="container">
		  	<ol class="breadcrumb">
				<li>
					<a href="order_now.php">Step 1: Choose your machine</a>
				</li>
				<li class="active">
					Step 2: Specify your machine's specs
				</li>
				<li>
					Step 3: Enter e-mail
				</li>
				<li>
					Step 4: Shipping details
				</li>
			</ol>
			
			<h1 class="page-header">Paper Slitter Form Requirements</h1>
			<p>Please bear with us. This is going to take long.</p>
			<form action="action_order.html" role="form" class="form-horizontal">
				<fieldset>
					<legend>General Section</legend>
					<div class="form-group">
						<label for="Type" class="control-label col-sm-2">Type:</label>
						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" name="msr70">MSR 70</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="msr70">MSR 90</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="msr70">MSR 110</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="msr70">MSR 130</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="customized">Customized</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="production-vol" class="control-label col-sm-2">Production Vol:</label>
						<div class="col-sm-10">
							<input id="production-vol" type="number" class="form-control"/>Tons per day
						</div>
					</div>
					<div class="form-group">
						<label for="paper-type" class="control-label col-sm-2">Paper Type:</label>
						<div class="col-sm-10">
							<input placeholder="e.g. Ledger, Newsprint, Carbonless" id="paper-type" type="text" class="form-control"/>
						</div>
					</div>
					<div class="form-group">
						<label for="gsm" class="control-label col-sm-2">GSM:</label>
						<div data-role="rangeslider" class="col-sm-10	">
							<!-- <input type="range" name="gsm-min" id="gsm-min" value="200" min="0" max="1000" class="form-control">
							<input type="range" name="gsm-max" id="gsm-max" value="800" min="0" max="1000" class="form-control"> -->
						</div>
					</div>
					<div class="form-group">
						<label for="roll-diameter" class="control-label col-sm-2">Roll Diameter:</label>
						<div data-role="rangeslider" class="col-sm-10	">
							<!-- <input type="range" name="roll-diameter-min" id="roll-diameter-min" value="200" min="0" max="1000" class="form-control">
							<input type="range" name="roll-diameter-max" id="roll-diameter-max" value="800" min="0" max="1000" class="form-control"> -->
						</div>
					</div>
					<div class="form-group">
						<label for="slitting-width" class="control-label col-sm-2">Slitting Width:</label>
						<div class="col-sm-10">
							<input id="slitting-width" type="number" class="form-control"/>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Cutting Section</legend>
					<div class="form-group">
						<label for="slitter" class="control-label col-sm-2">Slitter:</label>
						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" name="standard">Standard[Five(5)]
					Set Male/Female Circular Blade with Trim Removal Blower</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="additional">Additional <input type="number" name="additional"> set of one pair male/female</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="core">Core Cutter Machine</label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<legend>Unwind Roll Stand Section</legend>
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
							  <label><input type="radio" value="others">Others: <input type="text" name="additional"></label>
							</div>
						</div>
					</div>
				</fieldset>

				<fieldset>
					<legend>Systems Section</legend>
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
							  <label><input type="radio" value="others">Others: <input type="text" name="additional"></label>
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
						<button type="submit" class="btn btn-default">Next</button>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	</body>
</html>