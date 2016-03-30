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
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/bootstrap.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/admin.css">
	<title>Machinovate | Error Login</title>
</head>
<body>
	<?php include 'header_on_login.php';?>
	
	<div class="container">
		
	<h1>Login Failed!</h1>
			<p class="error">Login couldn't be processed.</p>
			<p class="error">Please check your username and password and try again.</p>
			<?php 
			include('index.inc.php');
			?>
		
	</div> <!-- /.container -->
	
</body>
</html>