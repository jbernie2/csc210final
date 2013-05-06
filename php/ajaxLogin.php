<?php
	include_once 'login.php';
	
	$email = mysql_real_escape_string($_POST['email']);
	$password = mysql_real_escape_string($_POST['password']);
		
	$results = login($email,$password);
	echo json_encode($results);
?>
