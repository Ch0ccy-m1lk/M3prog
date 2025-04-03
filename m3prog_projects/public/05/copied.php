<?php
function Myprint($printText)
{
    print($printText);
    print("<br>");
}

$thisOneToo = "this is taken too";

Myprint("line 1");
Myprint("line 2");
Myprint("line 3");

Myprint("// im not sure. maybe its because there's no argument in the Myprint(); echo");
Myprint($thisOneToo);




// im not sure. maybe its because there's no argument in the Myprint(); echo


?>