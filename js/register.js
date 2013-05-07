var userRegister;

$(document).ready(function(){
	
	function register(){
		alert("registering");
		var values = $("#register").serialize();
		$.ajax({
			type: "POST",
			url: "/csc210final/php/register.php",
			data: values,
			success: function(results){
				results = $.parseJSON(results);
				if(results == "true"){
					window.location = "/csc210final/php/index.php";
				}
				else{
					$("#errorMessage").text("That email address already has an account, please try again");
				}
			}
		})
	}
	userRegister = register;
})
