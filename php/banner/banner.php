<div id="banner">

	<img src="../img/logo.png" alt="grad2go" height="75" /> 
	<div id="buttonArea">
		<form id="button" action="../html/search.html">
    			<input type="submit" id="more" value="Click here to search for more grad programs">
		</form>
	</div>

	<div id="banner_float">
	<?php
	session_start();
	if(isset($_SESSION['first_name'])){
		include_once('../php/banner/user_panel.php');
	}else{
		include_once('../php/banner/login_panel.php');
	}
	?>
	</div>

</div>
