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
		option {
		font-color: blue;
		}
		
	</style>
</head>
<body>
	<?php include 'header_after_login.php';?>
	
	<div id="order-list-content" class="container">
	<?php 
		// The user is redirected here AFTER SUCCESSFUL LOGIN

		session_start(); // Start the session.

		// If no session value is present, redirect the user:
		// Also validate the HTTP_USER_AGENT!
		if (!isset($_SESSION['agent']) OR ($_SESSION['agent'] != md5($_SERVER['HTTP_USER_AGENT']) )) {

			// Need the functions:
			require ('includes/login_functions.inc.php');
			redirect_user();	

		}

	?>
		<form class="form" role="form">
	       
	        	<div class="input-group">
	        		<input placeholder="Search" id="search" name="search" type="text" class="form-control">
	        		<div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
	        	</div>
	        
		
		<br>
		<br>Order Status:
								<select>
							    <option value="COMPLETED">COMPLETED</a>
							    <option value='CANCELLED'>CANCELLED</a>
							    <option value='PENDING'>PENDING</a>
							    </select>
		<hr></hr>
		<br>
		<br>Machine Type:
								<select>
							    <option value='SLITTER'>SLITTER</a>
							    <option value='SHEETER'>SHEETER</a>
							    <option value='CUTTER'>CUTTER</a>
							    <option value='BAILING'>BAILING MACHINE</a>
							    <option value='ROLL'>PAPER ROLL TRUCK</a>
							    </select> 
		<hr></hr>
		<br>
		<br>Order's Date by:
								<select>
								<option value='MONTH'>MONTH</a>
								<option value='YEAR'>YEAR</a>
								</select>


		    
		</form>
	</div> 
	<script type="text/javascript" src="../scripts/jquery.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
		document.getElementById("order-summary").className = "active";
	</script>
</body>
</html>
