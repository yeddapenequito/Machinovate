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

		<div  id="order-slitter" class="container">
			<h1 class="page-header">Bailing Machine Form Requirements</h1>
			<p>Please input the necessary information.</p>
			<!-- please change the form action... to what name if ever wrong-->
			<form action="bailing-mach_form_success.php" role="form" class="form-horizontal" method="post">
				<fieldset>
					<legend>General Section</legend>

					<!-- Quantity -->
					<div class="form-group">

						<label for="type" class="control-label col-sm-2">Quantity:</label>

						<div class="col-sm-10">
							<input class="form-control" id="quantity" min="1" name="bailing-quantity" step="1" type="number" style="width:10%;" />
						</div>
					</div>

				</fieldset>

				<fieldset>
					<legend>Other Details</legend>

					<div class="form-group">

						<div class="col-sm-offset-2 col-sm-10">
					  		<textarea class="form-control" id="comment" rows="8"  name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
						</div>
					</div>
				</fieldset>

				<div class="form-group">

					<div class="col-sm-offset-2 col-sm-10">

						<button class="btn btn-default" id="add-to-cart-btn" type="submit">
							Finish</button>
						<a class="btn btn-default" id="cancel-btn" href="other_products.php">
							Cancel</a>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		

		</script>
	</body>
</html>