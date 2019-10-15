<?php
if($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == 'ilovecheese' ) 
{
	//$_SESSION['login_flag'] = true;
	echo "howzit";
} 
else 
{
	echo 'log in bro <br />';
	// $_SERVER['PHP_AUTH_USER'] = 'admin1';
	// $_SERVER['PHP_AUTH_PW'] = 'pwd1';
	header("WWW-Authenticate: Basic realm=\”Schoolroom\”, stale=FALSE");
	header("HTTP/1.0 401 Unauthorized");
	print "<h1>401 Unauthorized</h1>";
	exit();
}
?>