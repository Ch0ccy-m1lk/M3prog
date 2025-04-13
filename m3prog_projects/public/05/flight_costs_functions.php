<?php

function flight_expences($distanceInKilometers, $priceKerosine, $kiloBagage, $class)
{
   $flightCosts = ($distanceInKilometers * $priceKerosine) /30;
   $bagageCosts = $kiloBagage * 5;

   $totalPrice = $flightCosts + $bagageCosts;

   if ($class == 'business')
{
    $totalPrice *= 1.5;
}
return number_format($totalPrice, 2, ',', '.');
}




?>