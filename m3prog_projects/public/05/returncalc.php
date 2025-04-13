<?php

function add_it($number1, $number2)
{
    $amount = $number1 + $number2;
    return $amount;
}

$amount = add_it(4, 9);
echo $amount . "<br>";
echo add_it(100, 100 ) . "<br>";
echo add_it(33,33) . "<br>";
// ABOVE IS THE LAST ASSIGNMENT (i need to remember this, thats why i keep it on the screen)

function multiply($number1, $number2)
{
    $amount = $number1 * $number2;
    return $amount;
}

$amount = multiply(6, 6);
echo $amount . "<br>";


function add($number1, $number2)
{
    $amount = $number1 + $number2;
    return $amount;
}

$amount = add(40, 60);
echo $amount . "<br>";


function subtract($number1, $number2)
{
    $amount = $number1 - $number2;
    return $amount;
}

$amount = subtract(90, 10);
echo $amount . "<br>";


function devide($number1, $number2)
{
    $amount = $number1 / $number2;
    return $amount;
}

$amount = devide(4, 2);
echo $amount . "<br>";











?>