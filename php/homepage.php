<?php

	session_start();
	//echo $_SESSION('first_name');
	
	/*
	if(!is_writable(session_save_path()) {
    	echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
	}
	*/	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="ourStyle.css" />
	</head>
	<body>
		<p> hello <?php echo $_SESSION('first_name'); ?> <p>
	</body>
</html>
