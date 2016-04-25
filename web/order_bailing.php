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
		<?php include 'header_on_form_completion.php';?>

		<div class="container">
			<ol class="breadcrumb">
				<li><a href="machines.php">Machines</a></li>
				<li><a href="other_products.php">Other Products</a></li>
				<li><a onclick="window.history.back()">Bailing Machine</a></li>
				<li class="active">Bailing Machine Requirements Form</li>
			</ol>

			<form name="form" id="form" action="bailing_form_success.php" role="form" class="form-horizontal" method="post">
				<legend>
					<h1>Bailing Machine Requirements Form</h1>
				</legend>
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
					
						<input value="1" class="form-control" id="quantity" min="1" name="bailingQuantity" step="1" type="number" value='<?php if (isset($_POST['bailingQuantity'])) echo $_POST['bailingQuantity']; ?>' required autofocus/>
						<div class="help-block with-errors"></div>
					</div>
				</div>

				<!-- Other Details -->
				<div class="form-group">
					<label for="type" class="control-label col-sm-2">Other Details:</label>
					<div class="col-sm-10">
				  		<textarea class="form-control" id="comment" rows="8"  placeholder="Place your additional requirements here if any." style="width:80%;" name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
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
	</body>
</html>