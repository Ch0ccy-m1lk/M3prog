<?php
// http://localhost:88/06/query_string.php?city=Amsterdam&temperature=23&country=netherlands

$_GET['city'] . "<br>";  // wiwiwi   "amsterdam"
$_GET['temperature'] . "<br>";   // erm, "23"
$_GET['country'] . "<br>"; // ze "netherlands" ofcourse

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <li><?= $_GET['city'];?></li>
    <li><?= $_GET['temperature'];?></li>
    <li><?= $_GET['country'];?></li>
</body>
</html>