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
			<p class="text-danger">All fields are required.</p>
	
				<form role="form" id="slitter" method="post" 
					role="form" class="form-horizontal">
					<fieldset>	
						<div class="form-group">

							<label class="col-sm-2 control-label">
								Name:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 		<input autofocus class="form-control" required name="last_name" placeholder="Last Name" type="text">
							 		<input class="form-control" name="first_name" placeholder="First Name" required type="text"> 
								</div>	
							</div>
						</div>

						<div class="form-group">

							<label class="col-sm-2 control-label">
								Company Name:</label>
							<div class="col-sm-10">	
								<input class="form-control" name="company_name" required type="text"> 
							</div>
						</div>
						
						<div class="form-group">

							<label class="col-sm-2 control-label">
								Address:</label>
							<div class="col-sm-10">	
								<input class="form-control" name="address" placeholder="[Building House_No Street_Name District_Name] Barangay, Municipality/Province" required type="text"> 
							</div>
						</div>
					
						<div class="form-group">

							<label class="col-sm-2 control-label">
								Mobile Number:</label>
							<div class="col-sm-10">	
								<input class="form-control" name="contact_details" required type="text"> 
							</div>
						</div>
					
						<div class="form-group">

							<label class="col-sm-2 control-label">
								Email Address:</label>
							<div class="col-sm-10">	
								<input class="form-control" name="email" required type="email"> 
							</div>
						</div>
					</fieldset>

					<!-- Shipping Terms Section -->
					<fieldset>
						<legend>Shipping Terms Section:</legend>

						<!-- Shipping Delivery Basis -->
						<div class="form-group">
							<label class="control-label col-sm-2" for="ship-basis">
								Shipping Delivery Basis: </label>
							<div class="col-sm-10">
								<div class="radio">
									<label><input type="radio" name="delivery_basis" value="Free On Board">
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
								Shipment: </label>
							<div class="col-sm-10">
								<div class="input-group">
									<input class="form-control"  placeholder="No. of Days" min="1" type="number" name="ship_day"  required>
									<span class="input-group-addon">Working days after initial payment.</span>
								</div>
							</div>
						</div>

						<!-- Payment Terms -->
						<div class="form-group">

							<label class="control-label col-sm-2" for="payment">
								Payment Terms: </label>
							<div class="col-sm-10">
								<div class="radio">
									<label><input type="radio" name="term" id= "credit" value="Letter of Credit, Draft at Sight"> Letter of Credit, Draft at Sight </label>
								</div>

								<div class="radio">
									<label><input type="radio" name="term" value="Telegraphic Transfer" id="transfer">Telegraphic Transfer </label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="input-group">
									<input class="form-control" id="telegraphic-transfer-a" disabled type="number" name="confirmation" required/>
									<span class="input-group-addon">% downpayment upon confirmation</span>
								</div>

								<div class="input-group">
									<input class="form-control" id="telegraphic-transfer-b" disabled type="number" name="shipment" required/>
									<span class="input-group-addon">% before shipment</span>
								</div>

								<div class="input-group">
									<input class="form-control" id="telegraphic-transfer-c"  disabled type="number" name="installation" required/>
									<span class="input-group-addon">% upon installation</span>
								</div>
							</div>
						</div>
					</fieldset>		

					<!-- Submit Button -->
					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					<button class="btn btn-primary" value="Submit" type="submit">
							Submit</button>
					<a class="btn btn-default" id="cancel-btn" href="machines.php">
							Cancel</a>
						
					</div>
					</form>
				
					
		</div>

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="actionlistener.js"></script>
		<script type="text/javascript">

			document.getElementById("transfer").onchange = function() {
			
				if(document.getElementById("transfer").checked) {
					document.getElementById("telegraphic-transfer-a").removeAttribute("disabled");
					document.getElementById("telegraphic-transfer-b").removeAttribute("disabled");
					document.getElementById("telegraphic-transfer-c").removeAttribute("disabled");
				}
				};
			document.getElementById("credit").onchange = function() {
				if(document.getElementById("credit").checked){
					document.getElementById("telegraphic-transfer-a").setAttribute("disabled", "disabled");
					document.getElementById("telegraphic-transfer-a").value = "";
					document.getElementById("telegraphic-transfer-b").setAttribute("disabled", "disabled");
					document.getElementById("telegraphic-transfer-b").value = "";
					
					document.getElementById("telegraphic-transfer-c").setAttribute("disabled", "disabled");
					document.getElementById("telegraphic-transfer-c").value = "";
			
				}
			};
	    </script>
	</body>
</html>
