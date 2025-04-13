<?php
if (isset($_GET['celsius']))
{
   $input = $_GET['celsius'];
   $celsius = floatval($input);
   $fahrenheit = ($celsius *1.8) +32;

   echo "$celsius degrees celsius is $fahrenheit degrees fahrenheit. </br>";
}
?>