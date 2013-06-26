 function addOne(type)
  {
  	performAction(type, 1);
  	return false;
  }
  
  function subOne(type)
  {
  	performAction(type, -1);
  	return false;
  }
  
  function performAction(type, addValue)
  {
  	var val = makeCalc(type, addValue);
  	
  	if(val < 0) // Man kan ikke komme under 0
  	{
  		return false;
  	}
  	
  	setValue(type, val);
  	sendToServer(type, addValue);
  }
  
  function makeCalc(type, addValue)
  {
  	
  	var val = $("#"+type).text();
  	val = val*1;
  	val = val+addValue;
  	
  	val = val<0?0:val;
  	
  	return val;
  }
  
  function setValue(type, val)
  {
  	$("#"+type).text(val);
  }
  
  function sendToServer(type, addValue)
  {
  	owner = $("#hidden_initialer").val();
  
  	$.post("server.php",{"action":addValue, "type":type,"owner":owner},function(data){

  		
  	});
  }

function toggleState(elem)
{
		if(elem.attr("disabled") == "disabled")
		{
			elem.removeAttr("disabled");
			
		}
		else
		{
			
			elem.attr("disabled","disabled");
		}
}

$(function()
{
	$("#initialer_lock").click(function(){
		toggleState($("#initialer"));
		
		$("#hidden_initialer").val($("#initialer").val());
		
		
		if($("#initialer").attr("disabled"))
		{
			var owner = $("#hidden_initialer").val();
			$.post("server.php",{"owner":owner},function(data){
			
			$("#stats").load("php/stats.php",{owner:owner})
				$("#add_perm, #sub_perm, #add_salg, #sub_salg").toggleClass("disabled");
				var permission = typeof(data.permission)=="undefined"?0:data.permission;
				var salg = typeof(data.salg)=="undefined"?0:data.salg;
				
				$("#permission").text(permission);
				$("#salg").text(salg);
				
			},"json")
		}
		else
		{
			
			$("#salg").text("-");
			$("#permission").text("-");
			$("#stats").text("");
			$("#add_perm, #sub_perm, #add_salg, #sub_salg").toggleClass("disabled");
		}
	})
	
	
	
	$("#add_perm").click(function(){
		if($(this).hasClass("disabled")){return false}
		addOne("permission");
		
	})
	
	$("#sub_perm").click(function(){
		if($(this).hasClass("disabled")){return false}
		subOne("permission");
	})
	
	$("#add_salg").click(function(){
		if($(this).hasClass("disabled")){return false}
		addOne("salg");
	})
	
	$("#sub_salg").click(function(){
		if($(this).hasClass("disabled")){return false}
		subOne("salg");
	})
	
	
	
})
