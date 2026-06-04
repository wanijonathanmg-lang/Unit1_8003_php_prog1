<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
    <?php
        $colors = array(101 => "Blue",102 => "Green",103 => "Red",104 => "Purple",105 => "Pink");
        foreach($colors as $no => $color){
            echo " ".$no." : ".$color."<br>";
        }
        echo "Color by Key 102 : ".$colors[102]."<br>";
        echo "Color by Key 105 : ".$colors[105]."<br>";
        echo "Color by Key 103 : ".$colors[103]."<br>";
    ?>

</body>
</html>