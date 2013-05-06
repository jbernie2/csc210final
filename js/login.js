
var userLogin;

$(document).ready(function(){

	$("#login").submit(function(){ 
		login("#login");
	});
	
	function login(arg){
		var values = $(arg).serialize();
		$.ajax({
			type: "POST",
			url: "/csc210final/php/ajaxLogin.php",
			data: values,
			success: function(results){
				results = $.parseJSON(results);
				if(results == "true"){
					window.location = "/csc210final/php/homepage.php";
				}
				else{
					$("#errorMessage").text("Username and password invalid, please try again");
				}
			}
		})
	}
	userLogin = login;
})
