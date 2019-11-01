<?php
include './config.php'; 
try
{
	$conn = new PDO($DB_DSN, $DB_USER, $DB_PSSWRD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
}
catch (PDOExeption $e)
{
	echo $e->getMessage; // do I need to call die here if connection fails?
}
?>