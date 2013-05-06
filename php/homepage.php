<?php
	//display php errors on page
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	
	//get session variables
	session_start();
	
	//connect to database
	include_once "db.php";
	db_connect();

	//extract session variables
	$first_name = $_SESSION['first_name'];
	$user_id = $_SESSION['user_id'];

	echo $first_name;
	echo $user_id;

	function getPrograms(){

		$user_programs = mysql_query("
			select * from proglookup pl

				left join proginfo pi
					ON pl.program_id = pi.program_id
		");

		
		while($row = mysql_fetch_array($user_programs)) {
    		echo $row[0];
			echo $row[1];
			echo $row[2];
		}
		echo $user_programs;

		/*
		$moviesWithKB = mysql_query("
		select * from movies m
			
			left join actors a
        			ON a.last_name = '$last_name' AND a.first_name = '$first_name'
  			
			left join actors a2
        			ON a2.last_name = 'bacon' AND a2.first_name = 'kevin'
			
    			left join roles r
        			ON r.actor_id = a.id
   			
			left join roles r2
				ON r2.actor_id = a2.id
			
    			where (m.id = r.movie_id and m.id = r2.movie_id)");

		return $moviesWithKB;
		*/
	}

	getPrograms();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/ourStyle.css" />
	</head>
	<body>
		<p> hello <?php echo $_SESSION['first_name']; ?> <p>
	</body>
</html>
