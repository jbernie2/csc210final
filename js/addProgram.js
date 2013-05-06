var programChoice;

$(document).ready(function(){

	$("img").click(function(){ 
		alert($(this).attr('id'));
		addProgram($(this).attr('id'));
	});
	
	function addProgram(theID){
		alert("wooo");
		var values = $(theID).serialize();
		$.ajax({
			type: "POST",
			url: "../php/addProgram.php",
			data: values,
			success: function(results){
				alert(results);
				results = $.parseJSON(results);
				if(results == "true"){
					window.location = "../php/searchresults.php";
				}
				else{
					$("#errorMessage").text("Username and password invalid, please try again");
					//alert("false!");
				}
			}
		})
	}
})
