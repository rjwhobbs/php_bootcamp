<?php
$host		= 'localhost';
$user		= 'test2';
$passwd		= 'XYfErbAQ8dAvrjKc';
$db			= 'test';
$dsn		= "mysql:host=$host;dbname=$db"; 

try
{
	$conn = new PDO($dsn, $user, $passwd);
	$conn->setAttribute(PDO::ATTR_ERRMODE, 	
						PDO::ERRMODE_EXCEPTION);
	$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
						PDO::FETCH_OBJ);
	echo "Connected<br>";
	$stmt = $conn->query("SELECT * FROM `prac`");
	echo "Query commpleted<br>";
	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		echo $row['title']."<br>";
	}	
}
catch (PDOException $e)
{
	echo $e->getMessage();
}




?>