<!DOCTYPE html>
<html>
<head>
  	<title>Cricket Table</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<?php
require_once('connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$table_exists_query = "SELECT * FROM Cricket";

if (mysqli_query ($dbc, $table_exists_query)) {
 echo "Table with name Cricket already exists. <br>Go to
 <a href='cricketForm.php'>Cricket Insert</a> to add your choice of shows";
} 

else {
 $query = "CREATE TABLE IF NOT EXISTS Cricket (
 id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
 nameofPlayer  TEXT,
 age INT,
 dateOfBirth DATE,
 typeOfMatch TEXT
 )";

if (mysqli_query ($dbc, $query)) {
	echo "The query was successfully executed! You created the cricket Table<br />
	 Go to <a href='cricketForm.php'>Cricket Insert</a> to add your choice of shows";
	 } else {
	echo "The query could not be executed! Error: " . mysqli_error($dbc);
	 }
}

mysqli_close($dbc);
?>
</div>
</body>
</html>