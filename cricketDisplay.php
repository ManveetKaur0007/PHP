<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Cricket Player Table</title>
  <link type="text/css" rel="stylesheet" href="style_table.css" />
</head>
<body>
<div>

<h2>THE CRICKET PLAYER LIST</h2>

<div>
	<?php
	require_once('connectvars.php');
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$query = "SELECT * from Cricket";
	$result = mysqli_query ($dbc, $query) or die("Error querying database " . mysqli_error($dbc));
	
	echo "<h3>Cricket Player Table</h3>";
	echo "<table>";
	echo "<tr>";
	echo "<th>ID</th>";
	echo "<th>Name of the Player</th>";
	echo "<th>Age Of Player</th>";
	echo "<th>Date of Birth</th>";	
	echo "<th>Type Of Match</th>";	
	echo "</tr>";

	
	while ($Row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
		echo "<tr>";
		echo "<td>$Row[id]</td>";
		echo "<td>$Row[nameofPlayer]</td>";
		echo "<td>$Row[age]</td>";
		echo "<td>$Row[dateOfBirth]</td>";
		echo "<td>$Row[typeOfMatch]</td>";
		echo "</tr>";
	}
	echo "</table>";

echo "</div>";

mysqli_close ($dbc);
?>
<div id="footer">
	<p>End of TABLES</p>
</div>

</div>
</body>
</html>
