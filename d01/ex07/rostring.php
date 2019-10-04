#!/usr/local/bin/php
<?php
if (isset($argc))
{
	if (isset($argv[1]))
	{
		$arr = preg_split("/[\s]/", $argv[1], NULL, PREG_SPLIT_NO_EMPTY);
		if (isset($arr[1]))
		{
			$j = count($arr);
			for ($i = 1; $i < $j; $i++)
				echo "$arr[$i] ";
		}
		if (isset($arr[0]))
			echo "$arr[0]\n";
	}
}
else 
	echo "argc and argv disabled\n";
?>