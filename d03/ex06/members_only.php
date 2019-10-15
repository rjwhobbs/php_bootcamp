<?php
// if (!isset($_SERVER['PHP_AUTH_USER'])) 
// {
//     header('WWW-Authenticate: Basic realm="My Realm"');
//     header('HTTP/1.0 401 Unauthorized');
//     echo 'Text to send if user hits Cancel button';
//     exit;
// } 
// else 
// {
//     echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
//     echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
// }
if( $_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == '6') 
{
	echo "howzit";
} 
else 
{
	echo 'login bro <br />';
	header("WWW-Authenticate: Basic realm=\"Memebers only\" ");
	header("HTTP/1.0 401 Unauthorized");
	print "<h1>401 Unauthorized</h1>";
	//exit();
}
?>