<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</a>
<body>
<?php
    $n1 = $_GET["num1"];
    $n2 = $_GET["num2"];
  

function Lottery($n1,$n2){
    echo "<h4>ยินดีด้วยคุณถูกรางวัล</h4>";
    echo "<h4>คุณได้รับเงินรางวัล ".$n1*$n2," บาท </h4>";
    echo "<h2><a href='Lottery.php'><button>Back</button></a></h2>";

    echo "<h4>รางวัล เลขที่ออก คือ : ".$n1,"</h4>";
    return;
}


function Lottery2($n1,$n2){
    echo "<h4>เสียใจด้วยคุณไม่ถูกรางวัล</h4>";
    echo "<h2><a href='Lottery.php'><button>Back</button></a></h2>";

    echo "<h4>รางวัล เลขที่ออก คือ : ".$n1,"</h4>";

    return;
}

    if(($n1 >= 0 && $n1 <= 99) && ($n2 >= 10 && $n2 <= 500)){
     

        if(($n1/100)*$n2 >= 250 || $n1 * $n2 >= 3000 ){
           echo Lottery($n1,$n2);
        }
        
        else if(($n1/100)*$n2 < 250 ){
            echo Lottery2($n1,$n2);
        }

    }

    else {
        $n1 = "error";
        echo "<h4>โปรดกลับไปตรวจสอบข้อมูลให้ครบถ้วนก่อนกดด้วยครับ</h4>";
        echo "<h2><a href='Lottery.php'><button>Back</button></a></h2>";
        echo "<h4>รางวัล เลขที่ออก คือ : ".$n1,"</h4>";
    }

    ?>

    
</body>
</html>