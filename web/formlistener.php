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
		$v = arrayToCSV($_SESSION["cart"]["mach-slitter"]);
		echo $v;
		$q = "INSERT INTO cmsr_slitter ($c) VALUES ($v);";
		$r = mysqli_query($dbc, $q);
		if (mysqli_affected_rows($dbc) == 1)
			echo "yes";
			else
				echo "no";
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
		
		
		/*$slitterAttribs = array(
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
		$v = arrayToCSV($_SESSION["cart"]["mach-slitter"]);
		echo $v;
		$q = "INSERT INTO cmsr_slitter ($c) VALUES ($v);";
		$r = mysqli_query($dbc, $q);
		if (mysqli_affected_rows($dbc) == 1)
			echo "yes";
			else
				echo "no";*/
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
			ship_paymentTerms: $_POST[_ship_paymentTerms]
		";
	}


?>