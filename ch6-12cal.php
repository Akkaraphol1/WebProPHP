<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ผลลัพธ์ ตัวอย่าง Control statement ที่12 </title>


</head>
<body>
<?php
$row = $_POST['row'];
$column = $_POST['column'];
$rowMax = intval( $row);
$colMax = intval( $column);

$x = rand(1,99);

echo "<table align='center' border='4' width='300'>";
for($r = 1; $r <= $rowMax ; $r++) {
echo "<tr>";
for($c = 1; $c <= $colMax ; $c++) {

    if($x % 2 == 0){
echo "<td align='center'><font color='#33ff66'>";
echo"</font></td>";
else 
echo "<td align='center'><font color='#33B7FF'>";
echo "</tr>";
}

echo "</table>";
?>
<a href='ch6-12.php'> Back </a>
</body>
</html>