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
        <label for="name">City/State</label>
        <input type="text" name="myName[3]"><br><br>
        <label for="contact">Tel</label>
        <input type="tel" name="myName[4]"><br><br>
        <input type="submit" name="Submit" value="Submit">
    </form>
    <?php
        $nm = $_GET['myName'];
         echo "Welcome, ";
         foreach($nm as $val){
            echo $val."<br>";
         }
    ?>
</body>
</html>