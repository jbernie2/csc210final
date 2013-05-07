<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Search for a grad program with Grad to Go</title>
		<link rel="stylesheet" type="text/css" href="../css/ourStyle.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="../js/login.js"></script>
	</head>
	
	<body>
		<?php 
		//include "../php/banner/banner.php"; 
		include_once('../php/banner/banner.php');
		?>
		<h2 id="searchHead">Search for a graduate program</h2>
		<div id="searchArea">
			<form id="search" action="../php/searchresults.php">
				Search for a school: <input name="school" />
				Pick a program: 
				<select name="degree" size="1">
					<option></option>
					<option>Biology</option>
					<option>Chemistry</option>
					<option>Computer Science</option>
					<option>Philosophy</option>
				</select>
    			<input type="submit" value="Search"/>
			</form>
		</div>
	</body>
</html>
