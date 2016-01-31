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
		<?php include 'header.php';?>
		<div class="container-fluid">
		  <div class="title">
				<h2><b>Paper Sheeter Form Requirements</b></h2>
			</div>
			<!-- class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4"-->
			<!--put required later-->
			<div class="products_button">
					
				<a href="/web/products.php" class="btn btn-md btn-info" role="button"><span class="glyphicon glyphicon-triangle-left"></span> Go Back to Products page</a>
				</div>
			<form action="action_order.html">
			<div class="form-group">
				<h4>General Section</h4>
				<p>Production Vol : <input type="number" id="prodvol"/> Tons per day </p>
			</div>
			<div class="form-group">
				<p> Cut Paper Type : <input type="number" id="papertype"/></p>
			</div>
			<div class="form-group">
				<p>GSM: <input type="checkbox" name="gmin"> <b> MIN</b>
					<input type="checkbox" name="gmax"> <b> MAX</b></p></p>
			</div>
			<div class="form-group">
				<p>Roll Diameter: <input type="checkbox" name="rmin"><b> MIN</b>
					<input type="checkbox" name="rmax"><b> MAX</b></p>
			</div>
			<div class="form-group">
				<p>Cut Off Length: <input type="checkbox" name="rmin"><b> MIN</b>
					<input type="checkbox" name="rmax"><b> MAX</b></p>
			</div>
			<div class="form-group">
				<p>Web Width: <input type="checkbox" name="smin" >  <input type="number" id="width"/> mm </p>
				<input type="checkbox" name="smin" > Others: <input type="number" id="width"/></p>
			</div>
			<div class="form-group">
					<p>Model Type: </p><p> <input type="checkbox" name="type">Lexus-KGM(Overlapping) </p>
					<input type="checkbox" name="type">Lexus-HSM(Servo-Overlapping) </p>
					<input type="checkbox" name="type">Lexus-Compact (Standard) </p>
					<input type="checkbox" name="type">Lexus- Sync(Twin Knife - Overlapping) </p>
			</div>

			

			<div class="form-group">
				<h4>Cutting Section</h4>
				<p>Main Drive: <p> <input type="checkbox" name="type">Inverter <a></a>
					<input type="checkbox" name="type">Servo Motor and Touch Screen Monitor </p>
				<p>Knife: <p> <input type="checkbox" name="type">Single Knife <a></a>
					<input type="checkbox" name="type">Twin Knife </p>
				<p>Slitter: <p> <input type="checkbox" name="type">3 Station Slitter Attachement with <input type="number" id=""> max. Side Trim Removal Blower w/ Tab Inserter unit<a></a>
				<p>Accessories: <input type="checkbox" name="type">Anti-Static Control (Static Eliminator) <a></a>
					<input type="checkbox" name="type">Paper Dust Collector Control System </p>
			</div>

		<div class="form-group">
			<h4>Unwind Roll Stand Section</h4>
				<p>Reel Stand: </p> <p> <input type="checkbox" name="type"><b>Hydraulic Shaft ess with Air Break </b></p>
					<input type="checkbox" name="type">Single
					<input type="checkbox" name="type">Double
					<input type="checkbox" name="type">Others: <input type="text" name="additional"></p>
					<input type="checkbox" name="type">Auto Tension Control with Decurler System</p>
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

		<div class="form-group">
		<h4>Terms Section</h4>
				   <p>Delivery Basis: </p> <p> <input type="checkbox" name="type">FOB 
					<input type="checkbox" name="type"> CIF</p>
					<input type="checkbox" name="type">CFR</p>
					<p>Shipment:<input type="checkbox" name="type"><input type="number" name="additional"> Working Days after Initial Payment</p>
					<p>Payment Terms:<input type="checkbox" name="type">Letter of Credit, Draft at sight</p>
					<input type="checkbox" name="type">Telegraphic Transfer</p>
					30% Down Payment upon confirmation</p>
					60% before shipment</p>
					10% upon installation</p>
		</div>
		<div class="form-group">
			<h4><span>Other Details: </span></h4>
				<textarea name="message" rows="10" cols="30">
				
				</textarea>			
			</div>

				<div class="next_button">
					
					<a href="/web/shipment.php" class="btn btn-md btn-info" role="button">Next</a>
				</div>




		</div>






		 </div>
		</form>
		  </div>
		
		<?php include 'footer.php';?>
	</body>
</html>