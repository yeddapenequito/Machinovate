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
		<!-- All -->
		  <div id="menu1" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Order Status</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td>0001</td>
		    			<td>Pending</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
			    	</tr>
		    		<tr>
		    			<td>0002</td>
		    			<td>Pending</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
			    	</tr>
		    	</tbody>
		    </table>
		  </div>

		  <!-- Pending -->
		  <div id="home" class="tab-pane fade in active">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Move To</th>
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td>0001</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
						  <select class="form-control" id="move">
						    <option value="">-- Move To --</option>
						    <option value="cancelled">Cancelled</option>
						    <option value="confirmed">Confirmed</option>
						    <option value="completed">Completed</option>
						  </select>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
		    		</tr>
		    		<tr>
		    			<td>0002</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
						  <select class="form-control" id="move">
						    <option value="">-- Move To --</option>
						    <option value="cancelled">Cancelled</option>
						    <option value="confirmed">Confirmed</option>
						    <option value="completed">Completed</option>
						  </select>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
		    		</tr>
		    	</tbody>
		    </table>
		  </div>

		  <!-- Cancelled -->
		  <div id="menu2" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Move To</th>
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td>0001</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
						  <select class="form-control" id="move">
						    <option value="">-- Move To --</option>
						    <option value="cancelled">Cancelled</option>
						    <option value="confirmed">Confirmed</option>
						    <option value="completed">Completed</option>
						  </select>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
		    		</tr>
		    		<tr>
		    			<td>0002</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
						  <select class="form-control" id="move">
						    <option value="">-- Move To --</option>
						    <option value="cancelled">Pending</option>
						    <option value="confirmed">Confirmed</option>
						    <option value="completed">Completed</option>
						  </select>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
		    		</tr>
		    	</tbody>
		    </table>
		  </div>

		  <!-- Confirmed -->
		  <div id="menu3" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Move To</th>
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td>0001</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
						  <select class="form-control" id="move">
						    <option value="">-- Move To --</option>
						    <option value="cancelled">Cancelled</option>
						    <option value="confirmed">Confirmed</option>
						    <option value="completed">Completed</option>
						  </select>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
		    		</tr>
		    		<tr>
		    			<td>0002</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
						  <select class="form-control" id="move">
						    <option value="">-- Move To --</option>
						    <option value="cancelled">Pending</option>
						    <option value="confirmed">Confirmed</option>
						    <option value="completed">Completed</option>
						  </select>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
		    		</tr>
		    	</tbody>
		    </table>
		  </div>

		  <!-- Completed -->
		  <div id="menu4" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Contact Name</th>
		    			<th>Date Ordered</th>
		    			<th>Move To</th>
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td>0001</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
						  <select class="form-control" id="move">
						    <option value="">-- Move To --</option>
						    <option value="cancelled">Cancelled</option>
						    <option value="confirmed">Confirmed</option>
						    <option value="completed">Completed</option>
						  </select>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
		    		</tr>
		    		<tr>
		    			<td>0002</td>
		    			<td>Slitter</td>
		    			<td>University of Santo Tomas</td>
		    			<td>Juan dela Cruz</td>
		    			<td>3/30/2016</td>
		    			<td>
						  <select class="form-control" id="move">
						    <option value="">-- Move To --</option>
						    <option value="cancelled">Pending</option>
						    <option value="confirmed">Confirmed</option>
						    <option value="completed">Completed</option>
						  </select>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-edit"></span></button>
		    			</td>
		    			<td>
		    				<button><span class="glyphicon glyphicon-remove"></span></button>
		    			</td>
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