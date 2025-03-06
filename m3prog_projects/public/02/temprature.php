<?php
// Fahrenheit to Celsius

$Fahrenheit = 74;
$celsius = ($Fahrenheit - 32) / 1.8;

echo "{$Fahrenheit} degrees Fahrenheit = {$celsius} degrees celsius.   <br>";


// celsius to fahrenheit
$celsius2 = 74;
$fahrenheit2 = ($celsius2 *1.8) + 32;

echo "{$celsius2} degrees celsius = {$fahrenheit2} degrees fahrenheit. <br>";


// kelvin to celsius

$celsius3 = 90;
$kelvin = 320;

$kelvinToCelsius = ($kelvin - 273.15);
$celsiusToKelvin = ($celsius3 + 273.15);

echo "$kelvin degrees kelvin is $kelvinToCelsius celsius. <br>";
echo "$celsius3 degrees celsius is $celsiusToKelvin kelvin. <br>";


// kelvin to fahrenheit

$fahrenheit3 = 70;
$kelvin1 = 295;

$kelvinToFahrenheit = ($kelvin1 * 1.8) - 459.7;

echo "$kelvin1 degrees kelvin is $kelvinToFahrenheit degrees fahrenheit. <br>";



// fahrenheit to kelvin

$fahrenheit4 = 77;
$kelvin2 = 216;

$fahrenheitToKelvin = ($fahrenheit4 - 32) *5/9 + 273.15;

echo "$fahrenheit4 degrees fahrenheit is $fahrenheitToKelvin degress kelvin. <br>"; 




?>