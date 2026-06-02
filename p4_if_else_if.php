<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $marks = 82;

        if($marks>=90){
            echo "Grade A";
        }elseif($marks>=80){
            echo "Grade B";
        }elseif($marks>=60){
            echo "Grade C";
        }elseif($marks>=40){
            echo "Grade D";
        }else{
            echo "Failed";
        }
    ?>
</body>
</html>