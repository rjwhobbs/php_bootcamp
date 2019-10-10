#!/usr/bin/php
<?php
function day_to_en($day)
{
	switch ($day)
	{
		case strcasecmp($day, "lundi") == 0:
			return "Monday";
		case strcasecmp($day, "Mardi") == 0:
			return "Tuesday";
		case strcasecmp($day, "Mercredi") == 0: 
			return "Wednesday";
		case strcasecmp($day, "Jeudii") == 0: 
			return "Thursday";
		case strcasecmp($day, "Vendredi") == 0: 
			return "Friday";
		case strcasecmp($day, "Samedi") == 0: 
			return "Saturday";
		case strcasecmp($day, "Dimanche") == 0: 
			return "Sunday";
		default:
			return $day;
	}	
}

function month_to_en($month)
{
	switch ($month)
	{
		case strcasecmp($month, "Janvier") == 0:
			return "January";
		case strcasecmp($month, "Février") == 0:
		case strcasecmp($month, "Fevrier") == 0:
			return "Febuary";
		case strcasecmp($month, "Mars") == 0:
			return "March";
		case strcasecmp($month, "Avril") == 0:
			return "April";
		case strcasecmp($month, "Mai") == 0:
			return "May";
		case strcasecmp($month, "Juin") == 0:
			return "June";
		case strcasecmp($month, "Juillet") == 0:
			return "July";
		case strcasecmp($month, "Août") == 0:
		case strcasecmp($month, "Aout") == 0:
			return "August";
		case strcasecmp($month, "Septembre") == 0:
			return "September";
		case strcasecmp($month, "Octobre") == 0:
			return "October";
		case strcasecmp($month, "Novembre") == 0:
			return "November";
		case strcasecmp($month, "Décembre") == 0:
		case strcasecmp($month, "Decembre") == 0:
			return "December";
		default:
			return $month;
	}
}
function time_format_test($time)
{
	$time_arr  = preg_split("/[:]/", $time, NULL, PREG_SPLIT_NO_EMPTY);
	if (count($time_arr) != 3)
	{
		return 0;
	}
	else
	{
		if ($time_arr[0] < 0 || $time_arr[0] > 23)
			return 0;
		if ($time_arr[1] < 0 || $time_arr[1] > 59)
			return 0;
		if ($time_arr[2] < 0 || $time_arr[2] > 59)
			return 0;
	}
	return 1;
}
if (isset($argc))
{
	if ($argc == 2)
	{
		$fr_arr = preg_split("/[\s]/", $argv[1], NULL, PREG_SPLIT_NO_EMPTY);
		if (count($fr_arr) != 5)
		{
			echo "Wrong Format\n";
			exit ;
		}
		$day = day_to_en($fr_arr[0]);
		if (strcmp($day, $fr_arr[0]) == 0)
		{
			echo "Wrong Format\n";
			exit ;
		}
		if (is_numeric($fr_arr[1]))
		{
			if ($fr_arr[1] < 1 || $fr_arr[1] > 31 || $fr_arr[1][0] == '+')
			{
				echo "Wrong Format\n";
				exit ;	
			}
		}
		else
		{
			echo "Wrong Format\n";
			exit ;
		}
		$month = month_to_en($fr_arr[2]);
		if (strcmp($month, $fr_arr[2]) == 0)
		{
			echo "Wrong Format\n";
			exit ;
		}
		if (is_numeric($fr_arr[3]))
		{
			if ($fr_arr[3] < 1970 || $fr_arr[3] > 2069 || $fr_arr[3][0] == '+')
			{
				echo "Wrong Format\n";
				exit ;	
			}
		}
		else
		{
			echo "Wrong Format\n";
			exit ;
		}
		if (time_format_test($fr_arr[4]) == 0)
		{
			echo "Wrong Format\n";
			exit ;
		}
		$en_str = $day." $fr_arr[1]"." ".month_to_en($fr_arr[2])
					." $fr_arr[3]"." $fr_arr[4]";
		$time = DateTime::createFromFormat("D d M Y H:i:s", $en_str);
		echo $time->format('U')."\n";
		echo date("D d M Y H:i:s", $time->format('U'))."\n";
	}
}
else
	echo "argv has been disabled";
?>