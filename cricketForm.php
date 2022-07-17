<!DOCTYPE html>
<html>
<head> 
    <title>Cricket Input Form</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<div>
<h3>Enter information about Cricket team that you want to add to the database<br /></h3>

<form action="cricketInsert.php" method="post">
<fieldset>
    <legend>Cricket Information</legend>

    <label for="nameofPlayer">Name Of Player:</label>
    <input type="text" id="nameofPlayer" name="Name" size="30" required><br/>

    <label for="age ">Age Of Player:</label>
    <input type="int" id="age" name="AgeOfPlayer" size="2" required><br/>
 
    <label for="dateOfBirth">Date Of Birth :</label>
    <input type="date" id="dateOfBirth" name="DateOfBirth" size="10" required><br/>
 
    <label for="typeOfMatch">Type Of Match:</label>
    <input type="text" id="typeOfMatch" name="TypeOfMatch" size="50" required><br/>

</fieldset>
    
    <input type="submit" name="submit" value="[+] Add Player Name" />
</form>
</div>
</body>
</html>