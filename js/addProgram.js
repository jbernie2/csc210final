var programChoice;

$(document).ready(function(){

	$("img").click(function(){ 
		//alert($(this).attr('id'));
		addProgram($(this).attr('id'));
	});
	
	function addProgram(theID){
		var values = $(theID).serialize();
		$.ajax({
			type: "POST",
			url: "http://ec2-184-72-196-134.compute-1.amazonaws.com/csc210final/php/addProgram.php",
			data: values,
			success: function(results){
				results = $.parseJSON(results);
				if(results == "true"){
					window.location = "http://ec2-184-72-196-134.compute-1.amazonaws.com/csc210final/php/searchresults.php";
					//alert("true!");
				}
				else{
					$("#errorMessage").text("Username and password invalid, please try again");
					//alert("false!");
				}
			}
		})
	}
	userLogin = login;
})
