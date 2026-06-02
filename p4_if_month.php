<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $current_month = (int)date("n");

        if($current_month==1){
            echo "The current Month is January";
        }elseif($current_month==2){
            echo "The current Month is February";
        }elseif($current_month==3){
            echo "The current Month is March";
        }elseif($current_month==4){
            echo "The current Month is April";
        }elseif($current_month==5){
            echo "The current Month is May";
        }elseif($current_month==6){
            echo "The current Month is June";
        }elseif($current_month==7){
            echo "The current Month is July";
        }elseif($current_month==8){
            echo "The current Month is August";
        }elseif($current_month==9){
            echo "The current Month is September";
        }elseif($current_month==10){
            echo "The current Month is October";
        }elseif($current_month==11){
            echo "The current Month is November";
        }elseif($current_month==12){
            echo "The current Month is December";
        }else{
            echo "Invalid Entry!!";
        }

    ?>
</body>
</html>