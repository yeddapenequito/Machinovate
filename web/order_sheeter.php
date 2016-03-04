<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
		<title></title>
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
							<label><input placeholder="Others"type="text" name="additional" class="form-control"></label>
							<label></label>
							<label><input type="radio" name="auto-tension">Auto Tension Control with Decurler System</label>
							
							
						</div>
					<label><input type="radio" name="standard-reel">Standard Reel Stand (H-Type)</label>
					<div class="radio">	
							<label><input type="radio" name="4rolls">Four (4) Rolls </label>
							<label><input type="radio" name="8rolls">Eight (8) Rolls </label>
							<label><input type="radio" name="10rolls">Ten (10) Rolls +</label>
							<label><input type="number" id="nroll" class="form-control"></label>
							<label>Rolls</label>
							<label></label>
							<label><input type="radio" name="indiv-auto">Individual Auto Tension for Stationary Stand</label>
							
							
						</div>
					</div> <!-- Some names in additional are the same -->
				<label for="sheeter" class="control-label col-sm-2">Shaft:</label>
					<div class="col-sm-10">
					<label><input type="radio" name="mech-shaft"> Mechanical Shaft</label>
						<div class="radio">	
							<label><input type="radio" name="single-shaft">Single</label>
							<label><input type="radio" name="double-shaft">Double</label>
							<label><input type="text" name="additional" class="form-control"></label>
							<label>Φ 3” /</label>
							<label><input type="text" name="additional" class="form-control"></label>
							<label>Φ 6” / </label>
							<label><input type="text" name="additional" class="form-control"></label>
							<label></label>
							<label><input type="radio" name="others-shaft">Others </label>
							<label><input placeholder="Others"type="text" name="additional" class="form-control"></label>
							<label>Φ</label>
							<label><input placeholder="Others"type="text" name="additional" class="form-control"></label>
							<label></label>
						</div>
					<label><input type="radio" name="air-shaft"> Air Shaft (Heavy Duty)</label>
					<div class="radio">	
							<label><input type="radio" name="air-choice"></label>
							<label>[<input type="number" id="core"/> "Core]</label>
							<label></label>
							<label><input type="radio" name="roll-weight">Roll Weight:</label>
							<label>[<input type="number" id="tcapacity"/> Ton Capacity]</label>
						</div>
					</div>
			</fieldset>
		<fieldset>
			<legend>Systems Section</legend>
		<div class="form-group">
			<label for="sheeter" class="control-label col-sm-2">Systems:</label>
			<div class="col-sm-10">
					<div class="radio">	
				   <label><input type="radio" name="comp-control">Computer Control with Auto Length Setting with Auto Square ness and Auto Quantity Control</label>
				   <label></label>
				   <label><input type="radio" name="web-guide">Web Guide Hydraulic EPC Control & Mechanism</label>
				   <label></label>
				   <label><input type="radio" name="systems-others">Others: </label>
				   <label><input type="text" name="additional" class="form-control" placeholder="Others"></label>
			
					</div>
				</div>
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