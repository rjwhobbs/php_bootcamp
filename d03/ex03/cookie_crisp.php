<?php
if ($_GET[action] == "set")
	setcookie($_GET[name], $_GET[value]);
else if ($_GET[action] == "get")
	echo $_COOKIE[$_GET[name]]."\n";
else if ($_GET[action] == "del" && isset($_COOKIE[$_GET[name]]))
	setcookie($_GET[name], "", time() - 1);
?>