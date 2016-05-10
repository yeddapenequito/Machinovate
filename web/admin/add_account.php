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
    
    // Check for an last name:
    if (empty($_POST['last_name'])) {
        $errors[] = 'You forgot to enter your last_name.';
    } else {
        $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
    }

    // Check for an first name:
    if (empty($_POST['first_name'])) {
        $errors[] = 'You forgot to enter your first name.';
    } else {
        $fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
    }


    // Check for an username:
    if (empty($_POST['username'])) {
        $errors[] = 'You forgot to enter your username.';
    } else {
        $un = mysqli_real_escape_string($dbc, trim($_POST['username']));
    }

    
    // Check for a new password and match 
    // against the confirmed password:
    if (!empty($_POST['pass'])) {
        if ($_POST['pass'] != $_POST['pass1']) {
            $errors[] = 'Your new password did not match the confirmed password.';
        } else {
            $p = mysqli_real_escape_string($dbc, trim($_POST['pass']));
        }
    } else {
        $errors[] = 'You forgot to enter your new password.';
    }
    
    // Check for an username:
    if (empty($_POST['email'])) {
        $errors[] = 'You forgot to enter your email.';
    } else {
        $e = mysqli_real_escape_string($dbc, trim($_POST['email']));
    }


    if (empty($errors)) { // If everything's OK.

        // Check that they've entered the right username/password combination:
        $q = "INSERT INTO users (first_name, last_name, username, email, pass) VALUES ('$fn', '$ln', '$un', '$e', SHA1('$p'));";
        $r = @mysqli_query($dbc, $q);
        $num = @mysqli_num_rows($r);
        if ($r) 
        { // Match was made.
    
            // Print a message.
            echo '<h1>Thank you!</h1>
            <p>An account has been added. Please logout to use your new account.  </p><p><br /></p>';    

        } else { // If it did not run OK.

                // Public message:
                echo '<h1>System Error</h1>
                <p class="error">Your password could not be changed due to a system error. We apologize for any inconvenience.</p>'; 
    
                // Debugging message:
                echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
    
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
    <title>Machinovate | Add New Account</title>
</head>
<body>
 <?php include 'header_after_login.php';?>
 <div class="container">
    <div class="row">
        <form enctype="multipart/form-data" action="add_account.php" method="post" class="form form-horizontal col-sm-6" role="form">
            <fieldset>

                <legend>Add New Account:</legend>
                
                <div class="form-group">
                     <label class="col-sm-3" for="last_name">Last Name: </label>
                     <div class="col-sm-9">
                        <input id="last_name" name="last_name" type="text" placeholder="Enter your last name" class="form-control" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required autofocus>
                        <div class="help-block with-errors"></div>
                     </div>
                </div>
                <br>
                 <div class="form-group">
                     <label class="col-sm-3" for="first_name">First Name: </label>
                     <div class="col-sm-9">
                        <input id="first_name" name="first_name" type="text" placeholder="Enter your first name" class="form-control" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required autofocus>
                     </div>
                </div>
                <br>
               <div class="form-group">
                     <label class="col-sm-3" for="username">Username: </label>
                     <div class="col-sm-9">
                           <input id="username" name="username" type="text" placeholder="Enter username" class="form-control" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required autofocus>
                     </div>
                </div>
                <br>
                <div class="form-group">
                     <label class="col-sm-3" for="password">Password: </label>
                     <div class="col-sm-9">
                        <input id="pass" name="pass" type="password" placeholder="Enter your password" class="form-control" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required autofocus>
                        <div class="help-block with-errors"></div>
                     </div>
                </div>

                <div class="form-group">
                     <label class="col-sm-3" for="password">Confirm Password: </label>
                     <div class="col-sm-9">
                       <input id="pass1" name="pass1" type="password" placeholder="Confirm password" class="form-control" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" required autofocus>
                        <div class="help-block with-errors"></div>
                     </div>
                </div>

  				<div class="form-group">
                     <label class="col-sm-3" for="email">Email Address: </label>
                     <div class="col-sm-9">
                        <input id="email" name="email" type="text" placeholder="Enter your email address" class="form-control" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required autofocus>

                        <div class="help-block with-errors"></div>
                     </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <input class="btn btn-default" id="add-to-cart-btn" type="submit" value="Edit Account">
                        <a class="btn btn-default" id="cancel-btn" href="order_list.php">
                            Cancel</a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div> <!-- /.row -->
</div> <!-- /.container -->
<script type="text/javascript" src="../scripts/jquery.min.js"></script>
<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="../scripts/validator.min.js"></script>
<script type="text/javascript">
document.getElementById("edit-account").className = "active";
</script>

</body>
</html>