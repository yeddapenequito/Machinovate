<?php
	session_start();
	require "../mysqli_connect.php";


	function arrayToCSV($array) {
		$csv = array();
		foreach ($array as $elemt){
			array_push($csv, "'".$elemt."'");
		}
		return implode(", ", $csv);
	}

	if (isset($_GET["slitter"])) {
		echo "
			GENERAL
			slitterType: $_POST[_slitterType]
			productionVolume: $_POST[_productionVolume]
			paperType: $_POST[_paperType]
			gsm: $_POST[_gsm]
			rollDiameter: $_POST[_rollDiameter]
			slittingWidth: $_POST[_slittingWidth]
			CUTTING
			addtlBlade: $_POST[_addtlBlade]
			coreCutterMachine: $_POST[_coreCutterMachine]
			URS
			rs_HydraulicShaftless: $_POST[_rs_HydraulicShaftless]
			rs_Single: $_POST[_rs_Single]
			rs_Customized: $_POST[_rs_Customized]
			rs_ShaftStand: $_POST[_rs_ShaftStand]
			rs_Others: $_POST[_rs_Others]
			tonCapacity: $_POST[_tonCapacity]
			SYS
			sys_WebGuideHydraulicEPC: $_POST[_sys_WebGuideHydraulicEPC]
			sys_Tension: $_POST[_sys_Tension]
			sys_BananaRoll_TensionRoller: $_POST[_sys_BananaRoll_TensionRoller]
			sys_BrakeSystem: $_POST[_sys_BrakeSystem]
			sys_FullyComputerized: $_POST[_sys_FullyComputerized]
			sys_Others: $_POST[_sys_Others]
			DETAILS
			sl_Details: $_POST[_sl_Details]
		";

		/*if(isset($_SESSION["cart"])) {//if session cart already exist
			if(isset($_SESSION["cart"]["mach-slitter"])) {//check item exist in cart array
				unset($_SESSION["cart"]["mach-slitter"]); //unset old item
			}			
		}*/
		$_SESSION["cart"]["mach-slitter"] = array(	//update products with new item array
			//GENERAL
			"slitterType" => $_POST["_slitterType"] ,
			"productionVolume" => $_POST["_productionVolume"] ,
			"paperType" => $_POST["_paperType"] ,
			"gsm" => $_POST["_gsm"] ,
			"rollDiameter" => $_POST["_rollDiameter"] ,
			"slittingWidth" => $_POST["_slittingWidth"] ,
			//CUTTING
			"addtlBlade" => $_POST["_addtlBlade"] ,
			"coreCutterMachine" => $_POST["_coreCutterMachine"] ,
			//"URS
			"rs_HydraulicShaftless" => $_POST["_rs_HydraulicShaftless"] ,
			"rs_Single" => $_POST["_rs_Single"] ,
			"rs_Customized" => $_POST["_rs_Customized"] ,
			"rs_ShaftStand" => $_POST["_rs_ShaftStand"] ,
			"rs_Others" => $_POST["_rs_Others"] ,
			"tonCapacity" => $_POST["_tonCapacity"] ,
			//SYS
			"sys_WebGuideHydraulicEPC" => $_POST["_sys_WebGuideHydraulicEPC"] ,
			"sys_Tension" => $_POST["_sys_Tension"] ,
			"sys_BananaRoll_TensionRoller" => $_POST["_sys_BananaRoll_TensionRoller"] ,
			"sys_BrakeSystem" => $_POST["_sys_BrakeSystem"] ,
			"sys_FullyComputerized" => $_POST["_sys_FullyComputerized"] ,
			"sys_Others" => $_POST["_sys_Others"] ,
			//DETAILS
			"sl_Details" => $_POST["_sl_Details"]
			);
		
		
		$slitterAttribs = array(
					"SL_Type",
					"SL_ProductionVolume",
					"SL_PaperType",
					"SL_GSM",
					"SL_RollDiameter",
					"SL_SlittingWidth",
					
					"Cutting_AddtlBlade",
					"Cutting_CoreCutterMachine",

					"URS_HydraulicShaftless",
					"URS_Single",
					"URS_Customized",
					"URS_ShaftStand",
					"URS_Others",
					"URS_TonCapacity",

					"Sys_WebGuideHydraulicEPC",
					"Sys_Tension",
					"Sys_BananaRoll_TensionRoller",
					"Sys_BrakeSystem",
					"Sys_FullyComputerized",
					"Sys_Others",

					"SL_Details");


		$c = implode(", ", $slitterAttribs);
		//echo $c;
		$v = arrayToCSV($_SESSION["cart"]["mach-slitter"]);//arrayToCSV($_SESSION["cart"]["mach-slitter"]);//
		echo $v;
		$q = "INSERT INTO cmsr_slitter ($c) VALUES ($v);";
		//$q = 'INSERT INTO cmsr_slitter (SL_Type, SL_ProductionVolume, SL_PaperType, SL_GSM, SL_RollDiameter, SL_SlittingWidth, Cutting_AddtlBlade, Cutting_CoreCutterMachine, URS_HydraulicShaftless, URS_Single, URS_Customized, URS_ShaftStand, URS_Others, URS_TonCapacity, Sys_WebGuideHydraulicEPC, Sys_Tension, Sys_BananaRoll_TensionRoller, Sys_BrakeSystem, Sys_FullyComputerized, Sys_Others, SL_Details) VALUES("SL_HeavyDuty", "12", "carbonless", "110 - 220", "1.97" - 3.94"", "5.00mm - 10.00mm", "123", "1", "1", "1", "1", "1", "123", "0.021", "1", "1", "1", "1", "1", "123", "asdf")';

		// Turn autocommit off:
		//mysqli_autocommit($dbc, FALSE);

		// Add the order to the orders table...
		//$q = "INSERT INTO cmsr_slitter (" . implode("," $slitterAttribs) . ") VALUES (" . arrayToCSV($_SESSION["cart"]["mach-slitter"]) . ")";
		$r = mysqli_query($dbc, $q);
		if (mysqli_affected_rows($dbc) == 1)
			echo "yes";
			else
				echo "no";
		/*if (mysqli_affected_rows($dbc) == 1) {

			// Need the order ID:
			$oid = mysqli_insert_id($dbc);
			
			// Insert the specific order contents into the database...
			
			// Prepare the query:
			$q = "INSERT INTO order_contents (order_id, print_id, quantity, price) VALUES (?, ?, ?, ?)";
			$stmt = mysqli_prepare($dbc, $q);
			mysqli_stmt_bind_param($stmt, 'iiid', $oid, $pid, $qty, $price);
			
			// Execute each query; count the total affected:
			$affected = 0;
			foreach ($_SESSION['cart'] as $pid => $item) {
				$qty = $item['quantity'];
				$price = $item['price'];
				mysqli_stmt_execute($stmt);
				$affected += mysqli_stmt_affected_rows($stmt);
			}

			// Close this prepared statement:
			mysqli_stmt_close($stmt);

			// Report on the success....
			if ($affected == count($_SESSION['cart'])) { // Whohoo!
			
				// Commit the transaction:
				mysqli_commit($dbc);
				
				// Clear the cart:
				unset($_SESSION["cart"]);
				
				// Message to the customer:
				echo '<p>Thank you for your order. You will be notified when the items ship.</p>';
				
				// Send emails and do whatever else.
			
			} else { // Rollback and report the problem.
			
				mysqli_rollback($dbc);
				
				echo '<p>Your order could not be processed due to a system error. You will be contacted in order to have the problem fixed. We apologize for the inconvenience.</p>';
				// Send the order information to the administrator.
				
			}

		} else { // Rollback and report the problem.

			mysqli_rollback($dbc);

			echo '<p>Your order could not be processed due to a system error. You will be contacted in order to have the problem fixed. We apologize for the inconvenience.</p>';
			
			// Send the order information to the administrator.
			
		}

		mysqli_close($dbc); */

	}

	if(isset($_GET["deleteSlitter"])){
		if(isset($_SESSION["cart"]["mach-slitter"])){
			unset($_SESSION["cart"]["mach-slitter"]);
			echo "suc";
		} else echo "suc";
	}


?>