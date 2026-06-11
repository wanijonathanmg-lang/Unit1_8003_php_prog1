<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <h3>Array 1</h3>
    <input type="text" name="a1[]"><br>
    <input type="text" name="a1[]"><br>
    <input type="text" name="a1[]"><br>

    <h3>Array 2</h3>
    <input type="text" name="a2[]"><br>
    <input type="text" name="a2[]"><br>
    <input type="text" name="a2[]"><br>

    <input type="submit" value="merge">
    </form>
    <?php
        $a1 = $_GET['a1'];
        echo "<h3>Array 1</h3>";
        foreach($a1 as $val){
            echo $val ."<br>";
        }
        $a2 = $_GET['a2'];
        echo "<h3>Array 2</h3>";
        foreach($a2 as $val){
            echo $val ."<br>";
        }
        $merged = array_merge($a1, $a2);
        echo "<h3>Merged Array</h3>";
        foreach($merged as $val){
            echo $val. "<br>";
        }
    ?>
</body>
</html>