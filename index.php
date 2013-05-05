<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Grad to Go</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="js/login.js" type="text/javascript"></script>

		<link rel="stylesheet" href="css/ourStyle.css" type="text/css" />
		
	</head>
	<body>
		<p> Login </p>
		<span id="errorMessage"> </span>
		<br/>
		<form id="login" onsubmit="return false" method="POST">
    		Email: <input type="text" name="email" />
    		Password: <input type="password" name="password" />
    		<input type="submit" value="Login" />
		</form>
		<a href="html/register.html">Don't have an Account? Create one here!</a>
	</body>
</html>
