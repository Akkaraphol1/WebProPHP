<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Lab 6 - 9 while </title></head>
</head>
<body>
<h1>  Lab 6 - 9  </h1>
<form method="get">
               
            Start Num: <input type="text" name="snum" ><br>
            End Num: <input type="text" name="enum" ><br>
            Divide By: <input type="text" name="dnum" ><br>
            <input type="submit" name="sumbit">

    <?php

if(isset($_GET['sumbit'])){
    $start = $_GET['snum'];
    $end = $_GET['enum'];
    $div = $_GET['dnum'];
    $Sum = 0;

    while($start < $end){
            if ($start % $div == 0) {
                echo "<br>".$start.",";
            }
        $start++;
        }
    }
    ?>
</body>
</html>