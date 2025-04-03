<?php
  $TYPE_DISH = "main course";
  $NAME_DISH = "mushroom dance";
  $PRICE = 20.50;
  $INGREDIENTS = "mushrooms, eggs, cream, spring onion, standard seasonings and cheese.";
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
dish type: <?= $NAME_DISH?> . <br>
  <br>
  <?=$NAME_DISH?> €<?= $PRICE?> . <br>
  <br>
  <description><br>
  ingredients:<br>
  <?= $INGREDIENTS?><br>
  <br>
 are you allergic? see allergies below: dairy <br>
  <ALLERGENENLIJST><br>
</body>
</html>