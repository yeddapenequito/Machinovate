<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../styles/bootstrap.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="stylesheet" href="../styles/admin.css">
	<title>Machinovate | Add Agents</title>
</head>
<body>
	<?php include 'header_after_login.php';?>
	
	<div class="container">
		
		<h1>Thank you!</h1>
		<p>An event has been added!</p><p><br /></p>
		 <div class="form-group">

                    <div class="col-sm-10">

                        <button class="btn btn-default" id="add-to-cart-btn" type="submit">
                            
                           <a href="order_list.php"> Go Back</a></button>
                    </div>
                </div>
		
	</div> <!-- /.container -->
	<script type="text/javascript" src="../scripts/jquery.min.js"></script>
	<script type="text/javascript" src="../scripts/bootstrap.min.js"></script>
	<script type="text/javascript">
		document.getElementById("order-list").className = "active";
	</script>
</body>
</html>