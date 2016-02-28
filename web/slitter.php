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
						<img onclick="changeImage(0)" class="active" id="img0" alt="slitter front" src="images/slitter-front.png"></img>
						<img onclick="changeImage(1)" id="img1" alt="slitter back" src="images/slitter-back.png"></img>
						<img onclick="changeImage(2)" id="img2" alt="slitter close up 1" src="images/slitter-close-up-1.jpg"></img>
						<img onclick="changeImage(3)" id="img3" alt="slitter close up 2" src="images/slitter-close-up-2.jpg"></img>
					</div>
				</div>
				<div class="col-sm-8">
					<h1 class="page-header">Slitter</h1>
					
					<div id="description">
						<p class="text-justify">
							Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.
						</p>
					</div>

					<div id="application">
						<p><strong>Applications</strong>. Fax Paper and Cash Register</p>
					</div>

					<div id="btn-group">
						<p><a target="_blank" href="order_slitter.php" class="btn btn-primary btn-block btn-lg">
							<i class="glyphicon glyphicon-shopping-cart"></i> Add to Shopping Cart</a></p>
						<p><a id="contact-us-btn" href="contact_us.php" class="btn btn-primary btn-block btn-lg">Contact Us for More Details</a></p>
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

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			function changeImage(imgNum) {
			    switch(imgNum) {
			    	case 0:
			    		document.getElementById("focus-img").src = "images/slitter-front.png";
			    		$("#img0").addClass("active");
			    		$("#img1").removeClass("active");
			    		$("#img2").removeClass("active");
			    		$("#img3").removeClass("active");
			    		break;
			    	case 1: 
			    		document.getElementById("focus-img").src = "images/slitter-back.png";
			    		$("#img0").removeClass("active");
			    		$("#img1").addClass("active");
			    		$("#img2").removeClass("active");
			    		$("#img3").removeClass("active");
			    		break;
			    	case 2:
			    		document.getElementById("focus-img").src = "images/slitter-close-up-1.jpg";
			    		$("#img0").removeClass("active");
			    		$("#img1").removeClass("active");
			    		$("#img2").addClass("active");
			    		$("#img3").removeClass("active");
			    		break;
			    	case 3:
			    		document.getElementById("focus-img").src = "images/slitter-close-up-2.jpg";
			    		$("#img0").removeClass("active");
			    		$("#img1").removeClass("active");
			    		$("#img2").removeClass("active");
			    		$("#img3").addClass("active");
			    }
			}	
		</script>
	</body>
</html>