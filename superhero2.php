<!DOCTYPE html>
<html>
<head>
  <title>Superhero!</title>
</head>
<body style="background-color: rgb(255,255,204);">
  <h2>Superhero array! - by {Manveet Kaur}</h2>
<?php
$superhero = array("spiderman", "superman", "batman", "aquaman", "hawkeye","dreamer","supergirl");

sort ($superhero);
echo "<pre>";
print_r ($superhero);
echo "</pre>";
?>
  </body>
</html>