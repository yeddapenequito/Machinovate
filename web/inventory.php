<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/web/styles/bootstrap.min.css">
		<link rel="stylesheet" href="/web/styles/main.css">
		<title></title>
		<style>
			.add a{
				position:absolute;
				margin-top: 450px;
				margin-right: 150px;
				margin-left: 600px;
			}
		</style>
	</head>
	<body>
		<?php include 'header_4.php';?>
		<div class="container">
			
			<div class="row">
				<h3>Add New Employee</h3>
				
					<form role="form" action="processadd.html" method="post" 
					class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
					<div class="add">	
						<a href="/web/add_record.php" class="btn btn-primary"
						id="form-button">Add New Record</a>
					</div>
					</form>
				
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>