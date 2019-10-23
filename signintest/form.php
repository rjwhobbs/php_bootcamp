<?php
session_start();
require_once('./setup.php');
$_SESSION['message'] = "";
try
{
	$conn = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOExeption $e)
{
	echo $e->getMessage;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	if ($_POST['passwd'] == $_POST['confirm-pw'])
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$passwd = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<h1>Create an account</h1>
	<form action="form.php" method="POST" autocomplete="off">
		<div><?= $_SESSION['message'] ?></div>
		<span>Username:</span><input type="text" placeholder="username" name="username" required/><br />
		<span>Email:</span><input type="text" placeholder="email address" name="email" required/><br />
		<span>Password:</span><input type="password" placeholder="password" name="passwd" required/><br />
		<span>Confirm password:</span><input type="password" placeholder="confirm" name="confirm-pw" required/><br />
		<label>Choose a profile pic</label><input type="file" name="prof-pic" accept="image/*" /><br />
		<input type="submit" name="submit" value="Register" />
	</form>
</body>
</html>