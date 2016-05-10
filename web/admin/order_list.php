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
		<form class="form" role="form">
	        <div class="form-group text-right">
	        	<div class="input-group">	
	        			
	        		<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a id="print-btn"  class="btn btn-primary" href="generate_report.php" >Print Order</a>
					</div>
				</div>
	        		
	        	</div>
	        </div>
		</form>
		<br>
		<br>
		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#home">All</a></li>
		  <li><a data-toggle="tab" href="#menu1">Slitter</a></li>
		  <li><a data-toggle="tab" href="#menu2">Sheeter</a></li>
		  <li><a data-toggle="tab" href="#menu3">Cutter</a></li>
		  <li><a data-toggle="tab" href="#menu4">Misc</a></li>
		</ul>

		<div class="tab-content">
		<!-- All -->
		  

		  <!-- All -->
		  <div id="home" class="tab-pane fade in active">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Date Ordered</th>
		    			<th>Order Status</th>
		    			<!--  -->
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php
		    		// Default query for this page:
					$a = "SELECT DISTINCT orderlist.order_id, orderlist.machineType , clients.companyName, orders.date , orders.orderStatus 
						FROM orders, orderlist, clients, cmsr_slitter, cmsr_sheeter, cmsr_cutter, misc_bailmach, misc_rolltruck
					    WHERE 
					    orders.order_id = orderlist.order_id AND 
					    clients.client_id = orders.client_id AND     
							(cmsr_cutter.cmsr_cutter_id = orderlist.cmsr_cutter_id OR 
					        cmsr_slitter.cmsr_slitter_id = orderlist.cmsr_slitter_id OR 
							cmsr_sheeter.cmsr_sheeter_id = orderlist.cmsr_sheeter_id OR 
							misc_bailmach.misc_bailMach_id = orderlist.misc_bailMach_id OR 
					        misc_rolltruck.misc_rollTruck_id = orderlist.misc_rollTruck_id )
						ORDER BY orderlist.order_id ASC;";

					// Display all the prints, linked to URLs:
					$r = mysqli_query ($dbc, $a);
					while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

						// Display each record:
						echo "\t<tr>
							<td align=\"left\">{$row['order_id']}</a></td>
							<td align=\"left\">{$row['machineType']}</a></td>
							<td align=\"left\">{$row['companyName']}</td>
							<td align=\"left\">{$row['date']}</td>
							<td align=\"left\">{$row['orderStatus']}</td>
							
		    				<td>
		    				<button><span class='glyphicon glyphicon-edit'></span></button>
		    				</td>
		    				<td>
		    				<button><span class='glyphicon glyphicon-remove'></span></button>
		    				</td>
						</tr>\n";

					} // End of while loop.

					echo '</table>';
					//mysqli_close($dbc);
				
				?>
		    	</tbody>
		    </table>
		  </div>

		  <!--Slitter -->
		  <div id="menu1" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Date Ordered</th>
		    			<th>Order Status</th>
		    			
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>

		    	<?php
		    		// Default query for this page:
					$q = "SELECT DISTINCT orderlist.order_id, orderlist.machineType , clients.companyName, orders.date , orders.orderStatus 
						FROM orders, orderlist, clients, cmsr_slitter, cmsr_sheeter, cmsr_cutter, misc_bailmach, misc_rolltruck
					    WHERE 
					    orders.order_id = orderlist.order_id AND 
					    clients.client_id = orders.client_id AND     
							(cmsr_cutter.cmsr_cutter_id = orderlist.cmsr_cutter_id OR 
					        cmsr_slitter.cmsr_slitter_id = orderlist.cmsr_slitter_id OR 
							cmsr_sheeter.cmsr_sheeter_id = orderlist.cmsr_sheeter_id OR 
							misc_bailmach.misc_bailMach_id = orderlist.misc_bailMach_id OR 
					        misc_rolltruck.misc_rollTruck_id = orderlist.misc_rollTruck_id )
					        AND orderlist.machineType = 'Slitter' 
						ORDER BY orderlist.order_id ASC;";

					// Display all the prints, linked to URLs:
					$r = mysqli_query ($dbc, $q);
					while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

						// Display each record:
						echo "\t<tr>
							<td align=\"left\">{$row['order_id']}</a></td>
							<td align=\"left\">{$row['machineType']}</a></td>
							<td align=\"left\">{$row['companyName']}</td>
							<td align=\"left\">{$row['date']}</td>
							<td align=\"left\">{$row['orderStatus']}</td>
							
							<td>
		    					<button><a href='slitter_edit.php' target='_blank' style='float:right;margin-right:1em'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> </a></button>
		    				</td>
		    				<td>

		    					<button><a href='javascript:deleteSlitter()' id='deleteSlitter'><span class='glyphicon glyphicon-remove'></span></a></button>
		    				</td>
						</tr>\n";

					} // End of while loop.

					echo '</table>';
					//mysqli_close($dbc);
				
				?>

		    	
		    </table>
		  </div>

		  <!-- Sheeter -->
		  <div id="menu2" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Date Ordered</th>
		    			<th>Order Status</th>
		    			
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php
		    		// Default query for this page:
					$q = "SELECT DISTINCT orderlist.order_id, orderlist.machineType , clients.companyName, orders.date , orders.orderStatus 
						FROM orders, orderlist, clients, cmsr_slitter, cmsr_sheeter, cmsr_cutter, misc_bailmach, misc_rolltruck
					    WHERE 
					    orders.order_id = orderlist.order_id AND 
					    clients.client_id = orders.client_id AND     
							(cmsr_cutter.cmsr_cutter_id = orderlist.cmsr_cutter_id OR 
					        cmsr_slitter.cmsr_slitter_id = orderlist.cmsr_slitter_id OR 
							cmsr_sheeter.cmsr_sheeter_id = orderlist.cmsr_sheeter_id OR 
							misc_bailmach.misc_bailMach_id = orderlist.misc_bailMach_id OR 
					        misc_rolltruck.misc_rollTruck_id = orderlist.misc_rollTruck_id )
					        AND orderlist.machineType = 'Sheeter' 
						ORDER BY orderlist.order_id ASC; ";

					// Display all the prints, linked to URLs:
					$r = mysqli_query ($dbc, $q);
					while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

						// Display each record:
						echo "\t<tr>
							<td align=\"left\">{$row['order_id']}</a></td>
							<td align=\"left\">{$row['machineType']}</a></td>
							<td align=\"left\">{$row['companyName']}</td>
							<td align=\"left\">{$row['date']}</td>
							<td align=\"left\">{$row['orderStatus']}</td>
							
							<td>
		    					<button><a href='sheeter_edit.php' target='_blank' style='float:right;margin-right:1em'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> </a></button>
		    				</td>
		    				<td>
		    					<button><span class='glyphicon glyphicon-remove'></span></button>
		    				</td>
						</tr>\n";

					} // End of while loop.

					echo '</table>';
					//mysqli_close($dbc);
				
				?>
		    	</tbody>
		    </table>
		  </div>

		  <!-- Cutter -->
		  <div id="menu3" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Date Ordered</th>
		    			<th>Order Status</th>
		    			
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php
		    		// Default query for this page:
					$b = "SELECT DISTINCT orderlist.order_id, orderlist.machineType , clients.companyName, orders.date , orders.orderStatus 
	FROM orders, orderlist, clients, cmsr_slitter, cmsr_sheeter, cmsr_cutter, misc_bailmach, misc_rolltruck
    WHERE 
    orders.order_id = orderlist.order_id AND 
    clients.client_id = orders.client_id AND     
		(cmsr_cutter.cmsr_cutter_id = orderlist.cmsr_cutter_id OR 
        cmsr_slitter.cmsr_slitter_id = orderlist.cmsr_slitter_id OR 
		cmsr_sheeter.cmsr_sheeter_id = orderlist.cmsr_sheeter_id OR 
		misc_bailmach.misc_bailMach_id = orderlist.misc_bailMach_id OR 
        misc_rolltruck.misc_rollTruck_id = orderlist.misc_rollTruck_id )
        AND orderlist.machineType = 'Cutter' 
	ORDER BY orderlist.order_id ASC;";

					// Display all the prints, linked to URLs:
					$r = mysqli_query ($dbc, $b);
					while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

						// Display each record:
						echo "\t<tr>
							<td align=\"left\">{$row['order_id']}</a></td>
							<td align=\"left\">{$row['machineType']}</a></td>
							<td align=\"left\">{$row['companyName']}</td>
							<td align=\"left\">{$row['date']}</td>
							<td align=\"left\">{$row['orderStatus']}</td>
							
							<td>
		    					<button><a href='cutter_edit.php' target='_blank' style='float:right;margin-right:1em'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> </a></button>
		    				</td>
		    				<td>
		    					<button><span class='glyphicon glyphicon-remove'></span></button>
		    				</td>
						</tr>\n";

					} // End of while loop.

					echo '</table>';
					//mysqli_close($dbc);
				
				?>
		    	</tbody>
		    </table>
		  </div>

		  <!-- MISC-->
		  <div id="menu4" class="tab-pane fade">
		    <table class="table table-striped">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Date Ordered</th>
		    			<th>Order Status</th>
		    			
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php
		    		// Default query for this page:
					$q = "SELECT DISTINCT orderlist.order_id, orderlist.machineType , clients.companyName, orders.date , orders.orderStatus 
						FROM orders, orderlist, clients, cmsr_slitter, cmsr_sheeter, cmsr_cutter, misc_bailmach, misc_rolltruck
					    WHERE 
					    orders.order_id = orderlist.order_id AND 
					    clients.client_id = orders.client_id AND     
							(cmsr_cutter.cmsr_cutter_id = orderlist.cmsr_cutter_id OR 
					        cmsr_slitter.cmsr_slitter_id = orderlist.cmsr_slitter_id OR 
							cmsr_sheeter.cmsr_sheeter_id = orderlist.cmsr_sheeter_id OR 
							misc_bailmach.misc_bailMach_id = orderlist.misc_bailMach_id OR 
					        misc_rolltruck.misc_rollTruck_id = orderlist.misc_rollTruck_id )
					        AND (orderlist.machineType = 'Paper Roll Truck' OR 
					        	orderlist.machineType = 'Bailing Machine')
							ORDER BY orderlist.order_id ASC;";

					// Display all the prints, linked to URLs:
					$r = mysqli_query ($dbc, $q);
					while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

						// Display each record:
						echo "\t<tr>
							<td align=\"left\">{$row['order_id']}</a></td>
							<td align=\"left\">{$row['machineType']}</a></td>
							<td align=\"left\">{$row['companyName']}</td>
							<td align=\"left\">{$row['date']}</td>
							<td align=\"left\">{$row['orderStatus']}</td>
							
							<td>
							if ([orderlist.machineType = 'Paper Roll Truck']){
								<button><a href='paper-roll_edit.php' target='_blank' style='float:right;margin-right:1em'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> </a></button>
							}
							else{
								<button><a href='bailing_edit.php' target='_blank' style='float:right;margin-right:1em'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> </a></button>
							}
		    					
							
		    				</td>
		    				<td>
		    					<button><span class='glyphicon glyphicon-remove'></span></button>
		    				</td>
						</tr>\n";

					} // End of while loop.

					echo '</table>';
					mysqli_close($dbc);
				
				?>
		    	</tbody>
		    </table>
		  </div>
		</div> <!-- /.tab-content -->
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