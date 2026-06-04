<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
    <?php
    # Passive array
    $students = [
        ["name"=>"Jonah","age"=>20,"grade"=>"A+"],
        ["name"=>"Eva","age"=>22,"grade"=>"B"],
        ["name"=>"Nathan","age"=>18,"grade"=>"A"],
        ["name"=>"Sarah","age"=>23,"grade"=>"A+"]
    ];

    echo "First Student's Name :".$students[0]["name"]."<br>";
    echo "Third Student's Name :".$students[2]["name"]."<br>";
    echo "First Student's Age :".$students[0]["age"]."<br>";
    echo "Second Student's Name :".$students[1]["name"]."<br>";
    echo "Second Student's Grade :".$students[0]["grade"]."<br>";
    echo "First Student's Grade :".$students[0]["grade"]."<br>";
    ?>

</body>
</html>