var programChoice;

$(document).ready(function(){

	$(".add").click(function(){ 
		addProgram($(this).attr('id'));
	});
	
	function addProgram(theID){
		var values = theID; //$(theID).serialize();
		$.ajax({
			type: "POST",
			url: "../php/addProgram.php",
			data: { id: values},
			success: function(results){
				alert(results);
				results = $.parseJSON(results);
				if(results){
					window.location = "../php/searchresults.php";
				}
				else{
				
				}
			}
		})
	}
	
	function checkLogin(){
		
	}
})
