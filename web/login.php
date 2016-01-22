<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="./main.css">
		<title></title>
		<style>
			.row h3{
			margin-left:350px;
			margin-top:30px;
			}
			.row1{
			margin-left:350px;
			margin-top:30px;
			}
		</style>
	</head>
	<body>
		<?php include 'header_2.php';?>
		<div class="container">
			
			<div class="row">
				<h3>Login</h3>
				<div class="row1">
					<form role="form" action="processlogin.html" method="post" 
					class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
						<p>Username</p>
						<div class="form-group">
							<input type="text" name="username" placeholder="Username" class="form-control" required autofocus> 
						</div>
						<p>Password</p>
						<div class="form-group">
							<input type="password" name="password" placeholder="Password" class="form-control" required> 
						</div>
						<input type="checkbox" name="remember" value="remember"> Remember Me<br>
						<br>
						<input type="submit" value="Submit" class="btn btn-primary"
						id="form-button">
					</form>
				</div>
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>