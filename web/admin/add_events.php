<!--PHP -->

<?php # Script 9.5 - register.php #2
// This script performs an INSERT query to add a record to the agents table

$page_title = 'Machinovate | Add Events';
include ('header_after_login.php');

// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('../../mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a event name:
	if (empty($_POST['event_name'])) {
		$errors[] = 'You forgot to enter the event name.';
	} else {
		$event_name = mysqli_real_escape_string($dbc, trim($_POST['event_name']));
	}
	
	// Check for a date_start:
	if (empty($_POST['date_start'])) {
		$errors[] = 'You forgot to enter the starting date.';
	} else {
		$date_start = mysqli_real_escape_string($dbc, trim($_POST['date_start']));
	}

	// Check for a ending date:
	if (empty($_POST['date_end'])) {
		$errors[] = 'You forgot to enter the ending date.';
	} else {
		$date_end = mysqli_real_escape_string($dbc, trim($_POST['date_end']));
	}

	// Check for an event_place address:
	if (empty($_POST['event_place'])) {
		$errors[] = 'You forgot to enter your event place .';
	} else {
		$event_place = mysqli_real_escape_string($dbc, trim($_POST['event_place']));
	}


	//Check for the pictures:
	if (empty($_POST['pictures'])) {
		$errors[] = 'You forgot to enter the pictures.';
	} else {
		$pictures = mysqli_real_escape_string($dbc, trim($_POST['pictures']));
	}

	if (empty($errors)) { // If everything's OK.
	
		// Register the agent in the database...
		
		// Make the query:
		$q = "INSERT INTO events (event_name, date_start, date_end, event_place, pictures) VALUES ('$event_name', '$date_start', '$date_num', '$event_place', '$pictures')";		
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
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../styles/bootstrap.min.css">
		<link rel="stylesheet" href="../styles/main.css">
		<link rel="stylesheet" href="../styles/admin.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<form action="add_agents.php" method="post" class="form-horizontal col-sm-6" role="form">
					<div class="form-group">
						<legend>Add Events</legend>
					</div>
					<div class="form-group">
						<label for="last-name" class="col-sm-3 control-label">Event Name:</label>
						<div class="col-sm-9">
							<input placeholder="Enter event name"type="text" class="form-control" id="event-name" name="event_name" maxlength="40" value="<?php if (isset($_POST['event_name'])) echo $_POST['event_name']; ?>" />
						</div>
					</div>
					<div class="form-group">
						<label for="last-name" class="col-sm-3 control-label">Starting Date:</label>
						<div class="col-sm-9">
							<input placeholder="Enter event's starting date: "type="text" class="form-control" id="date-start" name="date_start" maxlength="40" value="<?php if (isset($_POST['date_start'])) echo $_POST['date_start']; ?>" />
						</div>
					</div>
					<div class="form-group">
						<label for="first-name" class="col-sm-3 control-label">Ending Date:</label>
						<div class="col-sm-9">
							<input placeholder="Enter event's ending date"type="text" class="form-control" id="date-end" name="date_end" maxlength="20" value="<?php if (isset($_POST['date_end'])) echo $_POST['date_end']; ?>" />
						</div>
					</div>
					<div class="form-group">
						<label for="event_place" class="col-sm-3 control-label">Event Venue: </label>
						<div class="col-sm-9">
							<input type="event_place" class="form-control" id="event-place" name="event_place" maxlength="20" value="<?php if (isset($_POST['event_place'])) echo $_POST['event_place']; ?>"  />
						</div>
					</div>
					<div class="form-group">
						<label for="pictures" class="col-sm-3 control-label">Pictures:</label>
						<div class="col-sm-9">
							<input id="pictures" class="form-control" type="text" name="pictures" maxlength="60" value="<?php if (isset($_POST['pictures'])) echo $_POST['pictures']; ?>"  />
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-3">
							<button type="Add" class="btn btn-primary">Add agent</button>
						</div>
					</div>
				</form>
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	</body>
</html>

