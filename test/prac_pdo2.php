<?php
$host		= 'localhost';
$user		= 'test_root';
$passwd		= 's55oQsBuoDvyr2HB';
$db			= 'test';
$dsn		= "mysql:host=$host"; // After setting host use semi-colon

try
{
	$conn = new PDO($dsn, $user, $passwd);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected<br>";
}
catch (PDOException $e) // How does this work? is it an OOP thing?
{
	echo "Connection Failed ".$e->getMessage();
}
$sql = "DROP DATABASE `dummy4`";
$conn->exec($sql);

?>