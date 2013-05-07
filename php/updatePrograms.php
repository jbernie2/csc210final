<?php
	//display php errors on page
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	
	//get session variables
	session_start();
	
	//connect to database
	include_once "db.php";
	db_connect();

	$results = array();

	foreach($_POST as $fieldName => $value){
	
		$fieldName = mysql_real_escape_string($fieldName);
		$value = mysql_real_escape_string($value);

		//check if the user wants to remove a program
		$extractedField = strstr($fieldName,"remove");
		if($extractedField == "remove"){
			$user_id = $_SESSION['user_id'];
			mysql_query("DELETE from proglookup
							where(user_id='$user_id' AND program_id='$value')
						");
			array_push($results,$value);
		}
		else{
			//I encoded the id of the school into the id of
			//the form field in the html form
			//now I am extracting the school id and the sql field
			$splitField = explode("_",$fieldName,2);

			$program_id = $splitField[0];
			$fieldName = $splitField[1];

			//update info in the mysql table for what a user has submitted 
			//to a particular school

			mysql_query("UPDATE proglookup 
							SET $fieldName='$value'
							WHERE program_id='$program_id'");
		}
	}
	
	if(sizeof($results) == 0){
		echo json_encode("true");
	}
	else{
		echo json_encode($results);
	}
?>
