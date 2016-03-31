$(document).ready(function(){
	
	$("#slitter").submit(function(e){


		alert($("input[name=telegraphic-transfer-a]").val())

		var down = $("input[name=confirmation]").val().length!=0 ? 
			$("input[name=confirmation]").val() : 0;

		var bef = $("input[name=shipment]").val().length!=0 ?
			 $("input[name=shipment]").val() : 0;

		var upon = 	$("input[name=installation]").val().length!=0 ?
			$("input[name=installation]").val() : 0;

		$.ajax({	
			url : "actionlistener.php?slitter",
			method : "post",
			dataType : "html",
			data : ({
				fname : $("input[name=last_name]").val(),
				lname : $("input[name=first_name]").val(),
				company : $("input[name=company_name]").val(),
				address : $("input[name=address]").val(),
				mobile : $("input[name=contact_details]").val(),
				email : $("input[name=email]").val(),
				shipdep : document.querySelector('input[name="delivery_basis"]:checked').value,
				shipment :  $("input[name=contact_details]").val(),
				pterm : document.querySelector('input[name="term"]:checked').value,
				_downpayment : down,
				_before : bef,
				_upon : upon

			}),
			beforeSend : function(){},
			complete : function(){},
			success : function(data){
				alert(data)
			},
			error : function(data){
				alert(data)
			}
		})

		return false;
	})
})