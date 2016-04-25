
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/bootstrap.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/admin.css">
	<title>Machinovate | Error Login</title>
</head>
<body>
	<?php include 'header_on_login.php';?>
	
	<div class="container">
		<div class="row">
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Login Failed!</strong> Please check your username and password combination and try again.
			</div>
			
		<?php 
			include ("index.inc.php");
		?>
		
		</div> <!-- .row -->
	</div> <!-- /.container -->
	
</body>
</html>
