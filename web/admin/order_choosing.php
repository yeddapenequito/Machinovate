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
	<style type="text/css">
	#select1, #select2{
		display: inline;
	}


	</style>

	<title>Machinovate | Print Order Summary</title>
	
</head>
<body>
	<?php include 'header_after_login.php';?>
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

		// The function header by sending raw excel
		header("Content-type: application/vnd-ms-excel");
		 
		// Defines the name of the export file "<insert name here>.xls"
		header("Content-Disposition: attachment; filename=order-report.xls");
		 

		$os = mysqli_real_escape_string($dbc, trim($_POST['orderStatus']));
		$mt = mysqli_real_escape_string($dbc, trim($_POST['machineType']));
		$odm = mysqli_real_escape_string($dbc, trim($_POST['orderDateMonth']));
		$ody = mysqli_real_escape_string($dbc, trim($_POST['orderDateYear']));
		$sdm = mysqli_real_escape_string($dbc, trim($_POST['shippingDateMonth']));
		$sdy = mysqli_real_escape_string($dbc, trim($_POST['shippingDateYear']));

		


		// Add data table
		echo " 
			<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
			<div class="container">

			<center>
			<p style="text-align:left;"><img src='C:\xampp\htdocs\Machinovate\web\images\mach-summary.png'
					height = '200' width = '880' padding='0' align='left'></p>
						<i><b><font size='5'>SUMMARY OF ORDERS</font></b></i>

						<table class='table table-striped table-bordered' border='1 style=
					'width:100%''>
					    	<thead>
					    		<tr>
					    			<th>Order No.</th>
					    			<th>Machine Type</th>
					    			<th>Company Name</th>
					    			<th>Date Ordered</th>
					    			<th>Order Status</th>
					    		</tr>
					    	</thead>
					    	<tbody>
					    		<?php
					    		require ('../../mysqli_connect.php');
			 

					    		// Default query for this page:
								$a = 'SELECT DISTINCT orderlist.order_id, orderlist.machineType , clients.companyName, orders.date , orders.orderStatus 
									FROM orders, orderlist, clients, cmsr_slitter, cmsr_sheeter, cmsr_cutter, misc_bailmach, misc_rolltruck
								    WHERE 
								    orders.order_id = orderlist.order_id AND 
								    clients.client_id = orders.client_id AND     
										(cmsr_cutter.cmsr_cutter_id = orderlist.cmsr_cutter_id OR 
								        cmsr_slitter.cmsr_slitter_id = orderlist.cmsr_slitter_id OR 
										cmsr_sheeter.cmsr_sheeter_id = orderlist.cmsr_sheeter_id OR 
										misc_bailmach.misc_bailMach_id = orderlist.misc_bailMach_id OR 
								        misc_rolltruck.misc_rollTruck_id = orderlist.misc_rollTruck_id )
									ORDER BY orderlist.order_id ASC;';

								// Display all the prints, linked to URLs:
								$r = mysqli_query ($dbc, $a);
								$t=time();
									//echo($t . '<br>');
									date_default_timezone_set('Asia/Manila');
									echo 'Downloaded on: ' . date('m-d-y') . ' ' . date('h:i:sa');
								while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

									// Display each record:
									echo '\t<tr>
										<td align=\'center\'>{$row['order_id']}</a></td>
										<td align=\'left\'>{$row['machineType']}</a></td>
										<td align=\'left\'>{$row['companyName']}</td>
										<td align=\'left\'>{$row['date']}</td>
										<td align=\'left\'>{$row['orderStatus']}</td>';
								} // End of while loop.
								$b = 'SELECT order_id FROM orderlist WHERE order_id = (SELECT MAX(order_id) FROM orderlist)';
								$s = mysqli_query ($dbc, $b);
								
								while ($row = mysqli_fetch_array ($s, MYSQLI_ASSOC)) {	

									// Display each record:
									echo '\t<tr><td align=\'center\'> Total Number of Orders: <b> {$row['order_id']}</b></tr> </td>';
								} // End of while loop.
								echo '</table>';
								mysqli_close($dbc);
							
							?>
					    	</tbody>
					    </table>
					</center>
				</div>


			</body>
			</html>

		"

	?>
 <div class="container">
    <div class="row">
        <form enctype="multipart/form-data" action="order_choosing.php" method="post" class="form form-horizontal col-sm-6" role="form">
            <fieldset>

                <legend>Order Summary:</legend>
                
                <div class="form-group">
                     <label class="col-sm-3" for="last_name">Order Status: </label>
                     <div class="col-sm-9">
                     <select class="form-control" id="<?php if (isset($_POST['orderStatus'])) echo $orderStatus; ?>" name="orderStatus">
					    <option value="COMPLETED">COMPLETED</a>
					    <option value='CANCELLED'>CANCELLED</a>
					    <option value='PENDING'>PENDING</a>
					</select>
	
                        <div class="help-block with-errors"></div>
                     </div>
                </div>
                <br>
                 <div class="form-group">
                     <label class="col-sm-3" for="first_name">Machine Type: </label>
                     <div class="col-sm-9">
                       <select class="form-control" id="<?php if (isset($_POST['machineType'])) echo $machineType; ?>" name="machineType">>
					    <option value='Slitter'>SLITTER</a>
					    <option value='Sheeter'>SHEETER</a>
					    <option value='CUTTER'>CUTTER</a>
					    <option value='Bailing Machine'>BAILING MACHINE</a>
					    <option value='Paper Roll Truck'>PAPER ROLL TRUCK</a>
					</select> 
                     </div>
                </div>
                <br>
               <div class="form-group">
                     <label class="col-sm-3" for="username">Order's Date by: </label>
                     <div class="col-sm-9">
                     <select class="form-control" style="width:30%;" id="orderDateMonth">
						<option value=''>Month</a>
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
					<select class="form-control" style="width:30%;" id="orderDateYear">
				
						<option value=''>YEAR</a>
						<option value='2013'>2013</a>
						<option value='2014'>2014</a>
						<option value='2015'>2015</a>
						<option value='2016'>2016</a>
						
						<!-- <option value='2016'>2017</a>
						<option value='2016'>2018</a>
						<option value='2016'>2019</a> 
						-->
						
					</select>
                     </div>
                </div>
                <br>
                <div class="form-group">
                     <label class="col-sm-3" for="password">Shipping Date: </label>
                     <div class="col-sm-9">
                        <select class="form-control" style="width:30%;" id="shippingDateMonth" >
				<option value=''>Month</a>
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
			<select  class="form-control" style="width:30%;" id="shippingDateYear">
				<option value=''>YEAR</a>
				<option value='2013'>2013</a>
				<option value='2014'>2014</a>
				<option value='2015'>2015</a>
				<option value='2016'>2016</a>
			</select>

				<!-- <option value='2016'>2017</a>
						<option value='2016'>2018</a>
						<option value='2016'>2019</a> 
						-->
                        <div class="help-block with-errors"></div>
                     </div>
                </div>

              <div class="form-group">
		    <div class="col-sm-offset-3 col-sm-9">
		        <input class="btn btn-default" id="add-to-cart-btn" type="submit" value="Print Order Summary Report">
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
	<script type="text/javascript">
		document.getElementById("order-summary").className = "active";
	</script>
	
</body>
</html>
