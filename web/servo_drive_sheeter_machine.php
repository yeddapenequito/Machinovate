<!DOCTYPE html>
<html>
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
						<p><a href="order_sheeter.php?code=1" class="btn btn-primary btn-block btn-lg">
							Add to Cart</a></p>
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
	</body>
</html>