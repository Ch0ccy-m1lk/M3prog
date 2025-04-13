<?php

function calculateTravelCosts($distance_km, $km_per_liter, $liter_price)
{
    $costs_euro = 0;
    // calculation
    $liters = $distance_km / $km_per_liter;
    $costs_euro = $liters * $liter_price;


    return $costs_euro;
}


?>