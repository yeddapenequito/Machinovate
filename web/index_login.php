<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/web/styles/bootstrap.min.css">
		<link rel="stylesheet" href="/web/styles/main.css">
		<title></title>
		<style>
			.rightt{
			position:absolute;
			margin-top:40px;
			margin-left:500px;
			}
			.box
			{
			width: 400px;
			height:430px;
			padding: 25px;
			border: 0.2em solid;
			margin: 35px;
			
			}
			.box{
			position:absolute;
			margin-top:60px;
			margin-left:-50px;
			margin-bottom:10px;
			margin-top:60px;
			}
			.right_buttons{
			position:absolute;
			margin-top:400px;
			margin-left:500px;
			}
		</style>
	</head>
	<body>
		<?php include 'header_3.php';?>
		<div class="container">
			<div class="rightt">
				<h1><b>Announcements</b></h1>
				<p>Place announcements here </p>
			</div>
			<div class="box_style">
				<div class="box">
					<img src="/images/6eb6aa8a-e84d-4be2-9bc1-9e240e428e58.png" style="width:100px; height:100px;"/><p style="display:inline-block; margin-left:20px;"><b>Username</b>  <b>admin</b></p>
					<p><b>Name: </b></p> <p style="display:inline-block; margin-left:20px;">LASTNAME, Firstname M.I</p>
					<p><b>Address: </b></p> <p style="display:inline-block; margin-left:20px;">Street, Barangay, City, Province</p>
					<p><b>Telephone Number: </b></p> <p style="display:inline-block; margin-left:20px;">+000 0000 0000</p>
					<p><b>Email Address: </b></p> <p style="display:inline-block; margin-left:20px;">somename@somename.com</p>
					<p><b>Date of Birth: </b></p> <p style="display:inline-block; margin-left:20px;">somename@somename.com</p>
				</div><!--details are not yet final-->
			</div>
			
			<div class="right_buttons">
				<div class="button1" style=" margin-left:50px;"> 
					<a  href="/web/inventory.php" class="btn btn-primary" id="form-button">
						Continue to Inventory</a>
				</div>
				<div class="button3"style=" margin-left:240px; margin-top:-20px;">
					<a>or</a>
				</div>
				<div class="button2" style=" margin-left:290px;margin-top:-34px;">
					<a href="#"  class="btn btn-primary" id="form-button">
					See List of Orders</a>
				</div>
				
			</div>
			
		</div>
		
		
		
		
		
		
		
		<?php include 'footer.php';?>
		<script type="text/javascript" src="/scripts/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="/scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="/scripts/bootstrap.js"></script>
	</body>
</html>