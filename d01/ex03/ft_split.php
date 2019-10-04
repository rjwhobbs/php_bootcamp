<?php
function ft_split($string)
{
	$words = preg_split("/[\s]/", $string, NULL, PREG_SPLIT_NO_EMPTY);
	sort($words);
	return $words;
}
?>