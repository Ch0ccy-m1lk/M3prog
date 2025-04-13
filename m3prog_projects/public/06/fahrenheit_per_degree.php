<?php

for($celsius=0; $celsius <= 45; $celsius++)
{
    
    echo '<a href="fahrenheit_per_degree1.php?celsius=' . $celsius . '">';
    echo "convert $celsius degrees celsius to fahrenheit</a><br>";
}



?>
