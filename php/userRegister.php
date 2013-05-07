<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include('banner/banner.php'); ?>
		<title>Hello World</title>
		<link rel="stylesheet" type="text/css" href="../css/ourStyle.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		
		<script src="../js/register.js" type="text/javascript"></script>
		<script src="../js/validate.js" type="text/javascript"></script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
	</head>
	<body>
		<form id="register" onsubmit="return false;" method="post">
			
			<h2> Required Fields </h2>
			<table>
				<tr>
    					<td>First Name:</td> <td><input type="text" id="first_name" name="first_name" maxlength="30" /></td>
				</tr>
				<tr>
					<td>Last Name:</td> <td><input type="text" id="last_name" name="last_name" maxlength="30" /></td>
				</tr>
				<tr>
    					<td>Email:</td><td><input type="text" id="email" name="email" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Password:</td><td><input id="pass1" value="" type="password" name="password" /></td>
				</tr>
				<tr>
   					<td>Password Again:</td><td><input id="pass2" value="" type="password" name="password2" /></td>
				</tr>		

			</table>

			<br/><br/>

			<h2> Optional Fields </h2>
			<table>
				<tr>
					<td>Age:</td><td><input type="text" id="age" name="age" maxlength="50" /></td>
				</tr>
				<tr>
					<td>Gender:</td><td><select name="gender">
						<option value="male">male</option>
						<option value="female">female</option>
						<option value="unspecified">unspecified</option>
					</select></td>
				</tr>
			<table>
    		<input type="submit" value="Register"/>
			
			
		</form>
		<div id="errorRegister"> </div>
		<br/>
	</body>
</html>
