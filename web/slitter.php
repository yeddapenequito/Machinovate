<!DOCTYPE html>
<html>

<style>
body {font-family: "Lato", sans-serif;}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}
</style>

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
					
					<ul class= "tab">
						<li>
							<a href="#" class="tablinks" onclick="openCity(event, 'Description')">Description</a>
						</li>
	  					<li>
	  						<a href="#" class="tablinks" onclick="openCity(event, 'Specs')">Specifications</a>
	  					</li>
	  				</ul>

					<div id="Description" class="tabcontent">
						<p class="text-justify">
							<Strong> MACH Heavy Duty SURFACE REWIND SLITTER </Strong>
						</p>
						<p class="text-justify">
							USing special hardened steel plate for frames and solid rollers passing dynamic balancing plus our advance technology in engineering built up the new improved version of MACH Slitter Rewinder. It is suitable for converting Jumbo rolls from paper/board mills and stock lots into your desired web width rolles or rewind into smaller diameter. Variable machine sizes ranging from 330cm down to 178cm are available.
						</p>
						<p class="text-justify">
							Loading and unloading of reels using Hydraulic Shaftless Floor pick up and Auto Pneumatic Elevator respectively for easy handling of one operator. Under normal operation, one roll can finish rewinding/slitting in not more than 20 minutes for each roll which will give you a good tension result even with multiple splits. 
						</p>
					</div>


					
					
					<div id= "Specs" class="tabcontent">
						<table class="table table-condensed table-bordered table-striped">
							<caption class="page-header">Rotary High Speed Slitter Rewinder with Edge Positioning [EPC] Automatic Tension Control System and Hydraulic Shaftless Reel Stand</caption>
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
					
					<div id="btn-group">
					
						<p><a id="contact-us-btn"  href="contact_us.php" class="btn btn-primary btn-block btn-lg">Contact Us for More Details</a></p>
					</div>

				</div>
			</div>
		</div>
		
		<?php include 'footer.php';?>
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
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

		<script>
			function openCity(evt, cityName) {
			    var i, tabcontent, tablinks;
			    tabcontent = document.getElementsByClassName("tabcontent");
			    for (i = 0; i < tabcontent.length; i++) {
			        tabcontent[i].style.display = "none";
			    }
			    tablinks = document.getElementsByClassName("tablinks");
			    for (i = 0; i < tablinks.length; i++) {
			        tablinks[i].className = tablinks[i].className.replace(" active", "");
			    }
			    document.getElementById(cityName).style.display = "block";
			    evt.currentTarget.className += " active";
			}
		</script>
	</body>
</html>