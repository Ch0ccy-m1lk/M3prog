<?php

function myFunction()
{
    return 1;
}

$myFunctionResult = myFunction();

echo $myFunctionResult;
echo "<br>";

function returnVariable()
{
    $result = Rand(0,100);
    return $result;
}

$result = returnVariable();
echo $result . "<br>";
echo returnVariable() . "<br>";
echo returnVariable();

?>