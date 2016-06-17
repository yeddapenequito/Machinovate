<!--PHP -->
<!--PHP -->

<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the shipping_details table
$page_title = 'Machinovate | Add shipping details';
include ('header_before_login.php');
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
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the shipping details in the database...
		
		// Make the query:
		$q = "INSERT INTO clients (lastName, firstName, companyName, address, contactNo, email) VALUES ('$ln', '$fn', '$cn', '$add', '$contact', '$email')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>Shipping details has been processed</p><p><br /></p>';	
		header('Location: /Machinovate/web/shipment_successful.php');
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The shipping details could not be processed due to a system error. We apologize for any inconvenience.</p>'; 
			header('Location: /Machinovate/web/admin/account_failed.php');
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
	</head>

	<body>
		<?php include 'header_on_form_completion.php';?>
		<div class="container">
		<ol class="breadcrumb">
				<li><a href="cart_summary.php">Your Cart</a></li>
				<li class="active">Shipment Details</li>
			</ol>
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




<!--PHP -->

<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require ('../mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a last name:
	if (empty($_POST['delivery_basis'])) {
		$errors[] = 'You forgot to enter the last name.';
	} else {
		$delivery_basis = mysqli_real_escape_string($dbc, trim($_POST['delivery_basis']));
	}
	
	// Check for a first name:
	if (empty($_POST['ship_day'])) {
		$errors[] = 'You forgot to enter the first name.';
	} else {
		$ship_day = mysqli_real_escape_string($dbc, trim($_POST['ship_day']));
	}
	
	
	// Check for a company name:
	if (empty($_POST['term'])) {
		$errors[] = 'You forgot to enter the company name.';
	} else {
		$term = mysqli_real_escape_string($dbc, trim($_POST['term']));
	}
	
	//Check for the contact number:
	if (empty($_POST['confirmation'])) {
		$errors[] = 'You forgot to enter the contact details.';
	} else {
		$confirmation = mysqli_real_escape_string($dbc, trim($_POST['confirmation']));
	}
	
	// Check for an email address:
	if (empty($_POST['shipment'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$shipment = mysqli_real_escape_string($dbc, trim($_POST['shipment']));
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the shipping details in the database...
		
		// Make the query:
		$p = "INSERT INTO orders (client_id, date, deliveryBasis, shipmentDate, paymentTerms, orderStatus) 
	VALUES ((SELECT MAX(client_id) FROM clients), $ship_day, $term, 'PENDING';";		
		$s = @mysqli_query ($dbc, $p); // Run the query.
		if ($s) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>Shipping details has been processed</p><p><br /></p>';	
		header('Location: /Machinovate/web/admin/account_successful.php');
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The shipping details could not be processed due to a system error. We apologize for any inconvenience.</p>'; 
			header('Location: /Machinovate/web/admin/account_failed.php');
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
					<div class="form-group required">

						<label class="control-label col-sm-2" for="shipment">
							Shipment Date: </label>
						<div class="col-sm-10">
							<input class="form-control"  placeholder="No. of Days" min="<?php echo date("Y-m-d"); ?>" type="date" name="ship_day"  required>
							<div class="help-block with-errors"></div>
						</div>
					</div>

					<!-- Payment Terms -->
					<div class="form-group">

						<label class="control-label col-sm-2" for="payment">
							Payment Terms: </label>
						<div class="col-sm-10">
							<div class="checkbox">
								<label><input type="checkbox" name="loc" id= "loc" value="Letter of Credit, Draft at Sight"> Letter of Credit, Draft at Sight </label>
							</div>

							<div class="checkbox">
								<label><input type="checkbox" name="telegraphic" id="telegraphic" value="Telegraphic Transfer">Telegraphic Transfer </label>
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
