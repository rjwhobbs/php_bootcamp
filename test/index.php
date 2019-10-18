<?php
$link = mysqli_connect("localhost", "test_root", "s55oQsBuoDvyr2HB", "test");
if (mysqli_connect_error())
	die ("Error");
// $query = "UPDATE `users` SET `password` = 'x1234x' WHERE `email` = 'spongebod@gmail.com' LIMIT 1";
// mysqli_query($link, $query);
// "ALTER TABLE `users` ADD `name` TEXT NOT NULL AFTER `password`"; 
$name = "S'pongy";
//echo mysqli_real_escape_string($link, $name); 
$query = "SELECT `email` FROM `users` WHERE `name` = ".mysqli_real_escape_string($link, $name);
if ($result = mysqli_query($link, $query))
{
	while ($row = mysqli_fetch_array($result))
	{
		print_r($row);
		echo '<br>';
	}
}
?>