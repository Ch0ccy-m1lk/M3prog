<?php

$sumSpent = 1550.0;
$shippingCosts = 3.50;
$discount = 0;
$gift = False;
$giftWorth = 10.0;

// if statements ig

if($sumSpent >= 1000.0)
{

$discount = 7.5;
$giftWorth = 40;
echo "you get a free 40 dollar gift! </br>";
}



//another one
if($sumSpent >= 400.0 && $sumSpent < 1000.0)
{

$gift = true;

echo "you get a free ten dollar gift! </br>";
}

//second one
if($sumSpent >= 250.0)
{
    $discount = 0.05;
}

// first one 
if($sumSpent > 100.0)
{
    $shippingCosts = 0.00;
}

$totalSum = $sumSpent - ($discount * $sumSpent) + ($shippingCosts);

echo "total costs of the order is $sumSpent </br>";
echo "total with shipping costs is $totalSum </br>";


?>
