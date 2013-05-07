<?php
	//display php errors on page
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	
	include_once "userProgramTable.php";

	//get session variables
	if(!isset($_SESSION)) {
     	session_start();
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/ourStyle.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="../js/updatePrograms.js" type="text/javascript"></script>

	</head>
	<body>
		<p> hello <?php echo $_SESSION['first_name']; ?> </p>
		<?php getPrograms(); ?>
		<span id='response'></span>
	</body>
</html>
