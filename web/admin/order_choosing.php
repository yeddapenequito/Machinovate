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
		<br>Order Status:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<select>
			    <option value="COMPLETED">COMPLETED</a>
			    <option value='CANCELLED'>CANCELLED</a>
			    <option value='PENDING'>PENDING</a>
			</select>
	
		<br>
		<br>Machine Type:&nbsp&nbsp&nbsp&nbsp
			<select>
			    <option value='SLITTER'>SLITTER</a>
			    <option value='SHEETER'>SHEETER</a>
			    <option value='CUTTER'>CUTTER</a>
			    <option value='BAILING'>BAILING MACHINE</a>
			    <option value='ROLL'>PAPER ROLL TRUCK</a>
			</select> 
	
		<br>
		<br>Order's Date by:&nbsp&nbsp
			<select>
				<option value=''>&nbsp&nbsp&nbsp&nbsp&nbspMonth&nbsp&nbsp&nbsp&nbsp</a>
				<option value='1'>&nbsp&nbspJanuary</a>
				<option value='2'>&nbsp&nbspFebruary</a>
				<option value='3'>&nbsp&nbsp&nbspMarch</a>
				<option value='4'>&nbsp&nbsp&nbsp&nbspApril</a>
				<option value='5'>May</a>
				<option value='6'>June</a>
				<option value='7'>July</a>
				<option value='8'>August</a>
				<option value='9'>September</a>
				<option value='10'>October</a>
				<option value='11'>November</a>
				<option value='12'>December</a>
			</select>
			<select>
				
				<option value=''>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYEAR&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
				<option value='2013'>2013</a>
				<option value='2014'>2014</a>
				<option value='2015'>2015</a>
				<option value='2016'>2016</a>
				
			</select>
			<br>
			
		<br> Shipping Date: &nbsp&nbsp&nbsp  
			<select>
				<option value=''>&nbsp&nbsp&nbsp&nbsp&nbspMonth&nbsp&nbsp&nbsp&nbsp</a>
				<option value='1'>January</a>
				<option value='2'>February</a>
				<option value='3'>March</a>
				<option value='4'>April</a>
				<option value='5'>May</a>
				<option value='6'>June</a>
				<option value='7'>July</a>
				<option value='8'>August</a>
				<option value='9'>September</a>
				<option value='10'>October</a>
				<option value='11'>November</a>
				<option value='12'>December</a>
        	</select>
			<select>
				<option value=''>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYEAR&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
				<option value='2013'>2013</a>
				<option value='2014'>2014</a>
				<option value='2015'>2015</a>
				<option value='2016'>2016</a>
			</select>
		<div class="form-group">
		    <div class="col-sm-offset-3 col-sm-9">
		        <input class="btn btn-default" id="add-to-cart-btn" type="submit" value="Edit Account">
		        <a class="btn btn-default" id="cancel-btn" href="order_list.php">
		            Cancel</a>
            </div>
        </div>
		    
		</form>
	</div> 
	<script type="text/javascript" src="../scripts/jquery.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
		document.getElementById("order-summary").className = "active";
	</script>
	
</body>
</html>

