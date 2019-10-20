<?php
$host		= 'localhost';
$user		= 'test2';
$passwd		= 'XYfErbAQ8dAvrjKc';
$db			= 'test';
$dsn		= "mysql:host=$host;db=$db"; // After setting host use semi-colon

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

var_dump($conn);
try
{
	$stmt = $conn->query('SELECT * FROM test.prac');
}
catch(PDOException $e) 
{
	echo $e->getMessage();
}
$row = $stmt->fetch(PDO::FETCH_ASSOC);
var_dump ($row);
//print_r($row);
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
// {
// 	print_r($row);
//}

?>