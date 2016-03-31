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
			<h1 class="page-header">Paper Roll Truck Form Requirements</h1>
			<!-- please change the form action... to what name if ever wrong-->
			<form action="paper_roll_form_success.php" role="form" class="form form-horizontal" method="post">
				<!-- Quantity -->
					<div class="form-group has-error has-feedback">
						<label for="type" class="control-label col-sm-2">Quantity:</label>
						<div class="col-sm-10">
							<input class="form-control" id="quantity" min="1" name="bailingQuantity" step="1" type="number" style="width:10%;" value='<?php if (isset($_POST['bailingQuantity'])) echo $_POST['bailingQuantity']; ?>' required/>
							<div id="help-block" class="form-control-feedback" aria-hidden="true">This field is required.</div>
						</div>
					</div>
					<div class="form-group">
					<label for="type" class="control-label col-sm-2">Comments/Suggestions:</label>
						<div class="col-sm-10">
					  		<textarea class="form-control" id="comment" rows="8"  placeholder="Please input your comments/suggestions here if any" style="width:80%;" name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
						</div>
					</div>

				<div class="form-group">

					<div class="col-sm-offset-2 col-sm-10">

						<button onclick="validateForm()" class="btn btn-default" id="add-to-cart-btn" type="submit">
							Finish</button>
						<a class="btn btn-default" id="cancel-btn" href="other_products.php">
							Cancel</a>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->
		<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		
		<script type="text/javascript">
			var validateForm = function() {
				var username = document.getElementById("username");
				if(username.checkValidity() == false) {
					document.getElementByClass("form-control-feedback").innerHTML = username.validationMessage
				}
			}
		</script>
	</body>
</html>