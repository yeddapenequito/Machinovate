<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<title>Machinovate | Events</title>
</head>
<body>
	<?php include 'header_before_login.php';?>

	
	
	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
	document.getElementById("events").className = "active";
	</script>
</body>
</html>



<?php # Script 9.4 - view_users.php
// This script retrieves all the records from the users table.

$page_title = 'View the event';


require ('../mysqli_connect.php'); // Connect to the db.
		
// Make the query:
$q = "SELECT event_name, event_date, event_place, image_name FROM events, event_pictures";		
$r = @mysqli_query ($dbc, $q); // Run the query.

if ($r) { // If it ran OK, display the records.
	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '
			<div id="event-content" class="container">
			<div class="row">
					<ul class="nav nav-pills nav-stacked col-xs-12 col-sm-4">
						<li class="active">
							<a data-toggle="pill" href="#menu0">
								<p id="event-name">'. $row['event_name'] . ' <span class="label label-success">Coming Soon</span></p>
								<p>'. $row['event_place'] . '</p>
								<p>'. $row['event_date'] . '</p>
							</a>
						</li>
						<li><a data-toggle="pill" href="#menu1">2014 - Event Name</a></li>
						<li><a data-toggle="pill" href="#menu2">2013 - Event Name</a></li>
						<li><a data-toggle="pill" href="#menu3">2012 - Event Name</a></li>
						<li><a data-toggle="pill" href="#menu4">2011 - Event Name</a></li>
						<li><a data-toggle="pill" href="#menu5">2010 - Event Name</a></li>					
					</ul> <!-- /.nav -->

					<div class="tab-content col-xs-12 col-sm-8">
						<div id="menu0" class="tab-pane fade in active">
							<div class="page-header">
								<h3>'. $row['event_name'] . '</h3>
							</div>
							<figure>
								<img src="uploads/'. $row['image_name'] . '" alt="event picture">
								<figcaption>Fig1. - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras eu auctor ex, nec mattis nulla.</figcaption>
							</figure>
							
						</div>
						
					</div> <!-- /.tab-content -->
				</div> <!-- /.row -->
			</div>	<!-- /.container -->
		';
	}

	echo '</table>'; // Close the table.
	
	mysqli_free_result ($r); // Free up the resources.	

} else { // If it did not run OK.

	// Public message:
	echo '<p class="error">The list of events could not be retrieved. We apologize for any inconvenience.</p>';
	
	// Debugging message:
	echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
	
} // End of if ($r) IF.

mysqli_close($dbc); // Close the database connection.
	include 'footer.php';

?>