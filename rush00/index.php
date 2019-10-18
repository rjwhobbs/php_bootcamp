<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="rush.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>First We Biscuit</title>
</head>
<body><h1>But first, we biscuit...</h1>
<div class="menu-bar">
	<ul>
		<li><a href="#">Login</a></li>
		<li><a href="#">Register</a></li>
		<li><a href="#">Cart</a></li>
		<li><a href="#">About Us</a>
		<div class="sub-menu-1">
			<ul>
				<li><a href="mission.php">Our Mission</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
<!--
	require dbh.inc.php {conn to database} 	
	require_once(file.php); // say error
	include() //give warn
	if (isset($_GET['error']))
	{
		switch ($_GET['error'])
		{
			"a" : echo fsdfg
			:b:
			default:
				echo '<p class = err> ' . $_GET['error'] . </p>
		}
	}
	'' success 
	// new section
	header("Location: placeiwant.php?error=Error Message")
	
	//cart 
	$_SESSION['cart'][$_GET['add']]['quantity']++; // in add url send data $key
	$_SESSION['cart'][$_GET['rem']]['quantity']--; // in rem url send data $key

	-->

	<br><br><br><br>
	<div class="products"> <!--form action="action_location.php method="post" $item = $_POST['cookiedata']
							<input type= number / email / name="cookiedata" />
							--> 
		<div>
			<div class="cookies-add-cart">
				<img class="choc-chip" src="ChocChip.png">
				<button>Choc-chip Add<i class="fa fa-shopping-cart" style="font-size:24px;"></i>
			</div>
		</div>
			<div>
				<div class="cookies-add-cart">
					<img class="peanut-cookie" src="peanut.png">
					<button>Peanut Butter Add<i class="fa fa-shopping-cart" style="font-size:24px;"></i>
				</div>
			</div>
			<div>
				<div class="cookies-add-cart">
					<img class="short-bread" src="shortbread.png">
					<button>Shortbread Add<i class="fa fa-shopping-cart" style="font-size:24px;"></i>
				</div>
			</div>
			<div>
				<div class="cookies-add-cart">
					<img class="short-bread-choc" src="chocshortbread.png">
					<button>Choc-shortbread Add<i class="fa fa-shopping-cart" style="font-size:24px;"></i>
				</div>
			</div>
		</div>
		<br><br><br><br><br>
	<center><p class="pfooter">freshly baked biscuits delivered daily</p><center>
</body>
</html>