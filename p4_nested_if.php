<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $has_account = true;
        $is_logged_in = false;

        if ($has_account) {
            if (!$is_logged_in) {
                echo "Please log in to your account.";
            }
        }
    ?>
</body>
</html>