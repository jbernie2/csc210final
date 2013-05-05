<?php
	session_start();
	include 'db.php';	
	db_connect();
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
	
	//see if a user exists matching the email and password
	$validUser = mysql_query("SELECT first_name, user_id FROM users
							WHERE users.email = '$email' AND users.password = '$password'");

	//check if user was found in database
	if(mysql_num_rows($validUser) > 0){
		$user_info = mysql_fetch_array($validUser);
		$_SESSION['first_name'] = $user_info[0];
		$_SESSION['user_id'] = $user_info[0];
	}
?>
