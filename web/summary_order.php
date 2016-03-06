
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

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript">
		document.getElementById("agents").className = "active";
		</script>
	</body>
</html>



<?php # Script 9.4 - view_users.php
// This script retrieves all the records from the users table.

$page_title = 'View the Summary';


// Page header:
require ('../mysqli_connect.php'); // Connect to the db.
		
// Make the query: $q = "INSERT INTO shipping_details (last_name, first_name, company_name, address, contact_details, email, delivery_basis, ship_day, term, confirmation, shipment, installation) 
$q = "SELECT last_name, first_name company_name, address, contact_details, email, delivery_basis, ship_day, term, confirmation, shipment,installation FROM shipping_details";		
$r = @mysqli_query ($dbc, $q); // Run the query.

if ($r) { // If it ran OK, display the records.
	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '
			<div id="agents-content" class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-md-offset-3 col-md-6 agent">
						<div class="col-xs-8">
							<p><b>Last Name: </b>  <a>' . $row['last_name'] . '</a></p>
							<p><b>First Name: </b>  <a>' . $row['last_name'] . '</a></p>
							<p><b>Company:</b> <a>' . $row['company_name'] . ' </a></p>
							<p><b>Shipping Address:</b> <a>' . $row['address'] . ' </a></p>
							<p><b>Contact Details: </b> <a>' . $row['contact_details'] . '</a></p>
							<p><b>Email Address:</b> <a>' . $row['email'] . ' </a></p>
							<p><b>Delivery Basis: </b>  <a>' . $row['delivery_basis'] . '</a></p>
							<p><b>Shipment:<a>' . $row['ship_day'] .' Working Days after Initial Payment </b>  </a></p>
							<p><b>Payment Terms: </b> <a>' . $row['term'] . ' </a></p>
							<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <a>' . $row['confirmation'] . '%  down payment upon confirmation</a></p>

							<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <a>' . $row['shipment'] . '%  upon shipment</a></p>
							<p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b> <a>' . $row['installation'] . '%  upon installation</a></p>

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