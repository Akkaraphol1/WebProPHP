<html>
<head><title>การกำหนดค่าตัวแปร</title></head>
<body>
<?php
$x = 100;
$y = 200;
$z = 300;
$add = $x + $y;
$sub = $z - $x;
$mul = $y * $z;
$div = $mul / $z;
$message  = "ผลบวกของ a + b = ";
$message2 = "ผลบวกของ a - b = ";
$message3 = "ผลบวกของ a * b = ";
$message4 = "ผลบวกของ a / b = ";

echo $message; echo $add; echo "<br />";
echo $message2; echo $sub; echo "<br />";
echo $message3; echo $mul; echo "<br />";
echo $message4; echo $div; echo "<br />";

?>
</body>
</html>