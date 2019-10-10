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
			return "Samedi";
			break ;
		case "Dimanche": 
		case "dimanche":
			return "Dimanche";
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
$input = "Mercredi 12 Novembre 2013 12:02:21";
$fr_arr = preg_split("/[ ]/", $input, NULL, PREG_SPLIT_NO_EMPTY);
$en_str = day_to_en($fr_arr[0])." $fr_arr[1]"." ".month_to_en($fr_arr[2])
			." $fr_arr[3]"." $fr_arr[4]". " SAST";
$time = DateTime::createFromFormat("D d M Y H:i:s e", $en_str);
echo $time->format('U')."\n";
//echo date("d m Y H:i:s", $time->format('U'));

?>