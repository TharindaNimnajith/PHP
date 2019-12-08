
<!-- Learing PHP -->

<?php

	/*

		 	Sessions

		Difference between cookies and sessions:

		1. Cookies are stored inside user's computer as files,
		while sessions are stores inside web server as files.
		
		2. The user can see or delete the cookies inside his/
		her computer, but user can't see or delete the sessions
		which are stored inside the web server.

		3. When creating cookies you can specify when it 
		should expire, but sessions expire as soon as the 
		browser is closed.

		4. Cookies can store a limited amount of data inside 
		it, while sessions can store unlimited amount of data
		(assuming there is unlimited space in the server's 
		hard disk).

	*/

	/*	

	Saving the user ID and the first name of a user inside 
	the session variable, when he/she logs into our web 
	application.

	*/

	session_start();

	$_SESSION['userID'] = 30;
	$_SESSION['firstName'] = 'Tharinda';

?>

<?php

	echo "Cookies <br> <br>"; 

/* 

	Cookies

	E-commerce websites store cookies in the users' computers 
	to know which kind of products users browse, so that the 
	site can display products of the same categories next 
	time the user log into the website.

*/

?>

<?php

	// setcookie(name, value, expiration)

	// setcookie('language', 'Sinhala', time() + 60*60*24*7);

	// time() => Current time
	// + 60*60*24*7 => Time duration of cookies's existence
	// (in seconds => above is a week) 

/*

	print_r($_COOKIE);

	echo "<br>";

	$language = $_COOKIE['language'];

	echo "Selected Language: {$language}";

*/

	// How to create a cookie in user's computer

	if (isset($_COOKIE['language']))
	{
		$language = $_COOKIE['language'];
		echo "Selected language: {$language}";
	}	

	else
	{
		setcookie('language', 'Sinhala', time() + 60*60*24*7);
	}

	// How to remove a cookie from user's computer

	// setcookie('language', NULL, -time() + 60*60*24*7);

?>

<!--login.php-->

<!--

<pre>

	<?php

		print_r($_POST);

	?>

</pre>

-->

<?php

	// To check whether the user has pressed the submit button

	if (isset($_POST['submit']))
	{

		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username == 'dileep' && $password == 'pass')
		{
			echo "Login Successful";
		}

		else
		{
			echo "Invalid Username or Password";
		}

	}

?>

<!DOCTYPE html>

<html lang = "en">

<head>

	<meta charset = "UTF-8">
	<title> Learning PHP </title>

</head>	

<body>

<h1> Learning PHP </h1>

<h2> Introduction </h2>

<?php 

	// This is a single line comment

	/* 
		This 
		is multiline 
		comment.
	*/

	# This is another single line comment	

	echo "This is text.";
	echo "<br>";
	echo "This is text"; 
	echo "<br>";

	echo "First Name" . " Second Name";
	echo "<br>";

	echo 6 * 10 . "<br>";

	// Variables

	$variable_name = "Value";
	echo $variable_name . "<br>";

	$first_name = "Saman";
	echo $first_name . "<br>";

	$first_name = "Tharinda";
	echo $first_name . "<br>";

	$age = 20;
	echo $age . "<br>";

	/*
		$first_name;
		$firstName;

		Variables are case-sensetive -> *** $name != $Name *** 
	*/

	$firstName = "Tharinda";
	$lastName = 'Nimnajith';

	echo $firstName . " " . $lastName . "<br>";	

	// "" vs. ''

	echo "Full Name: " . $firstName . " " . $lastName . "<br>";
	echo "Full Name: $firstName $lastName <br>";
	echo 'Full Name: $firstName $lastName <br>';
	echo "Full Name: {$firstName} {$lastName} <br>";
	echo "Full Name: {$firstName} {$lastName}R <br>";

	$first = "I like ";
	$second = "to play chess.";
	$third = "i also like programming!";

	$sentence = $first;

	// echo $sentence;

	// $sentence = $sentence . $second;
	$sentence .= $second;

	echo $sentence;

?>

<h2> Some Useful String Functions </h2>

All simple: 

<?php
	
	echo strtolower($sentence);

?>

<br />

All capital: 

<?php

	echo strtoupper($sentence);

?>

<br />

First letter capital: 

<?php

	echo $third . "<br>"; 
	echo ucfirst($third);

?>

<br />

First letter capital in all words: 

<?php

	echo ucwords($third);

?>

<br />

Number of characters:

<?php

	echo strlen($third);

?>

<br />

Search for a string or a character:

<?php

	// echo strstr($haystack, $needle);

	echo strstr($third, "li");

	/*
	finds the firt occurance of a string part and gives the 
	remaining part of the string, starting from the needle. 
	*/

?>

<br />

Replace a string with another string:

<?php

	// echo srt_replace(search, replace, subject);

	echo str_replace("like", "love", $third);

	echo "<br>";

	echo $third;

?>

<h2> Some Useful Integer Functions </h2>

<?php

	$var1 = 30;
	$var2 = 40;

?>

Basic Calculation (((10 + 20 + $var1) * $var2) / 20 - 50) = 

<?php

	echo (((10 + 20 + $var1) * $var2) / 20 - 50);

?>

<br />

Square Root of 100 :

<?php

	echo sqrt(100);

?>

<br />
<br />

Exponential -->

<br /> 

Eg: 2 to the power of 4 = 2 ^ 4 = 2 <sup>4</sup> = 

<?php

	//echo pow(base, exp);

	echo pow(2, 4);

?>

<br />
<br />

Absolute: 

<?php

	echo abs(10 -15);

?>

<br />

Modulo:

<?php

	echo fmod (10, 3);

?>

<br />
<br />

Random Numbers:

<br />

<?php

	echo rand();

	echo "<br>";
	
	echo rand(10, 99);

?>

<h2> Increment / Decrement </h2>

<?php

	$no1 = 30;
	$no2 = 40;

?>

<?php

	echo $no1 += 20;
	echo "<br>";

	echo "$no1 += 20 <br>";
	echo '$no1 += 20 <br>';

?>

<br />

<?php

	$no1 = 30;
	$no2 = 40;

?>

<?php

	echo "Addition: " . $no1 += 20;
	echo "<br>";

	echo "Substraction: " . $no1 -= 40; 
	echo "<br>";
	
	echo "Multiplication: " . $no1 *= 9; 
	echo "<br>";

	echo "Division: " . $no1 /= 3;

?>

<h2> Floating Point Numbers </h2>

<?php 

	$float = 6.28;
	echo $float . "<br>";

	$float +=5;
	echo $float . "<br>";

	echo 10 / 3;

	// echo 10 / 0 . "<br>";

?>

<h2> Functions </h2> 

<?php

	echo "Round : " . round($float, 1) . "<br>";
	echo "Round up : " . ceil($float) . "<br>";
	echo "Round down : " . floor($float);

?>

<h2> How to Check if a Number is an Integer or a Float </h2>

<?php

	$myFloat = 7.34;
	$myInteger = 20;

	echo "Is $myFloat an int? " . is_int($myFloat);
	echo "<br>";

	echo "Is $myFloat a float? " . is_float($myFloat);
	echo "<br>";

	echo "Is $myFloat a number? " . is_numeric($myFloat);
	echo "<br>";

	echo "Is $myInteger an int? " . is_int($myInteger);
	echo "<br>";

	echo "Is $myInteger a float? " . is_float($myInteger);
	echo "<br>";

	echo "Is $myInteger a number? " . is_numeric($myInteger);
	echo "<br>";

?>

<h2> Arrays </h2>

<?php

	$myCars = array("Toyota", "Nissan", "Kia", "Mazda");

	echo $myCars[3] . "<br>";
	echo $myCars[0] . "<br> <br>";

	print_r($myCars);

?>

<h3> Before </h3>

<pre>

	<?php

		print_r($myCars);

	?>

</pre>

<?php

	$myCars[4] = "Suzuki";
	$myCars[] = "Mitsubishi";
	$myCars[3] = "Honda";

?>

<h3> After </h3>

<pre>

	<?php

		print_r($myCars);

	?>

</pre>

<?php

	$myArray = array(5, 2, "JB", "W", array("KS", "MJ"), "MC");

?>

<h3> Before </h3>

<pre>

	<?php

		print_r($myArray);

	?>

</pre>

<?php

	$myArray[4][1] = "TD";
	$myArray[4][2] = "TS";
	$myArray[4][] = "LM";

?>

<h3> After </h3>

<pre>

	<?php

		print_r($myArray);

	?>

</pre>

<h2> Associative Arrays </h2>

<?php

	$student = array("fName" => "Kasun", "age" => 21);

	echo $student["fName"] . "<br>";

	echo $student["fName"] . " => " . $student["age"] . "<br>";

	$student["age"] = 24;

	echo $student["age"];

?>

<pre>

<?php

	print_r($student);

?>

</pre>

<?php

	$myNumbers = array(13, 17, 19, 23, 29, 11, 26);

	echo "Maximum Value: " . max($myNumbers) . "<br>";
	echo "Minimum Value: " . min($myNumbers) . "<br>";

	echo "Count: " . count($myNumbers) . "<br> <br>";

?>

Sort : 

<pre>

	<?php

		sort($myNumbers);

		print_r($myNumbers);
	
	?>

</pre>

Reverse Sort : 

<pre>

	<?php

		rsort($myNumbers);

		print_r($myNumbers);
	
	?>

</pre>

// Converting an array to a string

<br /> 
<br />

Implode : 

<?php

	// $stringName = implode(" seperatorSymbol ", $arrayName);

	$string = implode(" | ", $myNumbers);

	echo $string;

?>

<br /> 
<br />

// Converting a string to an array

<br /> 
<br />

Explode : 

<pre>

	<?php

		//$arrayName = explode("seperateSymbols", $stringName);

		$newArray = explode(" | ", $string);

		print_r($newArray);

	?>

</pre>

Search:

<br />

<?php

	// echo in_array(needle, haystack);

	echo "1) " . in_array(23, $newArray) . "<br>";
	echo "2) " . in_array(15, $newArray) . "<br>";

?>

<h2> Booleans </h2>

<?php

	$v1 = true;
	$v2 = false;
	$v3 = "book";

	// PHP returns 1 for true & nothing for false

	echo "Variable 1: $v1 <br>Variable 2: $v2 <br>";

	echo "Is Variable 1 boolean? " . is_bool($v1) . "<br>";
	echo "Is Variable 3 boolean? " . is_bool($v3) . "<br>";

	if ($v2 == false) 
	{
		echo "Variable 2 is false";
	}

?>

<h2> Selection Control Statements </h2>

<h3> if / if else / else / nested if statesments </h3>

<?php

	// syntax

	/*

	if (condition1)
	{
		# code if condition1 is true
	}

	else if (condition2)
	{
		# code if condition1 is false but condition2 is true
	}

	.
	.  # more else if statements
	.

	else
	{
		# code if all above conditions are false
	}

	*/

	$avg = 50;

	echo "Score: " . $avg . "<br>";

	if ( $avg >= 40 )
	{
		echo "You are qualified!";
	}

	else
	{
		echo "Please try again";
	}

?>

<br /> 
<br />

<?php

	$avg = 45;

	echo "Score: " . $avg . "<br>";

	if ( $avg >= 70 )
	{
		echo "Grade A";
	}

	// Both elseif and else if are correct in PHP

	// elseif ( $avg >= 40 )
	else if ( $avg >= 40 )
	{
		echo "Grade B";
	}

	else
	{
		echo "Please try again";
	}

?>

<h3> Operators </h3>

<?php

	$sub1 = 40;
	$sub2 = 70;	

	echo "Subject 1: $sub1, Subject 2: $sub2 <br>";

	if ( $sub1 > 50 && $sub2 > 50 )
	{
		# code...

		echo "You have passed the exam";
	}

	else
	{
		echo "You need to pass both subjects";
	}

?>

<br />
<br />

<?php

	$sub1 = 40;
	$sub2 = 80;	

	echo "Subject 1: $sub1, Subject 2: $sub2 <br>";

	if ( $sub1 > 50 || $sub2 > 50 )
	{
		# code...

		echo "You have passed the exam";
	}

	else
	{
		echo "You need to pass at least one subject";
	}

?>

<br />
<br />

<?php

	// $username = "Tharinda";

	// Checking whether a variable named "username" is created

	if (isset($username))
	{
		echo "Username is $username";
	}

	else
	{
		echo "Error";
	}

	echo "<br>";

	if (!isset($username))
	{
		echo "Please enter the username";
	}

?>

<br />
<br />

<?php

	/*

		// Comparison Operators
		
		==      Equal to
		===     Identical to (both value & data type are same)
		!=      Not Equal to
		!===    Not Identical to
		>       Greater than
		<       Lesser than
		>=      Greater than or Equal to
		<=      Lesser than or Equal to
		<>      Not Equal to

		// Logical Operators
		
		&&      And
		||      Or
		!       Not

	*/

	$n1 = 10;
	$n2 = 10.0;
	$n3 = 45;
	$n4 = "ABC";
	$n5 = "10";
	$n6 = 10;

	if ($n1 == $n2)
	{
		echo "$n1 == $n2 <br>";
	}

	else
	{
		echo "$n1 != $n2 <br>";
	}

	if ($n1 == $n6)
	{
		echo "$n1 == $n6 <br>";
	}

	else
	{
		echo "$n1 != $n6 <br>";
	}

	if ($n1 === $n2)
	{
		echo "$n1 === $n2 <br>";
	}

	else
	{
		echo "$n1 !== $n2 <br>";
	}

	if ($n1 === $n6)
	{
		echo "$n1 === $n6 <br>";
	}

	else
	{
		echo "$n1 !== $n2 <br>";
	}

	if ($n1 !== $n5)
	{
		echo "$n1 !== $n5 <br>";
	}

	else
	{
		echo "$n1 === $n5 <br>";
	}

	if ($n1 != $n5)
	{
		echo "$n1 != $n5";
	}

	else
	{
		echo "$n1 == $n5";
	}

?>

<h3> Switch Statements </h3>

<?php

	// syntax

	/*

		switch ($variable)
		{
			case 'value1':
				# code...

				break;

			case 'value2':
				# code...

				break;

			default:
				# code...

				break;		
		}
	
	*/

	/*

	 Here, break; is essential. Without break, the next case 
	 statements will also be executed until the break;. 

	 Similar to, 

	 if ($variable == 'value') 
	 {
		# code...
	 }

	*/

	// A: Administrator, P: Power User, G: Guest
	
	$user = 'P';

	switch ($user)
	{
		case 'a':
		case 'A':
			echo "User: Administrator";
			break;

		case 'P':
			echo "User: Power User";
			break;

		case 'G':
			echo "User: Guest";	
			break;

		default:
			echo "Invalid Input";
			break;

	}	

?>

<br />
<br />

<?php

	$month = 8;

	echo "Month: $month <br>";

	switch ($month)
	{
		case 1: echo "Duruthu"; break;
		case 2: echo "Nawam"; break;
		case 3: echo "Madin"; break;
		case 4: echo "Bak"; break;
		case 5: echo "Wesak"; break;
		case 6: echo "Poson"; break;
		case 7: echo "Esala"; break;
		case 8: echo "Nikini"; break;
		case 9: echo "Binara"; break;
		case 10: echo "Vap"; break;
		case 11: echo "Il"; break;
		case 12: echo "Unduvap"; break;
		default: echo "Invalid Month"; break;
	}

	echo "<br>";

	if ($month == 1)
		echo "January";

	elseif ($month == 2)
		echo "February"; 

	elseif ($month == 3)
		echo "March"; 

	elseif ($month == 4)
		echo "April";

	elseif ($month == 5)
		echo "May";

	elseif ($month == 6)
		echo "June"; 

	elseif ($month == 7)
		echo "July"; 

	elseif ($month == 8)
		echo "August"; 

	elseif ($month == 9)
		echo "September"; 

	elseif ($month == 10)
		echo "October"; 

	elseif ($month == 11)
		echo "November"; 

	elseif ($month == 12)
		echo "December"; 

	else
		echo "Invalid Month"; 

?>

<h2> Repetition Control Statements </h2>

<h3> while Loops </h3>

<?php

	// syntax

	/*

		while (condition)
		{
			# code untilthe condition is false
		}
	
	*/

	$i = 1;

	while ($i <= 12)
	{
		echo $i . "<br>";

		$i++;

		// The variable must be incremented.
		// Otherwise, it becomes an infinite loop.
	}

	echo "<br> i is now $i <br> <br>";

	$j = 1;

	while ($j <= 12)
	{
		echo "12 x $j = " . 12 * $j . "<br>";

		$j++; 
	}

?>

<h3> for Loops </h3>

<?php

	// syntax

	/*
	
		for ( start; stop; step )
		{
			# code ...
		}

	*/

	for ($k = 1; $k <= 12; $k++)
	{
		echo "12 x $k = " . 12 * $k . "<br>";
	}

	echo "<br>";

	// break and continue

	for ($x = 1; $x < 10; $x++) 
	{
		echo $x . "<br>";
	}

	echo "<br>";

	// break command

	for ($x = 1; $x <= 10; $x++) 
	{ 
		if($x == 6)
			break;

		echo $x . "<br>";
	}

	echo "<br>";

	//continue command

	for ($y = 1; $y <= 10; $y++)
	{
		if ($y % 2 == 1)
			continue;

		echo $y . "<br>"; 
	}

	echo "<br>";

	// Nested for loops 


	// Patterns

	for ($p = 1; $p <= 5; $p++)
	{
		for ($q = 1; $q <= $p; $q++)
		{
			echo "* ";
		}

		echo "<br>";
	}

	echo "<br>";

	// Multiplication Table

	for ($a = 2; $a <= 12; $a++)
	{
		echo "Number $a : <br> <br>";

		for($b = 1; $b <= 12; $b++)
		{
			echo "$a x $b = " . $a * $b . "<br>"; 	
		}

		if ($a <> 12)
			echo "<br> <br>";
	}

?>

<h3> foreach Loops </h3>

<?php

	//syntax

	/*

		foreach ($array_name as $value)
		{
			# code...
		}

	*/

	$jobs = array("Accounting", "Finance", "IT", "Marketing");

	foreach ($jobs as $job_categories)
	{
		echo $job_categories . "<br>";
	}

?>

<br />

<?php

	$std = array("fn"=>"So", "ln"=>"Lo", "age"=>18, "grd"=>5);

	foreach ($std as $students)
	{
		echo $students . "<br>";
	}

	echo "<br>";

	foreach ($std as $label => $students)
	{
		echo $label . " : " . $students . "<br>";
	}

?>

<h2> User Defined Functions </h2>

<?php

	function getMonthName($month)
	{

		switch ($month)
		{
			case 1: $monthName = "Duruthu"; break;
			case 2: $monthName = "Nawam"; break;
			case 3: $monthName = "Madin"; break;
			case 4: $monthName = "Bak"; break;
			case 5: $monthName = "Wesak"; break;
			case 6: $monthName = "Poson"; break;
			case 7: $monthName = "Esala"; break;
			case 8: $monthName = "Nikini"; break;
			case 9: $monthName = "Binara"; break;
			case 10: $monthName = "Vap"; break;
			case 11: $monthName = "Il"; break;
			case 12: $monthName = "Unduvap"; break;
			default: $monthName = "Invalid Month"; break;
		}

		return $monthName;

	}

	echo getMonthName(8) . "<br>";

	$mon = getMonthName(1);
	echo $mon . "<br>";

	// Default Parameter Values

	function getMonthName2($monthval = 0)
	{

		switch ($monthval)
		{
			case 1: $monthName = "Duruthu"; break;
			case 2: $monthName = "Nawam"; break;
			case 3: $monthName = "Madin"; break;
			case 4: $monthName = "Bak"; break;
			case 5: $monthName = "Wesak"; break;
			case 6: $monthName = "Poson"; break;
			case 7: $monthName = "Esala"; break;
			case 8: $monthName = "Nikini"; break;
			case 9: $monthName = "Binara"; break;
			case 10: $monthName = "Vap"; break;
			case 11: $monthName = "Il"; break;
			case 12: $monthName = "Unduvap"; break;
			default: $monthName = "Invalid Month"; break;
		}

		return $monthName;

	}

	echo getMonthName2() . "<br>";

	// Multiple Parameters

	function getMonthName3($monthval = 0, $yearval = 2000)
	{

		switch ($monthval)
		{
			case 1: $monthName = "Duruthu"; break;
			case 2: $monthName = "Nawam"; break;
			case 3: $monthName = "Madin"; break;
			case 4: $monthName = "Bak"; break;
			case 5: $monthName = "Wesak"; break;
			case 6: $monthName = "Poson"; break;
			case 7: $monthName = "Esala"; break;
			case 8: $monthName = "Nikini"; break;
			case 9: $monthName = "Binara"; break;
			case 10: $monthName = "Vap"; break;
			case 11: $monthName = "Il"; break;
			case 12: $monthName = "Unduvap"; break;
			default: $monthName = "Invalid Month"; break;	
		}

		return $yearval . " " . $monthName;

	}

	echo getMonthName3(8, 2018) . "<br>";
	echo getMonthName3() . "<br> <br>";

	// Scope of Variables - Global Variables

	$domainName = "bestjobslk.com";

	echo "Outside function: {$domainName} <br>";

	myFunction();

	echo "Outside function again: {$domainName} <br>";

	function myFunction () 
	{

		global $domainName;

		echo "Inside function: {$domainName} <br>";

		$domainName = "www.chess.com";	

		echo "Inside function again: {$domainName} <br>";

	}

?>

<h2>Links - URLs & GET Methods</h2>

<?php

	// Links - URLs & GET Methods

	/*

		To get information from the user :

			1. Links / URLs       GET       Requests   
			2. Web Forms          POST      Requests 
 			3. Browser Cookies    Cookies

	*/	 

 	// Passing data using Links / URLs via variables

 	// Method 1

 	//$n = 312;
 	//$c = "sports";

?>

<!--

<a href = "news.php?n=<?php echo $n; ?>&c=<?php echo $c; ?>"> 
	Read news item 1 
</a>

-->

<?php

	// Method 2

	$news_item = 312;

	//$category = "sports & hobbies";
	$category = urlencode("sports & hobbies");

	$url = "news.php?news_item=$news_item&category=$category";

?>

<a href = "<?php echo $url; ?>"> 
	Read news item 1 
</a>

<!-- Contents-->

<!-- 

	URL Parameters =>

	eg:  ?news_item=32  in  "news.php?news_item=32"

-->

<!-- 

	Super Global Variables => 

	Can access from anywhere. 
	eg: $_GET

-->

<!-- 

	Passing data using Links / URLs via URL

<a href = "news.php?news_item=32&category=sports&page=5"> 
	Read news item 1 
</a>

-->

<?php

/*

<!--News Page-->

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>News</title>

</head>

<body>

	<h1>News Page</h1>

<!--

	<pre>	

		<?php

				//print_r($_GET)

		?>

	</pre>	

-->

<?php

	$news_item = $_GET['news_item'];
	$category = $_GET['category'];

?>	

<h2>

	Category: 

	<?php

		echo $category;

	?>

</h2>

<h2>

	News Item: 

	<?php

		echo $news_item;

	?>

</h2>

</body>

</html>

*/

?>

<!--Build Web Pages with include / require Functions-->

<?php 

/* 

	For the reusability of the code, writing external files is 
 	important. It also helps when you need to update some part
 	of the site as you don't have to make the same chages 
 	several times; just once in the external file which is 
 	linked to multiple pages. 

*/

/*

	<!--Header-->

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Home</title>

	<link rel="stylesheet" href="css/main.css">

</head>

<body>

	<header>
		
		<h1>Website Name</h1>

	</header>

	<nav>
		
		<ul>
			
			<li><a href="index.php">Home</a></li>
			<li><a href="about-us.php">About Us</a></li>
			<li><a href="products.php">Products</a></li>
			<li><a href="services.php">Services</a></li>
			<li><a href="contact-us.php">ContactUs</a></li>	
		</ul>

	</nav>

*/	

/*

<!--Footer-->

	<footer>
		
		<p>Company Name | Address | Tel : 123 456 7890</p>

	</footer>

</body>

</html>

*/

/*

-- CSS file - main.css --

* 
{ 
	margin : 10px; 
	padding: 0; 
}

header, article
{
	border-bottom: 2px solid #aaa;
}

nav
{
	background: #eee;
}

ul
{
	list-style: none;
	margin: 0;
}

ul li
{
	margin: 0;
	display: inline;
}

ul li a
{
	padding: 0 10px;
	display: inline-block;
}

article p
{
	margin-bottom: 20px;
}

footer
{
	text-align: center;
}

*/

/*

<!--Home-->

// <!--About Us-->
// <!--Contact Us-->
// <!--Products-->
// <!--Services-->

<?php

	require ('includes/header.php');
	require_once ('includes/header.php');
	include ('includes/functions.php');
	include_once ('includes/functions.php');

	// Diffence between include & require

	1. If the file that is referred using the include
	   function couldn't be found, PHP displays a warning
	   but continue to process the rest of the page.

	2. If the file that is referred using the require 
	   function couldn't be found, PHP displays a fatal error
	   and stop processing the rest of the page.

	// require_once & include_once restrict to using one 
	   function just once inside a web page  

?>	

<main>
		
	<article>
			
		<h1>Home Page</h1>	

		// <h1>Contact Us Page</h1>
		// <h1>About Us Page</h1>
		// <h1>Products Us Page</h1>
		// <h1>Services Us Page</h1>	

		<?php

			display_greeting();

		?>

		<p>
			Lorem ipsum dolor sit amet, consectetur 
			adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna 
			aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut 
			aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit 
			in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur 
			sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt 
			mollit anim id est laborum.
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur 
			adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna 
			aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut 
			aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit 
			in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur 
			sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt 
			mollit anim id est laborum.
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur 
			adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna 
			aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut 
			aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit 
			in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur 
			sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt 
			mollit anim id est laborum.
		</p>

	</article>

</main>

<?php

	include ('includes/footer.php');
	include ('includes/footer.php');
	require ('includes/footer.php');
	require ('includes/footer.php');

?>	

*/

/*

<!--functions.php-->

<?php

	function display_greeting()
	{

		// gives the hour of the current time
		$hour = date('h');

		if ($hour >= 0 and $hour <= 11)
		{
			echo "Good Morning!";
		}

		elseif ($hour >= 12 and $hour <= 17)
		{
			echo "Good Afternoon!";
		}

		else
		{
			echo "Good Evening!";
		}

	}

?>	

*/

?>

<br />
<br />

<a href="site/index.php">My PHP Site</a>

<h2>Passing data with POST method & reading them with PHP</h2>

<!-- Using the login.php file to process PHP

<form action="login.php" method="post">

-->

<!-- Using the same file to process PHP -->

<form action="first.php" method="post">

	Username: 
	<input type="text" name="username">

	<br />
	<br />

	Password: 
	<input type="password" name="password">

	<br />
	<br />

	<input type="submit" value="Log In" name="submit">

	<!--

		When you submit the login data, the entered data is
		passed to the login.php. Then the data is stored as 
		an associated array in the super global variable $_POST

	-->	

</form>

<h2> Cookies & Sessions </h2>

<h3> Sessions-1 </h3>

<?php

	echo "User ID: {$_SESSION['userID']} <br>";
	echo "First Name: {$_SESSION['firstName']} <br>";

?>

<!--

	Sessions-2 Page

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

-->

<h2>Connecting to MySQL Database with PHP</h2>

<?php

	/*

	Available Extensions:

	1. mysql    (An old version. Removed after PHP version 7)
	2. mysqli   (MySQL Improved -- Recommended)
	3. PDO      (Used in Object Oriented Programming)

	*/

?>

<?php

	// connection.php page

	/* 

	This code should be at the top of all the pages of the web
	application that are connected to the database. 

	Therefore, the best practice is to save this code as an 
	external file and include this in necessary pages. 

	Also it is considered a good practice to close the 
	database connection using mysqli_close at the end of 
	the page.

	*/

/*

	Function to connect to the MySQL Database

$connection = mysqli_connect(server, username, password, name);

*/

$connection = mysqli_connect('localhost', 'root','', 'userdb');
 
 	// 127.0.0.1 = localhost

 	/*

 	Functions available too check whether the database is 
 	connected successfully or whether there are any errors:

 	1. mysqli_connect_errno();
 	2. mysqli_connect_error();

 	*/

 	// Checking the connection

 	if(mysqli_connect_errno())
 	{

 		die('DB connection failed' . mysqli_connect_error());

 		/*

 		die => Don't execute any further. Stop by displaying 
 		the error message. 

 		*/

 	} 

 	else
 	{
 		echo "Connection Successful.";
 	}

?>

<br />
<br />

<?php

	// index.php page

	// Including the conncetion file

	require_once('ums/inc/connection.php');

?>

<!DOCTYPE html>

<html lang="en">

<head>
	
	<meta charset="UTF-8">
	
	<title>Database Connection</title>

</head>

<body>

	<p>Testing MySQL Connection!</p>

</body>

</html>

<?php

	// Closing the connection

	mysqli_close($connection);

?>

<!--

<h2> Insert Queries to the MySQL Database </h2> 

<?php

	require_once ('ums/inc/connection.php');

?>

<br />
<br />

<?php

	/*

		INSET INTO tableName (column1, column2, etc.)
		VALUES (value1, value2, etc.)

	*/

	$firstName = 'Tharinda';
	$lastName  = 'Nimnajith';
	$email     = 'academy@bestjobslk.com';
	$password  = 'mypassword';
	$isDeleted = 0;

	$hashedPassword = sha1($password);

	echo "Hashed Password: {$hashedPassword} <br><br>";

	$query = "INSERT INTO user 
		(firstName, lastName, email, password, isDeleted) 
		VALUES ('{$firstName}', '{$lastName}', '{$email}', 
		'{$hashedPassword}', {$isDeleted})";

	$result = mysqli_query($connection, $query);

	if($result)
	{
		echo "1 record added";
	}

	else
	{
		echo "Database query failed";
	}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Insert Query</title>

</head>

<body>

</body>

</html>

<?php

	mysqli_close($connection);

?>

<?php

	require_once ('inc/connection.php');

?>

<br />
<br />

<?php

	require_once ('inc/connection.php');

?>

<br />
<br />

// Selecting queries 

<?php

	$query = "SELECT id, firstName, lastName, email 
			  FROM user";

	$result_set = mysqli_query($connection, $query);

	if ($result_set)
	{

		// Checking how many records returned from the query

		echo mysqli_num_rows($result_set) . " records found.";

		echo "<br>";

		echo "Query is successful. <hr>";

		/*

		$record = mysqli_fetch_assoc($result_set);
		echo "<pre>";
		print_r($record);
		echo "</pre>";

		*/

		// To display multiple records

		/*

		$record = mysqli_fetch_assoc($result_set);
		echo "<pre>";
		print_r($record);
		echo "</pre>";

		$record = mysqli_fetch_assoc($result_set);
		echo "<pre>";
		print_r($record);
		echo "</pre>";

		*/

		$table = '<table>';
		$table .= '<tr><th>ID</th><th>First Name</th><th>
				  Last Name</th><th>Email</th></tr>';

		/*		  

		while ($record = mysqli_fetch_assoc($result_set))
		{
			echo $record['firstName'] . "<br>";
		}

		*/

		while ($record = mysqli_fetch_assoc($result_set))
		{

			$table .= '<tr>';

			$table .= '<td>' . $record['id'] . '</td>';
			$table .= '<td>' . $record['firstName'] . '</td>';
			$table .= '<td>' . $record['lastName'] . '</td>';
			$table .= '<td>' . $record['email'] . '</td>';

			$table .= '<tr>';
		}

		$table .= '</table>';
		
	}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title></title>

	<style>

		table 
		{
			border-collapse: collapse;
		}

		td, th
		{
			border: 1px solid black;
			padding: 10px;
		}

	</style>

</head>

<body>

	<?php

		echo $table;

	?>

</body>

</html>

// Update records

<?php

	mysqli_close($connection);

?>

<?php

	require_once ('inc/connection.php');

?>

<?php

/*

	UPDATE table_name
	SET column_1 = value_1, column_2 = value_2
	WHERE column_name = value
	LIMIT 1

*/	

	$query = "UPDATE user 
		      SET firstName = 'Pasan'
		      WHERE id = 2";

	$result_set = mysqli_query($connection, $query);	      

	// mysql_affected_rows() = retuns number of rows affected

	if ($result_set)
	{
		echo "<br> <br>";
		echo mysqli_affected_rows($connection);
		echo " records updated.";
	}

	else
	{
		echo "Database query failed";
	}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Update Query</title>

</head>

<body>

</body>

</html>

<?php

	require_once ('inc/connection.php');

?>

// Delete records 

<?php

/*

	DELETE 
	FROM user
	WHERE id = 3
	LIMIT 1

*/	

	$query = "DELETE
			  FROM user
			  WHERE id = 2
			  LIMIT 1";

	$result_set = mysqli_query($connection, $query);	      

	// mysql_affected_rows() = retuns number of rows affected

	if ($result_set)
	{
		echo "<br> <br>";
		echo mysqli_affected_rows($connection);
		echo " records deleted.";
	}

	else
	{
		echo "Database query failed";
	}

?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<title>Delete Query</title>

</head>

<body>

</body>

</html>

-->

</body>

</html>

<!-- Now I know PHP! Thank you BestJobsLK.com! :-) -->
