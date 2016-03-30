<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/bootstrap.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/admin.css">
	<title>Machinovate | Order List</title>
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

		<ul class="nav nav-tabs">
		  <li><a data-toggle="tab" href="#menu1">All</a></li>
		  <li class="active"><a data-toggle="tab" href="#home">Pending</a></li>
		  <li><a data-toggle="tab" href="#menu2">Cancelled</a></li>
		  <li><a data-toggle="tab" href="#menu3">Confirmed</a></li>
		  <li><a data-toggle="tab" href="#menu4">Completed</a></li>
		</ul>

		<div class="tab-content">
		  <div id="menu1" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Edit</th>
		    			<th>Move</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td></td>
		    		</tr>
		    	</tbody>
		    </table>
		  </div>
		  <div id="home" class="tab-pane fade in active">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Edit</th>
		    			<th>Move</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td></td>
		    		</tr>
		    	</tbody>
		    </table>
		  </div>
		  <div id="menu2" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Edit</th>
		    			<th>Move</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td></td>
		    		</tr>
		    	</tbody>
		    </table>
		  </div>
		  <div id="menu3" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Edit</th>
		    			<th>Move</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td></td>
		    		</tr>
		    	</tbody>
		    </table>
		  </div>
		  <div id="menu4" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Order Ststus</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Edit</th>
		    			<th>Move</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td></td>
		    		</tr>
		    	</tbody>
		    </table>
		  </div>
		</div> <!-- /.tab-content -->
	</div> <!-- /.container -->
	<script type="text/javascript" src="../scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
		document.getElementById("order-list").className = "active";
	</script>
</body>
</html>