
<!-- if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require ('../mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a cutter
	if (empty($_POST['cutterRadio'])) {
		$errors[] = 'You forgot to choose a cutter machine.';
	} else {
		
		$cutterRadio = mysqli_real_escape_string($dbc, trim($_POST['cutterRadio']));
	}
	
	
	$otherDetails = mysqli_real_escape_string($dbc, trim($_POST['otherDetails']));
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the agent in the database...
		
		// Make the query:
		$q = "INSERT INTO cutter (Cutter_Type, Other_Details) VALUES ('$cutterRadio', '$otherDetails');";
		$r = @mysqli_query ($dbc, $q); // Run the query.
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<h1>Thank you!</h1>
		<p>An order has been added!</p><p><br /></p>';	
		
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">The order could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.

		// Include the footer and quit the script:
		exit();
		
	} else { // Report the errors.
	
		echo '<div class="container"><h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		 // Print each error.
			echo " <div class='form-group'>
                                    <div class='alert alert-danger'>
                                        
                                        <strong>";
                                        foreach ($errors as $msg) {
                                        
                                        echo " $msg<br />\n";
                                     }
                                       echo "<p>Please try again.</p>
                                        
                                        </strong> 
                                    </div>
                                </div>";
		
		
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.

	
		
		

} // End of the main Submit conditional. -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Order Now</title>
	</head>
	<body>
		<?php include 'header_on_form_completion.php';
			session_start();

			function setStickyRadio($x, $y){
				if (isset($_SESSION["cart"]["mach-cutter"][$x]) && $_SESSION["cart"]["mach-cutter"][$x] == $y)
					echo 'checked="checked"';
			}

			function setStickyText($x){
				if (isset($_SESSION["cart"]["mach-cutter"][$x]))
					echo $_SESSION["cart"]["mach-cutter"][$x];
			}
		?>

		<div class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li><a href="cutter.php">Cutter</a></li>
				<li class="active">Cutter Machine Requirements Form</li>
			</ol>
			<form id="formcutter" action="order_cutter.php" role="form" class="form-horizontal" method="post">
				<legend>
					<h1>Cutter Machine Requirements Form</h1>
				</legend>
				<div class="form-group">
					<div class="alert alert-info">
						
						<p>If you have any concerns, please feel free to contact any of these numbers: (02) 404 6676/(02) 355 4635</p>
					</div>
				</div>
				<p style="color:red;font-style:italic">* Required fields.</p>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<img src="images/CT-115E.png" id="cutter-images" style="height: 
						200px; width: 230px;">
						<img src="images/CT-137E.png" id="cutter-images" style="height: 
						200px; width: 230px;">
						<img src="images/CT-155E.png" id="cutter-images" style="height: 
						200px; width: 230px;">
						<img src="images/CT-260E.png" id="cutter-images" style="height: 
						200px; width: 230px;">
					</div>
				</div>

				<!-- Type -->
				<div class="form-group required">
					<label for="type" class="control-label col-sm-2">Type:</label>

					<div class="col-sm-10">
						<div class="radio">
							<label><input class="type" name="cutterRadio" type="radio" id="CT_115E" value="CT_115E" <?php setStickyRadio("cutterType", "CT_115E");?>/>
								CT-115E (115 cm/45.2in)</label>
						</div>
						<div class="radio">
							<label><input class="type" name="cutterRadio" type="radio" id="CT_137E" value="CT_137E" <?php setStickyRadio("cutterType", "CT_137E");?>/>
								CT-137E (137 cm/53.9in)</label>
						</div>
						<div class="radio">
							<label><input class="type" name="cutterRadio" type="radio" id="CT_155E" value="CT_155E" <?php setStickyRadio("cutterType", "CT_155E");?>/>
								CT-155E (155cm/61in)</label>
						</div>
						<div class="radio">
							<label><input class="type" name="cutterRadio" type="radio" id="CT_185E" value="CT_185E" <?php setStickyRadio("cutterType", "CT_185E");?>/>
								CT-185E (185cm/72.8in)</label>
						</div>
						<div class="radio">
							<label><input class="type" name="cutterRadio" type="radio" id="CT_220E" value="CT_220E" <?php setStickyRadio("cutterType", "CT_220E");?>/>
								CT-220E (220cm/86.6in)</label>
						</div>
						<div class="radio">
							<label><input class="type" name="cutterRadio" type="radio" id="CT_260E" value="CT_260E" <?php setStickyRadio("cutterType", "CT_260E");?>/>
								CT-260E (260cm/102.3in)</label>
						</div>
						<div class="radio">
							<label><input class="type" name="cutterRadio" type="radio" id="CT_300E" value="CT_300E" <?php setStickyRadio("cutterType", "CT_300E");?>/>
								CT-300E (300cm/118.1in)</label>
						</div>
					</div>
				</div>

				<!-- Other Details -->
				<div class="form-group">
					<label for="type" class="control-label col-sm-2">Other Details:</label>
					<div class="col-sm-10">
				  		<textarea class="form-control" id="comment" rows="8"  placeholder="Place your additional requirements here if any." style="width:80%;" name="otherDetails"><?php setStickyText("ct_Details");?></textarea>
					</div>
				</div>

				<!-- Submit and Cancel Buttons -->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit">
						<a id="cancel-btn" onclick="window.history.back()">Cancel</a>
					</div>
				</div>
			</form>
			
		</div> <!-- /.container -->
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="scripts/validator.min.js"></script>
		<script type="text/javascript" src="formlistener.js"></script>
	</body>
</html>
