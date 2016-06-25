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
		<title>Machinovate | Servo Drive Sheeter Machine</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		<div id="machine-details" class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li><a href="sheeter.php">Sheeter</a></li>
				<li class="active">Servo Drive Sheeter Machine</li>
			</ol>
			<div class="row">
				<div class="col-sm-4">
					<div id="lg-img">
						<img id="focus-img" src="images/servo-drive-sheeter.jpg" alt="Servo Drive Sheeter Machine">
					</div>
					<div id="sm-img">
						<img onclick="changeImageTo(1, 0, 2, servoImages)" class="active" id="img0"alt="Servo Drive Sheeter Machine" src="images/servo-drive-sheeter.jpg"></img>
						<img onclick="changeImageTo(1, 1, 3, servoImages)" id="img1" alt="4 Rolls" src="images/servo_4rolls.jpg"></img>
						<img onclick="changeImageTo(1, 2, 4, servoImages)" id="img2" alt="4 Rolls Unwind (3)" src="images/4rolls_shaftless_unwind.png"></img>
						<img onclick="changeImageTo(1, 3, 5, servoImages)" id="img3" alt="Sheeter Paper Mill" src="images/sheeter_paper_mill.jpg"></img>
					</div>
				</div>


				<div class="col-sm-8">
					<h1 class="page-header">Servo Drive Sheeter Machine</h1>
					
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
							<Strong>MACH Sheeting Machine -- Customized Especially for you! </Strong>
						</p>
						<p class="text-justify">
							With more than two decades of specialized experiences in manufacturing <Strong><i>Rotary High Speed Sheeting Machine</i></Strong>, we guarantee to bring you not only the best machines but ones that are sure to meet your specific needs. Enter our machines, customized especially for you!
						</p>
						<p class="text-justify">
							Customization/Tailoring is the Key! That's what makes <Strong>MACH</Strong> brand stand out from all the rest in the market! With every MACH machine, customers are assured that it has undergone the strictest quality control, as all our engineering works are done in house. We use only the best universal brands for all the essential parts like <Strong><i>FESTO, HASBAIT, KLINGELNBERG, GATES, YASKAWA, PITTMAN, KOYO, FAG, SKF</i></Strong> and the like, so the parts sourcing for maintenance works definitely will not be a problem. 
						</p>
						<p class="text-justify">
							Our computerized controls use only the most advanced IPC technology by Bekhoff, Germany. Overall, <Strong>MACH Sheeting Machine</Strong> is your best bet for cutting edge technology to keep up with the competitive world.
						</p>
					</div>

					

					<div id="Specs" class="tabcontent">		

						<table class="table table-condensed table-bordered table-striped">
							<caption class="page-header">Servo-IPC Rotary High Speed Sheeting Machine</caption>
							<thead>
							<tr>
				      		<td></td>
				      		<td colspan="4">SINGLE-FLY Sheeting Machine</td>
				      		
				      		<td colspan="3">SYNCHRO-FLY Sheeting Machine</td>		
							</tr>
							</thead>
							    <thead>
							      <tr>
							        <th style="text-align:center;">MODEL <p style="text-align:center;">(Bigger Sizes Available)</p></th>
							        <th>MACH-SRV 56</th>
							        <th>MACH-SRV 66</th>
							        <th>MACH-SRV 80</th>
							        <!--synchro-->
							        <th>SYNC-1400</th>
							        <th>SYNC-1600</th>	
							        <th>SYNC-1800</th>	
							        <th>SYNC-2000</th>

							      </tr>
							    </thead>
							<tbody>
						      <tr><!--limitation: auto create tables?-->
						     		<td>Max. Web Width</td>
						     		<td>56" (1420mm) </td>
									<td>66" (1680mm) </td>
									<td>80" (2000mm) </td>
									<td> 55"(1400mm)</td> 	
									<td>63" (1600mm)</td> 	
									<td>70" (1800mm)</td> 	
									<td>80" (2000mm)</td>

						     	</tr>
					         <tr>   <td>Max. Unwinding Diameter</td>
					         		<td></td>
					         		<td></td>
					         		<td></td>
					         		<td></td>
					         		<td></td>
					         		<td></td>
					         		 <td></td>
					         </tr>
							 <tr>	<td>H-Type (Min.4 reels) </td>
							 		<td> 1300 mm x 4-20reels</td>
							 		<td> 1300 mm x 4-20reels</td>
							 		<td> 1500 mm x 4-20reels</td>
							 		<td> 1300 mm x 4-20reels</td>
							 		<td> 1300 mm x 4-20reels</td>
							 		<td> 1500 mm x 4-20reels</td>
							 		<td> 1500 mm x 4-20reels</td>


							 </tr>
							 <tr>	<td>Hydraulic Shaftless(Single &Double) </td>
							 		<td>1500 mm x 2-6 reels</td>
							 		<td>1500 mm x 2-6 reels</td>
							 		<td>1800 mm x 2-6 reels</td>
							 		<td>1500 mm x 2-6 reels</td>
							 		<td>1500 mm x 2-6 reels</td>
							 		<td>1800 mm x 2-6 reels</td>
							 		<td>1800 mm x 2-6 reels</td>


							 </tr>
							 <tr>	<td>Designed Speed(varies on Cut length and Materials) </td>
							 		<td>300M/Min.</td>
							 		<td>300M/Min.</td>
							 		<td>300M/Min.</td>
							 		<td>325M/Min.</td>
							 		<td>325M/Min.</td>
							 		<td>325M/Min.</td>
							 		<td>325M/Min.</td>


							 </tr>
							 <tr>	<td>Min.- Max. knife load </td>
							 		<td>40-500gsm </td>
							 		<td>40-500gsm </td>
							 		<td>40-500gsm </td>
							 		<td>40-1000gsm </td>
							 		<td>40-1000gsm </td>
							 		<td>40-1000gsm </td>
							 		<td>40-1000gsm </td>
							 </tr>
							 <tr>	<td>Sheet length range(Longer length upon request)</td>
							 		<td>( 380-1700mm) </td>
							 		<td>( 380-1700mm) </td>
							 		<td>( 380-1700mm) </td>
							 		<td>( 380-1700mm) </td>
							 		<td>( 380-1700mm) </td>
							 		<td>( 380-1700mm) </td>
							 		<td>( 380-1700mm) </td>
							 </tr>
							 <tr>	<td>Cutting Tolerance</td>
							 		<td>±0.5mm</td>
							 		<td>±0.5mm</td>
							 		<td>±0.5mm</td>
							 		<td>±0.5mm</td>
							 		<td>±0.5mm</td>
							 		<td>±0.5mm</td>
							 		<td>±0.5mm</td>
							 </tr>
							 <tr>	<td>Max. Pile Height (incl. Pallet)(can request Hi-Pile up to 1700mm) </td>
							 		<td>51"(1300mm) </td>
							 		<td>51"(1300mm) </td>
							 		<td>51"(1300mm) </td>
							 		<td>51"(1300mm) </td>
							 		<td>51"(1300mm) </td>
							 		<td>51"(1300mm) </td>
							 		<td>51"(1300mm) </td>
							 </tr>
							 <tr>	<td>Max. Pile Weight </td> 
							 		<td>1500kgs. </td>
							 		<td>1500kgs. </td>
							 		<td>2200kgs. </td>
							 		<td>1500kgs. </td>
							 		<td>1500kgs. </td>
							 		<td>2200kgs. </td>
							 		<td>2200kgs. </td>
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
			var servoImages = [
				"images/servo-drive-sheeter.jpg",
				"images/servo_4rolls.jpg",
				"images/4rolls_shaftless_unwind.png",
				"images/sheeter_paper_mill.jpg"
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