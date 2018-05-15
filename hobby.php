<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>

<head>
	
<title>Hi User</title>

</head>
<body>
<h3>Php program that receives a value from "Hobby"</h3>

<?php

$userName = filter_input(INPUT_GET, "userName");
print "<h3>Hi $userName!</h3>";

$userEmail = filter_input(INPUT_GET, "userEmail");
print "<h3>We will send you soon an invitation for our events to: $userEmail</h3>";

$userHobby = filter_input(INPUT_GET, "userHobby");
print "<h3>, where you can meet with people that share the same interest for $userHobby. Thank You for join us!</h3>";

?>

</body>
</html>