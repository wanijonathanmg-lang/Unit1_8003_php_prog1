<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = array("Mango","Banana","Grapes");
    $colors = array("Yellow","Green","Red");
    echo "<br>";
    print_r($fruits);
    echo "<br>";
    print_r($colors);
     echo "<br>";
    $merged = array_merge($fruits,$colors);
    print_r($merged);
    ?>
</body>
</html>