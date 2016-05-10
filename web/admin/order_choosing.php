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

	<title>Machinovate | Order List</title>
	
</head>
<body>
	<?php include "header_after_login.php";?>
	<?php 
		// The user is redirected here AFTER SUCCESSFUL LOGIN

		session_start(); // Start the session.

		// If no session value is present, redirect the user:
		// Also validate the HTTP_USER_AGENT!
		if (!isset($_SESSION["agent"]) OR ($_SESSION["agent"] != md5($_SERVER["HTTP_USER_AGENT"]) )) {

			// Need the functions:
			require ("includes/login_functions.inc.php");
			redirect_user();	

		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
			$_SESSION['os'] = mysqli_real_escape_string($dbc, trim($_POST["orderStatus"]));
			$_SESSION['mt'] = mysqli_real_escape_string($dbc, trim($_POST["machineType"]));
			$_SESSION['od'] = mysqli_real_escape_string($dbc, trim($_POST["orderDate"]));
			$_SESSION['sd'] = mysqli_real_escape_string($dbc, trim($_POST["shippingDate"]));

		}	
	?>
 <div class="container">
    <div class="row">
        <form enctype="multipart/form-data" action="generate_report.php" method="post" class="form form-horizontal col-sm-6" role="form">
            <fieldset>

                <legend>Print Order Summary Filters:</legend>
                
                <div class="form-group">
                     <label class="col-sm-3" for="last_name" >Order Status: </label>
                     <div class="col-sm-9">
                     <select class="form-control" id="orderStatus" name="orderStatus" maxlength="40" value="<?php if (isset($_POST['orderStatus'])) echo $_POST['orderStatus']; ?>">
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
                       <select class="form-control" id="machineType" name="machineType" maxlength="40" value="<?php if (isset($_POST['machineType'])) echo $_POST['machineType']; ?>">
					    <option value='SLITTER'>SLITTER</a>
					    <option value='SHEETER'>SHEETER</a>
					    <option value='CUTTER'>CUTTER</a>
					    <option value='BAILING'>BAILING MACHINE</a>
					    <option value='ROLL'>PAPER ROLL TRUCK</a>
					</select> 
                     </div>
                </div>
                <br>
               <div class="form-group">
                     <label class="col-sm-3" for="username">Order's Date by: </label>
                     <div class="col-sm-9">
                     <input type="date" class="form-control" id="orderDate" name="orderDate" maxlength="40" value="<?php if (isset($_POST['orderDate'])) echo $_POST['orderDate']; ?>"/>
                    <!--  <select class="form-control" style="width:30%;" id="select1">
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
					<select class="form-control" style="width:30%;" id="select2">
				
						<option value=''>YEAR</a>
						<option value='2013'>2013</a>
						<option value='2014'>2014</a>
						<option value='2015'>2015</a>
						<option value='2016'>2016</a>
						
					</select> -->
                     </div>
                </div>
                <br>
                <div class="form-group">
                     <label class="col-sm-3" for="password">Shipping Date: </label>
                     <div class="col-sm-9">
                     <input type="date" class="form-control" id="shippingDate" name="shippingDate" maxlength="40" value="<?php if (isset($_POST['shippingDate'])) echo $_POST['shippingDate']; ?>"/>
                       <!--  <select class="form-control" style="width:30%;" id="select1" >
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
			<select  class="form-control" style="width:30%;" id="select2">
				<option value=''>YEAR</a>
				<option value='2013'>2013</a>
				<option value='2014'>2014</a>
				<option value='2015'>2015</a>
				<option value='2016'>2016</a>
			</select> -->
                        <div class="help-block with-errors"></div>
                     </div>
                </div>

              <div class="form-group">
		    <div class="col-sm-offset-3 col-sm-9">
		        <input class="btn btn-default" id="add-to-cart-btn" type="submit" value="Print Report">
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
	<script type="text/javascript">
		$(function() {
			var date1 = new Date;
			date1.setHours(0, 0, 0, 0);
			date1.setDate(10);
			var date2 = new Date;
			date2.setHours(0, 0, 0, 0);
			date2.setDate(23);
			$("#datepicker").datepicker({
				beforeShowDay: function(date) {
					return [date < date1 || date > date2, ""];
				}
			});
		});
	</script>
</body>
</html>
