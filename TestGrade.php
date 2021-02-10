
<?php
$score = 100;
   
if(($score >= 0) && ($score <= 100)){
    if (($score >= 80) && ($score <= 100)) $grade = "A";
    else if (($score >= 70) && ($score <= 79)) $grade = "B";
    else if (($score >= 60) && ($score <= 69)) $grade = "C";
    else if (($score >= 50) && ($score <= 59)) $grade = "D";
    else if (($score >= 0) && ($score < 50)) $grade = "F";
    echo "Your score is " ,$score. "<br>"; 
    echo "Your grade is " ,$grade. "<br>"; 
}
?>
