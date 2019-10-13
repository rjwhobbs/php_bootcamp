#!/usr/bin/php
<?php
//$sample = 'keke';
// $res  = preg_match_all('/t([ea])t\1/', "tata");
// $op = '+';
// $num1 = 20;
// $num2 = 22;

// //eval("echo ($num1 $op $num2);");
// $str = 'World';
// if (0 == $str[0])
// 	echo "Ok\n";
// else
// 	echo "KO\n";
$han = curl_init("https://www.amazon.com");

$str = curl_exec($han);

echo $str;
?>