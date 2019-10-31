<?php
$host		= 'localhost';
$user		= 'test_root';
$passwd		= 's55oQsBuoDvyr2HB';
$db			= 'test';
$dsn		= "mysql:host=$host;dbname=$db"; // After setting host use semi-colon

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

$stmt = $conn->prepare("INSERT INTO `users` (`email`, `password`, `name`) Values (?, ?, ?)");
$stmt->execute(['normalname@ah.com', 'stay', 'chill']);

// $stmt = $conn->prepare("UPDATE `users` SET `email` = ? WHERE `name` = ?");
// $stmt->execute(['biscuit@face.coockie', 'biscuit']);
// try
// {
// 	$stmt = $conn->prepare("INSERT INTO `users` (`email`,`password`, `name`) Values (?, ?, ?)");
// 	$stmt->execute(["Joe@joe.joe", "joe", "joe"]);
// 	$stmt = NULL;
// 	echo "Added<br>";
// }
// catch (PDOException $e)
// {
// 	echo $e->getMessage();
// }

// try
// {
// 	$stmt = $conn->query('SELECT * FROM ``');
// }
// catch(PDOException $e) 
// {
// 	echo $e->getMessage();
// }
// $row = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump ($row);
// //print_r($row);
// // while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
// // {
// // 	print_r($row);
// //}

?>