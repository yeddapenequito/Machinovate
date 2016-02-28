<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/flag-icon-css-master/css/flag-icon.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Bailing Machine</title>
		<style>
			#myImg {
			    border-radius:0px;
			    cursor: pointer;
			    transition: 0.3s;

			}

			#myImg:hover {opacity: 0.7;}

			/* The Modal (background) */
			.modal {
			    display: none; /* Hidden by default */
			    position: fixed; /* Stay in place */
			    z-index: 1; /* Sit on top */
			    padding-top: 100px; /* Location of the box */
			    left: 0;
			    top: 0;
			    width: 100%; /* Full width */
			    height: 100%; /* Full height */
			    overflow: auto; /* Enable scroll if needed */
			    background-color: rgb(0,0,0); /* Fallback color */
			    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
			}

			/* Modal Content (image) */
			.modal-content {
			    margin: auto;
			    display: block;
			    width: 80%;
			    max-width: 700px;
			    align-content: center;
			}

			/* Caption of Modal Image */
			#caption {
			    margin: auto;
			    display: block;
			    width: 80%;
			    max-width: 700px;
			    text-align: center;
			    color: #ccc;
			    padding: 10px 0;
			    height: 150px;
			}

			/* Add Animation */
			.modal-content, #caption {    
			    -webkit-animation-name: zoom;
			    -webkit-animation-duration: 0.6s;
			    animation-name: zoom;
			    animation-duration: 0.6s;
			}

			@-webkit-keyframes zoom {
			    from {transform:scale(0)} 
			    to {transform:scale(1)}
			}

			@keyframes zoom {
			    from {transform:scale(0)} 
			    to {transform:scale(1)}
			}

			/* The Close Button */
			.close {
			    position: absolute;
			    top: 15px;
			    right: 35px;
			    color: #f1f1f1;
			    font-size: 40px;
			    font-weight: bold;
			    transition: 0.3s;
			}

			.close:hover,
			.close:focus {
			    color: #bbb;
			    text-decoration: none;
			    cursor: pointer;
			}

			/* 100% Image Width on Smaller Screens */
			@media only screen and (max-width: 700px){
			    .modal-content {
			        width: 100%;
			    }
			}
</style>
	</head>
	<body>
		<?php include 'header_before_login.php';?>

		<div id="machine-details" class="container">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="machines.php">Machines</a></li>
					<li ><a href="other_products.php">Other Products</a></li>
					<li class="active">Bailing Machine</li>
				</ol>
				<div class="col-xs-12 col-md-8">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<img id="mach-img" src="images/bailing-machine.png" alt="bailing-machine">
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
					<p id="footnote">*Specification could be changed for improvement without prior notice.</p>
				</div> <!-- /.col 1 -->


				<div id="sidebar" class="col-xs-12 col-md-4">
					<div id="photos">
						<h3 class="page-header">Photos</h3>
						<div class="img-popup">
							<img id="myImg" src="images/bailing-machine.png" alt="bailing-machine">
						</div>
						<!-- The Modal -->
						<div id="myModal" class="modal">
						  <span class="close">×</span>
						  <img class="modal-content" id="bailing-machine">
						  <div id="caption"></div>
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
			</div> <!-- ./row -->

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the image and insert it inside the modal - use its "alt" text as a caption
			var img = document.getElementById('myImg');
			var modalImg = document.getElementById("bailing-machine");
			var captionText = document.getElementById("caption");
			img.onclick = function(){
			    modal.style.display = "block";
			    modalImg.src = this.src;
			    modalImg.alt = this.alt;
			    captionText.innerHTML = this.alt;
			}

			// Get the <span> element that closes the modal
			var span = document.getElementsByClassName("close")[0];

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() { 
			    modal.style.display = "none";
			}
			</script>
	</body>
</html>