<!--Sessions-2 Page-->

<?php

	/*

		The stored session variables can be accessed from 
		anywhere of the web application. You just have to only 
		add the session_start(); function inside php at the 
		top of the other relevant pages of the web application.
		
	*/

	session_start();

?>

<!DOCTYPE html>

<html lang="en">

<head>
	
	<meta charset="UTF-8">
	<title>Sessions</title>

</head>

<body>

	<h3> Sessions-2 </h3>

<?php

	echo "User ID: {$_SESSION['userID']} <br>";
	echo "First Name: {$_SESSION['firstName']} <br>";

?>

</body>

</html>