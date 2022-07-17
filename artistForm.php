<!DOCTYPE html>
<html>
<head>
    <title>HTML Artist Input Form</title>
    <!--
    Artist Form File
    Author: Manveet Kaur
    Student Id: W0782002
    Date: 2021/12/14
    Filename: artistForm.php
    -->
    <link rel="stylesheet"  href="style.css" />
</head>
<body>

<div>
<h1>Enter the name of Famous Artists that you wish to add to the database<br/></h1>


<form action="artistInsert.php" method="post">
<fieldset>
    <legend>Artists Information</legend>

    <label for="artistName">Artist Name:</label>
    <input type="text" id="artistName" name="ArtistName" size="20" required><br/><br/>

    <label for="painting">Famous Painting Made by them:</label>
    <input type="text" id="painting" name="PaintingName" size="30" required><br/><br/>
 
    <label for="dateOfBirth">Date Of Birth:</label>
    <input type="date" id="dateOfBirth" name="DateOfBirth" size="8" required><br/><br/><br/>
 
    <label for="yearLived">Year Lived:</label>
    <input type="int" id="yearLived" name="YearLived" size="20" required><br/><br/>

</fieldset>
    
    <input type="submit" name="submit" value="[+] Add Artist" />
</form>
</div>

<div id="footer">
	<p>Copyright 2021 – <a href = "https://www.stclaircollege.ca">St Clair College</a> &#8226; Manveet Kaur &#8226; W0782002</p>
</div>

</body>
</html>