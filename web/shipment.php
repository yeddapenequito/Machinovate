<!--PHP -->

<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the shipping_details table

$page_title = 'Machinovate | Add shipping details';
include ('header_before_login.php');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('../mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (empty($_POST['first_name'])) {
		$errors[] = 'You forgot to enter the first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
	}
	
	// Check for a last name:
	if (empty($_POST['last_name'])) {
		$errors[] = 'You forgot to enter the last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
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
		$add = mysqli_real_escape_string($dbc, trim($_POST['company_name']));
	}

	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}

	//Check for the contact number:
	if (empty($_POST['contact_details'])) {
		$errors[] = 'You forgot to enter the contact details.';
	} else {
		$contact = mysqli_real_escape_string($dbc, trim($_POST['contact_details']));
	}

	if (empty($errors)) { // If everything's OK.
	
		// Register the shipping details in the database...
		
		// Make the query:
		$q = "INSERT INTO shipping_details (last_name, first_name, company, address, email, contact) VALUES ('$ln', '$fn', '$cn', '$add', '$email', '$contact')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
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
						<p>Company Name:</p>
						<div class="form-group">
							<input type="text" name="company_name" placeholder="Shipping Address" class="form-control" required autofocus> 
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