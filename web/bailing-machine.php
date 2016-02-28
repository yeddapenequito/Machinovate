<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Bailing Machine</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		<div id="machine-details" class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li class="active">Bailing Machine</li>
			</ol>
			<div class="row">
				<div class="col-sm-4">
					<div id="lg-img">
						<img id="focus-img" src="images/bailing-machine.png" alt="bailing-machine">
					</div>
					<div id="sm-img">
						<img onclick="changeImage(0)" class="active" id="img0" alt="bailing-machine" src="images/bailing-machine.png"></img>
						<img onclick="changeImage(1)" id="img1" alt="slitter back" src="images/slitter-back.png"></img>
						<img onclick="changeImage(2)" id="img2" alt="slitter close up 1" src="images/slitter-close-up-1.jpg"></img>
						<img onclick="changeImage(3)" id="img3" alt="slitter close up 2" src="images/slitter-close-up-2.jpg"></img>
					</div>
				</div>
				<div class="col-sm-8">
					<h1 class="page-header">Bailing Machine</h1>
					
					<div id="description">
						<p class="text-justify">
							Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.
						</p>
					</div>

					<div id="application">
						<p><strong>Applications</strong>. Fax Paper and Cash Register</p>
					</div>

					<div id="btn-group">
						<p><a target="_blank" href="order_bailing-mach.php" class="btn btn-primary btn-block btn-lg">
							<i class="glyphicon glyphicon-shopping-cart"></i> Add to Shopping Cart</a></p>
						<p><a id="contact-us-btn" target="_blank" href="contact_us.php" class="btn btn-primary btn-block btn-lg">Contact Us for More Details</a></p>
					</div>
					
					<!-- <div id="video">
						<h2 class="page-header">Video</h2>
						<video src=""></video>
					</div> -->

					<table class="table table-condensed table-hover table-bordered">
						<caption class="page-header">Specifications</caption>
						<thead>
							<tr>
								 <th colspan="2">Bailing Machine Specifications</th>
							  </tr>
							  <tr>
							    <td>Pressure</td>
							    <td>30 Tones</td>
							  </tr>
							  <tr>
							    <td colspan="2"><center>Fixed with safety door coated with stainless steel sheet</center></td>
							  </tr>
							  <tr>
							    <td>Inner Size</td>
							    <td>53 cm x 74 cm x 81 cm  84 bales in a 20 ft container</td>
							  </tr>
							  <tr>
							    <td>Inner Size</td>
							    <td>74 cm x 74 cm x 114 cm 45 bales in a 20 ft container</td>
							  </tr>
							  <tr>
							    <td>Pump</td>
							    <td>D150 mm x d112 mm x 1250 mmm</td>
							  </tr>
							  <tr>
							    <td>Oil Pump</td>
							    <td>Injecting amount 42 pm²</td>
							  </tr>
							  <tr>
							    <td>Motor</td>
							    <td>380V 7.5KW</td>
							  </tr>
							  <tr>
							    <td>Weight</td>
							    <td>1.75T</td>
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
			    		document.getElementById("focus-img").src = "images/bailing-machine.png";
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