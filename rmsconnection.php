<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fl";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("<br>Connection failed: " . mysqli_connect_error());
}
else
{
	echo "<br>Connected to database <br>";
}

?>



</body>
</html>