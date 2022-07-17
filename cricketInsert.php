<!DOCTYPE html>
<html>
<head>
    <title>Insert Data about a Cricket Player in the Table</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div>
<?php

$Name = trim($_POST["Name"]);
$AgeOfPlayer = trim($_POST["AgeOfPlayer"]);
$DateOfBirth = trim($_POST["DateOfBirth"]);
$TypeOfMatch = trim($_POST["TypeOfMatch"]);

require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "INSERT into Cricket values(0,'$Name','$AgeOfPlayer','$DateOfBirth','$TypeOfMatch')";

print("The query is:<br/>$query<br/><br/>");

if (mysqli_query ($dbc, $query)) {
    print ("The query was successfully executed!<br />");
    print ("<a href='cricketDisplay.php'>View List</a>");
} 
else {
    print ("The query could not be executed!<br />");
}

mysqli_close ($dbc);
?>
</div>
</body>