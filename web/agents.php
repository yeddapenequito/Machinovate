
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

		<div id="agents-content" class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6 agent">
					<img class="col-xs-4" src="styles/flag-icon-css-master/flags/4x3/ph.svg">
					<div class="col-xs-8">
						<p><b><u>PHILIPPINES</u></b></p>
						<p><b>Name: </b>  <a>LASTNAME, FirstName M.I</a></p>
						<p><b>Email Address:</b> <a>somename@somename.com </a></p>
						<p><b>Mobile No: </b> <a>+000 0000 0000</a></p>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6 agent">
					<img class="col-xs-4" src="styles/flag-icon-css-master/flags/4x3/cn.svg">
					<div class="col-xs-8">
						<p><b><u>CHINA</u></b></p>
						<p><b>Name: </b>  <a>LASTNAME, FirstName M.I</a></p>
						<p><b>Email Address:</b> <a>somename@somename.com </a></p>
						<p><b>Mobile No: </b> <a>+000 0000 0000</a></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6 agent">
					<img class="col-xs-4" src="styles/flag-icon-css-master/flags/4x3/th.svg">
					<div class="col-xs-8">
						<p><b><u>THAILAND</u></b></p>
						<p><b>Name: </b>  <a>LASTNAME, FirstName M.I</a></p>
						<p><b>Email Address:</b> <a>somename@somename.com </a></p>
						<p><b>Mobile No: </b> <a>+000 0000 0000</a></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6 agent">
					<img class="col-xs-4" src="styles/flag-icon-css-master/flags/4x3/in.svg">
					<div class="col-xs-8">
						<p><b><u>INDIA</u></b></p>
						<p><b>Name: </b>  <a>LASTNAME, FirstName M.I</a></p>
						<p><b>Email Address:</b> <a>somename@somename.com </a></p>
						<p><b>Mobile No: </b> <a>+000 0000 0000</a></p>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
		document.getElementById("agents").className = "active";
		</script>
	</body>
</html>



<?php # Script 9.4 - view_users.php
// This script retrieves all the records from the users table.

$page_title = 'View the Agent';


// Page header:
echo '<h1>Registered Users</h1>';

require ('../mysqli_connect.php'); // Connect to the db.
		
// Make the query:
$q = "SELECT country, CONCAT(first_name, ' ', last_name) AS name, email, contact, country_num FROM agents";		
$r = @mysqli_query ($dbc, $q); // Run the query.

if ($r) { // If it ran OK, display the records.

	// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
	<tr>
		<td align="left"><b>Country</b></td>
		<td align="left"><b>Name</b></td>
		<td align="left"><b>Email Address</b></td>
		<td align="left"><b>Contact Details</b></td>

	</tr>
';
	
	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr>
			<td align="left">' . $row['country'] . '</td>
			<td align="left">' . $row['name'] . '</td>
			<td align="left">' . $row['email'] . '</td>
			<td align="left">' . $row['contact'] . '</td>

		</tr>
		<div class="row">
				<div class="col-xs-12 col-md-offset-3 col-md-6 agent">
					<img class="col-xs-4" src="styles/flag-icon-css-master/flags/4x3/'. $row['country_num'] .'.svg">
					<div class="col-xs-8">
						<p><b><u>'. $row['country'] . '</u></b></p>
						<p><b>Name: </b>  <a>' . $row['name'] . '</a></p>
						<p><b>Email Address:</b> <a>' . $row['email'] . ' </a></p>
						<p><b>Mobile No: </b> <a>' . $row['contact'] . '</a></p>
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