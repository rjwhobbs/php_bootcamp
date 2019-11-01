<?php
/**
 * Start the session.
 */
session_start();
	// Include Database
	require './db.php';
// This will receive data from the form
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];


	$error = [];
	$success = '';

	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		array_push($arr, "Email is invalid");
	}
	if(empty($lname)){
		array_push($arr, "Name is invalid");
	}
	
	if(count($arr) == 0){
	
		// Populating the database
		$sql = "INSERT INTO `users` (`name`, `lname`, `email`, `password`)
		VALUES (?, ?, ?,?)";
		// use exec() because no results are returned
		$stmt = $conn->prepare($sql);
			$arr= array($name, $lname, $email, $password);
			$stmt->execute($arr);
		$success = "User has successfully been created";
	}
}
include 'header.php';
?>

<div> 
	<?=$success?>
</div>

<div style="text-color:red;"> <?php
foreach($error as $result) {
    echo $result.'<br>';
}?> </div>
<form method="POST" action="register.php">
	<div>
		<label for="name">Name</label>
		<input type="text" name="name" id="name" required>
	</div>
	<div>
		<label for="lname">Last name</label>
		<input type="text" name="lname" id="lname" required>
	</div>	
	<div>
		<label for="email">Email</label>
		<input type="email" name="email" id="email" required>
	</div>	
	<div>
		<label for="password">Password</label>
		<input type="passord" name="password" id="password" required>
	</div>
	<button type="submit" name="submit" value="submit">Submit</button>
</form>