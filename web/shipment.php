<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Shipment</title>
	</head>
		

	<body>
		<?php include 'header_on_form_completion.php';?>
		<div  id="order-slitter" class="container">
			<h1 class="page-header">Shipment Details</h1>
			<p>Please fill up necessary details.</p>
	
				<form role="form" action="processadd.php" method="post" 
					role="form" class="form-horizontal">
					<fieldset>	
						<p>Last Name:</p>
						<div class="form-group">
							 <input type="text" name="lastname" placeholder="Last Name" class="form-control" required autofocus>
						</div>
						<p>First Name:</p>
						<div class="form-group">
							 <input type="text" name="firstname" placeholder="First Name" class="form-control" required autofocus> 
						</div>
						
						
						<p>Address:</p>
						<div class="form-group">
							<input type="text" name="saddress" placeholder="Shipping Address" class="form-control" required autofocus> 
						</div>
					
					

						<p>Contact Details:</p>
						<div class="form-group">
							<input type="text" name="contact" placeholder="Contact Details" class="form-control" required autofocus> 
						</div>
						<p>Email Address:</p>
						<div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="Enter your email here">
						</div>
						
					
										
						<input type="submit" value="Submit" class="btn btn-primary"
						id="form-button">
						<a href="machines.php" class="btn btn-primary"
						id="form-button">Cancel</a>
					
					</form>
				
					</fieldset>
		</div>
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	</body>
</html>