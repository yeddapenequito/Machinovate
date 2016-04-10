
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
		<div class="container">
		<h1 class="page-header">View Summary</h1>
		<p>This is the summary of your shipment details.</p>
		</div>
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
				<fieldset>	
						<div class="form-group" class="form-horizontal">
							<label class="col-sm-2 control-label">
								Name:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 	<a>	' . $row['last_name'] . ', ' . $row['first_name'] . ' </a>
								</div>	
							</div>
						</div>
				<br>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								Company Name:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 	<a>' . $row['company_name'] . '</a>
								</div>	
							</div>
						</div>
				<br>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								Shipping Address:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 	<a>' . $row['address'] . '</a>
								</div>	
							</div>
						</div>
				<br>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								Contact Details:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 	<a>' . $row['contact_details'] . '</a>
								</div>	
							</div>
						</div>
				<br>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								Email Address:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 	<a>' . $row['email'] . '</a>
								</div>	
							</div>
						</div>
				<br>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								Delivery Basis:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 	<a>' . $row['delivery_basis'] . '</a>
								</div>	
							</div>
						</div>
				<br>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								Shipment:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 	<a>' . $row['ship_day'] .' Working Days after Initial Payment</a>
								</div>	
							</div>
						</div>
				<br>
						<div class="form-group">
							<label class="col-sm-2 control-label">
								Payment Terms:</label>
							<div class="col-sm-10">
								<div class="form-inline">	
							 	<a>' . $row['term'] . ' </a>
							 	<br> 
							 	<a>' . $row['confirmation'] . '%  down payment upon confirmation </a>
							 	<br> 
							 	<a>' . $row['shipment'] . '%  upon shipment</a>
							 	<br> 
							 	<a>' . $row['installation'] . '%  upon installation</a>
							 	<hr>
								</div>	
							</div>
						</div>
						
				</fieldset>
				<a id="add-to-cart-btn" href="thankyou_page.php"type="submit" class="btn btn-default">Finish</a>
				
			</div> 
		</div>
		';
	}

	echo '</div>'; // Close the table.
	
	mysqli_free_result ($r); // Free up the resources.	

} else { // If it did not run OK.

	// Public message:
	echo '<p class="error">The list of agents could not be retrieved. We apologize for any inconvenience.</p>';
	
	// Debugging message:
	echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
	
} // End of if ($r) IF.

mysqli_close($dbc); // Close the database connection.

?>