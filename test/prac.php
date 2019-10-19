#!/usr/bin/php
<?php
$fam = array("Dad","Mom", "Brother", "Sister");
// foreach ($fam as $key => $val)
// {
// 	$fam[$key] = $val." Hobbs";
// 	echo $fam[$key]."\n";
// 	echo $val."\n";
// }
// foreach ($fam as $key => $val)
// {
// 	echo $key." --- ".$val."\n";
// }
$i = 0;
while ($i < sizeof($fam))
{
	echo $fam[$i]."\n";
	$i++;
}
?>