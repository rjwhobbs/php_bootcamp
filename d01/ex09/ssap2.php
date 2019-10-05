#!/usr/local/bin/php
<?php
if (isset($argc))
{
	$temp;
	$nums;
	$i = 1;
	$j = 0;
	while ($i < $argc)
	{
		if (strpos($argv[$i], ' ') !== FALSE)
		{
			$temp = preg_split("/[\s]/", $argv[$i], NULL, PREG_SPLIT_NO_EMPTY);
			$j = count($temp);
			for ($k = 0; $k < $j; $k++)
				$arr[] = $temp[$k];
			for ($k = 0; $k < $j; $k++)
				unset ($temp[$k]);
			unset($temp);
		}
		else
			$arr[] = $argv[$i];
		$i++;
	}
	$j = 0;
	//Remove numeric strings from the array.
	while (isset($arr[$j]))
	{
		if (is_numeric($arr[$j]))
		{
			if ($arr[$j][0] == '+')
			{
				$num_temp = $arr[$j][1];
				$nums[] = $num_temp; // does php alloc mem dynamically here?
			}
			else
				$nums[] = $arr[$j];
			unset($arr[$j]);
			$temp = array_values($arr);
			$k = count($arr);
			for ($l = 0; $l < $k; $l++)
				unset($arr[$l]);
			unset($arr);
			$arr = $temp;
			$j--;
		}
		$j++;
	}
	if (isset($nums[0]))
	{
		$j = 0;
		while (isset($nums[$j]))
		{
			echo "$nums[$j]\n";
			$j++;
		}
	}
	for ($i = 0; $i < count($arr); $i++)
		echo "$arr[$i]\n";
	// if (ctype_alnum($arr[0]) === FALSE)
	// 	echo "False";
	// else
	// 	echo "True";

}
?>