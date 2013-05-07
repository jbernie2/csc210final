<?php
	
	//display php errors on page
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);

	//allow for session variables to be used
	if(!isset($_SESSION)) {
     	session_start();
	}
	
	//functions that will allow the progams that the user has applied to to be displayed
	include_once "userProgramTable.php";

	//check if user is logged in
	$loggedIn = isset($_SESSION['user_id']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Grad to Go</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="../js/login.js" type="text/javascript"></script>
		<script src="../js/updatePrograms.js" type="text/javascript"></script>
	
		<link rel="stylesheet" href="../css/ourStyle.css" type="text/css" />
		
	</head>
	<body>
		<?php include_once('banner/banner.php'); ?>
		<?php 
			if($loggedIn){
				echo "<div id='response'> </div>"; 
				getPrograms();
			}else{
				echo "<div id='homepage'>";
				echo "<h2>Welcome to Grad to Go</h2>";
				echo "</div>";
			}
		?>
	</body>
</html>
