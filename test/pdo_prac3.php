<?php
$host		= 'localhost';
$user		= 'test_root';
$passwd		= 's55oQsBuoDvyr2HB';
$db			= 'test';
$dsn		= "mysql:host=$host;dbname=$db"; 

try
{
	$conn = new PDO($dsn, $user, $passwd);
	$conn->setAttribute(PDO::ATTR_ERRMODE, 
						PDO::ERRMODE_EXCEPTION,
						PDO::ATTR_DEFAULT_FETCH_MODE,
						PDO::FETCH_OBJ);
	echo "Connected<br>";
	$stmt = $conn->query("SELECT * FROM `users`");
	echo "Query commpleted<br>";
	
}
catch (PDOException $e) // How does this work? is it an OOP thing?
{
	echo $e->getMessage();
}
while ($row = $stmt->fetch())
{
	echo $row->email."<br>";
}



?>