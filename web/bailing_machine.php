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
						<img onclick="changeImageTo(1, 0, 2, bailingImages)" class="active" id="img0" alt="bailing-machine" src="images/bailing-machine.png"></img>
					</div>
				</div>
				<div class="col-sm-8">
					<h1 class="page-header">Bailing Machine</h1>

					<ul class= "tab">
						<li>
							<a href="#" class="tablinks" onclick="openCity(event, 'Description')">Description</a>
						</li>
	  					<li>
	  						<a href="#" class="tablinks" onclick="openCity(event, 'Specs')">Specifications</a>
	  					</li>
	  				</ul>

					
					<div id="Description"  class="tabcontent">
						<caption class="page-header">Manufactured by <Strong>LIK SANG MACHINERY MANUFACTURE LTD.</strong> </caption>


						<p>All Materials Vertical Bailing Press is suitable for the bailing of textile fibers, waste papers, plastics, aluminums and metal materials. </p>
					</div>

					
					
					
					<div id="Specs" class="tabcontent">
						<table class="table table-condensed table-striped table-bordered">
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
			var bailingImages = ["images/bailing-machine.png"];
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