#!/usr/bin/php
<?php
for ($x = 0; $x < 1000; )
{
	if ($x % 100 == 0 && $x != 0)
	{
		echo "\n";
	}
	echo "X";
	$x++;
}
?>