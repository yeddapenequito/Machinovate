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
    

    if (empty($errors)) 
    { // If everything's OK.
    
        // Register the event in the database...
        
        // Make the query: **made by drei*
        $q = "INSERT INTO events (event_date, event_name, event_place) VALUES (?, ?, ?);
            INSERT INTO event_pictures (event_id, image_name) VALUES ((SELECT event_id FROM events WHERE event_date=?), ?);

            ";
        $stmt = mysqli_prepare($dbc, $q);
        
        mysqli_stmt_bind_param($stmt, 'ssss', $event_date, $event_name, $event_place, $event_date, $i);
        mysqli_stmt_execute($stmt);

        //Check the results...
        if (mysqli_stmt_affected_rows($stmt) == 1) 
        { // If it ran OK.
        
            // Print a message:
            echo '<h1>Thank you!</h1>
            <p>An event has been added!!</p><p><br /></p>'; 
            
            // Rename the image:
            $id = mysqli_stmt_insert_id($stmt); // Get the print ID.
           
            rename ($temp, "../../uploads/$id");
                // Clear $_POST:
                $_POST = array();
        } 
        else 
        { // If it did not run OK.
            
            // Public message:
            echo '<h1>System Error</h1>
            <p class="error">The event could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
            
            // Debugging message:
            echo '<p>' . mysqli_error($stmt) . '<br /><br />Query: ' . $q . '</p>';
                        
        } // End of if ($r) IF.
        
        mysqli_close($stmt);
        
    } //end of $errors IF 

    // Delete the uploaded file if it still exists:
    if ( isset($temp) && file_exists ($temp) && is_file($temp) )
    {
        unlink ($temp);
    }
    
} //End of Submission IF
    
// Check for any errors and print them:
if ( !empty($errors) && is_array($errors) ) 
{
    echo '<h1>Error!</h1>
    <p style="font-weight: bold; color: #C00">The following error(s) occurred:<br />';
    foreach ($errors as $msg) 
    {
        echo " - $msg<br />\n";
    }
    echo 'Please reselect the print image and try again.</p>';
}

?>


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
            margin: 1em 0;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <form enctype="multipart/form-data" action="add_events.php" method="post" class="form-horizontal col-sm-6" role="form">
                    <input type="hidden" name="MAX_FILE_SIZE" value="524288" />
                    <div class="form-group">
                        <legend>Add Events</legend>
                        <fieldset><legend>Fill out the form to add an event:</legend>
                    </div>
                    <div class="form-group">
                        <label for="last-name" class="col-sm-3 control-label">Starting Date:</label>
                        <div class="col-sm-9">
                            <input placeholder="Enter event's date: "type="text" class="form-control" id="date-start" name="event_date" maxlength="40" value="<?php if (isset($_POST['event_date'])) echo $_POST['event_date']; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last-name" class="col-sm-3 control-label">Event Name:</label>
                        <div class="col-sm-9">
                            <input placeholder="Enter event name"type="text" class="form-control" id="event-name" name="event_name" maxlength="40" value="<?php if (isset($_POST['event_name'])) echo $_POST['event_name']; ?>" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="event_place" class="col-sm-3 control-label">Event Venue: </label>
                        <div class="col-sm-9">
                            <input placeholder="Enter the event's venue" type="event_place" class="form-control" id="event-place" name="event_place" maxlength="20" value="<?php if (isset($_POST['event_place'])) echo $_POST['event_place']; ?>"  />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image_name" class="col-sm-3 control-label">Upload Image:</label>
                        <div class="col-sm-9">
                            <div class="img-input">
                                
                                <input name="image" id="image" type="file" class="item" value="Browse Image"/>
                            </div>
                            <!--<button id="add-img-btn" type="button" class="btn btn-default">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <button type="Add" class="btn btn-primary">Add event</button>
                        </div>
                    </div>
                </form>
            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <!--<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#add-img-btn').on('click',function() {
                    $('.img-input').append($('<input name="image_name" id="image_name" type="file" class="item" value="Browse Image"/>'));
                });
            });
        </script>-->
    </body>
</html>
