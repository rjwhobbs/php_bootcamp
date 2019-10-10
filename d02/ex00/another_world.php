#!/usr/bin/php
<?php
if (isset($argc))
{
	if (isset($argv[1]))
	{
		$arr = preg_split("/[ \t]/", $argv[1], NULL, PREG_SPLIT_NO_EMPTY);
		$arr_len = count($arr);
		for ($i = 0; $i < ($arr_len - 1); )
		{
			echo "$arr[$i] ";
			$i++;
		}
		echo "$arr[$i]\n";

	}
}
else
	echo "argv has been disabled";
?>
