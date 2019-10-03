<?php
function ft_split($string)
{
	$i = 0;
	$r_words;
	$words = explode(' ', $string);
	sort($words);
	while (empty($words[$i]))
	{
		unset ($words[$i]);
		$i++;
	}
	$r_words = array_values($words);
	return $r_words;
}
?>