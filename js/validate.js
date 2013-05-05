$(document).ready(function(){
	//alert("value time: " + $("#first_name").val);
	//alert("Here is the first name: " + $("#first_name"));
	// let's set up some variables
	/*var first_name = $("#first_name");
	var last_name = $("#last_name");
	var email = $("#email");
	var age = $("#age");
	var gender = $("#gender");*/	
		

	$("#register").submit(function(){

	var first_name = document.getElementById("first_name").value;
	var last_name = document.getElementById("last_name").value;
	var email = document.getElementById("email").value;
	var age = document.getElementById("age").value;
	//var gender = $("#gender");	
	//alert("here is the fname: " + first_name);
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
			alert("first name good!");
			return true;
		}
		else{
			return false;
		}
	}

	function validateLastName(){
		//alert("checking last name");
		if(last_name.value.match(letters)){
			alert("last name good!");
			return true;
		}
		else{
			return false;
		}
	}

	function validateEmail(){
		//alert("checking email");
		if(email.value.match(emailFormat)){
			alert("email is good!");
			return true;
		}
		else{
			return false;
		}
	}

	function validateAge(){
		//alert("checking age " + age);
		if(!isNaN(age.value)){
			alert("age is good!");
			return true;
		}
		else{
			alert("this is the bad age:" + age.value);
			return false;
		}
	}


});
