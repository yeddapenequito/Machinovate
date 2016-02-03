<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
		<title>Machinovate | Dashboard</title>
	</head>
	<body>
		<?php include 'header.php';?>

		<div id="dashboard-content" class="container">
			<div class="row">
				<div class="col-sm-12 col-md-push-6 col-md-6">
					<div class="panel panel-default">
						<div class="panel-heading">Announcements</div>
						<div class="panel-body">
							Place announcements here
						</div>
					</div>

					<a href="./inventory.php" class="btn btn-primary">Continue to Inventory</a>
					or
					<a href="./orders.php" class="btn btn-primary">See List of Orders</a>
				</div>
				<div class="col-sm-12 col-md-pull-6 col-md-6">
					<div class="panel panel-info">
						<div class="panel-heading">User Profile</div>
						<div class="panel-body">
							<img id="profile-picture" src="./images/GeneratedCross-0.png">
							<dl class="dl-horizontal">
								<dt>Username</dt>
								<dd>username</dd>

								<dt>Name</dt>
								<dd>LASTNAME, Firstname M.I.</dd>

								<dt>Address</dt>
								<dd>Street, Barangay, City, Province</dd>

								<dt>Telephone</dt>
								<dd>+000 0000 0000</dd>

								<dt>E-mail</dt>
								<dd>somename@somename.com</dd>

								<dt>Date of Birth</dt>
								<dd>YYYY-MM-DD</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php';?>

		<script type="text/javascript" src="./scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
		<script>
			
			$(".before-login").remove();
		</script>
	</body>
</html>