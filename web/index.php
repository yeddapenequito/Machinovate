<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
		<title>Machinovate | Home</title>
		<style>
		.carousel-caption{
	      	margin: 0;
	      	line-height: 1.25;
	      	color: #fff;
	      	text-shadow: 0 1px 1px rgba(0,0,0,.4);
	    }
		</style>
	</head>
	<body>
		<?php include 'header.php';?>
		
		<!-- carousel -->
		<div id="my-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#my-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#my-carousel" data-slide-to="1"></li>
				<li data-target="#my-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img alt="First slide" src="./images/cover-picture-1">
					<div class="carousel-caption">
						<p>Our innovation + The latest technology</p>
						<h3>Providing you the best</h3>
						<h2>Paper Converting Machines</h2>
						<a href="#" class="btn btn-large btn-primary">View our Products</a>
					</div>
				</div>
				<div class="item">
					<img alt="Second slide" src="./images/cover-picture-2">
					<div class="carousel-caption">
						<p>Our innovation + The latest technology</p>
						<h3>Providing you the best</h3>
						<h2>Paper Converting Machines</h2>
						<a href="#" class="btn btn-large btn-primary">View our Products</a>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php';?>
	</body>
</html>