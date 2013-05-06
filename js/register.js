var userRegister;

$(document).ready(function(){
	
	function register(){
		var values = $("#register").serialize();
		$.ajax({
			type: "POST",
			url: "/csc210final/php/register.php",
			data: values,
			success: function(results){
				results = $.parseJSON(results);
				if(results == "true"){
					window.location = "/csc210final/php/homepage.php";
				}
				else{
					$("#errorMessage").text("That email address already has an account, please try again");
				}
			}
		})
	}
	userRegister = register;
})
