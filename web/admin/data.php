<center><h2>MACHINOVATE INTERNATIONAL INC. </h2>
	<p><i> Summary of Orders </i> </p>


			<table class="table table-striped table-bordered">
		    	<thead>
		    		<tr>
		    			<th>Order No.</th>
		    			<th>Machine Type</th>
		    			<th>Company Name</th>
		    			<th>Date Ordered</th>
		    			<th>Order Status</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		<?php
		    		require ('../../mysqli_connect.php');
 

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
					        misc_rolltruck.misc_rollTruck_id = orderlist.misc_rollTruck_id )
						ORDER BY orderlist.order_id ASC;";

					// Display all the prints, linked to URLs:
					$r = mysqli_query ($dbc, $a);
					while ($row = mysqli_fetch_array ($r, MYSQLI_ASSOC)) {

						// Display each record:
						echo "\t<tr>
							<td align=\"left\">{$row['order_id']}</a></td>
							<td align=\"left\">{$row['machineType']}</a></td>
							<td align=\"left\">{$row['companyName']}</td>
							<td align=\"left\">{$row['date']}</td>
							<td align=\"left\">{$row['orderStatus']}</td>";
					} // End of while loop.

					echo '</table>';
					mysqli_close($dbc);
				
				?>
		    	</tbody>
		    </table>
</center>