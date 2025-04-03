 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebali</title>
 </head>
 <body>
    <?php

       $pokemons = ["ekans", "pidgeot", "raichu", "ninetales", "venonat", "haunter",];

       $images = [
        "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/023.png", // ekans
        "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/018.png", // pidgeot
        "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/026.png", // raichu
        "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/038.png", // ninetales
        "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/048.png", // venonat
        "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/093.png", // haunter
       ];

        
        
         for ($i = 0; $i < count($pokemons); $i++) {
            echo "<h1>" . $pokemons[$i] . "</h1>";
            echo "<img src='" . $images[$i] . "'alt='" . $pokemons[$i] . "' /><br>";



         }




    ?>
 </body>
 </html>