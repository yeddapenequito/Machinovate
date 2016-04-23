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
				<li><a href="cutter.php">Cutter</a></li>
				<li class="active">Cutter Machine Requirements Form</li>
			</ol>
			<form id="form" action="cutter_form_success.php" role="form" class="form-horizontal" method="post">
				<legend>
					<h1>Cutter Machine Requirements Form</h1>
				</legend>
				<div class="form-group">
					<div class="alert alert-info">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<p>If you have any concerns, please feel free to contact any of these numbers: (02) 404 6676/(02) 355 4635</p>
					</div>
				</div>
				<p style="color:red;font-style:italic">* Required fields.</p>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<img src="images/CT-115E.png" id="cutter-images" style="height: 
						200px; width: 230px;">
						<img src="images/CT-137E.png" id="cutter-images" style="height: 
						200px; width: 230px;">
						<img src="images/CT-155E.png" id="cutter-images" style="height: 
						200px; width: 230px;">
						<img src="images/CT-260E.png" id="cutter-images" style="height: 
						200px; width: 230px;">
					</div>
				</div>
				<!-- Type -->
				<div class="form-group required">

					<label for="type" class="control-label col-sm-2">Type:</label>

					<div class="col-sm-10">
						<div class="radio">
							<label><input class="type" name="cutterRadio" type="radio" value="CT_115E" checked="checked">
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

				<!-- Other Details -->
				<div class="form-group">
					<label for="type" class="control-label col-sm-2">Other Details:</label>
					<div class="col-sm-10">
				  		<textarea class="form-control" id="comment" rows="8"  placeholder="Place your additional requirements here if any." style="width:80%;" name="otherDetails" value="<?php if (isset($_POST['otherDetails'])) echo $_POST['otherDetails']; ?>"></textarea>
					</div>
				</div>

				<div class="form-group">

					<div class="col-sm-offset-2 col-sm-10">

						<input class="btn btn-default" id="add-to-cart-btn" type="submit" value="Finish">
						<a class="btn btn-default" id="cancel-btn" href="cutter.php">Cancel</a>
					</div>
				</div>
			</form>
		</div> <!-- /.container -->
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="scripts/validator.min.js"></script>
	</body>
</html>