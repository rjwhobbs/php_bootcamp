#!/usr/local/bin/php
<?php
if (isset($argc))
{
	$file = file_get_contents($argv[1]);
	$file = preg_replace_callback
	('/title="(.*)"/i', 
		function ($matches)
		{
			$matches[1] = strtoupper($matches[1]);
			return 'title="'.$matches[1].'"';
		}, $file
	);
	$file = preg_replace_callback
	('/<a\s*.*(>\s*.*<)/iUs',
		function ($matches)
		{
		  //needs code
		}, $file
	);
	//<a[^>*].*<\/a>
	echo $file;
}
else
	echo "argv disabled";
?>