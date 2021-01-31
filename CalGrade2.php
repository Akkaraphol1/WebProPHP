<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Result Grade </title>
</head>
<body>
<?php
    $f = $_GET["Fin"];
    $m = $_GET["Mid"];
    $a = $_GET["Assign"];
    $h = $_GET["Home"];

    $message = " Final :   ";
    $message1 = " Midterm :  ";
    $message2 = " Assignment :   ";
    $message3 = " Homework :  ";

if ((($f >= 0) && ($f <= 30)) && (($m >= 0) && ($m <= 30)) && (($a >= 0) && ($a <= 20)) && (($h >= 0) && ($h <= 20))) {
   
    echo $message.$f."<br>";
    echo $message1.$m."<br>";
    echo $message2.$a."<br>";
    echo $message3.$h."<br>";
    $z = $f + $m + $a + $h ;
    echo "Total Score = ", $z . "<br>";
    }
    else {
        echo "Sorry Data false  Please try again!!!<br>";
        echo $message."<br>";
        echo $message1."<br>";
        echo $message2."<br>";
        echo $message3."<br>";
        $z = -1 ;
        echo "Total Score Input False Score = ", $z . "<br>";    
    }
 
    global $grade;

        if (($z >= 0) && ($z <= 100)) {
        
            if ($z >= 80) $grade = "A";
            else if ($z >= 75) $grade = "B+";
            else if ($z >= 70) $grade = "B";
            else if ($z >= 65) $grade = "C+";
            else if ($z >= 60) $grade = "C";
            else if ($z>= 55) $grade = "D+";
            else if ($z >= 50) $grade = "D";
            else $grade = "F";
            echo "Your grade is " ,$grade. "<br>"; 
            }
            else {
            echo "Invalid student score. <br>";
            } 
    ?>

</body>
</html>