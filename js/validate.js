alert("js is hooked up!");
/*
$(document).ready(function(){
	alert("All up in this bitch");
	
	// let's set up some variables
	var first_name = $("#first_name");
	var last_name = $("#last_name");
	var email = $("#email");
	var age = $("#age");
	var gender = $("#gender");	
		

	$("#register").submit(function(){
		if(validateFirstName() && validateLastName() && validateEmail() && validateAge())
			return true;
		else
			return false;
	});

	// stuff to use in the methods below
	var letters = /^[A-Za-z]+$/;
	var emailFormat = /^[A-Za-z0-9]+[A-Za-z0-9_.-]+[A-Za-z0-9_-]+@[A-Za-z0-9]+[A-Za-z0-9.-]+[A-Za-z0-9]+.[a-z]{2,4}$/;

	// validating functions
	function validateFirstName(){
		alert("checking first name");
		if(first_name.value.match(letters)){
			return true;
		}
		else{
			return false;
		}
	}

	function validateLastName(){
		if(last_name.value.match(letters){
			return true;
		}
		else{
			return false;
		}
	}

	function validateEmail(){
		if(email.value.match(emailFormat){
			return true;
		}
		else{
			return false;
		}
	}

	function validateAge(){
		var n = ~~Number(age);
		return String(n) === age && n >= 0;
	}

});*/
