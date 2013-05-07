$(document).ready(function(){

	$("#register").submit(function(){


	var first_name = document.getElementById("first_name").value;
	var last_name = document.getElementById("last_name").value;
	var email = document.getElementById("email").value;
	var age = document.getElementById("age").value;
	var pass1 = document.getElementById("pass1").value;
	var pass2 = document.getElementById("pass2").value;
		if(validateFirstName() && validateLastName() && validateEmail() && validateAge() && validatePassword(pass1,pass2)){
			userRegister();
			return false;
		}
		else if(!validateFirstName()){
			$('#errorRegister').html('Please enter a valid First Name');
			return false;
		}
		else if(!validateLastName()){
			$('#errorRegister').html('Please enter a valid Last Name');
			return false;
		}
		else if(!validateEmail()){
			$('#errorRegister').html('Please enter a valid email address with the form: example@domain.com');
			return false;
		}
		else if(!validatePassword(pass1,pass2)){
			$('#errorRegister').html('Your passwords do not match');
			return false;
		}
		else if(!validateAge()){
			$('#errorRegister').html('Please enter an integer number for your age');
			return false;
		}
	});

	// stuff to use in the methods below
	var letters = /^[A-Za-z]+$/;
	var emailFormat = /^[A-Za-z0-9]+[A-Za-z0-9_.-]+[A-Za-z0-9_-]+@[A-Za-z0-9]+[A-Za-z0-9.-]+[A-Za-z0-9]+.[a-z]{2,4}$/;

	// validating functions
	
	function validatePassword(pass1,pass2){
		if(pass1 == pass2 && pass1.length > 0){
			return true;
		}else{
			return false;
		}
	}
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
		else{
			return false;
		}
	}

});
