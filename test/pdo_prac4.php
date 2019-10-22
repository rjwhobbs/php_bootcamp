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
	//$sql = 'INSERT INTO `prac` (`title`, `body`, `author`)  VALUE (?, ?, ?) ';
	//$sql = 'UPDATE `prac` SET `is_published` = ? WHERE `id` = ?';
	$sql = 'SELECT * FROM `prac` WHERE `is_published` = :is_published && `author` = :author';
	$stmt = $conn->prepare($sql); //How exactly does this ad a layer of protection against SQL injection?
	$stmt->execute(['is_published' => 1, 'author' => 'Joe']);
	$info = $stmt->fetchAll();
	foreach ($info as $info) // So you need the same object name here, not totally sure why.
	{
		echo $info->title.'<br>';
	}
	//var_dump($info);
}
catch (PDOException $e)
{
	echo $e->getMessage();
}
?>