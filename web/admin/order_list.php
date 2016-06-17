<?php # Script 19.6 - browse_prints.php
// This page displays the available prints (products).

// Set the page title and include the HTML header:
$page_title = 'Order List';
//include ('includes/header.html');

require ('../../mysqli_connect.php');
 

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/bootstrap.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/admin.css">
	<title>Machinovate | Order List</title>
	<style>
		form {
			width: 100%;
		}
		form .form-group {
			width: 20em;
			float: right;
		}
	</style>
</head>
<body>
	
	<?php 

	session_start(); // Start the session.
		
	 if (($_SESSION['user_id'] != 1)){
		include 'header_after_login_nonadmin.php';
	}
	else{
		include 'header_after_login.php';
	}

	?>
	
	<div id="order-list-content" class="container">
	<?php 
		// The user is redirected here AFTER SUCCESSFUL LOGIN

		

		// If no session value is present, redirect the user:
		// Also validate the HTTP_USER_AGENT!
		if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) )) {

			// Need the functions:
			require ('includes/login_functions.inc.php');
			redirect_user();	

		}

	?>
		
		
	</div> <!-- /.container -->
	<script type="text/javascript" src="../scripts/jquery.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="../scripts/validator.min.js"></script>
	<script type="text/javascript" src="../formlistener.js"></script>
	<script type="text/javascript">
		document.getElementById("order-list").className = "active";
	</script>
</body>
</html>