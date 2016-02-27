<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Email</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>

		<div class="container">
		  	<ol class="breadcrumb">
				<li>
					<a href="order_now.php">Step 1: Choose your machine</a>
				</li>
				<li>
					Step 2: Specify your machine's specs
				</li>
				<li class="active">
					Step 3: Enter e-mail
				</li>
				<li>
					Step 4: Shipping details
				</li>
			</ol>
			<div class="row">
				<div class="col-sm-offset-3 col-sm-6">

					<form action="" method="POST" role="form">
						<legend>Enter your email</legend>
					
						<div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="Enter your email here">
						</div>
					
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div> <!-- /.container -->

			<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	</body>
</html>