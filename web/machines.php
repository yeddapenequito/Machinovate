<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/web/styles/bootstrap.min.css">
		<link rel="stylesheet" href="/web/styles/main.css">
		<title>Machinovate | Products</title>
		<style>
			.footer{
				margin-bottom:50px;
				background: none;

			}
			.btn-primary{
				margin-top:0%;
				margin-left:auto;
				margin-right:0%;
			}
			#images #image_1{
				margin-top:-2%;
				margin-left:250px;
				margin-right:0px;
				position: absolute;
				
			}
			#images #image_2{
				margin-top:-2%;
				margin-left:575px;
				margin-right:auto;
				position: absolute;
				display: inline-block;
			}
			#images #image_3{
				margin-top:18%;
				margin-left:23%;
				margin-right: auto;
				position: absolute;
				display: inline-block;
			}
			#images #image_4{
				margin-top:18%;
				margin-left:56%;
				margin-right: auto;
				position: absolute;
				display: inline-block;
			}
			
			.btn-info{
				margin-top:35%;
				margin-left:-26%;
				margin-right:auto;
				position: absolute;
				display: inline-block;
				background-color: #132C55;
				border-radius: 0;

			}
			.btn-default{
				margin-top:-2%;
				margin-left:45%;
				margin-right:auto;
				position: absolute;
				display: inline-block;
				background-color: #132C55;
				border-radius: 0;
				font-color:white;
			}
		</style>
	</head>
	<body>
		<?php include 'header-bottom.php';?>
		<div class="container-fluid">
			<div id="images">
                <div>
	                <!-- Sliiter-->
			        <div class="row" class="col-sm-3 col-md-6">
						<div id="image_1"class="col-sm-3 col-md-6">
						<img src="/web/images/slitter_front.png" style="width:310px;height:228px;">
						  <a href="/web/slitter.php" class="btn btn-info" role="button">Slitter</a>
		    			</div>
		    		</div>
	                <!-- Sheeter -->
			         <div class="row" class="col-sm-9 col-md-6">
		    			<div id="image_2" class="col-sm-9 col-md-6">
						<img src="/web/images/sheeter-servo.png" style="width:304px;height:228px;">
						<a href="/web/sheeter.php" class="btn btn-info" role="button">Sheeter</a>
		    			</div>
		    		</div>	
		    		<!-- Cutter -->
		    		<div class="row" class="col-sm-3 col-md-6" >
						<div id="image_3"class="col-sm-3 col-md-6" >
						<img src="/web/images/cutter.png" style="width:304px;height:228px;">
						<a href="/web/cutter.php" class="btn btn-info" role="button">Cutter</a>
		    			</div>
    			
		    		</div>
	                <!-- Other Products -->
			         <div class="row" class="col-sm-9 col-md-6">
		    			<div id="image_4" class="col-sm-9 col-md-6">
						<img src="/web/images/other.png" style="width:120px;height:178px;">
						<a href="/web/other.php" class="btn btn-info" role="button">Other Products</a>
		    			</div>
		    		</div>	
	                
                </div>

		</div>

		  <footer class="footer">
		  	<p class="text-muted">*Our machines can be customized, but prices may differ. For details call +632 404 6676</p>
		  </footer>

		</div>
		
		<?php include 'footer.php';?>

		<script type="text/javascript" src="/web/scripts/jquery-2.2.0.min.js"></script>
		<script type="text/javascript" src="/web/scripts/bootstrap.min.js"></script>
		<script>
			$(".after-login").remove();
		</script>
	</body>
</html>