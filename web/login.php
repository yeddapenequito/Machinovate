<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.css">
	<title>Machinovate | Login</title>
</head>
<body>
	<?php include 'header_before_login.php';?>

	<div id="login-content" class="container">
		<div class="row">
			<form role="form" action="form-handler" method="post" class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">

				<h3 class="page-header">Login</h3>

				<div class="alert alert-danger">
				  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				  	<strong>Warning!</strong> This page is for authorized employees only.
				</div>

				<div class="form-group">
					<label for="username">Username</label>
					<input id="username" name="username" type="text" placeholder="Enter username" class="form-control" required autofocus> 
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input id="password" name="password" type="password" placeholder="Enter password" class="form-control" required> 
				</div>

				<!-- The following code for implementing captcha is obtained and modified from http://www.the-art-of-web.com/php/captcha/-->

				<div class="form-horizontal">
					<div class="form-group">
						<label for="captcha" class="control-label col-sm-5">
							<img src="captcha.php" alt="CAPTCHA">
						</label>
						<div class="col-sm-7">
							<input id="captcha" type="text" name="captcha" class="form-control">
						</div>
						<small>Copy the digits from the image into this box</small>
					</div>
				</div>

				<div class="form-group">
					<div class="checkbox">
						<label for="remember"><input id="remember" type="checkbox" value="remember">Remember Me</label>
					</div>
				</div>

				<div class="form-group">
					<input id="login-btn" type="submit" value="Login" class="btn btn-primary btn-block">
				</div>

			</form>
		</div> <!-- /.row -->
	</div>

	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
	document.getElementById("employee-login").remove();
	</script>
</body>
</html>