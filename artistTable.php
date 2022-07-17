<!DOCTYPE html>
<html>
<head>
  <title>Artists Table</title>
    <!--
    Artist Table File
    Author: Manveet Kaur
    Student Id: W0782002
    Date: 2021/12/14
    Filename: artistTable.php
    -->
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<?php
require_once('connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$table_exists_query = "SELECT * FROM Artist";

if (mysqli_query ($dbc, $table_exists_query)) {
 echo "Table with name Artist already exists. <br>Go to
 <a href='artistForm.php'>Artist Insert</a> to add your choice of songs";
} 

else {
 $query = "CREATE TABLE IF NOT EXISTS Artist (
 id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
 artistName TEXT,
 painting TEXT,
 dateOfBirth DATE,
 yearLived INT
 )";

if (mysqli_query ($dbc, $query)) {
	echo "The query was successfully executed! You created the Artist Table <br />
	 Go to <a href='artistForm.php'>Artist Insert</a> to add your choice of songs";
	 } else {
	echo "The query could not be executed! Error: " . mysqli_error($dbc);
	 }
}

mysqli_close($dbc);
?>

<div id="footer">
	<p>Copyright 2021 – <a href = "https://www.stclaircollege.ca">St Clair College</a> &#8226; Manveet Kaur &#8226; W0782002</p>
</div>

</div>
</body>
</html>