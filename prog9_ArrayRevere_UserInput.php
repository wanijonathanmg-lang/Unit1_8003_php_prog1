<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        error_reporting(0);
    ?>
    <form action="" method="get">
        <label for="name">Name</label>
        <input type="text" name="myName[0]"><br><br>
        <label for="email">Email</label>
        <input type="email" name="myName[1]"><br><br>
        <label for="school">University</label>
        <input type="text" name="myName[2]"><br><br>
       <input type="Submit" name="submit" value="Submit">
    </form>
    <?php
    
        $nm = $_GET['myName'];
        echo "<h3>Original Array</h3>";
        foreach($nm as $val){
            echo "<br>".$val;
           
        }
        echo "<h3>Reversed Array</h3>";
        $reversed = array_reverse($nm);
        foreach($reversed as $val){
            echo $val."<br>";
        }
    ?>
</body>
</html>