<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script type="text/javascript" src="scripts/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<title>Machinovate | Events</title>
</head>
<body>
	<?php include 'header_before_login.php';?>

	<center></center>
	
	
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
$q = "SELECT DISTINCT events.event_name, events.event_date, events.event_place, event_pictures.image 
	FROM events, event_pictures WHERE events.event_id = event_pictures.event_id ORDER BY events.event_date DESC;";		
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
								<p id="event-name">'. $row['event_name'] . '
</p>
								<p>Venue: '. $row['event_place'] . '</p>
								<p>Date:'. $row['event_date'] . '</p>

							<figure>

							
								



						 <div id="pageone" data-role="main" class="ui-content">
					    
					    <a href="#myPopup" data-rel="popup" data-position-to="window">
					    <img src="uploads/'. $row['image'] . '" alt="event picture" height = 175px width 350px >

					    <div data-role="popup" id="myPopup">
					      
					      <a href="#pageone" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a><img src="uploads/'. $row['image'] . '" alt="event picture" height = 375px width 350px ></a>
					    </div>
					    </div>


							</figure>
							</a>
						</li>
						
					</ul> <!-- /.nav -->


					<div class="tab-content col-xs-12 col-sm-8">
						<div id="menu0" class="tab-pane fade in active">
							
							
						</div>
						
					</div> <!-- /.tab-content -->
				</div> <!-- /.row -->

			</div>	<!-- /.container -->
</center>
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