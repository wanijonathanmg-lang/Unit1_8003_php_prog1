<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
    <?php
        # Program to reverse an array values
        $colors = array(101 => "Blue",102 => "Green",103 => "Red",104 => "Purple",105 => "Pink");
        echo "Original Array";
        print_r($colors);
        echo "<br>";
        $reversed_array = array_reverse($colors);
        echo "Reversed Array";
        print_r($reversed_array);
    ?>

</body>
</html>