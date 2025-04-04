<?php

function convertCurrency($amount, $fromCurrency, $toCurrency)
{
    echo "Amount: " . $amount . "<br>";
    echo "From Currency: " . $fromCurrency . "<br>";
    echo "To Currency: " . $toCurrency . "<br>";
}

function sendEmail($to, $from, $subject, $message)
{
   echo $to . "<br>";
   echo $from . "<br>";
   echo $subject . "<br>";
   echo $message . "<br>";
}

function generateRandomString($length)
{
   echo $length . "<br>";
}

function calculateArea($width, $length)
{
    echo $width . "<br>";
    echo $length . "<br>";
}

convertCurrency(100, "euro", "yen");

generateRandomString(10);

calculateArea(10, 20);

sendEmail("teacher@college.nl", "student@college.nl", "homework", "for next week");
?>