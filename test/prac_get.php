<?php
$users = array("Joe", "Mike", "Fred", "Zach");
if ($_POST['name'])
{
	$i = 0;
	$j = sizeof($users);
	while ($i < $j)
	{
		if ($_POST['name'] == $users[$i])
		{
			echo "<p>Welcome $_POST[name]</p>";
			break ;
		}
		$i++;
	}
	if ($j == $i)
	{
		echo "<p>You are not a user</p>";
	}
}
?>
<p>Enter your name</p>
<form method="post">
	<input type="text" name="name">
	<input type="submit" value="Ok">
</form>