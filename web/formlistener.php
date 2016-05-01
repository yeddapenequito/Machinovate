<?php
	session_start();

	if (isset($_GET["slitter"])) {
		echo "
			GENERAL
			$_POST[_slitterType]
			$_POST[_productionVolume]
			$_POST[_paperType]
			$_POST[_gsm]
			$_POST[_rollDiameter]
			$_POST[_slittingWidth]
			CUTTING
			$_POST[_addtlBlade]
			$_POST[_coreCutterMachine]
			URS
			$_POST[_rs_HydraulicShaftless]
			$_POST[_rs_Single]
			$_POST[_rs_Customized]
			$_POST[_rs_ShaftStand]
			$_POST[_rs_Others]
			$_POST[_tonCapacity]
			SYS
			$_POST[_sys_WebGuideHydraulicEPC]
			$_POST[_sys_Tension]
			$_POST[_sys_BananaRoll_TensionRoller]
			$_POST[_sys_BrakeSystem]
			$_POST[_sys_FullyComputerized]
			$_POST[_sys_Others]
			DETAILS
			$_POST[_sl_Details]
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
		echo $_SESSION["cart"]["mach-slitter"]["slitterType"];
	}

	/*if (isset($_GET["sheeter"])) {
		echo "
			GENERAL
			$_POST[_slitterType]
			$_POST[_productionVolume]
			$_POST[_paperType]
			$_POST[_gsm]
			$_POST[_rollDiameter]
			$_POST[_slittingWidth]
			CUTTING
			test$_POST[_addtlBlade]
			test$_POST[_coreCutterMachine]
			URS
			$_POST[_rs_HydraulicShaftless]
			$_POST[_rs_Single]
			$_POST[_rs_Customized]
			$_POST[_rs_ShaftStand]
			test$_POST[_rs_Others]
			$_POST[_tonCapacity]
			SYS
			$_POST[_sys_WebGuideHydraulicEPC]
			$_POST[_sys_Tension]
			$_POST[_sys_BananaRoll_TensionRoller]
			$_POST[_sys_BrakeSystem]
			$_POST[_sys_FullyComputerized]
			test$_POST[_sys_Others]
			DETAILS
			$_POST[_sl_Details]
		";

		if(isset($_SESSION["cart"])) {//if session cart already exist
			if(isset($_SESSION["cart"]["mach-slitter"])) {//check item exist in cart array
				unset($_SESSION["cart"]["mach-slitter"]); //unset old item
			}			
		}
		$_SESSION["cart"]["mach-slitter"] = array(	//update products with new item array
			//GENERAL
			$_POST["_slitterType"] ,
			$_POST["_productionVolume"] ,
			$_POST["_paperType"] ,
			$_POST["_gsm"] ,
			$_POST["_rollDiameter"] ,
			$_POST["_slittingWidth"] ,
			//CUTTING
			$_POST["_addtlBlade"] , //test
			$_POST["_coreCutterMachine"] , //test
			//"URS,
			$_POST["_rs_HydraulicShaftless"] ,
			$_POST["_rs_Single"] ,
			$_POST["_rs_Customized"] ,
			$_POST["_rs_ShaftStand"] ,
			$_POST["_rs_Others"] , //test
			$_POST["_tonCapacity"] ,
			//SYS
			$_POST["_sys_WebGuideHydraulicEPC"] ,
			$_POST["_sys_Tension"] ,
			$_POST["_sys_BananaRoll_TensionRoller"] ,
			$_POST["_sys_BrakeSystem"] ,
			$_POST["_sys_FullyComputerized"] ,
			$_POST["_sys_Others"] ,
			//DETAILS
			$_POST["_sl_Details"]
			);

	}
*/
?>