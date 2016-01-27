<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/web/styles/bootstrap.min.css">
		<link rel="stylesheet" href="/web/styles/main.css">
		<title></title>
		<style>
			.row h3{
			margin-left:auto;
			margin-top:130px;
			}
			.row1{
			position: absolute;
			margin-left:-380px;
			margin-top:10px;
			margin-right:auto;
			}
			.row2{
			position: absolute;
			margin-left:100px;
			margin-right:auto;
			margin-top:10px;
			}
			.row3{
			position: absolute;
			margin-left:130px;
			margin-right:auto;
			margin-top:310px;
			}
		</style>
	</head>
	<body>
		<?php include 'header_4.php';?>
		<div class="container">
			
			<div class="row">
				<h3>Add New Record</h3>
				
					<form role="form" action="processadd.html" method="post" 
					class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
					<div class="row1">	
						<p>Image:</p>
						<div class="form-group">
							 <input type="text" name="image" placeholder="Image" class="form-control" required autofocus>
							 <br>
							 <button type="button" linkType="_blank" link="file:///C:\Users\lucky\Documents" class="btn btn-primary"
						id="form-button"/>Browse..</button>
						</div>
						<p>Name:</p>
						<div class="form-group">
							 <input type="text" name="name" placeholder="Name" class="form-control" required autofocus> 
						</div>
						<p>Description:</p>
						<div class="form-group">
							<input type="text" name="Description" placeholder="Description" class="form-control" required autofocus> 
						</div>
						
					</div>
					<div class="row2">
						<p>Quantity:</p>
						<div class="form-group">
							<input type="text" name="Quantity" placeholder="Quantity" class="form-control" required autofocus> 
						</div>
						<p>Price:</p>
						<div class="form-group">
							<input type="text" name="Price" placeholder="Price" class="form-control" required autofocus> 
						</div>
						<p>Category:</p>
						<div class="form-group">
							<input type="text" name="Category" placeholder="Category" class="form-control" required autofocus> 
						</div>
						
					</div>
					<div class="row3">					
						<input type="submit" value="Add" class="btn btn-primary"
						id="form-button">
						<a href="/web/inventory.php" class="btn btn-primary"
						id="form-button">Cancel</a>
					</div>
					</form>
				
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>