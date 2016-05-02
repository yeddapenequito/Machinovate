<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Paper Roll Truck</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		<div id="machine-details" class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li class="active">Paper Roll Truck</li>
			</ol>
			<div class="row">
				<div class="col-sm-4">
					<div id="lg-img">
						<img id="focus-img" src="images/paper-roll-truck.png" alt="paper-roll-truck">
					</div>
					<div id="sm-img">
						<img onclick="changeImageTo(1, 0, 2, rollTruckImages)" class="active" id="img0" alt="paper-roll-truck" src="images/paper-roll-truck.png"></img>
					</div>
				</div>
				<div class="col-sm-8">
					<h1 class="page-header">Paper Roll Truck</h1>
					
					<div id="description">
						<p class="text-justify">
							Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.
						</p>
					</div>

					<div id="application">
						<p><strong>Applications</strong>. Fax Paper and Cash Register</p>
					</div>

					<div id="btn-group">
						<p><a href="order_paper-roll.php" class="btn btn-primary btn-block btn-lg">
							<i class="glyphicon glyphicon-shopping-cart"></i> Buy this product</a></p>
						<p><a id="contact-us-btn"  href="contact_us.php" class="btn btn-primary btn-block btn-lg">Contact Us for More Details</a></p>
					</div>
					
					<!-- <div id="video">
						<h2 class="page-header">Video</h2>
						<video src=""></video>
					</div> -->

					<table class="table table-condensed table-striped table-bordered">
						<caption class="page-header">Specifications</caption>
						<thead>
							<tr>	
								<th colspan="4"><center>MODEL</center></th>
								<th colspan="4"><center>M1800-PRT</center></th>
							</tr>
						</thead>
							<tr>	
								<td colspan="4">CAPACITY</td>
								<td colspan="4">1800</td>
								
							</tr>
							<tr>	
								<td colspan="4">MIN. ROLL DIAMETER</td>
								<td colspan="4">800</td>
								
							
							</tr>
							<tr>	
								<td colspan="4">MAX. ROLL DIAMETER</td>
								<td colspan="4">1400</td>
								
							
							</tr>
							<tr>	
								<td colspan="4">MAX. ROLL LENGTH</td>
								<td colspan="4">1500</td>
							</tr>

							<tr>	
								<td colspan="4">FRAME WIDTH</td>
								<td colspan="4">1030</td>
							
							</tr>
							<tr>	
								<td colspan="4">FORK LENGTH</td>
								<td colspan="4">1350</td>
							
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
			var rollTruckImages = ["images/paper-roll-truck.png"];
		</script>
	</body>
</html>