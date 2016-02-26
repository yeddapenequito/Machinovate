<!--PHP -->

<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the agents table

$page_title = 'Add Agent';
include ('header_on_login.php');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('mysqli_connect.php'); // Connect to the db.
		
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
	
	// Check for the country
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter the country.';
	} else {
		$country = mysqli_real_escape_string($dbc, trim($_POST['country']));
	}

	// Check for an email address:
	if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter your email address.';
	} else {
		$email = mysqli_real_escape_string($dbc, trim($_POST['email']));
	}


	//Check for the contact number:
	if (empty($_POST['contact'])) {
		$errors[] = 'You forgot to enter the contact details.';
	} else {
		$contact = mysqli_real_escape_string($dbc, trim($_POST['contact']));
	}

	if (empty($errors)) { // If everything's OK.
	
		// Register the agent in the database...
		
		// Make the query:
		$q = "INSERT INTO users (first_name, last_name, country, email, contact) VALUES ('$fn', '$ln', '$country, $email, $contact)";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>An agent has been registered!</p><p><br /></p>';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The agent could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
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


<!--HTML -->
<h1>Register</h1>
<form action="add_agents.php" method="post">
	<p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" /></p>
	<p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" /></p>
	<p>Country: <input type="text" name="country" size="15" maxlength="30" value="<?php if (isset($_POST['country'])) echo $_POST['country']; ?>" /></p>
	<p>Email Address: <input type="text" name="email" size="30" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /> </p>
	<p>Contact Details: <input type="text" name="contact" size="10" maxlength="60" value="<?php if (isset($_POST['contact'])) echo $_POST['contact']; ?>"  /></p>
	<p><input type="submit" name="submit" value="Add Agent" /></p>
</form>

