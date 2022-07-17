<!DOCTYPE html>
<html>
<head>
<title>Population of Cities chart {Manveet Kaur!}</title>
</head>

<?php
define("WINDSOR", 200000);
define("TORONTO", (2.9));
define("DETROIT", 675000);
define("CALGARY", (1.3));
define("VANCOUVER", 700000);
?>
<h2>Population of Cities chart {Manveet Kaur!}</h2>
<table>

<tr>
 <td><img src="windsor.jpg" alt="Windsor" width="56" height="56" /></td>
 <td>The population of Windsor is <?php echo number_format(WINDSOR); ?> </td>
</tr>

<tr>
 <td> <img src ="toronto.jpg" alt ="Toronto" width = "56" height="56" /></td>
 <td>The population of Toronto is <?php echo number_format(TORONTO); ?> million </td>
</tr>

<tr>
 <td> <img src ="detroit.jpg" alt ="Detroit" width = "56" height="56" /></td>
 <td>The population of Detroit is <?php echo number_format(DETROIT); ?> </td>
</tr>

<tr>
 <td> <img src ="calgary.jpg" alt ="Calgary" width = "56" height="56" /></td>
 <td>The population of Calgary is <?php echo number_format(CALGARY); ?> million </td>
</tr>

<tr>
 <td> <img src ="vancouver.jpg" alt ="Vancouver" width = "56" height="56" /></td>
 <td>The population of Vancouver is <?php echo number_format(VANCOUVER); ?> </td>
</tr>

 
</table>
<hr />
<?php
echo("<p> Programmed by - \"Manveet Kaur\" </p>");
?>
</body>
</html>
