<?php
$reviews = 
[
    ["demon's souls",10],
    ["mario wonder",9.5],
    ["mega man 2",8],
];

$announcements = [
    "a.html",
    "b.html",
    "c.html",
    "d.html",
    "e.html"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

       for($i =0; $i < count($announcements); $i++ ){
               $announcement= $announcements[$i];
            include "announcements/$announcement";

       }


       for ($i=0; $i < count($reviews); $i++){
               $review = $reviews[$i];
               $title = $review[0];
               $grade = $review[1];

        echo "<h2>review of title $title</h2>";
        echo "<p>rating $grade</p>";

       }

    ?>
</body>
</html>