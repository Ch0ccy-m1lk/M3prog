<?php
$howLongIsThisWord = "scrabble word";
$wordLenght = strlen($howLongIsThisWord);

print($wordLenght) . "</br>";

// question 1 : a string
// question 2 : a integer
// question 3 : the amount of characters in the string, including space

$anotherWord = "supercalifragilisticexpialidocious";

$anotherWordLenght = strlen($anotherWord);

print($anotherWordLenght) . "</br>";


$twoPowered = pow(2,10);
 echo $twoPowered . "</br>";

 //question 4 : two times

 $thirdPowered = pow(3,4);
print("</br>");
print(pow(3,4)) . "</br>";

// question 5 : we put it on screen by    print(pow(3,4));
// https://www.php.net/manual/en/function.strtoupper.php

$name = "Wario";
$nameBig = strtoupper($name);

print($nameBig) . "</br>";

$nameSmall = strtolower($nameBig);
print($nameSmall);
?>