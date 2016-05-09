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
			gsm_min: $_POST[_gsm_min] ,
			gsm_max: $_POST[_gsm_max] ,
			rollDiameter_min: $_POST[_rollDiameter_min] ,
			rollDiameter_max: $_POST[_rollDiameter_max] ,
			rollDiameter_unit: $_POST[_rollDiameter_unit] ,
			slittingWidth_min: $_POST[_slittingWidth_min] ,
			slittingWidth_max: $_POST[_slittingWidth_max] ,
			slittingWidth_unit: $_POST[_slittingWidth_unit] ,
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
			"gsm_min" => $_POST["_gsm_min"] ,
			"gsm_max" => $_POST["_gsm_max"] ,
			"rollDiameter_min" => $_POST["_rollDiameter_min"] ,
			"rollDiameter_max" => $_POST["_rollDiameter_max"] ,
			"rollDiameter_unit" => $_POST["_rollDiameter_unit"] ,
			"slittingWidth_min" => $_POST["_slittingWidth_min"] ,
			"slittingWidth_max" => $_POST["_slittingWidth_max"] ,
			"slittingWidth_unit" => $_POST["_slittingWidth_unit"] ,
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
	}



	if (isset($_GET["sheeter"])) {
		echo "
			sheeterType: $_POST[_sheeterType]
			productionVolume: $_POST[_productionVolume]
			paperType: $_POST[_paperType]
			gsm_min: $_POST[_gsm_min]
			gsm_max: $_POST[_gsm_max]
			rollDiameter_min: $_POST[_rollDiameter_min]
			rollDiameter_max: $_POST[_rollDiameter_max]
			rollDiameter_unit: $_POST[_rollDiameter_unit]

			slittingWidth_min: $_POST[_slittingWidth_min]
			slittingWidth_max: $_POST[_slittingWidth_max]
			slittingWidth_unit: $_POST[_slittingWidth_unit]

			cutOffLength_min: $_POST[_cutOffLength_min]
			cutOffLength_max: $_POST[_cutOffLength_max]
			cutOffLength_unit: $_POST[_cutOffLength_unit]

			cutting_mainDrive: $_POST[_cutting_mainDrive]
			cutting_knife: $_POST[_cutting_knife]
			cutting_sl_attach: $_POST[_cutting_sl_attach]

			urs_hydraulicShaftless: $_POST[_urs_hydraulicShaftless]
			urs_hTypeStand: $_POST[_urs_hTypeStand]
			urs_tensionDecurler: $_POST[_urs_tensionDecurler]
			urs_individualTension: $_POST[_urs_individualTension]
			urs_mechanical: $_POST[_urs_mechanical]
			urs_airHD: $_POST[_urs_airHD]
			urs_others: $_POST[_urs_others]
			urs_rollWeight: $_POST[_urs_rollWeight]

			sys_computerControl: $_POST[_sys_computerControl]
			sys_webGuideHydraulicEPC: $_POST[_sys_webGuideHydraulicEPC]
			sys_others: $_POST[_sys_others]

			sh_Details: $_POST[_sh_Details]
		";

		/*if(isset($_SESSION["cart"])) {//if session cart already exist
			if(isset($_SESSION["cart"]["mach-slitter"])) {//check item exist in cart array
				unset($_SESSION["cart"]["mach-slitter"]); //unset old item
			}			
		}*/
		$_SESSION["cart"]["mach-sheeter"] = array(	//update products with new item array
			//GENERAL
			"sheeterType" => $_POST["_sheeterType"] ,
			"productionVolume" => $_POST["_productionVolume"] ,
			"paperType" => $_POST["_paperType"] ,
			"gsm_min" => $_POST["_gsm_min"] ,
			"gsm_max" => $_POST["_gsm_max"] ,
			"rollDiameter_min" => $_POST["_rollDiameter_min"] ,
			"rollDiameter_max" => $_POST["_rollDiameter_max"] ,
			"rollDiameter_unit" => $_POST["_rollDiameter_unit"] ,
			"slittingWidth_min" => $_POST["_slittingWidth_min"] ,
			"slittingWidth_max" => $_POST["_slittingWidth_max"] ,
			"slittingWidth_unit" => $_POST["_slittingWidth_unit"] ,
			"cutOffLength_min" => $_POST["_cutOffLength_min"] ,
			"cutOffLength_max" => $_POST["_cutOffLength_max"] ,
			"cutOffLength_unit" => $_POST["_cutOffLength_unit"] ,
			//CUTTING
			"cutting_mainDrive" => $_POST["_cutting_mainDrive"] ,
			"cutting_knife" => $_POST["_cutting_knife"] ,
			"cutting_sl_attach" => $_POST["_cutting_sl_attach"] ,
			//URS
			"urs_hydraulicShaftless" => $_POST["_urs_hydraulicShaftless"] ,
			"urs_hTypeStand" => $_POST["_urs_hTypeStand"] ,
			"urs_tensionDecurler" => $_POST["_urs_tensionDecurler"] ,
			"urs_individualTension" => $_POST["_urs_individualTension"] ,
			"urs_mechanical" => $_POST["_urs_mechanical"] ,
			"urs_airHD" => $_POST["_urs_airHD"] ,
			"urs_others" => $_POST["_urs_others"] ,
			"urs_rollWeight" => $_POST["_urs_rollWeight"] ,
			//SYS
			"sys_computerControl" => $_POST["_sys_computerControl"] ,
			"sys_webGuideHydraulicEPC" => $_POST["_sys_webGuideHydraulicEPC"] ,
			"sys_others" => $_POST["_sys_others"] ,
			//DETAILS
			"sh_Details" => $_POST["_sh_Details"]
			);
	}


	if (isset($_GET["cutter"])) {
		echo "
			cutterType: $_POST[_cutterType]
			ct_Details: $_POST[_ct_Details]
		";

		$_SESSION["cart"]["mach-cutter"] = array(	//update products with new item array
			"cutterType" => $_POST["_cutterType"] ,
			"ct_Details" => $_POST["_ct_Details"]
		);
	}

	if (isset($_GET["bailing"])) {
		echo "
			bm_quantity: $_POST[_bm_quantity]
			bm_Details: $_POST[_bm_Details]
		";

		$_SESSION["cart"]["mach-bailing"] = array(	//update products with new item array
			"bm_quantity" => $_POST["_bm_quantity"] ,
			"bm_Details" => $_POST["_bm_Details"]
		);
	}


	if (isset($_GET["rolltruck"])) {
		echo "
			prt_quantity: $_POST[_prt_quantity]
			prt_Details: $_POST[_prt_Details]
		";

		$_SESSION["cart"]["mach-rolltruck"] = array(	//update products with new item array
			"prt_quantity" => $_POST["_prt_quantity"] ,
			"prt_Details" => $_POST["_prt_Details"]
		);
	}

	if (isset($_GET["deleteSlitter"])){
		if(isset($_SESSION["cart"]["mach-slitter"])){
			unset($_SESSION["cart"]["mach-slitter"]);
			echo "suc";
		} else echo "suc";
	}

	if (isset($_GET["deleteSheeter"])){
		if(isset($_SESSION["cart"]["mach-sheeter"])){
			unset($_SESSION["cart"]["mach-sheeter"]);
			echo "suc";
		} else echo "suc";
	}

	if (isset($_GET["deleteCutter"])){
		if(isset($_SESSION["cart"]["mach-cutter"])){
			unset($_SESSION["cart"]["mach-cutter"]);
			echo "suc";
		} else echo "suc";
	}

	if (isset($_GET["deleteBailing"])){
		if(isset($_SESSION["cart"]["mach-bailing"])){
			unset($_SESSION["cart"]["mach-bailing"]);
			echo "suc";
		} else echo "suc";
	}

	if (isset($_GET["deleteRollTruck"])){
		if(isset($_SESSION["cart"]["mach-rolltruck"])){
			unset($_SESSION["cart"]["mach-rolltruck"]);
			echo "suc";
		} else echo "suc";
	}

	if (isset($_GET["shipment"])) {
		echo "
			lastName: $_POST[_lastName],
			firstName: $_POST[_firstName],
			companyName: $_POST[_companyName],
			address: $_POST[_address],
			contactDetails: $_POST[_contactDetails],
			email: $_POST[_email],
			ship_delivBasis: $_POST[_ship_delivBasis],
			ship_Date: $_POST[_ship_Date],
			ship_DatepaymentTerms: $_POST[_ship_paymentTerms]
		";

		$q = "INSERT INTO clients (firstName, lastName, companyName, address, contactNo, email) VALUES ('$_POST[_firstName]', '$_POST[_lastName]', '$_POST[_companyName]', '$_POST[_address]', '$_POST[_contactDetails]', '$_POST[_email]');";	
		$r = mysqli_query($dbc, $q);

			if (isset($_SESSION['cart']['mach-slitter'])) {

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

				$slitterSpecs = array(
					"\"". $_SESSION["cart"]["mach-slitter"]["slitterType"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["productionVolume"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["paperType"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["gsm_min"]. "-" .$_SESSION["cart"]["mach-slitter"]["gsm_max"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["rollDiameter_min"]. "-" .$_SESSION["cart"]["mach-slitter"]["rollDiameter_max"].$_SESSION["cart"]["mach-slitter"]["rollDiameter_unit"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["slittingWidth_min"]. "-" .$_SESSION["cart"]["mach-slitter"]["slittingWidth_max"].$_SESSION["cart"]["mach-slitter"]["slittingWidth_unit"] ."\"" ,

					"\"". $_SESSION["cart"]["mach-slitter"]["addtlBlade"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["coreCutterMachine"] ."\"" ,

					"\"". $_SESSION["cart"]["mach-slitter"]["rs_HydraulicShaftless"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["rs_Single"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["rs_Customized"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["rs_ShaftStand"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["rs_Others"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["tonCapacity"] ."\"" ,

					"\"". $_SESSION["cart"]["mach-slitter"]["sys_WebGuideHydraulicEPC"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["sys_Tension"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["sys_BananaRoll_TensionRoller"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["sys_BrakeSystem"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["sys_FullyComputerized"] ."\"" ,
					"\"". $_SESSION["cart"]["mach-slitter"]["sys_Others"] ."\"" ,
					
					"\"". $_SESSION["cart"]["mach-slitter"]["sl_Details"] ."\"" );


				$c = implode(", ", $slitterAttribs);
				$v = implode(", ", $slitterSpecs);
				echo $v;
				$q = "INSERT INTO cmsr_slitter ($c) VALUES ($v);";
				$r = mysqli_query($dbc, $q);
				echo "OK".mysqli_affected_rows($dbc);
				$n = "INSERT INTO orders (client_id, date, deliveryBasis, shipmentDate, paymentTerms, orderStatus) VALUES ((SELECT MAX(client_id) FROM clients), CURDATE(), 'asdf', CURDATE(), 'asdf', 'PENDING');";
				echo "OK".mysqli_affected_rows($dbc);
				$o = "INSERT INTO orderlist (machineType, order_id, cmsr_slitter_id) VALUES ('SLITTER', (SELECT MAX(order_id) FROM orders), (SELECT MAX(cmsr_slitter_id) FROM cmsr_slitter));";
				echo "OK".mysqli_affected_rows($dbc);
			}
			
			if (isset($_SESSION['cart']['mach-sheeter'])) {
				$_SESSION["cart"]["mach-sheeter"] = array(	//update products with new item array
					//GENERAL
					"sheeterType" => $_POST["_sheeterType"] ,
					"productionVolume" => $_POST["_productionVolume"] ,
					"paperType" => $_POST["_paperType"] ,
					"gsm_min" => $_POST["_gsm_min"] ,
					"gsm_max" => $_POST["_gsm_max"] ,
					"rollDiameter_min" => $_POST["_rollDiameter_min"] ,
					"rollDiameter_max" => $_POST["_rollDiameter_max"] ,
					"rollDiameter_unit" => $_POST["_rollDiameter_unit"] ,
					"slittingWidth_min" => $_POST["_slittingWidth_min"] ,
					"slittingWidth_max" => $_POST["_slittingWidth_max"] ,
					"slittingWidth_unit" => $_POST["_slittingWidth_unit"] ,
					"cutOffLength_min" => $_POST["_cutOffLength_min"] ,
					"cutOffLength_max" => $_POST["_cutOffLength_max"] ,
					"cutOffLength_unit" => $_POST["_cutOffLength_unit"] ,
					//CUTTING
					"cutting_mainDrive" => $_POST["_cutting_mainDrive"] ,
					"cutting_knife" => $_POST["_cutting_knife"] ,
					"cutting_sl_attach" => $_POST["_cutting_sl_attach"] ,
					//URS
					"urs_hydraulicShaftless" => $_POST["_urs_hydraulicShaftless"] ,
					"urs_hTypeStand" => $_POST["_urs_hTypeStand"] ,
					"urs_tensionDecurler" => $_POST["_urs_tensionDecurler"] ,
					"urs_individualTension" => $_POST["_urs_individualTension"] ,
					"urs_mechanical" => $_POST["_urs_mechanical"] ,
					"urs_airHD" => $_POST["_urs_airHD"] ,
					"urs_others" => $_POST["_urs_others"] ,
					"urs_rollWeight" => $_POST["_urs_rollWeight"] ,
					//SYS
					"sys_computerControl" => $_POST["_sys_computerControl"] ,
					"sys_webGuideHydraulicEPC" => $_POST["_sys_webGuideHydraulicEPC"] ,
					"sys_others" => $_POST["_sys_others"] ,
					//DETAILS
					"sh_Details" => $_POST["_sh_Details"]
					);


			}
			

			if (isset($_SESSION['cart']['mach-cutter'])) {
				$v = array($_SESSION["cart"]["mach-cutter"]["cutterType"] , $_SESSION["cart"]["mach-cutter"]["ct_Details"]);
				$v = arrayToCSV($_SESSION["cart"]["mach-cutter"]);
				$m = "INSERT INTO cmsr_cutter (CT_Type, CT_Details) VALUES ($v);";
				$n = "INSERT INTO orders (client_id, date, deliveryBasis, shipmentDate, paymentTerms, orderStatus) VALUES ((SELECT MAX(client_id) FROM clients), CURDATE(), 'asdf', CURDATE(), 'asdf', 'PENDING');";
				$o = "INSERT INTO orderlist (machineType, order_id, cmsr_cutter_id) VALUES ('CUTTER', (SELECT MAX(order_id) FROM orders), (SELECT MAX(cmsr_cutter_id) FROM cmsr_cutter));";	
				$a = mysqli_query($dbc, $m);
				echo "OK".mysqli_affected_rows($dbc); 
				$b = mysqli_query($dbc, $n);
				echo "OK".mysqli_affected_rows($dbc); 
				$c = mysqli_query($dbc, $o);
				echo "OK".mysqli_affected_rows($dbc); 
			}

			if (isset($_SESSION['cart']['mach-bailing'])) {
				$v = array($_SESSION["cart"]["mach-bailing"]["bm_quantity"] , $_SESSION["cart"]["mach-bailing"]["bm_Details"]);
				$v = arrayToCSV($_SESSION["cart"]["mach-bailing"]);
				$m = "INSERT INTO cmsr_cutter (BM_Quantity, BM_Details) VALUES ($v);";
				$n = "INSERT INTO orders (client_id, date, deliveryBasis, shipmentDate, paymentTerms, orderStatus) VALUES ((SELECT MAX(client_id) FROM clients), CURDATE(), 'sdfdff', CURDATE(), 'fddfdg', 'PENDING');";
				$o = "INSERT INTO orderlist (machineType, order_id, misc_bailMach_id) VALUES ('Bailing Machine', (SELECT MAX(order_id) FROM orders), (SELECT MAX(misc_bailMach_id) FROM misc_bailMach));";
				$a = mysqli_query($dbc, $m);
				echo "OK".mysqli_affected_rows($dbc);
				$b = mysqli_query($dbc, $n);
				echo "OK".mysqli_affected_rows($dbc);
				$c = mysqli_query($dbc, $o);
				echo "OK".mysqli_affected_rows($dbc);
			}

			if (isset($_SESSION['cart']['mach-rolltruck'])) {
				$v = array($_SESSION["cart"]["mach-rolltruck"]["prt_quantity"] , $_SESSION["cart"]["mach-rolltruck"]["prt_Details"]);
				$v = arrayToCSV($_SESSION["cart"]["mach-rolltruck"]);
				$m = "INSERT INTO misc_rollTruck (PRT_Quantity, PRT_Details) VALUES ($v);";
				$n = "INSERT INTO orders (client_id, date, deliveryBasis, shipmentDate, paymentTerms, orderStatus) VALUES ((SELECT MAX(client_id) FROM clients), CURDATE(), 'sdfdff', CURDATE(), 'fddfdg', 'PENDING');";
				$o = "INSERT INTO orderlist (machineType, order_id,  misc_rollTruck_id) VALUES ('Paper Roll Truck', (SELECT MAX(order_id) FROM orders), (SELECT MAX(misc_rollTruck_id) FROM misc_rollTruck));";
				$a = mysqli_query($dbc, $m);
				echo "OK".mysqli_affected_rows($dbc);
				$b = mysqli_query($dbc, $n);
				echo "OK".mysqli_affected_rows($dbc);
				$c = mysqli_query($dbc, $o);
				echo "OK".mysqli_affected_rows($dbc);
			}

	}
			

?>