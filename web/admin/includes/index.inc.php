<?php # Script 12.1 - login_page.inc.php
// This page prints any errors associated with logging in
// and it creates the entire login page, including the form.

// Include the header:
$page_title = 'Login';
//include ('header_on_login.php');

// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo "<h1>Error!</h1>
	<p class='error'>The following error(s) occurred: <br/>";
	foreach ($errors as $msg) {
		echo " - $msg <br/>\n";
	}
	echo "</p><p>Please try again.</p>";
}

// Display the form:
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/bootstrap.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/admin.css">
	<title>Machinovate | Login</title>
</head>
<body>
	<?php include 'header_on_login.php';?>

	<div id="login-content" class="container">
		<div class="row">
			<form role="form" action="login.php" method="post" class="col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
				<div class="form-group">
					<legend class="page-header">Login</legend>
				</div>
				<div class="form-group">
					<div class="alert alert-danger">
					  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					  	<strong>Warning!</strong> This page is for authorized employees only.
					</div>
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
				<fieldset>
					<div class="form-group" id="captcha">
						<div class="row">
							<img src="captcha.php" alt="CAPTCHA" class="col-sm-6 control-label">
							<div class="col-sm-6">
								<input type="text" name="captcha" class="form-control">
								<small>Copy the digits from the image into this box</small>
							</div>
						</div>
					</div>
				</fieldset>

				

				<div class="form-group">
					<input id="primary-btn" type="submit" value="Login" class="btn btn-primary btn-block">
				</div>

			</form>
		</div> <!-- /.row -->
	</div> <!-- /.container -->

	<script type="text/javascript" src="../scripts/jquery.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
</body>
</html>
