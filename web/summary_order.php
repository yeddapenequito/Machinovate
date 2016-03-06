
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/flag-icon-css-master/css/flag-icon.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Order Summary</title>
	</head>
	<body>
		<?php include 'header_before_login.php';?>

		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		
	</body>
</html>



<?php # Script 9.4 - view_users.php
// This script retrieves all the records from the users table.

$page_title = 'View the Summary';


// Page header:
require ('../mysqli_connect.php'); // Connect to the db.
		
// Make the query: $q = "INSERT INTO shipping_details (last_name, first_name, company_name, address, contact_details, email, delivery_basis, ship_day, term, confirmation, shipment, installation) 
$q = "SELECT last_name, first_name, company_name, address, contact_details, email, delivery_basis, ship_day, term, confirmation, shipment,installation FROM shipping_details";		
$r = @mysqli_query ($dbc, $q); // Run the query.

if ($r) { // If it ran OK, display the records.
	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '
			<div id="summary-content" class="container">
				<div class="row">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<td>Name</td>
								<td>:' . $row['last_name'] . ', ' . $row['first_name'] . '</td>
							</tr>
							<tr>
								<td>Company Name</td>
								<td>:' . $row['company_name'] . '</td>
							</tr>
							<tr>
								<td>Shipping Address</td>
								<td>:' . $row['address'] . '</td>
							</tr>
							<tr>
								<tdContact Details></td>
								<td>:' . $row['contact_details'] . '</td>
							</tr>
							<tr>
								<td>Email Address</td>
								<td>:' . $row['email'] . '</td>
							</tr>
							<tr>
								<td>Delivery Basis</td>
								<td>:' . $row['delivery_basis'] . '</td>
							</tr>
							<tr>
								<td>Shipment</td>
								<td>:' . $row['ship_day'] .' Working Days after Initial Payment</td>
							</tr>
							<tr>
								<td>Payment Terms</td>
								<td>:' . $row['term'] . '</td>
							</tr>
							<tr>
								<td></td>
								<td>:' . $row['confirmation'] . '%  down payment upon confirmation</td>
							</tr>
							<tr>
								<td></td>
								<td>:' . $row['shipment'] . '%  upon shipment</td>
							</tr>

								<td></td>
								<td>:' . $row['installation'] . '%  upon installation</td>
							</tr>
						</tbody>
					</table>
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