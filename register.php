<?php
	//connect to databse
	include 'db.php';

	//parse form input
	$email = $_POST['email'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

	//check to make sure passwords match
	if($pass1 != $pass2){
   	 	header('Location: register_form.php');
	}

	//check for valid username
	if(strlen($username) > 30){
    	header('Location: register_form.php');
	}	

	//check to see if that user name already exists
	$uniqueUser = mysql_query("SELECT email FROM users
						WHERE users.email = '$first_name'");

	if($mysql_num_rows($uniqueUser) > 0){
    	header('Location: register_form.php');
	}

	
	

?>
