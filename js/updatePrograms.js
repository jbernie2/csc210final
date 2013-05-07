
$(document).ready(function(){
	$("#user_programs").submit(function(){ 
		var values = $("#user_programs").serialize();
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
					for(var i = 0; i< results.length; i++){
						$('#tr'+results[i]).remove();
					}
					$("#response").text("updates successful");
				}
			}
		})
	});
})
