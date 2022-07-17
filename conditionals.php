<!DOCTYPE html>
<html>

<head>
<title>Confirmation</title>
</head>

<body>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$quantity = $_POST ['quantity'];
$cost = 2000.00;
$discount = 100.00;
$tax_rate = 0.13;

if($quantity){
    $quantity =abs($quantity);
    $discount = abs($discount);
    $tax_rate = $tax_rate + 1;
    $total_cost = $quantity * $cost;

if ( $total_cost < 5000.00){
    echo 'Your $100 discount will not apply because the total value of sale is under $5000!<br/>';
}

// echo headings.
echo '<h2>The PHP payment calculation conditionals program </h2>';
echo '<h2>programmed by {Manveet Kaur!}</h2>';

echo 'You requested to purchase ' . $quantity . ' widget(s) at $2000 each. <br/>';

if($total_cost >= 5000.00){
    $total_cost = $total_cost - $discount;
}

$total_cost = $total_cost * $tax_rate;
$total_cost = round($total_cost);
echo 'The total with tax, minus any discount, comes to $' . $total_cost . '<br/>';

$payment = round($total_cost,2)/ 12;
$payment = round($payment,2);
echo 'You may purchase the widget(s) in 12 monthly installments of $' . $payment . '<br/>';
}

else{
    echo 'please make sure that you have entered a quantity and then resubmit.';

}
} 
?> 
</body>
</html>