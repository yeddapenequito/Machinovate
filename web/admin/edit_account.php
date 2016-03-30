<?php

    //session
    session_start(); // Start the session.

    // If no session value is present, redirect the user:
    // Also validate the HTTP_USER_AGENT!
    if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) )) {

        // Need the functions:
        require ('includes/login_functions.inc.php');
        redirect_user();    

    }

    $page_title = 'Machinovate | Edit Accounts';
    include ('header_after_login.php');

    // Check for form submission:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require ('../../mysqli_connect.php'); // Connect to the db.
        
    $errors = array(); // Initialize an error array.
    
    // Check for an username:
    if (empty($_POST['username'])) {
        $errors[] = 'You forgot to enter your username.';
    } else {
        $e = mysqli_real_escape_string($dbc, trim($_POST['username']));
    }

    // Check for the current password:
    if (empty($_POST['pass'])) {
        $errors[] = 'You forgot to enter your current password.';
    } else {
        $p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
    }

    // Check for a new password and match 
    // against the confirmed password:
    if (!empty($_POST['pass1'])) {
        if ($_POST['pass1'] != $_POST['pass2']) {
            $errors[] = 'Your new password did not match the confirmed password.';
        } else {
            $np = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
        }
    } else {
        $errors[] = 'You forgot to enter your new password.';
    }
    
    if (empty($errors)) { // If everything's OK.

        // Check that they've entered the right username/password combination:
        $q = "SELECT user_id FROM users WHERE (username='$e' AND pass=SHA1('$p') );";
        $r = @mysqli_query($dbc, $q);
        $num = @mysqli_num_rows($r);
        if ($num == 1) { // Match was made.
    
            // Get the user_id:
            $row = mysqli_fetch_array($r, MYSQLI_NUM);

            // Make the UPDATE query:
            $q = "UPDATE users SET pass=SHA1('$np') WHERE user_id='$row[0]';";     
            $r = @mysqli_query($dbc, $q);
            
            if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

                // Print a message.
                echo '<h1>Thank you!</h1>
                <p>Your password has been updated. </p><p><br /></p>';    

            } else { // If it did not run OK.

                // Public message:
                echo '<h1>System Error</h1>
                <p class="error">Your password could not be changed due to a system error. We apologize for any inconvenience.</p>'; 
    
                // Debugging message:
                echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
    
            }

            //mysqli_close($dbc); // Close the database connection.

            // Include the footer and quit the script (to not show the form).
           // include ('includes/footer.html'); 
           // exit();
                
        } else { // Invalid username/password combination.
            echo '<h1>Error!</h1>
            <p class="error">The username and password do not match those on file.</p>';
        }
        
    } else { // Report the errors.

        echo '<h1>Error!</h1>
        <p class="error">The following error(s) occurred:<br />';
        foreach ($errors as $msg) { // Print each error.
            echo " - $msg<br />\n";
        }
        echo '</p><p>Please try again.</p><p><br /></p>';
    
    } // End of if (empty($errors)) IF.

    mysqli_close($dbc); // Close the database connection.
        
} // End of the main Submit conditional.
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/admin.css">
    <title>Machinovate | Manage Account</title>
</head>
<body>
 <?php include 'header_after_login.php';?>
 <div class="container">
    <div class="row">
        <form enctype="multipart/form-data" action="edit_account.php" method="post" class="form-horizontal col-sm-6" role="form">
            <fieldset>

                <legend>Edit Account Credentials:</legend>
                
                <div class="form-group">
                     <label class="col-sm-3" for="username">Username</label>
                     <div class="col-sm-9">
                        <input id="username" name="username" type="text" placeholder="Enter new username" class="form-control" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required autofocus > 
                     </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                     <label class="col-sm-3" for="password">Old Password</label>
                     <div class="col-sm-9">
                        <input id="pass" name="pass" type="password" placeholder="Enter old password" class="form-control" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required>
                     </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-3" for="password">New Password</label>
                     <div class="col-sm-9">
                        <input id="pass1" name="pass1" type="password" placeholder="Enter new password" class="form-control" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>"  required>
                     </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-3" for="password">Confirm Password</label>
                     <div class="col-sm-9">
                        <input id="pass2" name="pass2" type="password" placeholder="Confirm new password" class="form-control" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" required> 
                     </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button class="btn btn-default" id="add-to-cart-btn" type="submit">
                            Edit Account</button>
                        <a class="btn btn-default" id="cancel-btn" href="order_list.php">
                            Cancel</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div> <!-- /.row -->
</div> <!-- /.container -->
<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
<script type="text/javascript">
document.getElementById("edit-account").className = "active";
</script>

</body>
</html>