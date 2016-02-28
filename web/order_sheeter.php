<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
		<title></title>
		<style>
			.footer{
				margin-bottom:50px;
				background: none;

			}
			.btn-primary{
				margin-top:0px;
				margin-left:auto;
				margin-right: auto;
			}
			.title h2{
			
			text-align:center;
			}
			.form-group{
				margin-left: auto;
				margin-right: auto;
			}
		</style>
	</head>
	<body><!--name in every checkbox are not yed properly named-->
		<?php include 'header_before_login.php';?>
		<div  id="order-sheeter" class="container">
			<h1 class="page-header">Paper Sheeter Form Requirements</h1>
			<p>Please bear with us. This is going to take long.</p>
			<!-- class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4"-->
			<!--put required later-->
				<form action="order_email.php" role="form" class="form-horizontal">
				<fieldset>
					<legend>General Section</legend>
					<div class="form-group">
						<label for="Type" class="control-label col-sm-2">Type:</label>
						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" name="lexus-kgm">Lexus-KGM(Overlapping) </label>
							</div>
							<div class="radio">
								<label><input type="radio" name="lexus-hsm">Lexus-HSM(Servo-Overlapping) </label>
							</div>
							<div class="radio">
								<label><input type="radio" name="lexus-compact">Lexus-Compact (Standard) </label>
							</div>
							<div class="radio">
								<label><input type="radio" name="lexus-sync">Lexus- Sync(Twin Knife - Overlapping)</label>
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
						<label for="web-width" class="control-label col-sm-2">Web Width:</label>
						<div class="col-sm-10">
							<input id="web-width" type="number" class="form-control"/>
						</div>
			</div>
			
				</fieldset>
			
				<fieldset>
				<legend>Cutting Section</legend>
			<div class="form-group">
				<label for="sheeter" class="control-label col-sm-2">Main Drive:</label>
					<div class="col-sm-10">
						<div class="radio">
							<label><input type="radio" name="inverter">Inverter </label>
							<label><input type="radio" name="servo-motor-touch">Servo Motor and Touch Screen Monitor </label>
						</div>
					</div>
				<label for="sheeter" class="control-label col-sm-2">Knife:</label>
					<div class="col-sm-10">
						<div class="radio">
							<label><input type="radio" name="single-knife">Single Knife </label>
							<label><input type="radio" name="twin-knife">Twin Knife </label>
						</div>		
					</div>
				<label for="sheeter" class="control-label col-sm-2">Slitter:</label>
					<div class="col-sm-10">
						<div class="radio">
							<label><input type="radio" name="station-slitter">3 Station Slitter Attachement with <input type="number" id="snum"class="form-control"> max. Side Trim Removal Blower w/ Tab Inserter unit</label>
						</div>		
					</div>
				<label for="sheeter" class="control-label col-sm-2">Accessories:</label>
					<div class="col-sm-10">
						<div class="radio">
							<label><input type="radio" name="anti-static">Anti-Static Control (Static Eliminator) </label>
							<label><input type="radio" name="anti-static">Paper Dust Collector Control System </label>
						</div>		
					</div>

				
				</div>
				</fieldset>
				
				
			<fieldset>
			<legend>Unwind Roll Stand Section</legend>
		<div class="form-group">
			<label for="sheeter" class="control-label col-sm-2">Reel Stand:</label>
					<div class="col-sm-10">
					<label><input type="radio" name="hydraulic">Hydraulic Shaftless with Air Break </label>
						<div class="radio">	
							<label><input type="radio" name="single">Single</label>
							<label><input type="radio" name="double">Double</label>
							<label><input type="radio" name="others">Others </label>
							<label><input type="text" name="additional" class="form-control"></label>
							<label></label>
							<label><input type="radio" name="auto-tension">Auto Tension Control with Decurler System</label>
							
							
						</div>
						
					</div>
				
					<input type="checkbox" name="type"><b>Standard Reel Stand (H-Type)</b></p>
					<input type="checkbox" name="type">Four (4) Rolls 
					<input type="checkbox" name="type">Eight (8) Rolls 
					<input type="checkbox" name="type">Ten (10) Rolls  + <input type="number" id=""> Rolls</p>
					<input type="checkbox" name="type">Individual Auto Tension for Stationary Stand</p>

					<p>Shaft: </p> <p> <input type="checkbox" name="type"><b>Mechanical Shaft</b></p>
					<input type="checkbox" name="type">Single
					<input type="checkbox" name="type">Double
					<input type="text" name="additional">Φ 3” / <input type="text" name="additional">Φ 6” / <input type="text" name="additional"></p>
					<input type="checkbox" name="type">Others: <input type="text" name="additional">Φ <input type="text" name="additional">"</p>
					
					<input type="checkbox" name="type"><b>Air Shaft (Heavy Duty)</b></p>
					<input type="checkbox" name="type">[<input type="number" id=""/> "Core]
					<input type="checkbox" name="type">Roll Weight:[<input type="number" id=""/> Ton Capacity]</p>
					
		</div>

		<div class="form-group">
		<h4>Systems Section</h4>
				   <p>Systems: </p> <p> <input type="checkbox" name="type">Computer Control with Auto Length Setting with Auto Square ness and Auto Quantity Control
					</p>
					<input type="checkbox" name="type">Web Guide Hydraulic EPC Control & Mechanism</p>
					<input type="checkbox" name="type">Others: <input type="text" name="additional"></p>
		</div>

		
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
						<button id="add-to-cart-btn" type="submit" class="btn btn-default">
							<i class="glyphicon glyphicon-shopping-cart"></i> Add to Cart</button>
					</div>
				</div>
		</form>
		  </div>
		
		<?php// include 'footer.php';?>
	</body>
</html>