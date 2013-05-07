<?php
	function db_connect(){
		//display php errors on page
		ini_set('display_errors', 1); 
		error_reporting(E_ALL);

		//connect to database 
		$connx = mysql_connect("ec2-184-72-196-134.compute-1.amazonaws.com","friend","friend"); 

		//make sure connection worked 
		if(!$connx){        
			die("DB connection failed: " . mysql_error()); 
		}       

		//make sure database existss   
		$db = mysql_select_db("grad_to_go"); 
		if(!$db){
			die("Can not access DB: " . mysql_error()); 
		}
	}
	function check($result){
                                if (mysql_num_rows($result) == 0){
                                        return 1;
                                }else{
                                        return 0;
                                }
        }

?>

