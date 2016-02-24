<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Slitter</title>
		<style type="text/css">
			#or {
				border:1px solid silver;
				border-radius:100%;
				position: relative;
				top: .7em;
				margin:1em;
				padding:.25em .5em;
			}
		</style>
	</head>
	<body>
		<?php include 'header_before_login.php';?>

		<div id="machine-details" class="container">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="machines.php">Machines</a></li>
					<li class="active">Slitter</li>
				</ol>
				<div class="col-xs-12 col-md-8">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<img id="mach-img" src="images/slitter-front.png" alt="slitter">
						</div>
						<div class="col-xs-12 col-sm-8">
							<p class="text-justify">
								Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.
							</p>

							<p id="application"><strong>Applications</strong>. Fax Paper and Cash Register</p>

							<a id="order-now-btn" href="order_now.php" class="btn btn-primary btn-lg">Order This Machine</a>
							<span id="or">or</span>
							<a id="order-now-btn" href="contact_us.php" class="btn btn-primary btn-lg">Contact Us for More Details</a>
						</div>
					</div>

					<table class="table table-condensed table-hover table-bordered">
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
							<tr><!--limitation: auto create tables?-->
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
								<td>Maximum Unwinding Diamter</td>
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
								<td rowspan="2">Core Diameter of Rewinding Reel</td>
								<td>76.20-305 mm</td>
								<td>76.20-305 mm</td>
								<td>76.20-305 mm</td>
								<td>76.20-305 mm</td>

							</tr>
							<tr>	
								<td>( 3" - 12" )</td>
								<td>( 3" - 12" )</td>
								<td>( 3" - 12" )</td>
								<td>( 3" - 12" )</td>
							</tr>
							<tr>	
								<td rowspan="2">Core Diameter of Unwinding Reel</td>
								<td>76.20-305 mm</td>
								<td>76.20-305 mm</td>
								<td>76.20-305 mm</td>
								<td>76.20-305 mm</td>
							</tr>
							<tr>	
								<td>( 3" - 12" )</td>
								<td>( 3" - 12" )</td>
								<td>( 3" - 12" )</td>
								<td>( 3" - 12" )</td>
							</tr>
							<tr>	
								<td rowspan="2">Total Power Requirement</td>
								<td>220/380/440 Volts</td>
								<td>220/380/440 Volts</td>
								<td>220/380/440 Volts</td>
								<td>220/380/440 Volts</td>
							</tr>
							<tr>	
								<td>( 25 kW )</td>
								<td>( 29 kW )</td>
								<td>( 33 kW )</td>
								<td>( 33 kW )</td>
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
				</div> <!-- /.col 1 -->

				<div id="sidebar" class="col-xs-12 col-md-4">
					<div id="photos">
						<h3 class="page-header">Photos</h3>
						<div class="img-popup">
							<img alt="slitter front" src="images/slitter-front.png"></img>
							<img alt="slitter back" src="images/slitter-back.png"></img>
							<img alt="slitter close up 1" src="images/slitter-close-up-1.jpg"></img>
							<img alt="slitter close up 2" src="images/slitter-close-up-2.jpg"></img>
						</div>
					</div>

					<div id="videos">
						<h3 class="page-header">Videos</h3>
						
					</div>

					<div id="catalog">
						<h3 class="page-header">Brochures</h3>
						<p>No brochure/s to display</p>
					</div>
				</div>	 <!-- /.col 2 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(".img-popup").imageBox();
		</script>
	</body>
</html>