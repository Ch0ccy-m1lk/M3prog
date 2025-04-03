<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for the loop</title>
</head>
<body>
    <?php
       $prices = [2.50, 1.50, 6.78, 9.89, 10.25, ];

       for($i=0; $i < count($prices) ; $i++){
        echo $i . ": " . $prices[$i]. "</br>";
       }
    ?>
</body>
</html>