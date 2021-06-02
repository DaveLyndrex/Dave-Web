<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $quantity1 = 70;
    $quantity2 = 100;
    $price1 = 35;
    $price2 = 30;
    if($quantity1/$price1>$quantity2/$price2){
        echo("quantity 1 is and price 1 is the best deal.");
    }else{
        echo("quantity 2 is and price 2 is the best deal.");
    }
    
    ?>
</body>
</html>