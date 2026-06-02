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

        switch($current_month){
            case 1:
                echo "This month is January";
                break;
            case 2:
                echo "This Month is February";
                break;
            case 3:
                echo "This month is March";
                break;
            case 4:
                echo "This Month is April";
                break;
            case 5:
                echo "This month is May";
                break;
            case 6:
                echo "This Month is June";
                break;
            case 7:
                echo "This month is July";
                break;
            case 8:
                echo "This Month is August";
                break;
            case 9:
                echo "This month is September";
                break;
            case 10:
                echo "This Month is October";
                break;
            case 11:
                echo "This month is November";
                break;
            case 12:
                echo "This Month is December";
                break;
            default:
                echo " Invalid Entry!! Try Again!!!";
                break;
        }
    ?>
</body>
</html>