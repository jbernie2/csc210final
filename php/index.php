<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

        <head>
                <title>Hello World</title>

                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="../css/ourStyle.css" type="text/css" />
	</head>
	<body>
		<form name="login" action="login.php" method="post">
    			Email: <input type="text" name="email" />
    			Password: <input type="password" name="password" />
    		<input type="submit" value="Login" />
		</form>
	
		<form name="register" action="register.php" method="post">
    			First Name: <input type="text" name="first_name" maxlength="30" />
				Last Name: <input type="text" name="last_name" maxlength="30" />
    			Email: <input type="text" name="email" maxlength="50" />
				Password: <input type="password" name="pass1" />
   				Password Again: <input type="password" name="pass2" />
    		<input type="submit" value="Register" />
		</form>
	</body>

</html>
