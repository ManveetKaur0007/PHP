<!DOCTYPE html>
<html>

<head>
<title>UPDATE Movies Database</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
  <div>
  <h3>UPDATING DIRECTOR NAME in the Movies database</h3>
  <h4>Programmed by {your name here!}</h4><br />
<?php
require_once('connectvars.php');
// Set the variables for the database access:
  $TitleIN = trim($_POST['TitleIN']);
  $DirectorIN = trim($_POST['DirectorIN']);

// create your database connection variable here!

$query = UPDATE address
         SET city = “Windsor”, province = “ON”
         WHERE name = “Mary Pickford”;

print ("The query is: <b>$query</b><br /><br />");

if ( // run your query here! ) {
 echo "The UPDATE query was successful.";
 print ("<a href='displayMovies.php'>View Movies</a>");
} 

else {
 echo "The UPDATE query FAILED!" . mysqli_error();
}
mysqli_close($dbc);
?>

</div>
</body>
</html>
