<?php
// code is here :)

$title = "Sally Face on top fr fr";
$date = date ('28-02-2025');
$time = date ("H:i");
$favouriteGame = "Sally Face";
$favouriteNumber = 17;
$favouriteShow = "I Am Not Ok With This";
$favouriteCity = "Busan";


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title><?php echo $title ?></title>
</head>
<body>
    <h3>The date today is: <?php echo $date ?> and the time is <?php echo $time ?>

    <p><h3> my favourite game is</h3><?php echo $favouriteGame ?></p>
    <p><h3> my favourite Number</h3><?php echo $favouriteNumber ?></p>

    <p><h3>my favourite Show</h3><?php echo $favouriteShow ?></p>
    <p><h3>my favourite City</h3><?php echo $favouriteCity ?></p>

</body>
</html>