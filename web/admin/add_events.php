<!--HTML -->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/bootstrap.min.css">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/admin.css">
        <style type="text/css">
        .item {
            margin-bottom: 1em;
        }
        #remove-img-btn,
        #add-img-btn {
            text-align: center;
            height: 33px;
            width: 37px;
            margin: auto 0;
        }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <form enctype="multipart/form-data" action="add_events.php" method="post" class="form form-horizontal col-sm-6" role="form">
                    <!--PHP -->
                    <?php # Script 9.5 - register.php #2
                    // This script performs an INSERT query to add a record to the events table
                    $page_title = 'Machinovate | Add Events';
                    include ('header_after_login.php');
                    // Check for form submission:
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        require ('../../mysqli_connect.php'); // Connect to the db.
                            
                        $errors = array(); // Initialize an error array.
                        
                         // Check for a event_date:
                        if (empty($_POST['event_date'])) 
                        {
                            $errors[] = 'You forgot to enter the event date.';
                        } 
                        else 
                        {
                            $event_date = mysqli_real_escape_string($dbc, trim($_POST['event_date']));
                        }
                        

                        // Check for a event name:
                        if (empty($_POST['event_name'])) 
                        {
                            $errors[] = 'You forgot to enter the event name.';
                        } 
                        else 
                        {
                            $event_name = mysqli_real_escape_string($dbc, trim($_POST['event_name']));
                        }
                        
                       
                        // Check for an event_place address:
                        if (empty($_POST['event_place'])) 
                        {
                            $errors[] = 'You forgot to enter your event place .';
                        } 
                        else 
                        {
                            $event_place = mysqli_real_escape_string($dbc, trim($_POST['event_place']));
                        }
                        
                        // Check for an image:
                        if (is_uploaded_file ($_FILES['image']['tmp_name'])) 
                        {

                            // Create a temporary file name:
                            $temp = '../../uploads/' . md5($_FILES['image']['name']);
                        
                            // Move the file over:
                            if (move_uploaded_file($_FILES['image']['tmp_name'], $temp)) 
                            {

                                echo '<p>The file has been uploaded!</p>';
                        
                                // Set the $i variable to the image's name:
                                $i = $_FILES['image']['name'];
                        
                            } 
                            else 
                            { // Couldn't move the file over.
                                $errors[] = 'The file could not be moved.';
                                $temp = $_FILES['image']['tmp_name'];
                            }

                        } 
                        else 
                        { // No uploaded file.
                            $errors[] = 'No file was uploaded.';
                            $temp = NULL;
                        }
                        

                        if (empty($errors)) { // If everything's OK.
                        
                            // Register the agent in the database...
                            
                            // Make the query:
                            $q = "INSERT INTO events (event_date, event_name, event_place) VALUES ('$event_date', '$event_name', '$event_place');";
                            $q .= "INSERT INTO event_pictures (event_id, image) VALUES ((SELECT event_id FROM events WHERE event_date='$event_date' ), '$temp');";

                            $r = @mysqli_multi_query ($dbc, $q); // Run the query.
                            if ($r) { // If it ran OK.
                                // Rename the image:
                                $id = mysqli_stmt_insert_id($r); // Get the print ID.
                                rename ($temp, "../../uploads/$id");
                                // Print a message:
                                echo '<h1>Thank you!</h1>
                            <p>An event has been added!</p><p><br /></p>'; 
                            
                            
                            } else { // If it did not run OK.
                                
                                // Public message:
                                echo '<h1>System Error</h1>
                                <p class="error">The event could not be added due to a system error. We apologize for any inconvenience.</p>'; 
                                header('Location: /Machinovate/web/admin/account_failed.php');
                                // Debugging message:
                                echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
                                            
                            } // End of if ($r) IF.
                            
                            mysqli_close($dbc); // Close the database connection.

                            // Include the footer and quit the script:
                            exit();
                            
                        } else { // Report the errors.
                        
                            echo '<h1>Error!</h1>
                            <p class="error">The following error(s) occurred:<br />';
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

                    } // End of the main Submit conditional.

                    ?>
                    <input type="hidden" name="MAX_FILE_SIZE" value="524288" />
                    <fieldset>
                        <div class="form-group">
                            <legend>Add Events</legend>
                            <p style="color:red;font-style:italic">* Required fields.</p>
                        </div>

                        <div class="form-group required">
                            <label for="starting-date" class="col-sm-3 control-label">Starting Date:</label>
                            <div class="col-sm-9">
                                <input required id="starting-date" type="date" class="form-control" name="event_date" maxlength="40" min="<?php echo date("Y-m-d"); ?>" value="<?php if (isset($_POST['event_date'])) echo $_POST['event_date']; ?>" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="form-group required">
                            <label for="event-name" class="col-sm-3 control-label">Event Name:</label>
                            <div class="col-sm-9">
                                <input required placeholder="Enter the name of the event" type="text" class="form-control" id="event-name" name="event_name" maxlength="40" value="<?php if (isset($_POST['event_name'])) echo $_POST['event_name']; ?>" />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="form-group required">
                            <label for="event-venue" class="col-sm-3 control-label">Event Venue: </label>
                            <div class="col-sm-9">
                                <input required placeholder="Enter the event's venue" type="text" class="form-control" id="event-venue" name="event_place" maxlength="20" value="<?php if (isset($_POST['event_place'])) echo $_POST['event_place']; ?>"  />
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="upload-image" class="col-sm-3 control-label">Upload Image:</label>
                            <div class="col-sm-9">
                                <div class="img-input">
                                    <div class="row item">
                                        <div class="col-sm-10 upload-img">
                                            <input required name="image" id="upload-image" type="file" class="form-control" value="Browse Image"/>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                </div>

                                <!-- add another image button -->
                                <!-- <button id="add-img-btn" type="button" title="Upload another image" class="btn btn-default">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <input type="submit" class="btn btn-primary" value="Add Event">
                                <a href="order_list.php" Stype="cancel" id="cancel-btn" class="btn btn-default">Cancel</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div> <!-- /.row -->
        </div> <!-- /.container -->

       <script type="text/javascript" src="../scripts/jquery.min.js"></script>
        <script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
        <script type="text/javascript" src="../scripts/validator.min.js"></script>
        <!--<script type="text/javascript">
            $(document).ready(function() {
                $(document).on('click', '#add-img-btn', function() {
                        $('.img-input').append($(
                            '<div class="row item">' +
                            '    <div class="col-sm-10 upload-img">' +
                            '        <input name="image_name" id="image" type="file" class="form-control" value="Browse Image"/>' +
                            '    </div>' +
                            '    <div class="col-sm-2 remove-img">' +
                            '        <button id="remove-img-btn" type="button" class="btn btn-default">' +
                            '            <span class="glyphicon glyphicon-remove"></span>' +
                            '        </button>' +
                            '    </div>' +
                            '</div>'));
                });

                $(document).on('click', '.remove-img', function() {
                    $(this).parent('.item').remove();
                });
            });-->
        </script>
    </body>
</html>
