<!--PHP -->

<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the shipping_details table

$page_title = 'Machinovate | Add shipping details';
include ('header_after_login.php');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('../../mysqli_connect.php'); // Connect to the db.
		
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
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
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
		<?php include 'header-bottom.php';?>
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
							<input type="text" name="contact_details" placeholder="Contact Details" class="form-control" required autofocus> 
						</div>
						<p>Email Address:</p>
						<div class="form-group">
							<input type="email" name="email" placeholder="Email Address" class="form-control" required autofocus> 
						</div>
						
					</div>
					<div class="row3">					
						<input type="submit" value="Submit" class="btn btn-primary"
						id="form-button">
						<a href="./our_machines.php" class="btn btn-primary"
						id="form-button">Cancel</a>
					</div>
					</form>
				
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>