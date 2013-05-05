$(document).ready(function(){		

	$("#register").submit(function(){

	var first_name = document.getElementById("first_name").value;
	var last_name = document.getElementById("last_name").value;
	var email = document.getElementById("email").value;
	var age = document.getElementById("age").value;

		if(validateFirstName() && validateLastName() && validateEmail() && validateAge()){
			alert("The data checks out. Welcome!");
			return true;
		}
		else{
			alert("Your data was the derps. Not added. Try again.");
			return false;
		}
	});

	// stuff to use in the methods below
	var letters = /^[A-Za-z]+$/;
	var emailFormat = /^[A-Za-z0-9]+[A-Za-z0-9_.-]+[A-Za-z0-9_-]+@[A-Za-z0-9]+[A-Za-z0-9.-]+[A-Za-z0-9]+.[a-z]{2,4}$/;

	// validating functions
	function validateFirstName(){
		if(first_name.value.match(letters)){
			return true;
		}
		else{
			return false;
		}
	}

	function validateLastName(){
		if(last_name.value.match(letters)){
			return true;
		}
		else{
			return false;
		}
	}

	function validateEmail(){
		if(email.value.match(emailFormat)){
			return true;
		}
		else{
			return false;
		}
	}

	function validateAge(){
		if(!isNaN(age.value)){
			return true;
		}
			return false;
		}
	}


});
