<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $user_name = "Wani";
        $password = 12345;

        if($user_name = "wani"){
            if($password = 12345){
                echo "Welcome";
            }else{
                echo "Incorrect Password!!!";
            }
        }else{
            echo "Incorrect User Name";
        }

    ?>
</body>
</html>