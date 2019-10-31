#!/usr/bin/php
<?php
function username_check($username)
{
	if (preg_match("/^[a-zA-Z0-9]+$/", $username) === 0)
		return FALSE;
	if (ctype_digit($username) === TRUE)
		return FALSE;
	return TRUE;
}

function passwd_check($passwd)
{
	if (strlen($passwd) < 10)
		return FALSE;
	else if (preg_match('/[a-z]/', $passwd) === 0)
		return FALSE;
	else if (preg_match('/[A-Z]/', $passwd) === 0)
		return FALSE;
	else if (preg_match('/[0-9]/', $passwd) === 0)
		return FALSE;
	else if (preg_match("/^[a-zA-Z0-9]+$/", $passwd) === 0) // No special chars or spaces
		return FALSE;
	return TRUE;
}

function getRandomWord($len) 
{
	$word = array_merge(range('a', 'z'), range('A', 'Z'));
	shuffle($word);
	return substr(implode($word), 0, $len);
}

if (passwd_check($argv[1]) === FALSE)
	echo "False\n";
else
	echo "True\n";
?>