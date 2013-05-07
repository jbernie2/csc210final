
$(document).ready(function(){

	alert("here");
	$("#user_programs").submit(function(){ 
	
		alert("updating");	
		var values = $("#user_programs").serialize();
		
		alert(values);

		$.ajax({
			type: "POST",
			url: "/csc210final/php/updatePrograms.php",
			data: values,
			success: function(results){
				results = $.parseJSON(results);
				if(results == "true"){
					$("#response").text("updates successful");
				}
				else{
					$("#response").text("updates failed");
				}
			}
		})
	});
})
