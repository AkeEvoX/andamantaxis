var controls = {};

controls.setPaymentType = function(_control){
	
	/* clear values */
	$(_control).html("");
	
	$.ajax({
		url:"services/payment.php",
		type:"GET",
		dataType:"JSON",
		contentType:"application/json",
		data : {"action":"GetTypes","_":new Date().getMilliseconds()},
		success : function(resp){
			var item = "";
			
			if(resp.data.length!=0){
				$.each(resp.data,function(idx,val){
					
					var item
					item = "<div class='radio' ><label>";
					item += "<input type='radio' name='reserv_payment'  value='"+ val.id+"'   /> ";
					item += val.name;
					item += "</label></div>";
					
					$("#"+_control).append(item);
				});
				$("input[type=radio][name=reserv_payment]:first").attr("checked",true);
			}
			
		},
		error:function(jqXHR,textStatus,errorThrown){
			console.error(textStatus);
			console.error(jqXHR);
		}
		
	});

}

controls.setPaymentPrice = function(_control){
	$.ajax({
		url:"services/payment.php",
		type:"GET",
		dataType:"JSON",
		contentType:"application/json",
		data : {"action":"GetPaymentPrice","_":new Date().getMilliseconds()},
		success : function(resp){
			
			if(resp.total != undefined)
			{
				$("#total").val(resp.total);
			}
		},
		error:function(jqXHR,textStatus,errorThrown){
			console.error(textStatus);
			console.error(jqXHR);
		}
		
	});
}