
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/flag-icon-css-master/css/flag-icon.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Agents</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>

<?php # Script 9.4 - view_users.php
// This script retrieves all the records from the users table.

$page_title = 'View the Agent';

require ('../mysqli_connect.php'); // Connect to the db.
		
// Make the query:
$q = "SELECT country, CONCAT(first_name, ' ', last_name) AS name, email, contact, country_num FROM agents";		
$r = @mysqli_query ($dbc, $q); // Run the query.

if ($r) { // If it ran OK, display the records.
	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '
			<div id="agents-content" class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-md-offset-3 col-md-6 agent">
						<img class="col-xs-4" src="styles/flag-icon-css-master/flags/4x3/'. $row['country_num'] .'.svg">
						<div class="col-xs-8">
							<p><strong class="text-uppercase"><u>'. $row['country'] . '</u></strong></p>
							<table class="table table-borderless table-condensed">
								<tr>
									<th>Name</td>
									<td class="text-info col-sm-9">: ' . $row['name'] . '</td>
								</tr>
								<tr>
									<th>E-mail</td>
									<td class="text-info">: ' . $row['email'] . '</td>
								</tr>
								<tr>
									<th>Mobile No.</td>
									<td class="text-info">: ' . $row['contact'] . '</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		';
	}

	echo '</table>'; // Close the table.
	
	mysqli_free_result ($r); // Free up the resources.	

} else { // If it did not run OK.

	// Public message:
	echo '<p class="error">The list of agents could not be retrieved. We apologize for any inconvenience.</p>';
	
	// Debugging message:
	echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
	
} // End of if ($r) IF.

mysqli_close($dbc); // Close the database connection.

?>
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
		document.getElementById("agents").className = "active";
		</script>
	</body>
</html>