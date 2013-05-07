<?php
		session_start();
		include_once 'db.php';
		db_connect();
		$user_id = null;
		$program_id = null;		

		if(isset($_SESSION['user_id'])){$user_id = mysql_real_escape_string($_SESSION['user_id']);}
		
		if(isset($_POST['id'])){$program_id = mysql_real_escape_string($_POST['id']);}

		//checks if entry alrafyd existis
		$search_query = "SELECT * FROM proglookup WHERE user_id=".$user_id." AND program_id=" . $program_id.";";
		$returnTable = check(mysql_query($search_query));

		if($returnTable == 0){
			$result = "false";

		}else{		
			$add_query = "INSERT INTO proglookup (user_id, program_id) VALUES (" . $user_id . ", " . $program_id . ");";
			$result = mysql_query($add_query);	
		}
		echo json_encode($result);
?>
