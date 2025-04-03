<?php

// there's no distance between Amsterdam and Bordeaux with 
// two digits after the comma

$distance = 1087.00;
$gasolinePrice = 1.89;
$trainTicket = 60.00;
$tankCapacity = 50;




$litersUsed = ($distance / 15)*1;
$travelCosts = $litersUsed * $gasolinePrice;





$tankStops = ceil($litersUsed / $tankCapacity);



$costsCar = $litersUsed * $gasolinePrice;




if($travelCosts > $trainTicket)
{

    echo "im going by train";

}

else
{

    echo "im going by car";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>France</title>
</head>
<body>
   <li>the distance by car : <?= $distance;?></li>
   <li>overal price : <?= $travelCosts;?></li>
   <li>gasoline used : <?= $litersUsed;?></li>
   <li>tank stops : <?= $tankStops;?></li>


     
</body>
</html>