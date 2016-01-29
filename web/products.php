<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/web/styles/bootstrap.min.css">
		<link rel="stylesheet" href="/web/styles/main.css">
		<title></title>
		<style>
			.footer{
				margin-bottom:50px;
				background: none;

			}
			.btn-primary{
				margin-top:0px;
				margin-left:auto;
				margin-right: auto;
			}
		</style>
	</head>
	<body>
		<?php include 'header.php';?>
		<div class="container-fluid">
		  <h3>Products</h3>
		  <div class="row">
		    <div class="col-md-3">
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		    </div>
		    <div class="col-md-3"> 
		      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    </div>
		    <div class="col-md-3"> 
		      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
		    </div>
		    <div class="col-md-3">
		      <ul class="nav nav-pills nav-stacked">
		        <li class="active"><a>Products</a></li>
		        <li><a href="/web/slitter.php">Slitter</a></li>
		        <li><a href="/web/sheeter.php">Sheeter</a></li>
		        <li class="active"><a href="#">Services</a></li>
		      </ul>
		    </div>
		    <div class="clearfix visible-lg"></div>
		  </div>


		    <div class="dropdown">
			  <button type="button" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Order Now <span class="badge">Slitter /Sheeter </span> <span class="caret"></span></button>
			  <ul class="dropdown-menu">
			    <li><a href="/web/order_slitter.php">Slitter</a></li>
			    <li><a href="/web/order_sheeter.php">Sheeter</a></li>
			  </ul>
			</div>
		  <footer class="footer">
		  	<p class="text-muted">*Our machines can be customized, but prices may differ. For details call +632 404 6676</p>
		  </footer>

		</div>
		
		<?php include 'footer.php';?>
	</body>
</html>