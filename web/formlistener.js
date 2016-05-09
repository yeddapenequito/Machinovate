$(document).ready(function(){
	
	function convertInchMillimeter(conv, unit){
		if (unit == "mm") {
			return (conv / 1).toFixed(2);
		}
		else return (conv / 25.4).toFixed(2);
	}

	function isChecked(chkboxName) {
		switch (chkboxName) {
			case "slitter-additional-checkbox": {
				if (document.getElementById(chkboxName).checked)
					return $("input[name=addtlBlade]").val();
				else return 0;
			}
			case "reel-stand-others-checkbox": {
				if (document.getElementById(chkboxName).checked)
					return $("input[name=reelStandOthers]").val();
				else return 0;
			}				

			case "systems-others-checkbox": {
				if (document.getElementById(chkboxName).checked)
					return $("input[name=systemsOthers]").val();
				else return 0;
			}
			case "slitterCheckbox": {
				if (document.getElementById("slitter").checked) {
					return $("input[name=slitterMax]").val();
				}
				else return 0;
			}
			case "reel-stand-hydraulic": {
				if (document.getElementById(chkboxName).checked) {
					return getRadioValue("reelHydraulicRadio");
				}
				else return 0;
			}
			case "reel-stand-standard": {
				if (document.getElementById(chkboxName).checked) {
					switch (getRadioValue(reelStandardRadio)) {
						case "Ten(10) Rolls": {
							return $("input[name=noOfAdditionalRolls]").val();
						}
						default: return getRadioValue("reelStandardRadio");
					}
				}
				else return 0;
			}
			case "systems-others-check": {
				if (document.getElementById(chkboxName).checked)
					return $("input[name=sysOthers]").val();
				else return 0;
			}

			case "term": {
				if (document.getElementById("credit").checked)
					return "Letter of Credit, Draft at Sight";
				else if (document.getElementById("transfer").checked) {
					var downPayment = $("input[name=confirmation]").val();
					var beforeShipment = $("input[name=shipment]").val();
					return "TelegraphicTransfer: " + downPayment + "% , " + beforeShipment + "%";
				}
				else
					return 0;

			}
			default: {
				if (document.getElementById(chkboxName).checked)
					return 1;
				else return 0;		
			}
		}
	}

	function getRadioValue(rdName) {
		for(var i=0, rd=document.getElementsByName(rdName); i < rd.length; i++) {
			if (rd[i].checked)
				return rd[i].value;
		}
		return 0;
	}

	$("#formslitter").submit(function(){
		
		var _rdUnit = document.getElementById("rdUnit");
		var _swUnit = document.getElementById("swUnit");

		$.ajax({
			url : "formlistener.php?slitter",
			method : "post",
			dataType : "html",
			data: {
				_slitterType: getRadioValue("slitterType") ,
				_productionVolume: $("input[name=productionVolume]").val() ,
				_paperType: $("input[name=paperType]").val() ,
				_gsm_min: $("input[name=gsmMin]").val() ,
				_gsm_max: $("input[name=gsmMax]").val() ,
				_rollDiameter_min: $("input[name=rollDiameterMin]").val() ,
				_rollDiameter_max: $("input[name=rollDiameterMax]").val() ,
				_rollDiameter_unit: _rdUnit.options[_rdUnit.selectedIndex].value ,
				_slittingWidth_min: $("input[name=slittingWidthMin]").val() ,
				_slittingWidth_max: $("input[name=slittingWidthMax]").val() ,
				_slittingWidth_unit: _swUnit.options[_swUnit.selectedIndex].value ,

				/*_gsm: _gsmMin + " - " + _gsmMax ,
				_rollDiameter: _rollDiam ,
				_slittingWidth: _slitWidth ,*/

				_addtlBlade: isChecked("slitter-additional-checkbox") ,
				_coreCutterMachine: isChecked("core-cutter-checkbox") ,

				_rs_HydraulicShaftless: isChecked("rs-HydraulicShaftless") ,
				_rs_Single: isChecked("rs-Single") ,
				_rs_Customized: isChecked("rs-Customized") ,
				_rs_ShaftStand: isChecked("rs-ShaftStand") ,
				_rs_Others: isChecked("reel-stand-others-checkbox") ,
				_tonCapacity: $("input[name=tonCapacity]").val() ,

				_sys_WebGuideHydraulicEPC: isChecked("sys-WebGuideHydraulicEPC") ,
				_sys_Tension: isChecked("sys-Tension") ,
				_sys_BananaRoll_TensionRoller: isChecked("sys-BananaRoll-TensionRoller") ,
				_sys_BrakeSystem: isChecked("sys-BrakeSystem") ,
				_sys_FullyComputerized: isChecked("sys-FullyComputerized") ,
				_sys_Others: isChecked("systems-others-checkbox") , 

				_sl_Details: document.getElementById("comment").value
			},
			beforeSend : function(){},
			complete : function(){},
			success : function(data){
				console.log("x");
				window.alert(data)
			},
			error : function(data){
				console.log("y");
				window.alert("Something went wrong with the server. Please Try Again Later. - Machinovate, Inc.")
			}
		});

		return false;
	});

	$("#formsheeter").submit(function(){

		var _rdUnit = document.getElementById("rdUnit");
		var _cutLenUnit = document.getElementById("cutLenUnit");
		var _swUnit = document.getElementById("swUnit");

		$.ajax({
			url : "formlistener.php?sheeter",
			method : "post",
			dataType : "html",
			data: {
				_sheeterType: getRadioValue("sheeterType") ,
				_productionVolume: $("input[name=productionVolume]").val() ,
				_paperType: $("input[name=paperType]").val() ,
				_gsm_min: $("input[name=gsmMin]").val() ,
				_gsm_max: $("input[name=gsmMax]").val() ,
				_rollDiameter_min: $("input[name=rollDiameterMin]").val() ,
				_rollDiameter_max: $("input[name=rollDiameterMax]").val() ,
				_rollDiameter_unit: _rdUnit.options[_rdUnit.selectedIndex].value ,
				
				_slittingWidth_min: $("input[name=slittingWidthMin]").val() ,
				_slittingWidth_max: $("input[name=slittingWidthMax]").val() ,
				_slittingWidth_unit: _swUnit.options[_swUnit.selectedIndex].value ,
				
				_cutOffLength_min: $("input[name=cutOffLengthMin]").val() ,
				_cutOffLength_max: $("input[name=cutOffLengthMax]").val() ,
				_cutOffLength_unit: _cutLenUnit.options[_cutLenUnit.selectedIndex].value ,

				_cutting_mainDrive: getRadioValue("mainDriveRadio") ,
				_cutting_knife: getRadioValue("knifeRadio") ,
				_cutting_sl_attach: isChecked("slitterCheckbox") ,
				
				_urs_hydraulicShaftless: isChecked("reel-stand-hydraulic") ,
				_urs_hTypeStand: isChecked("reel-stand-standard") ,
				_urs_tensionDecurler: isChecked("atcds") ,
				_urs_individualTension: isChecked("iatss") ,
				_urs_mechanical: isChecked("ms") ,
				_urs_airHD: isChecked("as") ,
				_urs_others: isChecked("oth") ,
				_urs_rollWeight: $("input[name=rollWeight]").val() ,

				_sys_computerControl: isChecked("ccalsasaqc") ,
				_sys_webGuideHydraulicEPC: isChecked("wghepc") ,
				_sys_others: isChecked("systems-others-check") ,

				_sh_Details: document.getElementById("comment").value
			},
			beforeSend : function(){},
			complete : function(){},
			success : function(data){
				console.log("x");
				window.alert(data)
			},
			error : function(data){
				console.log("y");
				window.alert("Something went wrong with the server. Please Try Again Later. - Machinovate, Inc.")
			}
		});

		return false;
	});


	$("#formcutter").submit(function(){

		$.ajax({
			url : "formlistener.php?cutter",
			method : "post",
			dataType : "html",
			data: {
				_cutterType: getRadioValue("cutterRadio") ,
				_ct_Details: document.getElementById("comment").value
			},
			beforeSend : function(){},
			complete : function(){},
			success : function(data){
				console.log("x");
				window.alert(data);
				window.location("shipment.php");
			},
			error : function(data){
				console.log("y");
				window.alert("Something went wrong with the server. Please Try Again Later. - Machinovate, Inc.");
			}
		});

		return false;
	});


	$("#formbailing").submit(function(){

		$.ajax({
			url : "formlistener.php?bailing",
			method : "post",
			dataType : "html",
			data: {
				_bm_quantity: $("input[name=bailingQuantity]").val() ,
				_bm_Details: document.getElementById("comment").value
			},
			beforeSend : function(){},
			complete : function(){},
			success : function(data){
				console.log("x");
				window.alert(data)
			},
			error : function(data){
				console.log("y");
				window.alert("Something went wrong with the server. Please Try Again Later. - Machinovate, Inc.")
			}
		});

		return false;
	});

	$("#formrolltruck").submit(function(){

		$.ajax({
			url : "formlistener.php?rolltruck",
			method : "post",
			dataType : "html",
			data: {
				_prt_quantity: $("input[name=rollTruckQuantity]").val() ,
				_prt_Details: document.getElementById("comment").value
			},
			beforeSend : function(){},
			complete : function(){},
			success : function(data){
				console.log("x");
				window.alert(data)
			},
			error : function(data){
				console.log("y");
				window.alert("Something went wrong with the server. Please Try Again Later. - Machinovate, Inc.")
			}
		});

		return false;
	});

	$("#formshipment").submit(function(){

		$.ajax({
			url : "formlistener.php?shipment",
			method : "post",
			dataType : "html",
			data: {
				_lastName: $("input[name=last_name]").val() ,
				_firstName: $("input[name=first_name]").val() ,
				_companyName: $("input[name=company_name]").val() ,
				_address: $("input[name=address]").val() ,
				_contactDetails: $("input[name=contact_details]").val() ,
				_email: $("input[name=email]").val() ,

				_ship_delivBasis: getRadioValue("delivery_basis") ,
				_ship_Date: $("input[name=ship_day]").val() ,
				_ship_paymentTerms: isChecked("term")
			},
			beforeSend : function(){},
			complete : function(){},
			success : function(data){
				console.log("x");
				window.alert(data)
			},
			error : function(data){
				console.log("y");
				window.alert("Something went wrong with the server. Please Try Again Later. - Machinovate, Inc.")
			}
		});

		return false;
	});


});



function deleteSlitter(){
	var r = confirm("Are you sure you want to delete this item?");
		if (r == true) {
			$.ajax({
				url : "formlistener.php?deleteSlitter",
				method : "post",
				dataType : "html",
				data : ({}),
				success : function(data){
					var signal = data.trim();

					if(signal=="suc"){
						alert("Item Deleted");
						location.reload();
					}else
						alert(data)
				},
				error : function(data){
					alert("err");
				}
			})
		} else {

		}
}

function deleteSheeter(){
	var r = confirm("Are you sure you want to delete this item?");
		if (r == true) {
			$.ajax({
				url : "formlistener.php?deleteSheeter",
				method : "post",
				dataType : "html",
				data : ({}),
				success : function(data){
					var signal = data.trim();

					if(signal=="suc"){
						alert("Item Deleted");
						location.reload();
					}else
						alert(data)
				},
				error : function(data){
					alert("err");
				}
			})
		} else {

		}
}

function deleteCutter(){
	var r = confirm("Are you sure you want to delete this item?");
		if (r == true) {
			$.ajax({
				url : "formlistener.php?deleteCutter",
				method : "post",
				dataType : "html",
				data : ({}),
				success : function(data){
					var signal = data.trim();

					if(signal=="suc"){
						alert("Item Deleted");
						location.reload();
					}else
						alert(data)
				},
				error : function(data){
					alert("err");
				}
			})
		} else {

		}
}

function deleteBailing(){
	var r = confirm("Are you sure you want to delete this item?");
		if (r == true) {
			$.ajax({
				url : "formlistener.php?deleteBailing",
				method : "post",
				dataType : "html",
				data : ({}),
				success : function(data){
					var signal = data.trim();

					if(signal=="suc"){
						alert("Item Deleted");
						location.reload();
					}else
						alert(data)
				},
				error : function(data){
					alert("err");
				}
			})
		} else {

		}
}

function deleteRollTruck(){
	var r = confirm("Are you sure you want to delete this item?");
		if (r == true) {
			$.ajax({
				url : "formlistener.php?deleteRollTruck",
				method : "post",
				dataType : "html",
				data : ({}),
				success : function(data){
					var signal = data.trim();

					if(signal=="suc"){
						alert("Item Deleted");
						location.reload();
					}else
						alert(data)
				},
				error : function(data){
					alert("err");
				}
			})
		} else {

		}
}