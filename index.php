<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

        <head>
                <title>Hello World</title>

                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	</head>
	<body>
		<h1>HELLO WORLD!</h1>
		<p>No stealing!</p>


		<form name="login" action="login.php" method="post">
    			Username: <input type="text" name="username" />
    			Password: <input type="password" name="password" />
    		<input type="submit" value="Login" />
		</form>
	
		<form name="register" action="register.php" method="post">
    			Username: <input type="text" name="username" maxlength="30" />
    			Email: <input type="text" name="email" maxlength="50" />
				Password: <input type="password" name="pass1" />
   				Password Again: <input type="password" name="pass2" />
    		<input type="submit" value="Register" />
		</form>

	</body>
</html>
