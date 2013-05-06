<?php
	function addProgram(){
		session_start();
		include_once 'db.php';
		db_connect();

		$user_id = mysql_real_escape_string($_SESSION['user_id']);
		$program_id = mysql_real_escape_string($_POST['theID']);

		mysql_query("INSERT INTO proglookup (user_id, program_id) VALUES ($user_id, $program_id)");	

		echo json.encode("true");	

	}

?>