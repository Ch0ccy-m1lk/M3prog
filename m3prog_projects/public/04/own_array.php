<?php

$games = ["Sally Face", "Undertale", "Little Nightmares", "M.E.G undefined", "granny",];

print_r($games). "</br>";

array_push($games, "another game");

echo count($games). "</br>";


echo implode(' >> ', $games);
?>