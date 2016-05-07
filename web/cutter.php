
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Cutter</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		<div id="machine-details" class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li class="active">Cutter</li>
			</ol>
			<div class="row">
				<div class="col-sm-4">
					<div id="lg-img">
						<img id="focus-img" src="images/cutter.png" alt="cutter">
					</div>
					<div id="sm-img">
						<img onclick="changeImageTo(1, 0, 2, cutterImages)" class="active" id="img0" alt="cutter" src="images/cutter.png"></img>
					</div>
				</div>
				<div class="col-sm-8">
					<h1 class="page-header">Cutter</h1>
					
					<div id="description">
						<p class="text-justify">
							Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.
						</p>
					</div>

					<div id="application">
						<p><strong>Applications</strong>. Fax Paper and Cash Register</p>
					</div>

					<div id="btn-group">
						<p><a href="order_cutter.php" class="btn btn-primary btn-block btn-lg">
							Buy this product</a></p>
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
								<th>MODEL</th>
								<th colspan="2">CT-115E</th>
								<th colspan="2">CT-137E</th>
								<th colspan="2">CT-155E</th>
								
							</tr>
						</thead>
						<tbody>
							<tr><!--limitation: auto create tables?-->
								<td></td>
								<td>cm</td>
								<td>(inch)</td>
								<td>cm</td>
								<td>(inch)</td>
								<td>cm</td>
								<td>(inch)</td>
								
								
							</tr>
							<tr>   
								<td>A Cutting Width</td>
								<td>115</td>
								<td>(45.25)</td>
								<td>137</td>
								<td>(53.93)</td>
								<td>155</td>
								<td>(61)</td>
								

							</tr>
							<tr>	
								<td>B Cutting Height</td>
								<td>16.5</td>
								<td>(6.3)</td>
								<td>16.5</td>
								<td>(6.3)</td>
								<td>16.5</td>
								<td>(6.3)</td>
								


							</tr>
							<tr>	
								<td>C Cutting Length</td>
								<td>115</td>
								<td>(45.25)</td>
								<td>137</td>
								<td>(53.93)</td>
								<td>155</td>
								<td>(61)</td>
															</tr>
							<tr>	
								<td>D Front Table Length</td>
								<td>75</td>
								<td>(29.5)</td>
								<td>75</td>
								<td>(29.5)</td>
								<td>75</td>
								<td>(29.5)</td>
															</tr>
							<tr>	
								<td>E Table Height</td>
								<td>90</td>
								<td>(35.4)</td>
								<td>90</td>
								<td>(35.4)</td>
								<td>90</td>
								<td>(35.4)</td>
								
							</tr>
							<tr>	
								<td>F Machine Width</td>
								<td>290</td>
								<td>(114)</td>
								<td>310</td>
								<td>(122)</td>
								<td>328</td>
								<td>(129)</td>
															</tr>
							<tr>	
								<td>G Machine Height</td>
								<td>168</td>
								<td>(66)</td>
								<td>168</td>
								<td>(66)</td>
								<td>168</td>
								<td>(66)</td>
								
							</tr>
							<tr>	
								<td>H Machine Lengthh</td>
								<td>270</td>
								<td>(106.3)</td>
								<td>290</td>
								<td>(114.2)</td>
								<td>308</td>
								<td>(121.3)</td>
															</tr>
							<tr>	
								<td>K Machine Fromt Length</td>
								<td>89</td>
								<td>(35)</td>
								<td>89</td>
								<td>(35)</td>
								<td>89</td>
								<td>(35)</td
															</tr>
							<tr>	
								<td>Smallest Cut-with clamp</td> 
								<td>9</td>
								<td>(3.54)</td>
								<td>9</td>
								<td>(3.54)</td>
								<td>10</td>
								<td>(3.94)</td>
							
							</tr>
							<tr>	
								<td>without clamp</td> 
								<td>3</td>
								<td>(1.18)</td>
								<td>3</td>
								<td>(1.18)</td>
								<td>4</td>
								<td>(1.57)</td>
							
							</tr>
							<tr>	
								<td>Cutting Cycle Per Minute</td> 
								<td colspan="2">48</td>
								<td colspan="2">48</td>
								<td colspan="2">42</td>
							
							</tr>
							<tr colspan="2">	
								<td>Clamp Pressure</td> 
								<td colspan="2" colspan="2"><p>400-4000 kg</p>
								<p>(880.8800lb)</p></td>
								<td colspan="2" colspan="2"><p>400-4000 kg</p>
								<p>(880.8800lb)</p></td>
								<td colspan="2" colspan="2"><p>400-4500 kg</p>
								<p>(880.9900lb)</p></td>
							</tr>
							<tr>	
								<td>Net Weight</td> 
								<td colspan="2">4100 kg</td>
								<td colspan="2">4500 kg</td>
								<td colspan="2">5100 kg</td>
							</tr>
							<tr>	
								<td>Main Motor</td> 
								<td colspan="2">5.6 kw(7.5HP)</td>
								<td colspan="2">5.6 kw(7.5HP)</td>
								<td colspan="2">7.5 kw(10HP)</td>
							
							</tr>
							<tr>	
								<td>Backgauge Motor</td> 
								<td colspan="2">0.5 kw(0.6HP)</td>
								<td colspan="2">1 kw(1.34HP)</td>
								<td colspan="2">1 kw(1.34HP)</td>
							
							</tr>
							<tr>	
								<td>Air Blower For Table</td> 
								<td colspan="2">0.75 kw(1HP)</td>
								<td colspan="2">0.75 kw(1HP)</td>
								<td colspan="2">0.75 kw(1HP)</td>
							
							</tr>

							<tr>	
								<td>Power Requirement</td> 
								<td colspan="2">6.85 kw(9.19HP)</td>
								<td colspan="2">7.35 kw(9.84HP)</td>
								<td colspan="2">9.25 kw(12.34HP)</td>
							
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
			var cutterImages = ["images/cutter.png"];
		</script>
	</body>
</html>