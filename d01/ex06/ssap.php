#!/usr/local/bin/php
<?php
include("../ex03/ft_split.php");
if (isset($argc))
{
	$arr;
	$i = 1;
	while ($i < $argc)
	{
		if (strpos($argv[$i], ' ') !== FALSE)
		{
			$temp = ft_split($argv[$i]);
			$j = count($temp);
			for ($k = 0; $k < $j; $k++)
				$arr[] = $temp[$k];
			for ($k = 0; $k < $j; $k++)
				unset ($temp[$k]);
			unset ($j);
		}
		else
			$arr[] = $argv[$i];
		$i++;
	}
	sort($arr);
	$i = 0;
	while (isset($arr[$i]))
	{
		echo "$arr[$i]\n";
		$i++;
	}
}
?>