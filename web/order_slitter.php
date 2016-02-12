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
		</style>
	</head>
	<body><!--name in every checkbox are not yed properly named-->
		<?php include 'header-bottom.php';?>
		<div class="container-fluid">
		  <div class="title">
				<h2><b>Paper Slitter Form Requirements</b></h2>
			</div>
			<!-- class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4"-->
			<div class="products_button">
					
				<div id="pagination">
				<ul class="pagination pagination">
				<li><a href="our_machines.php">Machines</a></li>
				<li><a  style="color:black;">></a></li>
			    <li><a href="slitter.php">Slitter</a></li>
			    <li><a  style="color:black;">></a></li>
			    <li><a style="color:red;">Order Now</a></li>
			    
			  </ul>
			</div>
				</div>
			<form action="action_order.html">
			<div class="form-group">
				<h4>General Section</h4>
				<p>Production Vol : <input type="number" id="prodvol"/> Tons per day </p>
			</div>
			<div class="form-group">
				<p>Paper Type : <input type="number" id="papertype"/></p>
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
				<p>Slitting Width: <input type="number" id="width"/> mm <input type="checkbox" name="smin" ><b> MIN </b> <input type="number" id="width"/> mm <input type="checkbox" name="smax"> <b> MAX</b></p>
			</div>
			<div class="form-group">
					<p>Type: </p><p> <input type="checkbox" name="type">Lexus-KGKM(Standard) </p>
					<input type="checkbox" name="type">Lexus-KGKM(Heavy Duty) </p>
					<input type="checkbox" name="type">Lexus-Compact </p>
					<input type="checkbox" name="type">Customized </p>
			</div>

			

			<div class="form-group">
				<h4>Cutting Section</h4>
				<p>Slitter: </p> <p> <input type="checkbox" name="type">Standard[Five(5)]
					Set Male/Female Circular Blade with Trim Removal Blower </p>
					<input type="checkbox" name="type">Additional
					<input type="number" name="additional"> set of one pair male/female </p>
					<input type="checkbox" name="type">Core Cutter Machine </p>
			</div>

		<div class="form-group">
			<h4>Unwind Roll Stand Section</h4>
				<p>Reel Stand: </p> <p> <input type="checkbox" name="type">Hydraulic Shaftless with Air Break</p>
					<input type="checkbox" name="type">Single </p>
					<input type="checkbox" name="type">Customized <input type="text" name="additional"></p>
					<input type="checkbox" name="type">Stationary Shaft Sand <input type="number" name="additional"> [Ton Capacity]</p>
					<input type="checkbox" name="type">Others: <input type="text" name="additional"></p>


		<div class="form-group">
		<h4>Systems Section</h4>
				   <p>Systems: </p> <p> <input type="checkbox" name="type">Heavy Duty Web Guide Hydraulic EPC Control System 
					with Automation – Centring Sensor and Control, 4 pieces Roller and Roll Steering Guiding with Base
					</p>
					<input type="checkbox" name="type">Heavy Duty Tension Control System with Auto Tension Controller, Auto Tension Sensor, Air Pressure Transducer and Tension Roller with Bearing Housing</p>
					<input type="checkbox" name="type">Banana Roll and Tension Roller</p>
					<input type="checkbox" name="type">Water Cooling Brake Systems</p>
					<input type="checkbox" name="type">Fully Computerized Control System</p>
					<input type="checkbox" name="type">Others: <input type="text" name="additional"></p>
		</div>

		<div class="form-group">
		<h4>Terms Section</h4>
				   <p>Delivery Basis: </p> <p> <input type="checkbox" name="type">FOB 
					<input type="checkbox" name="type"> CBR</p>
					<input type="checkbox" name="type">Others: <input type="text" name="additional"></p>
					<p>Shipment:<input type="checkbox" name="type"><input type="number" name="additional"> Working Days after Initial Payment</p>
					<p>Payment Terms:<input type="checkbox" name="type">Letter of Credit, Draft at sight</p>
					<input type="checkbox" name="type">Telegraphic Transfer</p>
					<input type="number" name="additional"> % Down Payment upon confirmation</p>
					<input type="number" name="additional"> % before shipment</p>
					<input type="number" name="additional"> % upon installation</p>
		</div>
		<div class="form-group">
			<h4><span>Other Details: </span></h4>
				<textarea name="message" rows="10" cols="30">
				
				</textarea>			
			</div>

			<div class="next_button">
					
					<a href="./shipment.php" class="btn btn-md btn-primary" role="button">Next</a>
				</div>




		</div>






		 </div>
		</form>
		  </div>
		
		<?php //include 'footer.php';?>
	</body>
</html>