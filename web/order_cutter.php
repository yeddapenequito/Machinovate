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
			<h1 class="page-header">Cutter Form Requirements</h1>
			<p>Please bear with us.</p>
			<form action="cutter_form_success.php" role="form" class="form-horizontal" method="post">
				<fieldset>
					<legend>General Section</legend>
					<div>
					<img src="images/CT-115E.png" id="cutter-images" style="height: 
					200px; width: 230px;">
					<img src="images/CT-137E.png" id="cutter-images" style="height: 
					200px; width: 230px;">
					<img src="images/CT-155E.png" id="cutter-images" style="height: 
					200px; width: 230px;">
					<img src="images/CT-260E.png" id="cutter-images" style="height: 
					200px; width: 230px;">
					</div>
					<br>

					<!-- Type -->
					<div class="form-group">

						<label for="type" class="control-label col-sm-2">Type:</label>

						<div class="col-sm-10">
							<div class="radio">
								<label><input class="type" name="cutterRadio" type="radio" value="CT_115E">
									CT-115E (115 cm/45.2in)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="cutterRadio" type="radio" value="CT_137E">
									CT-137E (137 cm/53.9in)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="cutterRadio" type="radio" value="CT_155E">
									CT-155E (155cm/61in)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="cutterRadio" type="radio" value="CT_185E">
									CT-185E (185cm/72.8in)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="cutterRadio" type="radio" value="CT_220E">
									CT-220E (220cm/86.6in)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="cutterRadio" type="radio" value="CT_260E">
									CT-260E (260cm/102.3in)</label>
							</div>
							<div class="radio">
								<label><input class="type" name="cutterRadio" type="radio" value="CT_300E">
									CT-300E (300cm/118.1in)</label>
							</div>
						</div>
					</div>

				</fieldset>

				<fieldset>
					<legend>Other Details</legend>

					<div class="form-group">

						<div class="col-sm-offset-2 col-sm-10">
					  		<textarea placeholder="Place your additional requirements here." class="form-control" id="comment" rows="8"  name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
						</div>
					</div>
				</fieldset>

				<div class="form-group">

					<div class="col-sm-offset-2 col-sm-10">

						<button class="btn btn-default" id="add-to-cart-btn" type="submit">
							Finish</button>
						<a class="btn btn-default" id="cancel-btn" href="cutter.php">
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