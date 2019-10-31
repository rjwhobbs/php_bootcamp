<?php
class user
{
	public 			$name;
	public 			$passwd;
	public static 	$pwd_length = 7;

	public static function getPwdLen()
	{
		return self::$pwd_length;
	}
}

echo user::$pwd_length;
?>