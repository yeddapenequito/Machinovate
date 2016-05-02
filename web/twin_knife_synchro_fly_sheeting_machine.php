<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Twin Knife Synchro Fly Sheeting Machine</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		<div id="machine-details" class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li><a href="sheeter.php">Sheeter</a></li>
				<li class="active">Twin Knife Synchro Fly Sheeting Machine</li>
			</ol>
			<div class="row">
				<div class="col-sm-4">
					<div id="lg-img">
						<img id="focus-img" src="images/twin-knife-synchro-fly-sheeting-machine.png" alt="Twin Knife Synchro-Fly Sheeting Machine">
					</div>
					<div id="sm-img">
						<img onclick="changeImageTo(1, 0, 2, twinImages)" class="active" id="img0" src="images/twin-knife-synchro-fly-sheeting-machine.png" alt="Twin Knife Synchro-Fly Sheeting Machine"></img>
					</div>
				</div>
				<div class="col-sm-8">
					<h1 class="page-header">Twin Knife Synchro Fly Sheeting Machine</h1>
					
					<div id="description">
						<p class="text-justify">
							The <strong>Sheeter</strong> is a primary machine used in the conversion of <strong>Paper, Film, and Foil</strong> material. 
							Designed to convert a wide roll of material into several thinner rolls, the slitter starts by unwinding a master or mill roll, continues by slitting the unwound material into various widths, and finally completes the process by rewinding the slit material onto cores of various widths.
						</p>
					</div>

					<div id="application">
						<p><strong>Applications</strong>. Fax Paper and Cash Register</p>
					</div>

					<div id="btn-group">
						<p><a href="order_sheeter.php" class="btn btn-primary btn-block btn-lg">
							<i class="glyphicon glyphicon-shopping-cart"></i> Buy this product</a></p>
						<p><a id="contact-us-btn"  href="contact_us.php" class="btn btn-primary btn-block btn-lg">Contact Us for More Details</a></p>
					</div>
					
					<!-- <div id="video">
						<h2 class="page-header">Video</h2>
						<video src=""></video>
					</div> -->

					<table class="table table-condensed table-bordered table-striped">
						<caption class="page-header">Specifications</caption>
				<thead>
				 <tr>
				    <th>MODEL</th>
				    <th>MACH-SYNCHRO 1400</th>
				    <th>MACH-SYNCHRO 1600</th>
				    <th>MACH-SYNCHRO 1800</th>
				    <th>MACH-SYNCHRO 2000</th>
				  </tr>
				  <tr>
				    <td>Maximum Web Width</td>
				    <td>1400 mm</td>
				    <td>1600 mm</td>
				    <td>1800 mm</td>
				    <td>2000 mm</td>
				  </tr>
			  <tr>
			    <td>Maximum Unwinding Diameter</td>
			    <td>1500 mm/roll x 2 Rolls</td>
			    <td>1500 mm/roll x 2 Rolls</td>
			    <td>1500 mm/roll x 2 Rolls</td>
			    <td>1500 mm/roll x 2 Rolls</td>
			  </tr>
			  <tr>
			    <td>Designed Speed (depending on cut length &amp; paper gsm quality)</td>
			    <td>325 M/min</td>
			    <td>325 M/min</td>
			    <td>325 M/min</td>
			    <td>325 M/min</td>
			  </tr>
			  <tr>
			    <td>Min / Maximum Knife Load</td>
			    <td>20 gsm - 1000 gsm</td>
			    <td>20 gsm - 1000 gsm</td>
			    <td>20 gsm - 1000 gsm</td>
			    <td>20 gsm - 1000 gsm</td>
			  </tr>
			  <tr>
			    <td>Sheet Length Range</td>
			    <td>15" - 60" (380-1500 mm)</td>
			    <td>15" - 60" (380-1500 mm)</td>
			    <td>15" - 60" (380-1500 mm)</td>
			    <td>15" - 60" (380-1500 mm)</td>
			  </tr>
			  <tr>
			    <td>Cutting Tolerance</td>
			    <td>± 0.5 mm</td>
			    <td>± 0.5 mm</td>
			    <td>± 0.5 mm</td>
			    <td>± 0.5 mm</td>
			  </tr>
			  <tr>
			    <td>Maximum Pile Height (incl. Pallet)</td>
			    <td>1500 mm</td>
			    <td>1500 mm</td>
			    <td>1500 mm</td>
			    <td>1700 mm</td>
			  </tr>
		    </tbody>
		  </table>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php';?>
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="scripts/changeImageTo.js"></script>
		<script type="text/javascript">
			var twinImages = ["images/twin-knife-synchro-fly-sheeting-machine.png"];
		</script>
	</body>
</html>