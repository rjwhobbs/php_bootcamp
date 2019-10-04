#!/usr/bin/php
<?php
if (isset($argc))
{
	if ($argc == 2)
	{
		$output = preg_replace("/[ ]+/", ' ', $argv[1]);
		$trimmed = trim($output, ' ');
		echo $trimmed . "\n";
	}
}
else 
	echo "argc and argv disabled\n";
?>