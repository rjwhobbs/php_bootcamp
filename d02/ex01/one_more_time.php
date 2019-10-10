#!/usr/bin/php
<?php
function day_to_en($day)
{
	switch ($day)
	{
		case "lundi":
		case "Lundi":
			return "Monday";
			break ;
		case "Mardi":
		case "mardi":
			return "Tuesday";
			break ;
		case "Mercredi": 
		case "mercredi":
			return "Wednesday";
			break ;
		case "Jeudii": 
		case "jeudii":
			return "Thursday";
			break ;
		case "Vendredi": 
		case "vendredi":
			return "Friday";
			break ;
		case "Samedi": 
		case "samedi":
			return "Saturday";
			break ;
		case "Dimanche": 
		case "dimanche":
			return "Sunday";
			break ;
		default:
			return $day;
			break ;
	}	
}

function month_to_en($month)
{
	switch ($month)
	{
		case strcasecmp($month, "Janvier") == 0:
			return "January";
			break ;
		case strcasecmp($month, "Février") == 0:
		case strcasecmp($month, "Fevrier") == 0:
			return "Febuary";
			break ;
		case strcasecmp($month, "Mars") == 0:
			return "March";
			break ;
		case strcasecmp($month, "Avril") == 0:
			return "April";
			break ;
		case strcasecmp($month, "Mai") == 0:
			return "May";
			break ;
		case strcasecmp($month, "Juin") == 0:
			return "June";
			break ;
		case strcasecmp($month, "Juillet") == 0:
			return "July";
			break ;
		case strcasecmp($month, "Août") == 0:
		case strcasecmp($month, "Aout") == 0:
			return "August";
			break ;
		case strcasecmp($month, "Septembre") == 0:
			return "September";
			break ;
		case strcasecmp($month, "Octobre") == 0:
			return "October";
			break ;
		case strcasecmp($month, "Novembre") == 0:
			return "November";
			break ;
		case strcasecmp($month, "Décembre") == 0:
		case strcasecmp($month, "Decembre") == 0:
			return "December";
			break ;
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