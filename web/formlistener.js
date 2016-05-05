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
		var _rollDiameterUnit = _rdUnit.options[_rdUnit.selectedIndex].value;
		var _rollDiameterMin = convertInchMillimeter($("input[name=rollDiameterMin]").val(), _rollDiameterUnit);
		var _rollDiameterMax = convertInchMillimeter($("input[name=rollDiameterMax]").val(), _rollDiameterUnit);
		var _rollDiam= _rollDiameterMin.toString() + _rollDiameterUnit + " - " + _rollDiameterMax.toString() + _rollDiameterUnit;

		var _swUnit = document.getElementById("swUnit");
		var _slittingWidthUnit = _swUnit.options[_swUnit.selectedIndex].value;
		var _slittingWidthMin = convertInchMillimeter($("input[name=slittingWidthMin]").val(), _slittingWidthUnit);
		var _slittingWidthMax = convertInchMillimeter($("input[name=slittingWidthMax]").val(), _slittingWidthUnit);
		var _slitWidth = _slittingWidthMin.toString() + _slittingWidthUnit + " - " + _slittingWidthMax.toString() + _slittingWidthUnit;

		var _gsmMin = $("input[name=gsmMin]").val().toString();
		var _gsmMax = $("input[name=gsmMax]").val().toString();


		$.ajax({
			url : "formlistener.php?slitter",
			method : "post",
			dataType : "html",
			data: {
				_slitterType: getRadioValue("slitterType") ,
				_productionVolume: $("input[name=productionVolume]").val() ,
				_paperType: $("input[name=paperType]").val() ,
				_gsm: _gsmMin + " - " + _gsmMax ,
				_rollDiameter: _rollDiam ,
				_slittingWidth: _slitWidth ,

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
				window.alert(data)
			}
		});

		return false;
	});


});

function deleteSlitter(){
	var r = confirm("Are you sure you want to delete the item?");
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

	/*$("#deleteSlitter").click(function(){
		var r = confirm("Are you sure you want to delete the item?");
		if (r == true) {
			$.ajax({
				url : "formlistener.php?deleteSlitter",
				method : "post",
				dataType : "html",
				data : ({}),
				success : function(data){
					var signal = data.trim();

					if(signal=="suc"){
						alert("Item Deleted")
						location.reload()
					}else
						alert(data)
				},
				error : function(data){
					alert("err")
				}
			})
		} else {

		}
			
	}	)*/