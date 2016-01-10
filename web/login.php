<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel='stylesheet' href='/bootstrap/css/bootstrap.min.css'/>
<link rel="stylesheet" href='/bootstrap/css/bootstrap.css'/>
<link rel="stylesheet" href='/bootstrap/css/bootstrap-responsive'/>
<link rel="stylesheet" href='/bootstrap/css/bootstrap-responsive.min'/>
<script type="text/javascript" src="/scripts/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/scripts/bootstrap.min.js"></script>
<script type="text/javascript" src="/scripts/bootstrap.js"></script>
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