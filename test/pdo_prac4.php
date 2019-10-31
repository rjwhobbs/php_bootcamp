<?php
$host		= 'localhost';
$user		= 'test2';
$passwd		= 'XYfErbAQ8dAvrjKc';
$db			= 'test';
$dsn		= "mysql:host=$host;dbname=$db"; 
$search = '%This%';

try
{
	$conn = new PDO($dsn, $user, $passwd);
	$conn->setAttribute(PDO::ATTR_ERRMODE, 	
						PDO::ERRMODE_EXCEPTION);
	// $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
	// 					PDO::FETCH_OBJ);
	echo "Connected<br>";
	//$sql = 'INSERT INTO `prac` (`title`,`body`, `author`) VALUES (?, ?, ?)';
	//$sql = 'DELETE FROM `prac` WHERE id = ?';
	//$sql = 'UPDATE `prac` SET `is_published` = ? WHERE `id` = ?';
	//$sql = 'SELECT * FROM `prac` WHERE `is_published` = :is_published && `author` = :author';
	//$sql = 'SELECT * FROM `prac` WHERE `author` = ?';
	$sql = 'SELECT * FROM `prac` WHERE `body` LIKE ?';
	$stmt = $conn->prepare($sql); //How exactly does this add a layer of protection against SQL injection?
	$stmt->execute([$search]);
	$info = $stmt->fetchAll(); // fetch() only retrieves a single row 
	foreach ($info as $info) // So you need the same object name here, not totally sure why.
	{
		echo $info->body.'<br>';
	}
	//var_dump($info);
}
catch (PDOException $e)
{
	echo $e->getMessage();
}
?>