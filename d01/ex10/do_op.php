#!/usr/bin/php
<?php
if (isset($argc))
{
	if ($argc == 4)
	{
		$num_one = trim($argv[1]);
		$op = trim($argv[2]);
		$num_two = trim($argv[3]);

		if ($op == '+')
			$answer = ($num_one + $num_two);
		else if ($op == '-')
			$answer = ($num_one - $num_two);
		else if ($op == '*')
			$answer = ($num_one * $num_two);
		else if ($op == '%')
			$answer = ($num_one % $num_two);
		else if ($op == '/')
		{
			if ($num_one != 0 && $num_two != 0)
				$answer = ($num_one / $num_two);
			else
				echo "Can't divide by zero";
		}
		echo "$answer\n";
	}
	else
		echo "Incorrect Parrameters\n";
}
else
	echo "argc and argv disabled\n";
?>