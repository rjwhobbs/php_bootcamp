<?php
	session_start();
	if($_GET['submit'] == "OK") 
	{
		if (($_GET['login'] && $_GET['passwd'] ))
		{
			$_SESSION['login'] = $_GET['login'];
			$_SESSION['passwd'] = $_GET['passwd'];
			echo "You have made a username and password".'<br>';
			echo "You biscuit!".'<br>';
			echo 'Your session number '.$_COOKIE['PHPSESSID'];
		}
		exit();
	}
?>
<html>
	<body>
		<form action="<?php $_PHP_SELF ?>" method="GET">
			Username: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" /><br />
			Password: <input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" /><br />
			<input type="submit" name="submit" value="OK" />
		</form>
	</body>
</html>