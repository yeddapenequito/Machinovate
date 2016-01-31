<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./styles/bootstrap.min.css">
		<link rel="stylesheet" href="./styles/main.css">
		<title></title>
		<style>
			
			.table-hover{
				position:absolute;
				margin-top:40px;
				margin-right:auto;
				margin-left:30px;
			}
			th{
				color:blue;
				text-align:left;
			}
			.row h4{
				text-align: justify;
				margin-left:500px;
			}

			.button{
				margin-top: 10px;
				margin-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<?php include 'header.php';?>
		<div id="container-fluid">
			
		
	      <table class="table table-hover" style="width:90%" border="1">
			    <thead>
			      <tr>
			        <th>MODEL</th>
			        <th>MSR 70</th>
			        <th>MSR 90</th>
			        <th>MSR 110</th>
			        <th>MSR 130</th>
			        
			      </tr>
			    </thead>
			<tbody>
		      <tr><!--limitation: auto create tables?-->
		     		<td>Max. Unwind  Reel Width </td>
		     		<td>1780 mm </td>
					<td>2280 mm </td>
					<td>2800 mm </td>
					<td>3300 mm</td>
		     	</tr>
	         <tr>   <td>Designed Speed</td>
	         		<td>600 M/Min</td>
	         		<td>600 M/Min</td>
	         		<td>800 M/Min</td>
	         		<td>800 M/Min</td>
	         		 
	         </tr>
			 <tr>	<td>Maximum Unwinding Diamter</td>
			 		<td>1800 mm</td>
			 		<td>1800 mm</td>
			 		<td>1800 mm</td>
			 		<td>1800 mm</td>


			 </tr>
			 <tr>	<td>Maximum Rewinding Diameter</td>
			 		<td>1500 mm</td>
			 		<td>1500 mm</td>
			 		<td>1500 mm</td>
			 		<td>1500 mm</td>


			 </tr>
			 <tr>	<td>Core Diameter of Rewinding Reel</td>
			 		<td>76.20-305 mm</td>
			 		<td>76.20-305 mm</td>
			 		<td>76.20-305 mm</td>
			 		<td>76.20-305 mm</td>

			 </tr>
			 <tr>	<td></td>
			 		<td>( 3" - 12" )</td>
			 		<td>( 3" - 12" )</td>
			 		<td>( 3" - 12" )</td>
			 		<td>( 3" - 12" )</td>
			 </tr>
			 <tr>	<td>Core Diameter of Unwinding Reel</td>
			 		<td>76.20-305 mm</td>
			 		<td>76.20-305 mm</td>
			 		<td>76.20-305 mm</td>
			 		<td>76.20-305 mm</td>
			 </tr>
			 <tr>	<td></td>
			 		<td>( 3" - 12" )</td>
			 		<td>( 3" - 12" )</td>
			 		<td>( 3" - 12" )</td>
			 		<td>( 3" - 12" )</td>
			 </tr>
			 <tr>	<td>Total Power Requirement</td>
			 		<td>220/380/440 Volts</td>
			 		<td>220/380/440 Volts</td>
			 		<td>220/380/440 Volts</td>
			 		<td>220/380/440 Volts</td>
			 </tr>
			 <tr>	<td></td>
			 		<td>( 25 kW)</td>
			 		<td>( 29 kW)</td>
			 		<td>( 33 kW)</td>
			 		<td>( 33 kW)</td>
			 </tr>
			 <tr>	<td>Machine Dimension</td> 
			 		<td>7.7 MX  4M  X 3.25M</td>
			 		<td>7.7 MX  4M  X 3.25M</td>
			 		<td>7.7 MX  5.5 X 3.25M</td>
			 		<td>7.7 MX  6M  X 3.25M</td>
			 </tr>
		    </tbody>
		  </table>
                            <!--df-->
 				<div class="button">
					
					<a href="/web/order_slitter.php" class="btn btn-md btn-info btn-block" role="button">Order Slitter</a>
				</div>

 				
		</div>	
		
		<?php include 'footer.php';?>
		<script type="text/javascript" src="./scripts/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="./scripts/bootstrap.js"></script>
	</body>
</html>