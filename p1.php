<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Semester Results</title>
</head>
<body>
    <?php
        echo "<h2>Semester results</h2>";
        define("Student_Name","Jonathan Wani");
        define("Course","BSC (IT) ");
        define("Year",2026);

        $sub1 = "Python";
        $markSub1 = 89;
        $sub2 = "Maths";
        $markSub2 = 97;
        $sub3 = "Computer Networks";
        $markSub3 = 85;
        $sub4 = "Java";
        $markSub4 = 92;
        $sub5 = "OOAD";
        $markSub5 = 81;

        $totalMarks = 500;
        $totalScore = $markSub1 + $markSub2 + $markSub3 + $markSub4 + $markSub5;
        $percentage = ($totalScore/ $totalMarks)*100;
        $cgpa = number_format(($percentage/10),2);

        echo "<pre>";

        echo "Student Name   :".Student_Name;
        echo "<br>";
        echo "Course   :" .Course;
        echo "<br>";
        echo "Year   :".Year;
        echo "<br>";
        echo "---------------------------------------------------<br>";
        echo "Subject                        Marks  <br>";
        
        echo "---------------------------------------------------<br>";
        echo $sub1. "  ". $markSub1 ;
        echo "<br>";
        echo $sub2. "  " . $markSub2 ;
         echo "<br>";
        echo $sub3. "  " . $markSub3 ;
         echo "<br>";
        echo $sub4. "  " . $markSub4 ;
         echo "<br>";
        echo $sub5. "  " . $markSub5 ;
         echo "<br>";
          echo "<br>";

        echo "Total Marks scored = $totalScore<br>";
        echo "Percentage score = $percentage<br>";
        echo "CGPA = $cgpa <br>";
        echo "</pre>";
    ?>
</body>
</html>