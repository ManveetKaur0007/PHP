<!DOCTYPE html>
<html>
<head>
    <title>Inserting Data into my Artist Table</title>
    <!--
    Artist Insert File
    Author: Manveet Kaur
    Student Id: W0782002
    Date: 2021/12/14
    Filename: artistInsert.php
    -->
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<?php

$ArtistName = trim($_POST['ArtistName']);
$PaintingName = trim($_POST['PaintingName']);
$DateOfBirth = trim($_POST['DateOfBirth']);
$YearLived = trim($_POST['YearLived']);

require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "INSERT into Artist values(0,'$ArtistName','$PaintingName','$DateOfBirth','$YearLived')";

print("The query is:<br/>$query<br/><br/>");

if (mysqli_query ($dbc, $query)) {
    print ("The query was successfully executed!<br />");
    print ("<a href='displayArtist.php'>View Artist added</a>");
} 
else {
    print ("The query could not be executed!<br />");
}

mysqli_close ($dbc);
?>
<div id="footer">
	<p>Copyright 2021 – <a href = "https://www.stclaircollege.ca">St Clair College</a> &#8226; Manveet Kaur &#8226; W0782002</p>
</div>

</div>
</body>
</html>
