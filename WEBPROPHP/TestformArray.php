<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่าง Function ที่ 1 </title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<table border="1" width="150">

<tr>
<td><input type="text" name="n1" size="20" value="" placeholder = "Enter Car Name"/> </td>
</tr>
<tr>
<td><input type="text" name="n2" size="20" value="" placeholder = "Enter Car Name"/></td>
</tr>
<tr>
<td><input type="text" name="n3" size="20" value="" placeholder = "Enter Car Name"/></td>
</tr>
<tr>
<td><input type="text" name="n4" size="20" value="" placeholder = "Enter Car Name"/> </td>
</tr>
<tr>
<td><input type="text" name="n5" size="20" value="" placeholder = "Enter Car Name"/> </td>
</tr>
<tr>
<td><input type="text" name="n6" size="20" value="" placeholder = "Enter Car Name"/> </td>
</tr>
<tr>
<td><input type="text" name="n7" size="20" value="" placeholder = "Enter Car Name"/> </td>
</tr>
<tr>
<td><input type="text" name="n8" size="20" value="" placeholder = "Enter Car Name"/> </td>
</tr>
<tr>
<td><input type="text" name="n9" size="20" value="" placeholder = "Enter Car Name"/> </td>
</tr>
<tr>
<td><input type="text" name="n10" size="20" value="" placeholder = "Enter Car Name"/> </td>
</tr>
<tr>
<td>
<input type="submit" value="Submit Information" />
</td>
</tr>
</table>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n6 = $_POST['n6'];
    $n7 = $_POST['n7'];
    $n8 = $_POST['n8'];
    $n9 = $_POST['n9'];
    $n10 = $_POST['n10'];

    $a=array ($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10);

echo "<br>";
    foreach($a as $showCar)
        echo $showCar."<br>";
        echo "<br>";
     print_r($a);
     

}
    ?>
</body>
</html>