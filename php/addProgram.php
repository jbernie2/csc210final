<?php
		session_start();
		include_once 'db.php';
		db_connect();
		$user_id = null;
		$program_id = null;		

		if(isset($_SESSION['user_id'])){$user_id = mysql_real_escape_string($_SESSION['user_id']);}
		
		if(isset($_POST['id'])){$program_id = mysql_real_escape_string($_POST['id']);}

		$add_query = "INSERT INTO proglookup (user_id, program_id) VALUES (" . $user_id . ", " . $program_id . ");";

		$result = mysql_query($add_query);	
		echo json_encode($result);
?>
