$(document).ready(function(){

	$(".add").click(function(){ 
		
		addProgram($(this).attr('id'), this);
	
	});
	
	function addProgram(theID, reference){
		var values = theID; //$(theID).serialize();
		$.ajax({
			type: "POST",
			url: "../php/addProgram.php",
			data: { id: values},
			success: function(results){
				alert(results);
				results = $.parseJSON(results);
				if(results == true){
					$(reference).attr('src',  "null");
				}
				else{
				}
			}
		})
	}
	
	function checkLogin(){
		
	}
})
