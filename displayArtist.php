<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>DISPLAY Artists Table with CSS</title>
    <!--
    Artist Display File
    Author: Manveet Kaur
    Student Id: W0782002
    Date: 2021/12/14
    Filename: displayArtist.php
    -->
  <link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
<div>

<h1>Display Artists table</h1>
<p id ="words">“I found I could say things with color and shapes that I couldn’t say any other way—things I had no words for.”<br/>
<em>Georgia O’Keeffe</em></p>

<div id="data">
	<?php
	require_once('connectvars.php');
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$query = "SELECT * from Artist";
	$result = mysqli_query ($dbc, $query) or die("Error querying database " . mysqli_error($dbc));

	echo "<h3>Artist Names</h3>";
	echo "<table>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>ArtistName</th>";
	echo "<th>PaintingName</th>";	
	echo "<th>DateOfBirth</th>";
	echo "<th>YearLived</th>";	
	echo "</tr>";

	while ($Row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		echo "<tr>";
		echo "<td>$Row[id]</td>";
		echo "<td>$Row[artistName]</td>";
		echo "<td>$Row[painting]</td>";
		echo "<td>$Row[dateOfBirth]</td>";
		echo "<td>$Row[yearLived]</td>";
		echo "</tr>";
	}
	echo "</table>";

echo "</div>";

mysqli_close ($dbc);
?>

<div id="footer">
	<p>Copyright 2021 – <a href = "https://www.stclaircollege.ca">St Clair College</a> &#8226; Manveet Kaur &#8226; W0782002</p>
</div>

</div>
</body>
</html>
