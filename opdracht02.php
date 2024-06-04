<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class Product
    {
        public $name = "Een spel!"
    }

    $game1 = new Product();
    $game1 ->name="Fifa 2023";

    $game2 = new Product();
    $game2 ->name="COD";
    
    $game3 = new Product();
    $game3 ->name="Pong";

    $game1 ->name="SWH2";
    echo $game1 -> name;

    $game2 ->name="COD";
    echo $game2 -> name;

    $game3 ->name="Pong";
    echo $game3 -> name;
    ?>
</body>
</html>