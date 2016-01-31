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
				margin-top: 250px;
				margin-right: 150px;
				margin-left: 600px;
				margin-bottom: 10px;
			}
			.table-hover{
				margin-top:50px;
				margin-right:auto;
				margin-left:auto;
			}
			th{
				color:#9de2e2;
			}

			.add{
				position:absolute;
				margin-top:-50px;
				margin-right:auto;
				margin-left: auto;

			}
			.report{
				position:absolute;
				margin-top:170px;
				margin-right:auto;
				margin-left:10px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<?php include 'header_4.php';?>
		<div class="container">
			<table class="table table-hover">
			    <thead>
			      <tr>
			        <th>Image</th>
			        <th>Description</th>
			        <th>Quantity</th>
			        <th>Price</th>
			        <th>Category</th>
			        <th>Edit</th>
			        <th>Delete</th>
			      </tr>
			    </thead>
			<tbody>
		      <tr><!--limitation: auto create tables?-->
		        <td>image</td>
		        <td>image</td>
		        <td>12</td>
		        <td>500,000</td>
		        <td>Slitter</td>
		        <td><img src="/web/images/edit.png" style="width:30px; height:30px;"/></td>
		        <td><img src="/web/images/delete.png" style="width:30px; height:30px;"/></td>
		      </tr>
		      <tr>
		        <td>image</td>
		        <td>Moe</td>
		        <td>12</td>
		        <td>500,000</td>
		        <td>Slitter</td>
		        <td><img src="/web/images/edit.png" style="width:30px; height:30px;"/></td>
		        <td><img src="/web/images/delete.png" style="width:30px; height:30px;"/></td>
		      </tr>
		      <tr>
		        <td>image</td>
		        <td>sdf</td>
		        <td>12</td>
		        <td>500,000</td>
		        <td>Slitter</td>
		        <td><img src="/web/images/edit.png" style="width:30px; height:30px;"/></td>
		        <td><img src="/web/images/delete.png" style="width:30px; height:30px;"/></td>
		      </tr>
		    </tbody>
		  </table>
			<div class="row">
				
				<!--position: absolute or fixed?-->
					<form role="form" action="processadd.html" method="post" 
					class="col-xs-offset-1 col-xs-10 col-sm-offset-3 col-sm-6 col-md-offset-4 col-md-4">
					<div class="add">	
						<a href="/web/add_record.php" class="btn btn-primary"
						id="form-button">Add New Record</a>
					</div>
					</form>
				
					<div class="report">	
						<img src="/web/images/report.png" value="Generate Report" style="width:60px; height:60px;"/>
						<p>Generate Report</p>
					</div>
			</div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>