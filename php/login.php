<?php

	function login($email,$password){
	session_start();
	include_once 'db.php';
		db_connect();
	
		//returns the results of the login attempt to ajax
		$results;
		//see if a user exists matching the email and password
		$validUser = mysql_query("SELECT first_name, user_id FROM users
								WHERE users.email = '$email' AND users.password = '$password'");
	
		//check if user was found in database
		if(mysql_num_rows($validUser) > 0){
			//load user information into session variable
			$user_info = mysql_fetch_array($validUser);
			$_SESSION['first_name'] = $user_info[0];
			$_SESSION['user_id'] = $user_info[1];
			$results = "true";
		}
		//if user was not found
		else{
			$results = "false";
		}

		return $results;
	}
?>
