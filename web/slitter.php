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
				margin-top:80px;
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
			.list-group{
				margin-top:-10px;
				margin-right:auto;
				margin-left:850px;
				position:absolute;
			}
			#text{
				text-align:justify;
				position:absolute;
				margin-top:10px;
				margin-right:410px;
				margin-left:30px;
			}
			.list-group-item hr { 
		    display: block;
		    margin-top: 0.5em;
		    margin-bottom: 0.5em;
		    margin-left: auto;
		    margin-right: auto;
		    border-style: inset;
		    border-width: 1px;

} 
		</style>
	</head>
	<body>
		<?php include 'header-bottom.php';?>
		<div id="container-fluid">
			<div id="pagination">
				<ul class="pagination pagination"> 
			    <li><a href="our_machines.php">Machines</a></li>
			    <li><a  style="color:black;">></a></li>
			    <li><a style="color:red;">Slitter</a></li>
			    
			  </ul>
			</div>
		<div id="text">
			<p>
			Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam pharetra eget.
			</p>

		</div>
	      <table class="table table-hover" style="width:60%" border="1">
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
 			<!--	<div class="button">
					
					<a href="./order_slitter.php" class="btn btn-md btn-info btn-block" role="button">Order Slitter</a>
				</div>-->
				<div class="list-group"style="height:500px; width:400px;">
			    <a href="#" class="list-group-item">
			    	<div class="photos"><h3>Photos</h3>
			    	<hr>
			    	<img src="/web/images/slitter_front.png" style="width:110px;height:128px;">
			    	<img src="/web/images/slitter_front.png" style="width:110px;height:128px;">
			    	<img src="/web/images/slitter_front.png" style="width:110px;height:128px;">
			    	</div>
			    </a>
			    <a href="#" class="list-group-item">
			    	<div class="videos"><h3>Videos</h3>
			    	<hr>
			    	<img src="/web/images/slitter_front.png" style="width:110px;height:128px;">
			    	</div>
			    </a>
			    <a href="#" class="list-group-item"><h3>Catalog</h3>
			    <hr></a>
			  </div>
 				
		</div>	
		
		<?php// include 'footer.php';?>
		<script type="text/javascript" src="./scripts/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="./scripts/bootstrap.min.js"></script>
		<script type="text/javascript" src="./scripts/bootstrap.js"></script>
	</body>
</html>