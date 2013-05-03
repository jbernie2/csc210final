<?php
	//connect to databse
	include 'db.php';
	db_connect();
	
	echo "database initialized ";
	//parse form input
	$email = $_POST['email'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];

	echo "arguments parsed ";

	//check to make sure passwords match
	if($pass1 != $pass2){
		echo "password mismatch";
   	 	header('Location: register_form.php');
	}

	echo "passwords match ";

	
	//check for valid username
	if(strlen($email) > 30){
    	header('Location: register_form.php');
	}	

	echo "valid "
	//check to see if that user name already exists
	$uniqueUser = mysql_query("SELECT email FROM users
						WHERE users.email = '$first_name'");

	if($mysql_num_rows($uniqueUser) > 0){
    	header('Location: register_form.php');
	}

	echo "here";

	$user_id = 2;
	mysqli_query($"INSERT INTO users (user_id, first_name, last_name, password, email)
				VALUES ('$user_id','$first_name','$last_name','$pass1,'$email')");
*/

?>
