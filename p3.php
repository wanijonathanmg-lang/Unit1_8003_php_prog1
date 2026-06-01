<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators in PHP</title>
</head>

<body>

    <?php
    echo "<h3>Arithmetic Operators</h3>";

    $a = 15;
    $b = 3;
    echo "a = " . $a;
    echo "<br>";
    echo "b = " . $b;
    echo "<br>";
    $add = $a + $b;
    $sub = $a - $b;
    $mult = $a * $b;
    $div = $a / $b;
    $mod = $a % $b;

    echo "The Addition of $a and $b is : " . $add;
    echo "<br>";
    echo "The Subtraction of $a and $b is : " . $sub;
    echo "<br>";
    echo "The Multiplication of $a and $b is : " . $mult;
    echo "<br>";
    echo "The Division of $a and $b is : " . $div;
    echo "<br>";
    echo "The Modulus of $a and $b is : " . $mod;
    echo "<br>";

    echo "<h3>Relational Operators</h3>";
    $x = 10;
    echo "x = ".$x;
    echo "<br>";
    $y = 9;
    echo "y = ".$y;
    echo "<br>";
    $equal = ($x==$y);
    echo "X is equal to y :".$equal;
    echo "<br>";
    $notequal = ($x!=$y);
    echo "x is not equal to y :".$notequal;
    echo "<br>";
    $lessthan = ($x<$y);
    echo "X is less than y :".$lessthan;
    echo "<br>";
    $greaterthan = ($x>$y);
    echo "X id greater than y :".$greaterthan;
    echo "<br>";
    $greaterOrEqual = ($x>=$y);
    echo "X is greater or equal to y :".$greaterOrEqual;
    echo "<br>";
    $lessthanOrEqual = ($x<=$y);
    echo "X is less tha or equal to y :".$lessthanOrEqual;
    echo "<br>";

    echo "<h3>Comparison Operators</h3>";
    $p = 12;
    $r = 13;
    echo "p = ".$p;
    echo "<br>";
    echo "r = ".$r;
    echo "<br>";
    $eq = ($r==$p);
    echo "(r==p) :".$eq;
    echo "<br>";
    $nteq = ($r<>$p);
    echo "(r<>p) :".$nteq;
    echo "<br>";
    $eqt = ($r===$p);
    echo "(r===p) :".$eqt;

    ?>
</body>

</html>