<?php
function calculate_costs($distance, $liter_per_km, $liter_price) {
      
    
    $liters_needed = $distance / $liter_per_km;
    $calculate_costs = $liters_needed * $liter_price;
   
    return number_format($calculate_costs, 2, ',', '.');

}

 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <link rel="stylesheet" href="css/style.css">
 <div class="cost-output">
    <span>Berlin: <?php echo calculate_costs(663, 15, 1.90); ?> €</span>
    <span>Stockholm: <?php echo calculate_costs(1438, 20, 1.46); ?> €</span>
    <span>Kiev: <?php echo calculate_costs(1991, 18.47, 2.23); ?> €</span>
</div>

</body>
</html>