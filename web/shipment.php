<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/web/styles/bootstrap.min.css">
		<link rel="stylesheet" href="/web/styles/main.css">
		<title></title>
		<style>
			.row h3{
			margin-left:auto;
			margin-top:50px;
			}
			.row1{
			position: absolute;
			margin-left:-380px;
			margin-top:10px;
			margin-right:auto;
			}
			.row2{
			position: absolute;
			margin-left:100px;
			margin-right:auto;
			margin-top:10px;
			}
			.row3{
			position: absolute;
			margin-left:130px;
			margin-right:auto;
			margin-top:310px;
			}
		</style>
	</head>
	<body>
		<?php include 'header.php';?>
		<div class="container">
			
			<div class="row">
				<h3>Shipment Details</h3>
				
					<form role="form" action="processadd.html" method="post" 
					class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
					<div class="row1">	
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
					</div>
					<div class="row2">

						<p>Contact Details:</p>
						<div class="form-group">
							<input type="text" name="contact" placeholder="Contact Details" class="form-control" required autofocus> 
						</div>
						<p>Email Address:</p>
						<div class="form-group">
							<input type="email" name="emailadd" placeholder="Email Address" class="form-control" required autofocus> 
						</div>
						
					</div>
					<div class="row3">					
						<input type="submit" value="Submit" class="btn btn-primary"
						id="form-button">
						<a href="/web/products.php" class="btn btn-primary"
						id="form-button">Cancel</a>
					</div>
					</form>
				
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>