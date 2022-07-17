<!DOCTYPE html>
<html>
<head>
<title>food.php</title></head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$special = $_POST ['special'];
$delivery = $_POST['delivery'];
$time = $_POST['time'];

echo 'You choose ' . $special. ' to be '.$delivery. ' at ' . $time. '<br/>';

$total= 0;
if ($special === 'mexian') {
    $total = 10;
    echo 'Your total is : $ ' .$total. '</br>';
}
elseif ($special === 'italian') {
    $total = 12;
    echo 'Your total is : $ ' .$total. '</br>';
}
elseif ($special === 'indian'){
    $total = 9;
    echo 'Your total is : $ ' .$total. '</br>';
}

}
else{
    echo 'Please choose a special.';    
}
?>
</body>
</html>
