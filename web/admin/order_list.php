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
	        <div class="form-group text-right">
	        	<div class="input-group">
	        		<input placeholder="Search" id="search" name="search" type="text" class="form-control">
	        		<div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
	        	</div>
	        </div>
		</form>
		<br>
		<br>
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
		    				<button data-toggle="modal" href='#edit'>
		    					<span class="glyphicon glyphicon-edit"></span></button>
							<div class="modal fade" id="edit">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Edit</h4>
										</div>
										<div class="modal-body">
											<div action="" method="POST" class="form-horizontal" role="form">
												<div class="form-group">
													<label for="machine-type" class="control-label col-sm-3">Order No.</label>
													<div class="col-sm-9">
														<p>0001</p>
													</div>
												</div>
												<div class="form-group">
													<label for="machine-type" class="control-label col-sm-3">Machine Type</label>
													<div class="col-sm-9">
														<input value="Slitter" type="text" id="machine-type" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label for="company-name" class="control-label col-sm-3">Company Name</label>
													<div class="col-sm-9">
														<input value="University of Santo Tomas" type="text" id="company-name" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label for="contact-name" class="control-label col-sm-3">Contact Name</label>
													<div class="col-sm-9">
														<input value="Juan Dela Cruz" type="text" id="contact-name" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label for="date-ordered" class="control-label col-sm-3">Date Ordered</label>
													<div class="col-sm-9">
														<input value="3/30/2016" type="date" id="date-ordered" class="form-control">
													</div>
												</div>
											</div>
										</div> <!-- /.modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div> <!-- /.modal-content -->
								</div> <!-- /.modal-dialog -->
							</div> <!-- /.modal -->
		    			</td>
		    			<td>
		    				<button data-toggle="modal" href='#delete'><span class="glyphicon glyphicon-remove"></span></button>
		    				<div class="modal fade" id="delete">
		    					<div class="modal-dialog">
		    						<div class="modal-content">
		    							<div class="modal-header">
		    								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		    								<h4 class="modal-title text-danger">Delete</h4>
		    							</div>
		    							<div class="modal-body">
		    								<p class="text-danger">Are your sure you want to delete Order No. 0001</p>
		    							</div>
		    							<div class="modal-footer">
		    								<button type="button" class="btn btn-default" data-dismiss="modal">No</button>
		    								<button type="button" class="btn btn-primary">Yes</button>
		    							</div>
		    						</div>
		    					</div>
		    				</div>
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
		    				<button data-toggle="modal" href='#edit1'>
		    					<span class="glyphicon glyphicon-edit1"></span></button>
							<div class="modal fade" id="edit">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">Edit</h4>
										</div>
										<div class="modal-body">
											<div action="" method="POST" class="form-horizontal" role="form">
												<div class="form-group">
													<label for="machine-type" class="control-label col-sm-3">Order No.</label>
													<div class="col-sm-9">
														<p>0002</p>
													</div>
												</div>
												<div class="form-group">
													<label for="machine-type" class="control-label col-sm-3">Machine Type</label>
													<div class="col-sm-9">
														<input value="Slitter" type="text" id="machine-type" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label for="company-name" class="control-label col-sm-3">Company Name</label>
													<div class="col-sm-9">
														<input value="University of Santo Tomas" type="text" id="company-name" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label for="contact-name" class="control-label col-sm-3">Contact Name</label>
													<div class="col-sm-9">
														<input value="Juan Dela Cruz" type="text" id="contact-name" class="form-control">
													</div>
												</div>
												<div class="form-group">
													<label for="date-ordered" class="control-label col-sm-3">Date Ordered</label>
													<div class="col-sm-9">
														<input value="3/30/2016" type="date" id="date-ordered" class="form-control">
													</div>
												</div>
											</div>
										</div> <!-- /.modal-body -->
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div> <!-- /.modal-content -->
								</div> <!-- /.modal-dialog -->
							</div> <!-- /.modal -->
		    			</td>
		    			<td>
		    				<button class="delete"><span class="glyphicon glyphicon-remove"></span></button>
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
	<script type="text/javascript" src="../scripts/jquery.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
		document.getElementById("order-list").className = "active";
	</script>
</body>
</html>