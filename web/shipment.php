<!--PHP -->

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
		<div class="container">
			<h1 class="page-header">Shipment Details</h1>
			<p style="color:red;font-style:italic">* Required fields.</p>
	
			<form id="formshipment" role="form" method="post" 
				role="form" class="form form-horizontal">
				<fieldset>	
					<div class="form-group required">

						<label class="col-sm-2 control-label">
							Name:</label>
						<div class="col-sm-10">
							<div class="form-inline">	
						 		<input id="last-name" autofocus class="form-control" required name="last_name" placeholder="Last Name" type="text" size="25em">
						 		<input id="first-name" class="form-control" name="first_name" placeholder="First Name" required type="text" size="35em"> 
						 		<div class="help-block with-errors"></div>
							</div>
						</div>
					</div>

					<div class="form-group required">

						<label class="col-sm-2 control-label">
							Company Name:</label>
						<div class="col-sm-10">	
							<input class="form-control" name="company_name" required type="text"> 
							<div class="help-block with-errors"></div>
						</div>
					</div>
					
					<div class="form-group required">

						<label class="col-sm-2 control-label">
							Address:</label>
						<div class="col-sm-10">	
							<input class="form-control" name="address" required type="text"> 
							<div class="help-block with-errors"></div>
						</div>
					</div>
				
					<div class="form-group required">

						<label class="col-sm-2 control-label">
							Mobile Number:</label>
						<div class="col-sm-10">	
							<input class="form-control" name="contact_details" required type="tel" placeholder="09XXXXXXXXX" pattern="09\d{9}"> 
							<div class="help-block with-errors"></div>
						</div>
					</div>
				
					<div class="form-group required">

						<label class="col-sm-2 control-label">
							Email Address:</label>
						<div class="col-sm-10">	
							<input class="form-control" name="email" required type="email"> 
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</fieldset>

				<!-- Shipping Terms Section -->
				<fieldset>
					<legend>Shipping Terms Section:</legend>

					<!-- Shipping Delivery Basis -->
					<div class="form-group required">
						<label class="control-label col-sm-2" for="ship-basis">
							Shipping Delivery Basis: </label>
						<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" name="delivery_basis" value="Free On Board" checked="checked">
									Free on Board (FOB) </label>
							</div>
							<div class="radio">
								<label><input type="radio" name="delivery_basis" value="Cost Insurance and Freight">
									Cost, Insurance and Freight (CIF) </label>
							</div>
							<div class="radio">
								<label><input type="radio" name="delivery_basis" value="Cost and Freight">
									Cost and Freight </label>
							</div>
						</div>
					</div>	

					<!--Shipment -->
					<div class="form-group">

						<label class="control-label col-sm-2" for="shipment">
							Shipment Date: </label>
						<div class="col-sm-10">
							<input class="form-control"  placeholder="No. of Days" min="1" type="date" name="ship_day"  required>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<!-- Payment Terms -->
					<div class="form-group required">

						<label class="control-label col-sm-2" for="payment">
							Payment Terms: </label>
						<div class="col-sm-10">
							<div class="checkbox">
								<label><input type="checkbox" name="term" id= "credit" value="Letter of Credit, Draft at Sight"> Letter of Credit, Draft at Sight </label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="term" id="transfer" value="Telegraphic Transfer">Telegraphic Transfer </label>
							</div>
						</div>
					</div>

					<div class="form-group required">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="input-group">
								<input class="form-control" type="number" name="confirmation"/>
								<span class="input-group-addon">
									% downpayment</span>
							</div>
						</div>
					</div>

					<div class="form-group required">
						<div class="col-sm-offset-2 col-sm-10">
							<div class="input-group">
								<input class="form-control" type="number" name="shipment"/>
								<span class="input-group-addon">
									% before shipment</span>
							</div>
						</div>
					</div>
				</fieldset>		

				<!-- Submit and Cancel Buttons -->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit">
						<a id="cancel-btn" onclick="window.history.back()">Cancel</a>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->

		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="actionlistener.js"></script>
		<script type="text/javascript" src="scripts/validator.min.js"></script>
		<script type="text/javascript" src="formlistener.js"></script>
	</body>
</html>
