$(document).ready(function(){

	$("#login").submit(function(){ 
	
		var values = $("input").serialize();
		$.ajax({
			type: "POST",
			url: "http://ec2-184-72-196-134.compute-1.amazonaws.com/csc210final/php/login.php",
			data: values,
			success: function(results){
				results = $.parseJSON(results);
				if(results == "true"){
					window.location = "http://ec2-184-72-196-134.compute-1.amazonaws.com/csc210final/php/homepage.php";
				}
				else{
					$("#errorMessage").text("Username and password invalid, please try again");
				}
			}
		})
	});
})
