<?php
	//register.php
	//creates a new user
	
	//display php errors on page
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);

	//connect to databse
	include_once 'db.php';
	include_once 'login.php';
	db_connect();
	
	//parse and sanitize form input
	$email = mysql_real_escape_string($_POST['email']);
	$first_name = mysql_real_escape_string($_POST['first_name']);
	$last_name = mysql_real_escape_string($_POST['last_name']);
	$pass1 = mysql_real_escape_string($_POST['password']);
	$pass2 = mysql_real_escape_string($_POST['password2']);

	//will be true if inputted fields pass all tests
	$valid = true;

	//check to make sure passwords match
	if($pass1 != $pass2){
		$valid = false;
	}

	//check for valid username
	if(strlen($email) > 30){
		$valid = false;
	}	

	//check to see if that user name already exists
	$uniqueUser = mysql_query("SELECT email FROM users
							WHERE users.email = '$email'");

	if(mysql_num_rows($uniqueUser) > 0){
		$valid = false;
	}

	//create a user_id
	$num_users = mysql_query("select count(1) from users");
	$num_users = mysql_fetch_array($num_users);
	$user_id = $num_users[0] + 1;

	//insert new user into database
	if($valid){
		if(mysql_query("INSERT INTO users (user_id, first_name, last_name, password, email)
					VALUES ('$user_id','$first_name','$last_name','$pass1','$email')")){
			;//do nothing
		}
		else{
			$valid = false;
		}
	}
	else{
		$valid = false;
	}
	
	if($valid){
		login($email,$pass1);
		echo json_encode("true");
	}else{
		echo json_encode("false");
	}
?>
