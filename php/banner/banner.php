<div id="banner">

	<img href="`" alt="grad2go" width="150" height="75" /> 
	<div id="search">
                <form id="search" action="../php/searchresults.php">
                        <input name="school" placeholder="Search for a school" />
                        <select placeholder="Pick a program" name="degree" size="1">
                                <option></option>
                                <option>Biology</option>
                                <option>Chemistry</option>
                                <option>Computer Science</option>
                                <option>Philosophy</option>
                        </select>
                <input type="submit" value="Search"/>
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
