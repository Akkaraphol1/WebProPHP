<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่าง Function ที่ 1 </title>
</head>
<body>
<form method="get" action="CarSell.php">
<table border="1" align="center" width="400">

<tr>
<td> ชื่อ นามสกุล ลูกค้า : </td>
<td><input type="text" name="member" size="17" value=""/> </td>
</tr>
<tr>
<td> จำนวนเงินที่ต้องการผ่อนต่อ 1 งวด : </td>
<td><input type="text" name="numbers" size="17" value=""/></td>
</tr>
<tr>
<td> จำนวนงวดที่ต้องการ : </td>
<td>
<select name ="cars">
  <option value="36">36</option>
  <option value="48">48</option>
  <option value="60">60</option>
  <option value="72" selected>72</option>
</select></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value=" OK " />
</td>
</tr>
</table>
</form>
</body>
</html>