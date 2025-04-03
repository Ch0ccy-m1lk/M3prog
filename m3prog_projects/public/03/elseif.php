<?php
// 'R' = red, 'O' = orange, and 'G' = green
$stopsignColor = 'G'; // Change this value to 'O' or 'G' to test different colors.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Sign Color</title>
</head>
<body>
    
   <?php
       if ($stopsignColor == 'R') {
           // Red button
           echo "<button style='background-color:#FF0000;height:50px;width:50px;'>Red</button>";
       }
       else if ($stopsignColor == 'O') {
           // Orange button
           echo "<button style='background-color:#FFA500;height:50px;width:50px;'>Orange</button>";
       }
       else if ($stopsignColor == 'G') {
           // Green button
           echo "<button style='background-color:#008000;height:50px;width:50px;'>Green</button>";
       }
       else {
           echo "Invalid color!";
       }
   ?>

</body>
</html>
