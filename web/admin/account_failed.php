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
	<title>Machinovate | Add Agents</title>
</head>
<body>
	<?php include 'header_after_login.php';?>
	
	<div class="container">
		
	<h1>System Error</h1>
			<p class="error">It could not be registered due to a system error. We apologize for any inconvenience.</p>
			 <div class="form-group">

                    <div class="col-sm-10">

                        <button class="btn btn-default" id="add-to-cart-btn" type="submit">
                            
                           <a href="order_list.php"> Go Back</a></button>
                    </div>
                </div>
		
	</div> <!-- /.container -->
	<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
		document.getElementById("order-list").className = "active";
	</script>
</body>
</html>