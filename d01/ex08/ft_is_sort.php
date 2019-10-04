<?php
function ft_is_sort($arr)
{
	$temp = $arr;
	$i = 0;
	sort($temp);
	$j = count($arr);
	while ($i < $j && (strcmp($arr[$i], $temp[$i])) == 0)
		$i++;
	if ($i == $j)
		return TRUE;
	else
		return FALSE;
} 
?>
