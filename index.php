<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<?php include "login.php";
 ?>

<html xmlns="http://www.w3.org/1999/xhtml">

        <head>
                <title>Hello World</title>

                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<link rel="stylesheet" href="ourStyle.css" type="text/css" />
	</head>
	<body>


	<?php
		if(!empty($_SESSION['LoggedIn'])&& !empty($_SESSION['EmailAddress']))
		{ ?>
			<p>
				LOOK HERE WOOOO Your email address is <?=$_SESSION['EmailAddress'] ?>
			</p>
		<?php
		}
		elseif(!empty($_POST['email'])&& !empty($_POST['password']))
		{
			$email = mysql_real_escape_string($_POST['email']);
			$password = md5(mysql_real_escape_string($_POST['password']));

			$checklogin = mysql_query("SELECT * FROM users WHERE email = '".$email."' AND password ='".$password."'");

			if(mysql_num_rows($checklogin) == 1){
				
				$row = mysql_fetch_array($checklogin);
				$firstName = $row['first_name'];

				$_SESSION['LoggedIn'] = 1;
				$_SESSION['EmailAddress'] = $email;
				$_SESSION['FirstName'] = $firstName;

				echo "YEAHHHH";
			}
			else{
				echo "NOOOOOPE";
			}
		}
		else
		{ ?>
					<h1>HELLO WORLD!</h1>
		<p>No stealing!</p>


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
		<?php }

	?>
	</body>

</html>
