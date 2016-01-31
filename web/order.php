<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="/web/styles/bootstrap.min.css">
		<link rel="stylesheet" href="/web/styles/main.css">
		<title></title>
		<style>
			.nav-tabs {
			margin-left:300px;
			margin-right: 100px;
			margin-top:100px;
			position: fixed;
			}
			.list-inline{
			margin-left:auto;
			margin-right:100px;
			margin-top:150px;
			
			}
			.table-hover{
				position: fixed;
				margin-top:80px;
				margin-right:auto;
				margin-left:40px;
			}
			th{
				color:blue;

			}
			.nav-pills{
				position: fixed;
				margin-top:40px;
			}

		</style>
	</head>
	<body>
		<?php include 'header_4.php';?>
		<div id="container-fluid">
		 <ul class="nav nav-pills nav-justified" id="all">
		    <li class="active"><a href="#">All</a></li>
		    <li><a href="#">Pending</a></li>
		    <li><a href="#">Cancelled</a></li>
		    <li><a href="#">Confirmed</a></li>
		     <li><a href="#">Completed</a></li>
		  </ul>
		<div id="menu1" class="tab-pane fade in active">
	      <table class="table table-hover" style="width:90%">
			    <thead>
			      <tr>
			        <th>No</th>
			        <th>Date</th>
			        <th>Customer Name</th>
			        <th>Customer Email</th>
			        <th>Customer Cell.No</th>
			        <th>Shipping Address</th>
			        <th>Item Name</th>
			        <th>Qty.</th>
			        <th>Price</th>
			        <th>Status</th>
			      </tr>
			    </thead>
			<tbody>
		      <tr><!--limitation: auto create tables?-->
		        <td>1</td>
		        <td>12/12/12</td>
		        <td>Penequito</td>
		        <td>500,000</td>
		        <td>example@yahoo.com</td>
		        <td>020202202</td>
		        <td>Antipolo</td>
		        <td>12</td>
		        <td>500,000</td>
		        <td>Pending</td>
		      </tr>
		    </tbody>
		  </table>
	    </div>
	    
		
		</div>	
		
		<?php include 'footer.php';?>
		<script type="text/javascript" src="/web/scripts/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="/web/scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="/web/scripts/bootstrap.js"></script>
	</body>
</html>