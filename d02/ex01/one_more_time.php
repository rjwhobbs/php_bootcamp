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
$input = "Mercredi 12 Novembre 2013 12:02:21";
$fr_arr = preg_split("/[ ]/", $input, NULL, PREG_SPLIT_NO_EMPTY);
$en_str = day_to_en($fr_arr[0])." $fr_arr[1]"." $fr_arr[2]";
echo $en_str;

$time = DateTime::createFromFormat("D d M Y H:i:s e", 
									"Thursday 10 October 2019 08:59:21 SAST");
//echo $time->format('U');
echo "\n";
//echo date("d m Y H:i:s", $time->format('U'));

?>