<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<title>Machinovate | Form Successful!</title>
</head>
<body>
	<?php include 'header_before_login.php';?>

	<div class="container">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<form action="cart_summary.php?unitName=115E" role="form" class="form-horizontal"method='post'>
					<legend>Your Order has been added to your Cart!</legend>
	<?php 
		echo 'NO ERROR TRAPPING YET';
		session_start();
	
		$modelName = $_POST['cutterRadio'];	//can be $_GET
		$_SESSION['cart'][$modelName] = array(
			
			////other details
			'otherDetails' => $_POST['otherDetails']
			);
	?>

			<a id="cancel-btn" href="machines.php" class="btn btn-default">Continue Browsing</a>
			<button id="add-to-cart-btn" type="submit" class="btn btn-default">Proceed to Checkout</button>
		</div>
	</div>
</div> <!-- /.container -->

<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
</body>
</html>