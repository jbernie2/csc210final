<div id="banner">

	<a href="../php/"><img src="../img/logo.png" alt="grad2go" height="75" /></a>
	<div id="buttonArea">
		<form id="button" action="../php/search.php">
    			<input type="submit" id="more" value="Click here to search for more grad programs">
		</form>
	</div>

	<div id="banner_float">
	<?php
	if(!isset($_SESSION)) {
     	session_start();
	}
	if(isset($_SESSION['first_name'])){
		include_once('../php/banner/user_panel.php');
	}else{
		include_once('../php/banner/login_panel.php');
	}
	?>
	</div>

</div>
