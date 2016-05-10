<!DOCTYPE html>
			<html>
			<head>
				<title></title>
			</head>
			<body>
			<div class='container'>

			<center>
			<p style='text-align:left;'><img src='C:\xampp\htdocs\Machinovate\web\images\mach-summary.png'
					height = '200' width = '880' padding='0' align='left'></p>
						<i><b><font size='5'>SUMMARY OF ORDERS</font></b></i>

						<table class='table table-striped table-bordered' border='1 style=
					'width:100%''>
					    	<thead>
					    		<tr>
					    			<th>Order No.</th>
					    			<th>Machine Type</th>
					    			<th>Company Name</th>
					    			<th>Date Ordered</th>
					    			<th>Order Status</th>
					    		</tr>
					    	</thead>
					    	<tbody>"
					    		<?php
						    		require ("../../mysqli_connect.php");

				 					$orderStatus =  $_SESSION['os'];
									$machineType =  $_SESSION['mt'];
									$orderDate =  $_SESSION['od'];
									$shipmentDate =  $_SESSION['sd'];

						    		// Default query for this page:
									$a = "SELECT DISTINCT orderlist.order_id, orderlist.machineType , clients.companyName, orders.date , orders.orderStatus 
										FROM orders, orderlist, clients, cmsr_slitter, cmsr_sheeter, cmsr_cutter, misc_bailmach, misc_rolltruck
									    WHERE 
									    orders.order_id = orderlist.order_id AND 
									    clients.client_id = orders.client_id AND     
											(cmsr_cutter.cmsr_cutter_id = orderlist.cmsr_cutter_id OR 
									        cmsr_slitter.cmsr_slitter_id = orderlist.cmsr_slitter_id OR 
											cmsr_sheeter.cmsr_sheeter_id = orderlist.cmsr_sheeter_id OR 
											misc_bailmach.misc_bailMach_id = orderlist.misc_bailMach_id OR 
									        misc_rolltruck.misc_rollTruck_id = orderlist.misc_rollTruck_id ) AND (
										orders.orderStatus = '$orderStatus' AND
										orderlist.machineType = '$machineType' AND
	                                    (YEAR(orders.date) = YEAR('$orderDate') AND MONTH (orders.date) = MONTH('$orderDate')) AND
	                                    (YEAR(orders.shipmentDate) = YEAR('$shipmentDate') AND MONTH (orders.shipmentDate) = MONTH('$shipmentDate'))
										)

										ORDER BY orderlist.order_id ASC;";

									// Display all the prints, linked to URLs:
									$r = mysqli_query ($dbc, $a);
									$t=time();
										//echo($t . "<br>");
										date_default_timezone_set("Asia/Manila");
										echo "Downloaded on: " . date("m-d-y") . " " . date("h:i:sa");
									while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

										// Display each record:
										echo "\t<tr>
											<td align=\'center\'>{$row['order_id']}</a></td>
											<td align=\'left\'>{$row['machineType']}</a></td>
											<td align=\'left\'>{$row['companyName']}</td>
											<td align=\'left\'>{$row['date']}</td>
											<td align=\'left\'>{$row['orderStatus']}</td>";
									} // End of while loop.
									$b = "SELECT order_id FROM orderlist WHERE order_id = (SELECT MAX(order_id) FROM orderlist)";
									$s = mysqli_query ($dbc, $b);
									
									while ($row = mysqli_fetch_array ($s, MYSQLI_ASSOC)) {	

										// Display each record:
										echo "\t<tr><td align=\'center\'> Total Number of Orders: <b> {$row['order_id']}</b></tr> </td>";
									} // End of while loop.
									echo "</table>";
									mysqli_close($dbc);
								
								?>
					    	</tbody>
					    </table>
					</center>
				</div>


			</body>
			</html>