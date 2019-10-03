#!/usr/bin/php
<?php
while (1)
{
	echo "Enter a number: ";
	$f = fopen('php://stdin', 'r');
	$line = fgets($f); 
	$trim = rtrim($line, "\n");
	if (is_numeric($trim))
	{
		if ($trim % 2 == 0)
			echo "The number ". $trim ." is even\n";
		else
			echo "The number ". $trim ." is odd\n";	
	}
	else if (feof($f))
	{
		fclose($f);
		exit;
	}
	else
		echo "'". $trim ."' is not a number\n";
	fclose($f);
};
?>