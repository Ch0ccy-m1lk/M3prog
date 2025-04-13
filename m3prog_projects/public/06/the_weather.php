<?php
$weatherUpdate = [

"monday" => 20,
"tuesday" => 21,
"wednesday" => 29,
"thursday" => 19,
"friday" => 24,
"saturday" => 22,
"sunday" => 23
];


if (isset($_GET['day']))
{
    $day = strtolower($_GET['day']);
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
        <a href="the_weather.php?day="></a>
        <?= "the weather today is" . $day?>
</body>
</html>