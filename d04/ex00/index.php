<?php
	session_start();
	if($_GET['submit'] == "OK") 
	{
		if (($_GET['login'] && $_GET['passwd'] ))
		{
			$_SESSION['PHP_AUTH_USER'] = $_GET['login'];
			$_SESSION['PHP_AUTH_PW'] = $_GET['passwd'];
		}
		exit();
	}
?>
<html>
	<body>
		<form action="<?php $_PHP_SELF ?>" method="GET">
			Username: <input type="text" name="login" value="<?php echo $_SESSION['PHP_AUTH_USER']; ?>" /><br />
			Password: <input type="password" name="passwd" value="<?php echo $_SESSION['PHP_AUTH_PW']; ?>" /><br />
			<input type="submit" name="submit" value="OK" />
		</form>
	</body>
</html>