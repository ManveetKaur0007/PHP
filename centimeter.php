<!DOCTYPE html>
<html>
<head><title>Calculate Centimeters by input</title></head>
<body>
<h1>Centimeters Calculation - by { Manveet Kaur }</h1>
<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $feet = $_POST['feet'];

    function convert($feet){
        $centimeter = 30.48 * $feet;
        return $centimeter;
    }
    echo "Hi $name, <br>";
    echo "There are " . $centimeter . " centimeters in " . $feet . " feet.";
} 

else {
?>
    <form action="centimeter.php" method="post">
    Enter your First Name:
    <input type="text" size="15" id="name" name="name"/><br/>
    Enter a Length:
    <input type="text" size="15" id="feet" name="feet"/><br/>

    <input type="submit" name="submit" value="Submit"/>
    </form>
<?php
}
?>
</body>
</html>