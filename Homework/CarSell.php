
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>
<?php

$m = $_GET["member"];
$n = $_GET["numbers"];
$c = $_GET["cars"];



if(($c * $n) >= 749000 && ($c * $n) >= 849000 && ($c * $n) >= 1149000 && ($c * $n) >= 1799000 ){
       
    echo '<table border="1" align="center" width="400">';

    echo "<tr>
    <td> ชื่อลูกค้า: </td>
    <td>$m</td>
    </tr>";
    
    echo "<tr>
    <td> ผ่อนงวดละ: </td>
    <td>$n</td>
    </tr>
    <tr>";
    
    echo "<td> จำนวนงวด: </td>
    <td>$c</td>
    </tr>
    <tr>";
    
    $mul = $n * $c;

    echo "<tr>
    <td> ยอดรวมเงิน: </td>
    <td>$mul</td>
    </tr>
    ";
    
    echo '<tr>
    <td colspan="2">
    <big>รถยนตร์รุ่นที่ท่านสามารถซื้อได้</big>
    </td>
    </tr>';
    
    echo "<tr>
    <td> <img src = img/Accord.png width = 250></td>
    <td>ราคา 1,799,000 บาท </td>
    </tr>";
    
    echo "<tr>
    <td><img src = img/Civic.png width = 250> </td>
    <td>ราคา 1,149,000 บาท </td>
    </tr>
    <tr>";
    
    echo "<tr>
    <td> <img src = img/Jazz.png width = 250></td>
    <td>ราคา 849,000 บาท </td>
    </tr>";
    
    echo "<tr>
    <td> <img src = img/City.png width = 250></td>
    <td>ราคา 749,000 บาท </td>
    </tr>
    <tr>";

    echo '<tr>
    <td colspan="2" align="center">
    <h2><a href="CarPay.php"><button>Back to Home</button></a></h2>
    </td>
    </tr>';
    
    echo '</table>';

}

else if(($c * $n) >= 749000 && ($c * $n) >= 849000 && ($c * $n) >= 1149000 && ($c * $n) < 1799000 ){
       
    echo '<table border="1" align="center" width="400">';

    echo "<tr>
    <td> ชื่อลูกค้า: </td>
    <td>$m</td>
    </tr>";
    
    echo "<tr>
    <td> ผ่อนงวดละ: </td>
    <td>$n</td>
    </tr>
    <tr>";
    
    echo "<td> จำนวนงวด: </td>
    <td>$c</td>
    </tr>
    <tr>";
    
    $mul = $n * $c;

    echo "<tr>
    <td> ยอดรวมเงิน: </td>
    <td>$mul</td>
    </tr>
    ";
    
    echo '<tr>
    <td colspan="2">
    <big>รถยนตร์รุ่นที่ท่านสามารถซื้อได้</big>
    </td>
    </tr>';
    
    echo "<tr>
    <td><img src = img/Civic.png width = 250> </td>
    <td>ราคา 1,149,000 บาท </td>
    </tr>
    <tr>";
    
    echo "<tr>
    <td> <img src = img/Jazz.png width = 250></td>
    <td>ราคา 849,000 บาท </td>
    </tr>";
    
    echo "<tr>
    <td> <img src = img/City.png width = 250></td>
    <td>ราคา 749,000 บาท </td>
    </tr>
    <tr>";

    echo '<tr>
    <td colspan="2" align="center">
    <h2><a href="CarPay.php"><button>Back to Home</button></a></h2>
    </td>
    </tr>';
    
    echo '</table>';

}

if(($c * $n) >= 749000 && ($c * $n) >= 849000 && ($c * $n) < 1149000){
       
    echo '<table border="1" align="center" width="400">';

    echo "<tr>
    <td> ชื่อลูกค้า: </td>
    <td>$m</td>
    </tr>";
    
    echo "<tr>
    <td> ผ่อนงวดละ: </td>
    <td>$n</td>
    </tr>
    <tr>";
    
    echo "<td> จำนวนงวด: </td>
    <td>$c</td>
    </tr>
    <tr>";
    
    $mul = $n * $c;

    echo "<tr>
    <td> ยอดรวมเงิน: </td>
    <td>$mul</td>
    </tr>
    ";
    
    echo '<tr>
    <td colspan="2">
    <big>รถยนตร์รุ่นที่ท่านสามารถซื้อได้</big>
    </td>
    </tr>';
    
    echo "<tr>
    <td> <img src = img/Jazz.png width = 250></td>
    <td>ราคา 849,000 บาท </td>
    </tr>";
    
    echo "<tr>
    <td> <img src = img/City.png width = 250></td>
    <td>ราคา 749,000 บาท </td>
    </tr>
    <tr>";

    echo '<tr>
    <td colspan="2" align="center">
    <h2><a href="CarPay.php"><button>Back to Home</button></a></h2>
    </td>
    </tr>';
    
    echo '</table>';

}

else if(($c * $n) >= 749000 && ($c * $n) < 849000 ){
       
    echo '<table border="1" align="center" width="400">';

    echo "<tr>
    <td> ชื่อลูกค้า: </td>
    <td>$m</td>
    </tr>";
    
    echo "<tr>
    <td> ผ่อนงวดละ: </td>
    <td>$n</td>
    </tr>
    <tr>";
    
    echo "<td> จำนวนงวด: </td>
    <td>$c</td>
    </tr>
    <tr>";
    
    $mul = $n * $c;

    echo "<tr>
    <td> ยอดรวมเงิน: </td>
    <td>$mul</td>
    </tr>
    ";
    
    echo '<tr>
    <td colspan="2">
    <big>รถยนตร์รุ่นที่ท่านสามารถซื้อได้</big>
    </td>
    </tr>';
    
    echo "<tr>
    <td> <img src = img/City.png width = 250></td>
    <td>ราคา 749,000 บาท </td>
    </tr>
    <tr>";

    echo '<tr>
    <td colspan="2" align="center">
    <h2><a href="CarPay.php"><button>Back to Home</button></a></h2>
    </td>
    </tr>';
    
    echo '</table>';

}

else if(($n * $c) < 749000){
    echo '<table border="1" align="center" width="400">';

    echo "<tr>
    <td> ชื่อลูกค้า: </td>
    <td>$m</td>
    </tr>";
    
    echo "<tr>
    <td> ผ่อนงวดละ: </td>
    <td>$n</td>
    </tr>
    <tr>";
    
    echo "<td> จำนวนงวด: </td>
    <td>$c</td>
    </tr>
    <tr>";
    
    $mul = $n * $c;

    echo "<tr>
    <td> ยอดรวมเงิน: </td>
    <td>$mul</td>
    </tr>
    ";
    
    echo '<tr>
    <td colspan="2" align="center">
    <big>ยอดรวมเงินของท่านไม่เพียงพอที่จะซื้อรถยนตร์</big>
    </td>
    </tr>';
    
    echo '<tr>
    <td colspan="2" align="center">
    <h2><a href="CarPay.php"><button>Back to Home</button></a></h2>
    </td>
    </tr>';
    
    echo '</table>';
}
?>