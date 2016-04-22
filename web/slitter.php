<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Slitter</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		<div id="machine-details" class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li class="active">Slitter</li>
			</ol>
			<div class="row">
				<div class="col-sm-4">
					<div id="lg-img">
						<img id="focus-img" src="images/slitter-front.png" alt="slitter">
					</div>
					<div id="sm-img">
						<img onclick="changeImageTo(1, 0, 2, slitterImages)" class="active" id="img0" alt="slitter front" src="images/slitter-front.png"></img>
						<img onclick="changeImageTo(1, 1, 3, slitterImages)" id="img1" alt="slitter back" src="images/slitter-back.png"></img>
						<img onclick="changeImageTo(1, 2, 4, slitterImages)" id="img2" alt="slitter close up 1" src="images/slitter-close-up-1.jpg"></img>
						<img onclick="changeImageTo(1, 3, 5, slitterImages)" id="img3" alt="slitter close up 2" src="images/slitter-close-up-2.jpg"></img>
					</div>
				</div>
				<div class="col-sm-8">
					<h1 class="page-header">Slitter</h1>
					
					<div id="description">
						<p class="text-justify">
							The <strong>Slitter</strong> commonly referred to as <strong>Slitter Rewinder</strong>, is a primary machine used in the conversion of <strong>Paper, Film, and Foil</strong> material. 
							Designed to convert a wide roll of material into several thinner rolls, the slitter starts by unwinding a master or mill roll, continues by slitting the unwound material into various widths, and finally completes the process by rewinding the slit material onto cores of various widths.
						</p>
					</div>

					<div id="application">
						<p><strong>Applications</strong>. Fax Paper and Cash Register</p>
					</div>

					<div id="btn-group">
						<p><a href="order_slitter.php" class="btn btn-primary btn-block btn-lg">
							<i class="glyphicon glyphicon-shopping-cart"></i> Add to Shopping Cart</a></p>
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
								<th>MSR 70</th>
								<th>MSR 90</th>
								<th>MSR 110</th>
								<th>MSR 130</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Max. Unwind  Reel Width </td>
								<td>1780 mm </td>
								<td>2280 mm </td>
								<td>2800 mm </td>
								<td>3300 mm</td>
							</tr>
							<tr>   
								<td>Designed Speed</td>
								<td>600 M/Min</td>
								<td>600 M/Min</td>
								<td>800 M/Min</td>
								<td>800 M/Min</td>

							</tr>
							<tr>	
								<td>Maximum Unwinding Diameter</td>
								<td>1800 mm</td>
								<td>1800 mm</td>
								<td>1800 mm</td>
								<td>1800 mm</td>


							</tr>
							<tr>	
								<td>Maximum Rewinding Diameter</td>
								<td>1500 mm</td>
								<td>1500 mm</td>
								<td>1500 mm</td>
								<td>1500 mm</td>


							</tr>
							<tr>	
								<td>Core Diameter of Rewinding Reel</td>
								<td>
									<p>76.20-305 mm</p>
									<p>( 3" - 12" )</p>
								</td>
								<td>
									<p>76.20-305 mm</p>
									<p>( 3" - 12" )</p>
								</td>
								<td>
									<p>76.20-305 mm</p>
									<p>( 3" - 12" )</p>
								</td>
								<td>
									<p>76.20-305 mm</p>
									<p>( 3" - 12" )</p>
								</td>
							</tr>
							<tr>	
								<td >Core Diameter of Unwinding Reel</td>
								<td>
									<p>76.20-305 mm</p>
									<p>( 3" - 12" )</p>
								</td>
								<td>
									<p>76.20-305 mm</p>
									<p>( 3" - 12" )</p>
								</td>
								<td>
									<p>76.20-305 mm</p>
									<p>( 3" - 12" )</p>
								</td>
								<td>
									<p>76.20-305 mm</p>
									<p>( 3" - 12" )</p>
								</td>
							</tr>
							<tr>	
								<td>Total Power Requirement</td>
								<td>
									<p>220/380/440 Volts</p>
									<p>( 25 kW )</p>
								</td>
								<td>
									<p>220/380/440 Volts</p>
									<p>( 29 kW )</p>
								</td>
								<td>
									<p>220/380/440 Volts</p>
									<p>( 33 kW )</p>
								</td>
								<td>
									<p>220/380/440 Volts</p>
									<p>( 33 kW )</p>
								</td>
							</tr>
							<tr>	
								<td>Machine Dimension</td> 
								<td>7.7 MX  4M  X 3.25M</td>
								<td>7.7 MX  4M  X 3.25M</td>
								<td>7.7 MX  5.5 X 3.25M</td>
								<td>7.7 MX  6M  X 3.25M</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php';?>
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="scripts/changeImageTo.js"></script>
		<script type="text/javascript">
			var slitterImages = [
				"images/slitter-front.png",
				"images/slitter-back.png",
				"images/slitter-close-up-1.jpg",
				"images/slitter-close-up-2.jpg"
			];
		</script>
	</body>
</html>