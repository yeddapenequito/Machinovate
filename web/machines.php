<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Machines</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>
		
		<div id="machines-content" class="container">
			<div class="row">
				<div class="col-md-6 visible-md-block visible-lg-block">
					<img id="mach-img" alt="slitter" src="images/slitter-front.png">
				</div>

				<div class="col-xs-12 col-md-6">
					<header class="page-header">
						<h1>Choose your machine</h1>
					</header>
					<form>
						<div id="vertical-box" class="btn-group btn-group-vertical">
						  <a id="slitter" href="#" onclick="changeImage(0)" class="btn btn-primary">Slitter
						  	<small>Slit down and wound up large rolls into several smaller rolls</small>
						  </a>
						  <a id="sheeter" href="#" onclick="changeImage(1)" class="btn btn-primary">Sheeter
						  	<small>Sheet down long layers of paper into thin sheets</small>
						  </a>
						  <a id="cutter" href="#" onclick="changeImage(2)" class="btn btn-primary">Cutter
						  	<small>Cut large sets of paper at once</small>
						  </a>
						  <a id="other-products" href="#" onclick="changeImage(3)" class="btn btn-primary">Other Products
						  	<small>Assorted products ranging from sizes</small>
						  </a>
						</div>
						<a href="slitter.php" id="continue-btn" class="btn btn-primary">Continue</a>
					</form>
				</div>
			</div> <!-- ./row -->
		</div> <!-- ./container -->

		<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Get Started</h3>
                        <p><a href="index.php">Home</a></p>
                        <p><a href="machines.php">Our Machines</a></p>
                        
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>FAQ</h3>
                        <p><a href="faq_order.php?q=1">How to Order?</a></p>
                        <p><a href="faq_order.php?q=10">Specifications of Machines</a></p>
                        <p><a href="faq_order.php?q=11">How I contact your company?</a></p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Location
                          <a style="color:black;"href="contact_us.php">
				          <span class="glyphicon glyphicon-map-marker"></span>
				        </a>
                        </h3>
                        <p>1645 G. San Roque St., Arty 3 Subdivision, Lawang Bato, Valenzuela City, Philippines</p>
                        
                    </div>
                    
                    <!-- <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div> -->
                   <!--  <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        All Rights Reserved &copy; Machinovate 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
			document.getElementById("machines").className = "active";
			// document.getElementById("slitter").style.border = "2px solid #153a7e";

			var image;

			function changeImage(machine) {
			    image = document.getElementById('mach-img');
			    switch(machine) {
			    	case 0:
			    		image.src = "images/slitter-front.png";
			    		image.alt = "slitter";
			    		document.getElementById("slitter").style.border = "2px solid #153a7e";
			    		document.getElementById("sheeter").style.border = "1px solid silver";
			    		document.getElementById("cutter").style.border = "1px solid silver";
			    		document.getElementById("other-products").style.border = "1px solid silver";
			    		document.getElementById("continue-btn").href = "slitter.php";
			    		break;
			    	case 1: 
			    		image.src = "images/sheeter-servo.png";
			    		image.alt = "sheeter";
			    		document.getElementById("slitter").style.border = "1px solid silver";
			    		document.getElementById("sheeter").style.border = "2px solid #153a7e";
			    		document.getElementById("cutter").style.border = "1px solid silver";
			    		document.getElementById("other-products").style.border = "1px solid silver";
			    		document.getElementById("continue-btn").href = "sheeter.php";
			    		break;
			    	case 2:
			    		image.src = "images/cutter.png";
			    		image.alt = "cutter";
			    		document.getElementById("slitter").style.border = "1px solid silver";
			    		document.getElementById("sheeter").style.border = "1px solid silver";
			    		document.getElementById("cutter").style.border = "2px solid #153a7e";
			    		document.getElementById("other-products").style.border = "1px solid silver";
			    		document.getElementById("continue-btn").href = "cutter.php";
			    		break;
			    	case 3:
			    		image.src = "images/other-products.png";
			    		image.alt = "other products";
			    		document.getElementById("slitter").style.border = "1px solid silver";
			    		document.getElementById("sheeter").style.border = "1px solid silver";
			    		document.getElementById("cutter").style.border = "1px solid silver";
			    		document.getElementById("other-products").style.border = "2px solid #153a7e";
			    		document.getElementById("continue-btn").href = "other_products.php";
			    }
			}	
		</script>
	</body>
</html>
