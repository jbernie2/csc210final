<?php
	//display php errors on page
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	
	//get session variables
	session_start();
	
	//connect to database
	include_once "db.php";
	db_connect();

	foreach($_POST as $fieldName => $value){
		$fieldName = mysql_real_escape_string($fieldName);
		$value = mysql_real_escape_string($value);

		//I encoded the id of the school into the id of
		//the form field in the html form
		//now I am extracting the school id and the sql field
		$fieldName = explode("_",$fieldName,2);

		$program_id = $fieldName[0];
		$fieldName = $fieldName[1];

		//update info in the mysql table for what a user has submitted 
		//to a particular school
		$success= mysql_query("UPDATE proglookup 
						SET $fieldName='$value'
						WHERE program_id='$program_id'");
		
	}
	
	echo json_encode("true");
?>
