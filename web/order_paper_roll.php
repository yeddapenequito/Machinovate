<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="styles/bootstrap.min.css">
		<link rel="stylesheet" href="styles/main.css">
		<title>Machinovate | Order Now</title>
	</head>
	<body>
		<?php include 'header_on_form_completion.php';
			session_start();

			function setStickyText($x){
				if (isset($_SESSION["cart"]["mach-rolltruck"][$x]))
					echo $_SESSION["cart"]["mach-rolltruck"][$x];
			}
		?>

		<div  id="order-slitter" class="container">
		<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li><a href="other_products.php">Other Products</a></li>
				<li><a href="paper_roll_truck.php">Paper Roll Truck</a></li>
				<li class="active">Machine Order Form</li>
			</ol>
			<h1 class="page-header">Paper Roll Truck Requirements Form</h1>
			<form id="form" action="paper_roll_form_success.php" role="form" class="form form-horizontal" method="post">
				<div class="form-group">
					<div class="alert alert-info">
						
						<p>If you have any concerns, please feel free to contact any of these numbers: (02) 404 6676/(02) 355 4635</p>
					</div>
				</div>
				<p style="color:red;font-style:italic">* Required fields.</p>

				<!-- Quantity -->
				<div class="form-group required">
					<label for="type" class="control-label col-sm-2">Quantity:</label>
					<div class="col-sm-10">
						<input class="form-control" id="quantity" min="1" name="rollTruckQuantity" step="1" type="number" required autofocus value='<?php setStickyText("prt_quantity");?>'/>
						<div class="help-block with-errors"></div>
					</div>
				</div>
				<div class="form-group">
				<label for="type" class="control-label col-sm-2">Comments/Suggestions:</label>
					<div class="col-sm-10">
				  		<textarea class="form-control" id="comment" rows="8"  placeholder="Please input your comments/suggestions here if any" style="width:80%;" name="otherDetails"><?php setStickyText("prt_Details");?></textarea>
					</div>
				</div>

				<!-- Submit and Cancel Buttons -->
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<input class="btn btn-primary" type="submit">
						<a id="cancel-btn" onclick="window.history.back()">Cancel</a>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="scripts/validator.min.js"></script>
		<script type="text/javascript" src="formlistener.js"></script>
	</body>
</html>
