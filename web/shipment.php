<!--PHP -->

<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the shipping_details table

$page_title = 'Machinovate | Add shipping details';


// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('../mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	

	// Check for a last name:
	if (empty($_POST['last_name'])) {
		$errors[] = 'You forgot to enter the last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
	}
	

	// Check for a first name:
	if (empty($_POST['first_name'])) {
		$errors[] = 'You forgot to enter the first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	}
	
	
	// Check for a company name:
	if (empty($_POST['company_name'])) {
		$errors[] = 'You forgot to enter the company name.';
	} else {
		$cn = mysqli_real_escape_string($dbc, trim($_POST['company_name']));
	}

	// Check for an address:
	if (empty($_POST['address'])) {
		$errors[] = "You forgot to enter the company's address.";
	} else {
		$add = mysqli_real_escape_string($dbc, trim($_POST['address']));
	}

	//Check for the contact number:
	if (empty($_POST['contact_details'])) {
		$errors[] = 'You forgot to enter the contact details.';
	} else {
		$contact = mysqli_real_escape_string($dbc, trim($_POST['contact_details']));
	}
	
	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	// Check for delivery basis:
	if (empty($_POST['delivery_basis'])) {
		$errors[] = 'You forgot to choose your delivery basis.';
	} else {
		$db = mysqli_real_escape_string($dbc, trim($_POST['delivery_basis']));
	}

	// Check for shipment day:
	if (empty($_POST['ship_day'])) {
		$errors[] = 'You forgot to enter the shipment day.';
	} else {
		$sd = mysqli_real_escape_string($dbc, trim($_POST['ship_day']));
	}

	// Check for term:
	if (empty($_POST['term'])) {
		$errors[] = 'You forgot to choose your shipping term.';
	} else {
		$term = mysqli_real_escape_string($dbc, trim($_POST['term']));
	}

	$confirmation = mysqli_real_escape_string($dbc, trim($_POST['confirmation']));
	$shipment = mysqli_real_escape_string($dbc, trim($_POST['shipment']));
	$installation = mysqli_real_escape_string($dbc, trim($_POST['installation']));
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the shipping details in the database...
		
		// Make the query:
		$q = "INSERT INTO shipping_details (last_name, first_name, company_name, address, contact_details, email, delivery_basis, ship_day, term, confirmation, shipment, installation) VALUES ('$ln', '$fn', '$cn', '$add', '$contact', '$email', '$db', '$sd', '$term', '$confirmation', '$shipment', '$installation')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>Shipping details has been processed</p><p><br /></p>';	
		header('Location: /Machinovate/web/summary_order.php');
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The shipping details could not be processed due to a system error. We apologize for any inconvenience.</p>'; 
			header('Location: /Machinovate/web/add_failed.php');
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><p><br /></p>';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Shipment</title>
		<style>


		body{
			background-color: #bdc3c7;
		}
		</style>
	</head>
		

	<body>
		<?php include 'header_on_form_completion.php';?>
		<div class="container">
			<h1 class="page-header">Shipment Details</h1>
			<p>Please fill up necessary details.</p>
	
				<form role="form" action="shipment.php" method="post" 
					role="form" class="form-horizontal">
					<fieldset>	
						<p>Last Name:</p>
						<div class="form-group">
							 <input type="text" name="last_name" placeholder="Last Name" class="form-control" required autofocus>
						</div>
						<p>First Name:</p>
						<div class="form-group">
							 <input type="text" name="first_name" placeholder="First Name" class="form-control" required autofocus> 
						</div>
						<p>Company Name:</p>
						<div class="form-group">
							<input type="text" name="company_name" placeholder="Company Name" class="form-control" required autofocus> 
						</div>
						
						<p>Address:</p>
						<div class="form-group">
							<input type="text" name="address" placeholder="Shipping Address" class="form-control" required autofocus> 
						</div>
					
						<p>Contact Details:</p>
						<div class="form-group">
							<input type="text" name="contact_details" placeholder="Contact Details" class="form-control" required autofocus> 
						</div>
					
						<p>Email Address:</p>
						<div class="form-group">
							<input type="email" name="email" placeholder="Email Address" class="form-control" required autofocus> 
						</div>
				</fieldset>
				<!-- Shipping Terms Section -->
				<fieldset>
						<legend>Shipping Terms Section:</legend>
						
						<div class="form-group">
						<label class="control-label col-sm-2" for="ship-basis">Shipping Delivery Basis:</label>
								<div class="col-sm-10">
									<div class="radio">
										<label><input type="radio" name="delivery_basis" value="Free On Board"> Free on Board (FOB)</label>
									</div>
									<div class="radio">
										<label><input type="radio" name="delivery_basis" value="Cost Insurance and Freight"> Cost, Insurance and Freight (CIF) </label>
									</div>
									<div class="radio">
										<label><input type="radio" name="delivery_basis" value="Cost and Freight"> Cost and Freight </label>
									</div>
								</div>
						</div>	

						<!--Shipment -->
					<div class="form-group">

						<label class="control-label col-sm-2" for="shipment">Shipment: </label>

						<div class="col-sm-10">
							<div class="input-group">
								
								<input class="form-control"  placeholder="No. of Days" min="1" type="number" name="ship_day"  required autofocus/>
								<span class="input-group-addon">  Working days after initial payment.</span>
							</div>
						</div>
					</div>

					<!-- Payment Terms -->
					<div class="form-group">

					<label class="control-label col-sm-2" for="payment">Payment Terms: </label>

					<div class="col-sm-10">
							<div class="radio">
								<label><input type="radio" name="term" id= "credit" value="Letter of Credit, Draft at Sight"> Letter of Credit, Draft at Sight </label>
							</div>
							<div class="radio">
								<label><input type="radio" name="term" value="Telegraphic Transfer" id="transfer">Telegraphic Transfer </label>

							</div>
							<div class="input-group">

							<input class="form-control" id="telegraphic-transfer-a" disabled type="number" name="confirmation" required autofocus/><span class="input-group-addon">  % downpayment upon confirmation</span>
							
						</div>
						<div class="input-group">
							
							<input class="form-control" id="telegraphic-transfer-b" disabled type="number" name="shipment" required autofocus/><span class="input-group-addon">% before shipment</span>
							  
						</div>
						<div class="input-group">
							<input class="form-control" id="telegraphic-transfer-c"  disabled type="number" name="installation" required autofocus/><span class="input-group-addon">  % upon installation</span>
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